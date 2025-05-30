@echo off
echo Uploading password reset helper...
"C:\Program Files\Git\bin\bash.exe" -c "cat C:/Users/adam/Documents/vibe-coding-projects/figma-wordpress-example/password-reset-helper.php | ssh -i /c/Users/adam/.ssh/id_ed25519_figma_wordpress -o StrictHostKeyChecking=no figma-to-wordpress.co.uk@ssh.gb.stackcp.com 'cat > public_html/wp-content/plugins/password-reset-helper.php'"
echo Done!