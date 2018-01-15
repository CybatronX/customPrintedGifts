git config --global user.email "ajaydarez@gmail.com"
git config --global user.name "ajaydarez"

Write-Host "---------------------- Getting changes in PRODUCTION server --------------------------"
Invoke-WebRequest 'http://nostalgictshirts.thecrazygifts.club/deploy.php' | Select-Object -Expand Content