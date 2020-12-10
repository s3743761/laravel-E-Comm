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
- Run ```composer install``` on your cmd or terminal

- Copy `.env.example` file to ``.env`` on the root folder. 

- You can type ```copy .env.example .env``` if using command prompt Windows or ```cp .env.example .env``` if using terminal, Ubuntu

- Open your .env file and change the database name (`DB_DATABASE`)to whatever you have, username (`DB_USERNAME`) and password (`DB_PASSWORD`) field correspond to your configuration. 

- Run ```php artisan key:generate```

- Run ```php artisan migrate```

- Run the application with this command:
```bash
php artisan serve
```



## Features

Here are the features that show the E-commerce demo application in use.

**Home Page**

- A dynamic carousel showing the trending products
- A Search bar to search from a vast variety of products through their category or name.
- A login and register functionality for the user to go their cart and see already added products from their previous vists. 
 Each user has their personal cart where their previously added items are saved.
---

**Item Detail Page**

- Displaying the product image wiith some description explaining it.
- Allowing the user to add the product in their cart or buying the product directly.
- Redirecting the user to login page if the user hasn't logged in and they try to add an item to their cart.


---

**Shopping Cart**

- Displaying each product with the quantity selected.
- Providng a total for that order including taxes.
- Allowiing the user to enter their address and selecting a payment method and placing the order if all fields are validated.

---

**Orders Page**

- Allows the user to see their previously placed orders with their shipping status and the payment status.


