# Inventory Management System 

## Project Description
The Inventory Management System is a web-based application developed using Laravel to manage and monitor inventory in a warehouse. This application allows users to perform actions such as adding, updating, deleting, and viewing items in the warehouse with an easy-to-use interface.

## Key Features
- Item Management: Add, edit, delete, and view item details.
- Search & Filter: Search and filter items based on various criteria.
- User Authentication: Login and registration features for system access.
- User Level: Administrator, Sales, Warehousing

## Prerequisites
- PHP >= 7.3
- Composer
- Laravel >= 8.40
- MySQL 

## Installation
Follow these steps to install and run the application:

1. Clone the Repository

`git clone https://github.com/ivantandella/Inventory-Management-App.git`

`cd Inventory-Management-App`

2. Install Dependencies

Run Composer to install PHP dependencies:

`composer install`

3. Configure Environment

Copy the .env.example file to .env and set the required configuration

`cp .env.example .env`

4. Generate Application Key

Run the command to generate a Laravel application key:

`php artisan key:generate`

5. Run Migrations

Execute migrations to create the necessary database tables:

`php artisan migrate`

6. Run the Server

You can start the local Laravel server with:

`php artisan serve`

Access the application in your browser at `http://localhost:8000`.

## Screenshot(s)
![image](https://github.com/user-attachments/assets/c796113c-4a19-4127-aa6e-d63eaf7b0597)
![image](https://github.com/user-attachments/assets/b49cf405-1539-417f-97b8-6ae67120e170)
![image](https://github.com/user-attachments/assets/529d1646-0cf7-4324-9ec2-eea83520c503)


## License
This project is licensed under the MIT License.
