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