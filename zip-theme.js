var fs = require( "fs" );
var path = require( "path" );
var archiver = require( "archiver" );

var output = fs.createWriteStream( "../bluehost-blueprint.zip" );
var archive = archiver( "zip", { zlib: { level: 9 } } );

output.on( "close", function() {
	console.log( "✅ Zip file created: " + archive.pointer() + " total bytes" );
} );

archive.on( "error", function( err ) {
	throw err;
} );

archive.pipe( output );

// Read from a .distignore file
var exclusions = fs.readFileSync( ".distignore", "utf8" )
	.split( "\n" )
	.map( function( line ) {
		return line.trim();
	} )
	.filter( function( line ) {
		return line && !line.startsWith( "#" );
	} );

function shouldExclude( filePath ) {
	return exclusions.some(
		function ( pattern ) {
			// Convert pattern to regex (supports **/filename and wildcards)
			var regex = new RegExp(
				"^" + pattern
					.replace( /\*\*/g, ".*" )
					.replace( /\*/g, "[^/]*" )
					.replace( /\./g, "\\." ) + "$"
			);
			return regex.test( filePath );
		}
	);
}

function addDirectory( dir ) {
	fs.readdirSync( dir ).forEach( function( file ) {
		var fullPath = path.join( dir, file );
		var relPath = path.relative( ".", fullPath );

		if ( shouldExclude( relPath ) ) {
			return;
		}

		var stat = fs.statSync( fullPath );
		if ( stat.isDirectory() ) {
			addDirectory( fullPath );
		} else {
			archive.file( fullPath, { name: relPath } );
		}
	} );
}

addDirectory( "." );
archive.finalize();