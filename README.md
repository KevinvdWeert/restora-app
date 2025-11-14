# SyncTable

A comprehensive restaurant management system built with Laravel, designed to handle reservations, menu management, orders, and customer reviews.

## About This Project

SyncTable is a modern web application that provides a complete solution for restaurant operations. It enables restaurant owners to manage their establishments efficiently while providing customers with an intuitive platform for making reservations and placing orders.

## Features

### Core Functionality
- **Restaurant Management** - Multi-restaurant support with individual profiles
- **Table Management** - Organize and track table availability
- **Reservation System** - Customer booking management with time slots
- **Menu Management** - Categories and menu items with pricing
- **Order System** - Complete order processing with order items tracking
- **Review System** - Customer feedback and ratings
- **User Roles** - Role-based access control (Admin, Staff, Customer)

### Database Structure
The application includes pre-configured migrations for:
- Users with role management
- Restaurants
- Tables
- Reservations
- Categories
- Menu Items
- Orders & Order Items
- Reviews

## Tech Stack

- **Backend:** Laravel 11.x
- **Frontend:** Tailwind CSS v4
- **Build Tool:** Vite
- **Database:** MySQL/PostgreSQL
- **PHP Version:** 8.2+

## Requirements

- PHP >= 8.2
- Composer
- Node.js >= 18.x
- Yarn or npm
- MySQL/PostgreSQL database

## Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd synctable
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   yarn install
   # or
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database**
   
   Edit `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=synctable
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Seed database (optional)**
   ```bash
   php artisan db:seed
   ```

## Running the Application

You need to run two commands in separate terminals:

**Terminal 1 - Laravel Development Server:**
```bash
php artisan serve
```

**Terminal 2 - Vite Development Server:**
```bash
yarn dev
# or
npm run dev
```

Access the application at: `http://localhost:8000`

## Building for Production

```bash
yarn build
# or
npm run build
```

## Project Structure

```
synctable/
├── app/
│   ├── Http/Controllers/    # Application controllers
│   ├── Models/              # Eloquent models
│   └── Providers/           # Service providers
├── database/
│   ├── migrations/          # Database migrations
│   └── seeders/            # Database seeders
├── resources/
│   ├── css/                # Tailwind CSS
│   ├── js/                 # JavaScript files
│   └── views/              # Blade templates
├── routes/
│   └── web.php             # Web routes
└── public/                 # Public assets
```

## Development Status

🚧 This project is currently in active development. Core features are being implemented.

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
