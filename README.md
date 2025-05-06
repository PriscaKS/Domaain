# dpp website project- Laravel + breeze

This is a web application built using Laravel as the backend,. The system provides a seamless, modern web experience with the power of Laravel and tailwind css for styling.

## Features
- **Authentication** using Laravel Breeze/Fortify
- **API integration** with Laravel backend
- **Tailwind CSS** for styling
- **Optimized for performance and security**

## Installation
Follow these steps to set up the project locally:

```sh
# Clone the repository
git clone https://github.com/ishmaiah-ih/dpp.git
# go inside the project folder
cd dpp

# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install

# Copy and configure the environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run database migrations
php artisan migrate

# Build frontend assets
npm run dev

# Start the development server
php artisan serve
