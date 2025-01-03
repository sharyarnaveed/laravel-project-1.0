# Confession Portal - Laravel Project

This project is a simple web application where users can submit and view anonymous confessions. The primary goal of this project was to understand how Laravel works, specifically in terms of routing, controllers, and database interaction. It is my first Laravel project, and it has helped me get hands-on experience with the framework.

## Overview

The Confession Portal allows users to:
- Submit their anonymous confessions.
- View a detailed view of any given confession.

### Key Features:
- **Confession Submission**: Users can submit their confessions through a form.
- **Confession Details Page**: Each confession has its own detailed view where the user can read the full confession.
- **Basic Validation**: Form inputs are validated to ensure no empty fields.

## Technologies Used

- **Backend**: Laravel 8 (used for routing, controllers, database operations)
- **Frontend**: HTML, CSS (AI-generated initial frontend structure, customized further by me)
- **Database**: MySQL (for storing confessions)

## Purpose

This project was created as a learning experience with Laravel. I wanted to explore how the Laravel framework handles:
- Routing
- Controllers
- Database migrations and interactions

It is not a fully functional or production-ready project but serves as a stepping stone in my journey of learning Laravel.

## Project Structure

- **Backend (Laravel)**:
  - `routes/web.php`: Defines the routes for displaying the confession form and viewing confession details.
  - `app/Http/Controllers/ConfessionController.php`: Handles logic for storing and displaying confessions.
  - `database/migrations/`: Migration files for creating the `confessions` table.
  
- **Frontend (HTML & CSS)**:
  - The HTML structure was initially generated using AI and then customized to fit the project requirements. The CSS styles the confession details page for a clean, readable layout.

## Setup Instructions

1. Clone the repository:
   Navigate to the project directory:


2. Go to Project Directory
cd confession-portal
Install Laravel dependencies using Composer:

3. Run below command
composer install
Set up the environment variables by copying the .env.example file to .env:

4. Check the .env.example as example
cp .env.example .env
Generate the application key:

5. Run below commadn
php artisan key:generate
Run the migrations to create the necessary database tables:

6. Run below command
php artisan migrate
Start the Laravel development server:

7. Run this to server project
php artisan serve

