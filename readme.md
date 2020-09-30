
#Installation

- Clone Repo

## With Homestead
1. [Install Homestead](https://laravel.com/docs/6.x/homestead)

2. Edit homestead.yaml to share code folder into vagrant box

3. cd in homestead folder and run `bash init.sh`

4. Run `vagrant up`

5. Bash into homestead using `vagrant ssh`

6. run `composer install` to install dependencies

7. Create .env file in root directory. Copy contents of env.example and modify variables

8. Bash into homestead, run `php artisan key:generate` to generate an app key

9. run `php artisan cache:clear` and `php artisan config:clear`

10. In homestead directory, run `vagrant up`

11. Run `vagrant ssh` to bash into homestead, run `npm run watch` to automatically compile front end assets

## With built-in server
1. cd in project folder

2. run `composer install` to install dependencies

3. Create .env file in root directory. Copy contents of env.example and modify variables

4. Bash into homestead with `vagrant ssh`, run `php artisan key:generate` to generate an app key

5. run `php artisan cache:clear` and `php artisan config:clear`

6. run `php artisan serve`

7. Run `npm run watch` to automatically compile front end assets


