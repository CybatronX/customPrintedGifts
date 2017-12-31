git add *
git commit -m "this is another deployment by ajay!"
git pull origin master
git status
Invoke-WebRequest 'http://devcrazygiftsclub.com/deploy.php' | Select-Object -Expand Content