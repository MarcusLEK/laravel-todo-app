# Laravel To Do App

This is a simple laravel todo app that is session based. Once the browser is closed, all the task will be deleted.

# Setup
1. Clone the repo
2. composer install 
3. npm install and npm run build.
4. create an .env file and generate the app key. Update the variables as needed.
5. create the database and migrate.
6. run the database seeder to generate some task - optional.
6. php artisan serve and proceed to the url.

# Known Issues
1. Reopening the browser sometimes still shows the old task, but refreshing the browser fixes this. After waiting for a while after the browser closes, reopening does not cause this issue.
