## About butikShop [Under development..]

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

...updating

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

# migrate database with some dummy data
$ php artisan migrate:fresh --seed

# install node modules for vue(optional)[On progress...]
$ npm i --save
$ npm run production

# finally run the buit-in server
$ php artisan serve
```
**Now serve http://127.0.0.1:8000**

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
