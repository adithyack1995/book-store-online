
## Installation ⚒️

   Clone the project by using git clone url

1. Open the terminal in your root directory.

2. Use the following command to install the composer

   composer install

3. Run the following command to generate the key

   php artisan key:generate

4. By running the following command, you will be able to get all the dependencies in your **node_modules** folder:

   npm install

5. To run the project, you need to run the following command in the project directory. It will compile JavaScript and Styles.

   npm run dev

6. To run migration

   php artisan migrate

7. To insert roles run the below command of seeder

   php artisan db:seed or php artisan db:seed RoleSeeder

8. To create super admin run the artisan command given below.

   php artisan store:create-super-admin

9. To serve the application, you need to run the following command in the project directory

   php artisan serve


10. Change env file FILESYSTEM_DISK to public for image storing.

Used Spatie laravel permission for user and permissions(https://spatie.be/docs/laravel-permission/v3/installation-laravel).

Used Materio template for both admin and user side(https://demos.themeselection.com/materio-bootstrap-html-admin-template/documentation/laravel-introduction.html).

