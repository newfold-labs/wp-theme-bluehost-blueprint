import fg from 'fast-glob';
import { exec } from 'child_process';
import { promisify } from 'util';
const execAsync = promisify(exec);

const cssFiles = await fg(['assets/**/*.css', '!assets/**/*.min.css']);

for (const file of cssFiles) {
	const output = file.replace(/\.css$/, '.min.css');
	console.log(`Minifying: ${file} → ${output}`);
	await execAsync(`npx postcss "${file}" --output "${output}"`);
}