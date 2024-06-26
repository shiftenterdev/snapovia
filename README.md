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

| Info                  | Details           |
|:----------------------|:------------------|
| Project               | Ecommerce         |
| Type                  | Single store mode |
| Framework             | Laravel 10.x      |
| Database              | Mysql 5.7         |
| PHP                   | ^8.1              |
| Admin panel           | Yes               |
| Vendor                | Yes               |
| Frontend              | Blade & Vue       |
| Livewire              | 3.x               |
| Spatie Media Library  | 7.x               |
| Spatie Permission     | 3.x               |
| Unisharp File manager | dev-master        |
| Payment               | COD,Stripe,Paypal |

## Installation

### Using Docker
```shell script
# Using git clone
$ git clone https://github.com/shiftenterdev/snapovia.git
$ cd snapovia
$ composer install
$ cp .env.docker .env

$ sail up
# OR in detach mode
$ sail up -d

$ ./vendor/bin/sail artisan migrate:fresh --seed

$ ./vendor/bin/sail run serve
# OR using yarn
$ ./vendor/bin/sail yarn
```
**Now serve http://localhost:8000/**

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
sail artisan queue:work
```
To check the failed jobs
```sh
sail artisan queue:failed 
``` 
To send them in queue list again
```sh
sail artisan queue:retry all 
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
