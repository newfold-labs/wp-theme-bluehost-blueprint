const fs = require("fs");
const path = require("path");

const configDir = path.join(__dirname, "theme-config");

const sections = {
    settings: "settings",
    styles: "styles"
};

let mergedConfig = {};

// Function to merge JSON
const mergeFiles = (dir) => {
    let mergedSection = {};
    const files = fs.readdirSync(path.join(configDir, dir));
    files.forEach(file => {
        const filePath = path.join(configDir, dir, file);
        const jsonData = JSON.parse(fs.readFileSync(filePath, "utf8"));
        mergedSection = { ...mergedSection, ...jsonData };
    });
    return mergedSection;
};

// Merge main sections
for (const key in sections) {
    mergedConfig[key] = mergeFiles(sections[key]);
}

// Merge individual files (templateParts and main.json)
["template-parts.json", "main.json"].forEach(file => {
    const filePath = path.join(configDir, file);
    if (fs.existsSync(filePath)) {
        const jsonData = JSON.parse(fs.readFileSync(filePath, "utf8"));
        mergedConfig = { ...mergedConfig, ...jsonData };
    }
});

// Write the final file
fs.writeFileSync(path.join(__dirname, "theme.json"), JSON.stringify(mergedConfig, null, 4));

console.log("✅ theme.json successfully merged!");