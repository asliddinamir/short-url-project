# Short URL Generator (PHP + MySQL)

This is a simple URL shortening app built for a technical assessment.

## Features
- Convert long URLs into short codes
- Store data in MySQL
- Redirect short URLs back to original URLs
- Simple HTML frontend

## Tech Stack
- PHP
- MySQL
- HTML, CSS, JavaScript (frontend)

## Setup Instructions

1. **Import Database**
- Create database `shortener_db`
- Create table `short_urls`:

```sql
CREATE TABLE short_urls (
  id INT AUTO_INCREMENT PRIMARY KEY,
  code VARCHAR(10) UNIQUE,
  long_url TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);