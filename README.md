# Installation
**First clone the repo, then navigate to the newly added directory pgphptest

git clone 

**Run below command to install the dependencies

composer install

**Copy .env.example file to .env and change the dabase credentials to your local newly created database

cp -c .env.example .env

**Run Migration and seeder by below command

php artisan migrate:fresh --seed
