﻿# dukundumurimo_system
# Warehouse Management CRUD System

This is a basic **PHP CRUD (Create, Read, Update, Delete)** system designed for managing warehouse operations. It includes management for:

- Managers
- Foods
- Imports
- Exports
- Reports

The frontend uses **Bootstrap 5** for styling and responsiveness, with a dynamic background and navigation bar.

## 🌐 Live Preview

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Preview of navbar and background -->
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="navbar-nav ms-auto">
      <li><a href="#" class="btn btn-success m-2">Home</a></li>
      <li><a href="insert.php" class="btn btn-success m-2">Manager</a></li>
      <li><a href="../food/insert.php" class="btn btn-success m-2">Food</a></li>
      <li><a href="insert_import.php" class="btn btn-success m-2">Import</a></li>
      <li><a href="insert_export.php" class="btn btn-success m-2">Export</a></li>
      <li><a href="#" class="btn btn-success m-2">Report</a></li>
      <li><a href="login.php" class="btn btn-danger m-2">Logout</a></li>
    </ul>
  </nav>
</body>
</html>
🧰 Technologies Used
PHP

MySQL

Bootstrap 5

HTML/CSS

📂 Folder Structure
bash
Copy
Edit
/project-root
│
├── index.php               # Main homepage with navbar
├── insert.php              # Manager CRUD
├── ../food/insert.php      # Food CRUD
├── insert_import.php       # Import CRUD
├── insert_export.php       # Export CRUD
├── login.php               # Authentication
├── config/                 # DB connection file
├── assets/                 # Optional CSS/JS/Images
🔧 Setup Instructions
Clone or download the project.

Place it in your XAMPP htdocs directory.

Start Apache and MySQL from XAMPP control panel.

Create a database in phpMyAdmin and import the required SQL schema.

Update your DB credentials in the config file (e.g., config/db.php).

Access the site at:
http://localhost/your-folder-name/

✅ Features
Add / Edit / Delete managers, foods, imports, and exports

Secure logout option

Responsive navbar

Simple UI using Bootstrap

Animated background
