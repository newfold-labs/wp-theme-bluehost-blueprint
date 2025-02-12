# Bluehost Studio

Bluehost Studio is a free open source WordPress theme distributed under the terms of the GNU General Public License v2.0 or later.

This theme is a [Block Theme](https://developer.wordpress.org/themes/learn/understanding-block-themes/) and supports [WooCommerce](https://woocommerce.com/) out of the box. It also supports the Bluehost Cloud Pattern Library.

## Installation

### From GitHub

1. Download the repository as a zip file.
2. Go to your WordPress admin dashboard.
3. Click on Appearance > Themes > Add New
4. Click on Upload Theme
5. Select the zip file you downloaded and click Install Now
6. Click on Activate once the theme is installed

### From WordPress.org

1. Log in to your WordPress admin dashboard
2. Click on Appearance > Themes > Add New
3. Search for "BH Studio"
4. Click on Install
5. Click on Activate once the theme is installed

## Build and manage `theme.json` with `merge-theme`

This theme uses a modular approach for `theme.json`, splitting it into multiple files inside the `theme-config/` directory. To generate the final `theme.json` file, follow these steps:

### 🚀 Install Dependencies (First Time Only)
If you haven’t already, install the required Node.js dependencies:

```sh
npm install
```

### 🔄 Merge theme.json Files
Run the following command to combine all JSON files into a single theme.json:

```sh
npm run merge-theme
```

This script automatically merges all settings, styles, and templates from the theme-config/ folder into the final theme.json file, which is required for WordPress to function properly.

### 📌 When to Run merge-theme
✅ After modifying any file inside theme-config/

✅ Before committing changes to ensure theme.json is up to date

✅ Before testing the theme in a WordPress environment

### 🛠 Troubleshooting

If the command doesn’t work:

🔹 Ensure you are running it from the theme’s root directory

🔹 Check if Node.js and npm are installed by running:

```sh
node -v && npm -v
```

🔹 Try deleting node_modules and reinstalling dependencies:
```sh
rm -rf node_modules package-lock.json
npm install
```

Now you’re ready to manage theme.json more efficiently! 🚀