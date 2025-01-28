# People Registration API

This project provides a simple **People Registration API** built with Laravel. It allows users to register by providing their name, email, and password. The password is securely hashed before being stored in the database. The API also ensures email uniqueness and validates input data.

## Features
- **User registration**: Register users with name, email, and password.
- **Input validation**: Ensures the name is at least 3 characters, email is unique, and password is at least 8 characters.
- **Password hashing**: Passwords are hashed before being stored.
- **Returns user data**: User's information is returned, excluding the password.

## Prerequisites

Before running the application, make sure you have the following installed:

- PHP (>=7.4)
- Composer (for managing PHP dependencies)
- Laravel (5.x or higher)
- MySQL or another database
- Node.js (for frontend or development tools, optional)

## Installation

Follow these steps to set up the API locally.

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/people-registration-api.git
   cd people-registration-api


   composer install
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=people_db
DB_USERNAME=root
DB_PASSWORD=



php artisan serve

