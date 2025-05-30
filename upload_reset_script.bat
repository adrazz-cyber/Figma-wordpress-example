@echo off
echo Uploading password reset script...
(
echo open ftp.gb.stackcp.com
echo figma-to-wordpress.co.uk
echo [YOUR_FTP_PASSWORD]
echo cd public_html
echo put wp_reset_pass.php
echo bye
) | ftp -n -s:- 
pause