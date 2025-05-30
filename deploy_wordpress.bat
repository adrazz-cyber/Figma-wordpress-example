@echo off
echo Uploading and running WordPress installation script...
"C:\Program Files\Git\usr\bin\scp.exe" -i "C:\Users\adam\.ssh\id_ed25519_figma_wordpress" -o StrictHostKeyChecking=no install_wordpress.sh figma-to-wordpress.co.uk@ssh.gb.stackcp.com:~/
"C:\Program Files\Git\usr\bin\ssh.exe" -i "C:\Users\adam\.ssh\id_ed25519_figma_wordpress" -o StrictHostKeyChecking=no figma-to-wordpress.co.uk@ssh.gb.stackcp.com "chmod +x install_wordpress.sh && ./install_wordpress.sh"