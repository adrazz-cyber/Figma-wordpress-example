@echo off
echo Creating User Journey Map WordPress Plugin ZIP...

cd /d "C:\Users\adam\Documents\vibe-coding-projects\figma-wordpress-example"

:: Create ZIP using PowerShell
powershell -Command "Compress-Archive -Path 'wp-plugin\*' -DestinationPath 'user-journey-map-plugin.zip' -Force"

echo.
echo Plugin ZIP created: user-journey-map-plugin.zip
echo.
echo Installation Instructions:
echo 1. Upload user-journey-map-plugin.zip to WordPress
echo 2. Activate the plugin
echo 3. Use shortcode [user_journey_map] on any page
echo.
pause
