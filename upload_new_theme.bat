@echo off
echo Uploading updated Figma User Journey Map theme files...

REM Upload via SCP
scp -i C:\Users\adam\.ssh\id_ed25519_figma_wordpress -o StrictHostKeyChecking=no ^
    C:\Users\adam\Documents\vibe-coding-projects\figma-wordpress-example\style.css ^
    figma-to-wordpress.co.uk@ssh.gb.stackcp.com:public_html/wp-content/themes/figma-wordpress-example/

scp -i C:\Users\adam\.ssh\id_ed25519_figma_wordpress -o StrictHostKeyChecking=no ^
    C:\Users\adam\Documents\vibe-coding-projects\figma-wordpress-example\index.php ^
    figma-to-wordpress.co.uk@ssh.gb.stackcp.com:public_html/wp-content/themes/figma-wordpress-example/

scp -i C:\Users\adam\.ssh\id_ed25519_figma_wordpress -o StrictHostKeyChecking=no ^
    C:\Users\adam\Documents\vibe-coding-projects\figma-wordpress-example\functions.php ^
    figma-to-wordpress.co.uk@ssh.gb.stackcp.com:public_html/wp-content/themes/figma-wordpress-example/

echo Upload complete!
pause
