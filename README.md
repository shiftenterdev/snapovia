## About butikShop [On progress..]

butikShop is a ecommerce framework built with laravel and idea with Magento. This combination makes a new ecommerce platfrom which is fast and more minimized than Magento. We will have the following features:

- Laravel framework
- Catalog Module
- Customer Module
- Payment Module
- Quote Module
- Discount/Coupon Module
- and more.

## Contributors

<a href="https://github.com/shiftenterdev/butikshop/graphs/contributors">
  <img src="https://contributors-img.web.app/image?repo=shiftenterdev/butikshop" />
</a>

## Installation

```shell script
$ git clone https://github.com/shiftenterdev/butikshop.git
$ cd butikshop
$ composer install
$ cp .env.example .env
$ php artisan key:generate
# create database add it .env file
$ php artisan migrate:fresh --seed
$ npm i
$ npm run production
$ php artisan serve
```
**Now serve http://127.0.0.1:8000**

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Iftakharul Alam via [info@shiftenter.dev](mailto:info@shiftenter.dev). All security vulnerabilities will be promptly addressed.

## License

The project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
