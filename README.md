# Frameworkless PHP API

Framework-less Restful API build with PHP and MySQL.

## Installation

1. Clone/download this folder to your computer.
2. Save this folder in your Apache root directory.
3. Access the DB folder and use the api_database.sql file to create your database.
4. Change the connection.class.php file in api\connection path, if it's necessary.

## How does it work

We have 4 methods of access the API:

1. GET 
2. POST
3. PUT
4. DELETE

- `GET method` (used to return an existing client): It's accessed using the URL http://localhost/API_Restful/api/client/(existing client id) 

- `POST method` (used to include a new client): It's accessed using the URL http://localhost/API_Restful/api/client/ and passing as parameter (name, age and gender)

- `PUT method` (used to alter an existing client): It's accessed using the URL http://localhost/API_Restful/api/client/(existing client id) and passing as parameter (name, age and gender) 

- `DELETE method` (used to delete an existing client): It's accessed using the URL http://localhost/API_Restful/api/client/(existing client id) 

## Why should you use APIs?

APIs are a great way to separate the back-end from the front-end of your application, it allows you to build a front-end in any language or platform you want, and serve it with the same back-end. Awesome isn't it?

## Credits

- [Luiz Felipe de Oliva Limeira](https://github.com/lflimeira02)

