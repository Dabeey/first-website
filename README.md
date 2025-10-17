# First Website

This is a simple Laravel project demonstrating basic routing, views, and Blade templating.

## Features

- Home page with a link to a named route.
- Contact page.
- Portfolio route with parameters.
- Named routes for navigation.
- Grouped routes structure for future expansion.

## Getting Started

1. **Clone the repository:**
    ```
    git clone <repository-url>
    cd firstwebsite
    ```

2. **Install dependencies:**
    ```
    composer install
    npm install
    ```

3. **Set up environment:**
    ```
    cp .env.example .env
    php artisan key:generate
    ```

4. **Run migrations (if needed):**
    ```
    php artisan migrate
    ```

5. **Build front-end assets:**
    ```
    npm run dev
    ```

6. **Serve the application:**
    ```
    php artisan serve
    ```

## Routes Overview

- `/` — Home page (`resources/views/home.blade.php`)
- `/test` — Test named route
- `/contact` — Contact page (`resources/views/contact.blade.php`)
- `/portfolio/{firstname}/{lastname}` — Displays given name parameters
- `/portfolio/company` — (Placeholder)

## Project Structure

- **routes/web.php** — Application routes
- **resources/views/** — Blade templates for your pages
- **public/** — Publicly accessible files

## Notes

- This project uses [Vite](https://vitejs.dev/) for asset bundling.
- Example: `@vite('resources/css/app.css')` and `@vite('resources/js/app.js')` in Blade templates.

## License

This project is open source and available under the [MIT License](LICENSE).
