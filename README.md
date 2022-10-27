This is a laravel based web application.

Setup Instructions:

1: Set up Apache and Mysql using XAMMP and ensure that they are running.
2. Download composer setup and install on your computer.
3. Install laravel using composer globally.
4. Install npm package in the project as it will be required to run vite.
5. Extract the project in a folder.
6. You can use a git bash cli and open two instances pointing to the folder with the application files.
7. Run the command 'npm run dev' on one cli instance. Do not close the instance.
8. Open Database server of your preference and create a database as specified on the .env file in the application. If your database server requires access password or is running on a another port apart from port 3306, please specify on the .env file.
9. On the other git bash cli, run the command 'php artisan migrate' to create the database tables on the database.
10. Once the migrations are successfully created, run the command 'php artisan serve' to start the application.
11. you can access the application on any browser at "http://localhost:8000/" or "127.0.0.1:8000".
12. You can use Postman to check test the functionality of the API.

![](C:\Users\oscar\PhpstormProjects\CourseManagement\public\imagesproj\api documents.PNG)
