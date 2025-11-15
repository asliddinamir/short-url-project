# Short URL Generator (PHP + MySQL)

A simple URL shortening web app built for a technical assessment.  
It allows users to convert long URLs into short, easy-to-share links and redirect visitors to the original URL.

---

## Features
- Shorten long URLs into 6-character codes
- Store URL data in MySQL
- Redirect short URLs back to the original URL
- Clean HTML/CSS frontend with dynamic JavaScript handling
- Handles invalid or empty inputs gracefully

---

## Tech Stack
- **Backend:** PHP
- **Database:** MySQL
- **Frontend:** HTML, CSS, JavaScript

---

## Database Setup

1. Open **phpMyAdmin** or MySQL CLI.
2. Import the provided `database.sql` file located in the project root:

```sql
-- Creates database and table
CREATE DATABASE IF NOT EXISTS shortener_db;
USE shortener_db;

CREATE TABLE IF NOT EXISTS short_urls (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(10) NOT NULL UNIQUE,
    long_url TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

# Configuration & Running the Project

## Update Database Credentials
Make sure to update `backend/db.php` with your MySQL credentials:

```php
$host = "localhost";
$user = "root";       // your MySQL username
$pass = "";           // your MySQL password
$db   = "shortener_db";
```

## Running the Project Locally
Place the project folder next to your other projects (e.g., in XAMPP htdocs).
Start Apache and MySQL in XAMPP. Open your browser and go to:
```
http://localhost/short-url-project/frontend/index.html
```
Enter a long URL in the input field and click Shorten.
The app will display a short URL in the format:
```
https://short.me/XXXXXX
```
Clicking the short URL will redirect to the original URL.

## Project Structure
```
short-url-project/
├── backend/
│   ├── create.php       # Short URL generator API
│   ├── redirect.php     # Redirect to original URL
│   └── db.php           # Database connection
├── frontend/
│   ├── index.html       # Main frontend page
│   ├── css/
│   │   └── style.css    # CSS styling
│   └── js/
│       └── script.js      # JavaScript functionality
├── db/
    ├── database.sql     # Database setup file
└── README.md            # Project instructions
```

## Author
Asliddin Amirov
