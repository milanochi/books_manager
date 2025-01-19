## Instructions on how to set up and run the application locally, including database configuration and environment variables.

Git: Ensure you have Git installed on your system. You can download it from the official Git website.
Composer: Composer is a dependency manager for PHP. Download and install it according to the instructions on the Composer website.
PHP: You need a recent and supported version of PHP installed on your machine.
Web Server: A local web server like Apache or Nginx is required.
Database: Install a database system like MySQL or PostgreSQL.
2. Clone the Repository

Open your terminal or command prompt.

Navigate to the desired directory where you want to clone the Laravel project.

Use the git clone command to clone the repository from GitHub:

   git clone <repository_url>


Replace `<repository_url>` with the actual URL of the GitHub repository.

**3. Install Dependencies**

1. **Navigate to the project directory** in your terminal:

```bash
cd <project_name> 
Install project dependencies using Composer:

Bash

composer install
4. Create .env File

Create a .env file by copying the .env.example file:

Bash

cp .env.example .env
5. Configure Environment Variables

Open the .env file in a text editor.

Configure the following environment variables:

Database Credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=book_manager
DB_USERNAME=root
DB_PASSWORD=
Application Key:

APP_KEY: Generate a new key using php artisan key:generate in your terminal.
Other Configurations:

Adjust other configurations as needed, such as:
APP_URL: The URL of your application (e.g., 'http://localhost')

Bash

php artisan key:generate
7. Configure Database

Create the database specified in your .env file using your database management tool (e.g., phpMyAdmin, pgAdmin).

Run database migrations:

Bash

php artisan migrate
8. Start the Development Server

Start the built-in development server:

Bash
npm install
npm run dev  //for hot module reload with vite

php artisan serve
This will typically start the server on http://127.0.0.1:8000.

9. Access the Application

Open your web browser and navigate to http://127.0.0.1:8000 to access your Laravel application.
Additional Notes

Storage Links: If your application uses the storage directory, create symbolic links to the actual storage locations:

Bash

php artisan storage:link
.gitignore: Make sure to add the .env file to your .gitignore file to prevent sensitive information from being committed to the repository.

Debugging: For debugging, you can use tools like Laravel Debugbar or Xdebug.

Production Environment: For production deployment, you'll need to configure a production-ready web server like Apache or Nginx, and adjust environment variables accordingly.

