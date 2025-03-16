
## Installation
Docker files included.
First set up your .env file and database credentials (mysql image uses .env DB_DATABASE,DB_USERNAME,DB_PASSWORD to configure mysql service, use any username other than root, root user's default password also sets by DB_PASSWORD).
After that you can start container by running following command:"docker compose up -d".
DB hostname is "mysql".

## Tests
Before testing you need to configure following .env variables:<br>
DB_TEST_HOST<br>
DB_TEST_PORT<br>
DB_TEST_DATABASE<br>
DB_TEST_USERNAME<br>
DB_TEST_PASSWORD<br>
It's better to setup a new db. If you use main db then your data will be lost.<br> 
To execute tests just run "php artisan test".

## API Docs
There is a postman collection included in project root
