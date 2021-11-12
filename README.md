<p align="center"><img src="https://github.com/shiftenterdev/butikshop/blob/master/public/snapovia.png?raw=true" width="300"></p>

<p align="center">
<a href="https://travis-ci.org/shiftenterdev/butikshop"><img src="https://travis-ci.org/shiftenterdev/butikshop.svg?branch=master" alt=""></a>
<a href="https://img.shields.io/github/issues/shiftenterdev/butikshop"><img src="https://img.shields.io/github/issues/shiftenterdev/butikshop" alt=""></a>
<a href="https://img.shields.io/badge/Development-onprogress-orange"><img src="https://img.shields.io/badge/Development-onprogress-orange" alt=""></a>
</p>

## Snapovia [Under development..]

Snapovia(single store based) is an ecommerce framework built with laravel and idea from Magento. This combination makes a new ecommerce platform which will be faster and optimized in process and user experience. 
We will have the following features:

- Laravel framework
- Catalog module
- Customer module
- Payment module
- Cart price rule module
- Catalog price rule module
- Discount/Coupon module
- Vendor module
- and more.

## Contributors

<a href="https://github.com/shiftenterdev/snapovia/graphs/contributors">
  <img src="https://contributors-img.web.app/image?repo=shiftenterdev/butikshop" />
</a>

## Specification

|Info|Details|
|:---|:---|
|Project|Ecommerce|
|Type|Single store mode|
|Framework|Laravel 8.x|
|Database|Mysql 5.7|
|PHP|^7.3|
|Admin panel|Yes|
|Vendor|Yes|
|Frontend|Blade & Vue|
|Livewire|2.x|
|Spatie Media Library|7.x|
|Spatie Permission|3.x|
|Unisharp File manager|dev-master|
|Payment |COD,Stripe,Paypal|

## Installation

### Using Docker
```shell script
# Using git clone
$ git clone https://github.com/shiftenterdev/snapovia.git
$ cd snapovia
$ composer install
$ cp .env.docker .env

$ docker-compose build
$ docker-compose up -d

$ docker-compose exec app php /var/www/artisan migrate:fresh --seed
# If you want to execute direct shell command
# $ docker-compose exec {container_name} /bin/sh
$ docker-compose exec app /bin/sh
# Then execute as 
$ php artisan migrate:fresh --seed

# migrate without sample-data
$ php artisan migrate:fresh

$ docker-compose run npm install --save
$ docker-compose run npm run production
```
**Now serve http://127.0.0.1:8088**

### General

```shell script
# Using git clone
$ git clone https://github.com/shiftenterdev/snapovia.git

# Using composer
$ composer create-project shiftenterdev/snapovia

$ cd snapovia
$ composer install
$ cp .env.example .env
$ php artisan key:generate

# create database add it .env file

# migrate database with sample-data
$ php artisan migrate:fresh --seed

# migrate without sample-data
$ php artisan migrate:fresh

# install node modules for vue(optional)[On progress...]
$ npm i --save
$ npm run production

# finally run the buit-in server
$ php artisan serve
```
**Now serve http://127.0.0.1:8000**

> Admin url: http://127.0.0.1:8000/adminportal/login \
> Login: `super@admin.com` \
> Password: `password`

> Admin url: http://127.0.0.1:8000/customer/login \
> Login: `customer@mail.com` \
> Password: `password`

## For Queue to work
Set in `.env` file
```sh
QUEUE_CONNECTION=database
```
Then run (in console or cron job)
```sh
php artisan queue:work
```
To check the failed jobs
```sh
php artisan queue:failed 
``` 
To send them in queue list again
```sh
php artisan queue:retry all 
```


## Want to contribute in *Snapovia*

Contribution will be encouraged and welcomed. Here are the steps of contribution:

1. Fork the repository
2. Clone the repository
3. Create a branch
4. Checkout the branch

```sh
git checkout -b <add-your-name>
```
5. Do the changes with a descriptive commit message
```sh
git commit -s -m "this commit will be signed off automatically!"
```
6. Finally push the commit
```sh
git push origin -u <add-your-name>
```


## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Iftakharul Alam via [info@shiftenter.dev](mailto:info@shiftenter.dev). All security vulnerabilities will be promptly addressed.

## License

The project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
