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
