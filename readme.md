# Store - Local Classified

Small open source webstore based on laravel to sell used goods online.

## Getting Started

### Prerequisites
To run this project smoothly make sure:

- You must be running a linux distribution
- Composer must be installed on the system
- Laravel must be installed on the system

### Installation

Open terminal, Go to the project root and fetch the dependencies by executing

```
composer install
```

Copy .env.example to .env and fill all mandatory details 

```
cp .env.example .env
```

Now generate the key for your laravel app by executing

```
php artisan key:generate
```

Create a blank database 'store' in mysql, and then migrate the database by executing

```
php artisan migrate
```

Run the queue by executing

```
php artisan queue:listen
```

Before using the project populate the categories table in store database

Put your "Pusher" credentials and "Google Places Api Key" on .env file
 
Register and login to chat with other users.


## Built With

* [Laravel](https://laravel.com/docs/5.5) - The php framework used