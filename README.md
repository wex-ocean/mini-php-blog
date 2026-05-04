# 📝 Mini PHP Blog System

A simple yet structured **PHP blog application** built using **Core PHP and MySQL**, designed to demonstrate backend fundamentals like database integration, CRUD operations, and basic admin management.

---

## 🚀 Overview

This project is a lightweight blog system where:
- Admins can create, edit, and delete posts
- Users can view blog posts on the frontend
- Data is managed using a MySQL database

Built primarily for **learning backend development and PHP architecture**.

---

## ✨ Features

### 📰 Blog Management (Admin)
- Create new blog posts
- Edit existing posts
- Delete posts
- Upload images for posts

### 🌐 Frontend
- Display all blog posts
- Clean homepage layout
- Dynamic content rendering from database

### 🗄 Database Integration
- MySQL database connection
- Structured tables for posts
- Persistent data storage

### ⚙️ Core Functionality
- CRUD operations (Create, Read, Update, Delete)
- Basic routing structure
- Organized file separation

---


## 🛠 Tech Stack

- **PHP (Core PHP)**
- **MySQL**
- **HTML5**
- **CSS3**
- **XAMPP / Local Server**

---

## 📂 Project Structure

```bash id="w4xk91"
mini-php-blog/
│
├── admin/             # Admin panel (CRUD operations)
├── config/            # Database connection
├── includes/          # Reusable components / functions
├── public/            # Frontend (user-facing pages)
├── sql/               # Database schema / setup files
│
├── index.php          # Entry point
└── README.md

⚙️ Installation & Setup
1. Clone or Download
git clone https://github.com/your-username/mini-php-blog.git
2. Move to XAMPP

Place project inside:

htdocs/
3. Start Server
Start Apache
Start MySQL
4. Setup Database
Open phpMyAdmin
Import SQL file from /sql/ folder
Update DB credentials in:
config/database.php
5. Run Project

Open browser:

http://localhost/mini-php-blog/

⚙️ How It Works
Admin Panel
Handles CRUD operations for posts
Interacts with database via PHP
Frontend
Fetches blog posts from database
Displays them dynamically
Database Layer
Stores posts, images, and metadata
Connected via config file

🚀 Use Cases
Beginner PHP learning project
Understanding CRUD operations
Learning MVC-like structure basics
Backend practice without frameworks
🔧 Possible Improvements
Add authentication system (login/logout)
Implement MVC architecture
Add comments system
SEO optimization
Pagination for posts
Image optimization & validation
REST API support

⚠️ Notes
This is a basic learning project
Not optimized for production use
Security improvements needed (prepared statements, validation, etc.)

🎯 Goal

To understand how a basic CMS/blog system works internally using core PHP and MySQL without relying on frameworks.

📌 Future Scope
Convert into full CMS
Add user roles (admin/editor)
Integrate modern UI (Bootstrap/Tailwind)
Migrate to Laravel or other frameworks
