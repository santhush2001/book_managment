# 📚 Laravel 10 Book Management System

A simple Laravel web application to manage books and authors, with user authentication, CRUD operations, and PDF report generation using TCPDF.

---

## ✨ Features

- User Registration & Login (Laravel Breeze)
- Manage Authors (Add/Edit/Delete/View)
- Manage Books (Add/Edit/Delete/View)
- Prevent books from having future publish dates
- Generate PDF reports based on publish date range (TCPDF)
- Dashboard with statistics
- Bootstrap UI for responsive layout

---


## 🛠️ Tech Stack

- Laravel 10
- PHP 8+
- MySQL
- Bootstrap 5
- TCPDF (for PDF report generation)
- Laravel Breeze (for authentication)

---

## 🚀 Installation Guide

```bash
# 1. Clone the repository
git clone https://github.com/your-username/book-management-system.git

# 2. Move into the project directory
cd book-management-system

# 3. Install dependencies
composer install
npm install && npm run dev

# 4. Configure .env
cp .env.example .env
# → Update database credentials in `.env`

# 5. Generate key & run migrations
php artisan key:generate
php artisan migrate

# 6. Start the server
php artisan serve
