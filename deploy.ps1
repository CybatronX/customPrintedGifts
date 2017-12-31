git config --global user.email "ajaydarez@gmail.com"
git config --global user.name "ajaydarez"

Write-Host "---------------------- Pushing changes to repository--------------------------" 
git add *
git commit -m "this is another deployment by ajay!"
git push origin master
git status
Write-Host "---------------------- Getting changes in server --------------------------"
Invoke-WebRequest 'http://devcrazygiftsclub.com/deploy.php' | Select-Object -Expand Content