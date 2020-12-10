# Laravel E-Commerce

This is a sample application that demonstrates an E-commerce website using the laravel stack. The application loads products a mysql database and displays them. Users can select to display products in a single category. Users can click on any product to get more information including pricing, reviews and rating. Users can select items and add them to their shopping cart. A user will have their indivdual cart which will be saved for later if a user logouts from the system.



## Pre-requisites
- Laravel 8
- PHP 7.3.25 
- MySQL 8.0.20

## Getting Started
To get started  you can simply clone this `laravel-E-Comm` repository and install the dependencies.

Clone the `laravel-E-Comm` repository using git:

```bash
git clone https://github.com/s3743761/laravel-E-Comm.git
cd laravel-E-Comm
```
Run ```composer install``` on your cmd or terminal

Copy `.env.example` file to ``.env`` on the root folder. You can type ```copy .env.example .env``` if using command prompt Windows or ```cp .env.example .env``` if using terminal, Ubuntu

Open your .env file and change the database name (`DB_DATABASE`) to "ecomm", username (`DB_USERNAME`) and password (`DB_PASSWORD`) field correspond to your configuration. 

Run ```php artisan key:generate```

Run ```php artisan migrate```


Run the application with this command:
```bash
php artisan serve
```



## Live Demonstration

Here are screenshots that show the E-commerce demo application in use.

**Home Page**
![Home Page](/screenshots/homePage.png?raw=true "Optional Title")

---

**Item Detail Page**
![Item Detail](/screenshots/itemDetail.png?raw=true "Optional Title")

---

**Shopping Cart**
![Shopping Cart](/screenshots/shoppingCart.png?raw=true "Shopping Cart")


