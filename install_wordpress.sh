#!/bin/bash
echo "Starting WordPress installation..."

# Navigate to public_html
cd public_html

# Download WordPress
echo "Downloading WordPress..."
wget -q https://wordpress.org/latest.tar.gz

# Extract WordPress
echo "Extracting WordPress files..."
tar -xzf latest.tar.gz

# Move WordPress files to root
echo "Moving files to document root..."
mv wordpress/* .
mv wordpress/.* . 2>/dev/null

# Clean up
echo "Cleaning up..."
rm -rf wordpress latest.tar.gz

# Set proper permissions
echo "Setting permissions..."
find . -type d -exec chmod 755 {} \;
find . -type f -exec chmod 644 {} \;

echo "WordPress files installed successfully!"
ls -la