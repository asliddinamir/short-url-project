-- Create database
CREATE DATABASE IF NOT EXISTS shortener_db;

-- Use the database
USE shortener_db;

-- Create table for short URLs
CREATE TABLE IF NOT EXISTS short_urls (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(10) NOT NULL UNIQUE,
    long_url TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);