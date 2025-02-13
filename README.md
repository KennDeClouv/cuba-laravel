# cuba-laravel

## Description
Cuba Laravel is a comprehensive and flexible Laravel application designed to streamline development processes and enhance productivity. It provides a robust set of features and tools to help developers build scalable and maintainable web applications.

## Features
- Laravel 11
- Bootstrap 5
- jQuery 3.7
- ApexCharts 3.39
- Chart.js 4.4.1
- Dropzone.js 6.0.1
- Select2 4.0.15
- DateRangePicker 3.1.0
- FullCalendar 6.1.0
- CKEditor 5.0.0
- CKFinder 3.5.0
- CKFinder 3.5.0

## Requirements
- PHP >= 7.4
- Composer
- Laravel >= 8.x
- MySQL or PostgreSQL
- Node.js and npm

## Php Extensions
- zip

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/KennDeClouv/cuba-laravel.git
   ```

2. Navigate to the project directory:
   ```bash
   cd cuba-laravel
   ```

3. Install the dependencies:
   ```bash
   composer install
   ```

4. Copy the `.env.example` file to `.env` and configure your environment variables:
   ```bash
   cp .env.example .env
   ```

5. Generate the application key:
   ```bash
   php artisan key:generate
   ```

6. Run the database migrations:
   ```bash
   php artisan migrate
   ```

7. Start the development server:
   ```bash
   php artisan serve
   ```

8. Open your browser and visit `http://localhost:8000` to see the application in action.
