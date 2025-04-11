var fs = require("fs");
var path = require("path");

var configDir = path.join(__dirname, "theme-config");

var sections = {
	settings: "settings",
	styles: "styles"
};

var mergedConfig = {};

// Recursive function to sort object keys.
var sortObjectKeys = function ( obj ) {
	if ( Array.isArray( obj ) ) {
		return obj.map( sortObjectKeys );
	} else if ( obj !== null && typeof obj === "object" ) {
		return Object.keys( obj ).sort().reduce( function ( result, key ) {
			result[ key ] = sortObjectKeys( obj[ key ] );
			return result;
		}, {} );
	}
	return obj;
};

// Function to merge and sort JSON files in a directory.
var mergeFiles = function ( dir ) {
	var mergedSection = {};
	var files = fs.readdirSync( path.join( configDir, dir ) );
	files.forEach( function ( file ) {
		var filePath = path.join( configDir, dir, file );
		var jsonData = JSON.parse( fs.readFileSync( filePath, "utf8" ) );
		mergedSection = { ...mergedSection, ...jsonData };
	} );
	return sortObjectKeys( mergedSection );
};

// Merge main sorted sections.
for ( var key in sections ) {
	mergedConfig[ key ] = mergeFiles( sections[ key ] );
}

// Merge sorted individual files (template-parts.json and main.json).
[ "template-parts.json", "main.json" ].forEach( function ( file ) {
	var filePath = path.join( configDir, file );
	if ( fs.existsSync( filePath ) ) {
		var jsonData = JSON.parse( fs.readFileSync( filePath, "utf8" ) );
		mergedConfig = { ...mergedConfig, ...sortObjectKeys( jsonData ) };
	}
} );

// Custom sort to ensure $schema comes first and version second.
var finalOutput = {};
if ( mergedConfig["$schema"] ) {
	finalOutput["$schema"] = mergedConfig["$schema"];
}
if ( mergedConfig["version"] ) {
	finalOutput["version"] = mergedConfig["version"];
}

// Add the rest of the keys sorted
Object.keys( mergedConfig ).sort().forEach( function ( key ) {
	if ( key !== "$schema" && key !== "version" ) {
		finalOutput[ key ] = mergedConfig[ key ];
	}
} );

// Write the final theme.json file.
fs.writeFileSync( path.join( __dirname, "theme.json" ), JSON.stringify( finalOutput, null, 4 ) );

console.log("✅ theme.json successfully merged and sorted!");