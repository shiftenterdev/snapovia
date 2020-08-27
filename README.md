## About butikShop [Under development..]

[![Build Status](https://travis-ci.org/shiftenterdev/butikshop.svg?branch=master)](https://travis-ci.org/shiftenterdev/butikshop)
[![Issues](https://img.shields.io/github/issues/shiftenterdev/butikshop)](https://img.shields.io/github/issues/shiftenterdev/butikshop)
[![Development](https://img.shields.io/badge/Development-onprogress-orange)](https://img.shields.io/badge/Development-onprogress-orange)
[![GitHub license](https://img.shields.io/github/license/shiftenterdev/butikshop)](https://github.com/shiftenterdev/butikshop/blob/master/LICENSE)
[![Twitter](https://img.shields.io/twitter/url?style=social&url=https%3A%2F%2Ftwitter.com%2Fshiftenterdev)](https://twitter.com/intent/tweet?text=Wow:&url=https%3A%2F%2Fgithub.com%2Fshiftenterdev%2Fbutikshop)

ButikShop(single store based) is an ecommerce framework built with laravel and idea from Magento. This combination makes a new ecommerce platfrom which will be faster and optimized in process and user experience. 
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

<a href="https://github.com/shiftenterdev/butikshop/graphs/contributors">
  <img src="https://contributors-img.web.app/image?repo=shiftenterdev/butikshop" />
</a>

## Specification

|Framework|Laravel|
|---|---|

## Installation

```shell script
# Using git clone
$ git clone https://github.com/shiftenterdev/butikshop.git

# Using composer
$ composer create-project shiftenterdev/butikshop

$ cd butikshop
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


## Want to contribute in `shiftenterdev/butikshop`

Contributions are encouraged and welcome. Here are the steps of contribution:

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
