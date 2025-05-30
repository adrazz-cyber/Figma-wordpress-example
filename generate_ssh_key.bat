@echo off
echo Generating SSH key for figma-to-wordpress.co.uk...
echo.
echo. | "C:\Program Files\Git\usr\bin\ssh-keygen.exe" -t ed25519 -f "C:\Users\adam\.ssh\id_ed25519_figma_wordpress" -C "figma-to-wordpress.co.uk"
echo.
echo SSH key generation complete!
echo.
echo Your public key is:
type "C:\Users\adam\.ssh\id_ed25519_figma_wordpress.pub"
pause