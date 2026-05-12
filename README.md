<div align="center">

<img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP Badge"/>
<img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL Badge"/>
<img src="https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white" alt="XAMPP Badge"/>
<img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5 Badge"/>

# 🐘 PHP Learning Lab

> **A structured collection of PHP practicals covering core web development concepts — from form handling and file I/O to MySQL database operations and session management.**

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg?style=flat-square)](https://opensource.org/licenses/MIT)
[![Status](https://img.shields.io/badge/Status-Active-brightgreen?style=flat-square)]()
[![Made with ❤️](https://img.shields.io/badge/Made%20with-%E2%9D%A4%EF%B8%8F-red?style=flat-square)]()

</div>

---

## 📖 Table of Contents

- [✨ Overview](#-overview)
- [📁 Project Structure](#-project-structure)
- [🧩 Topics Covered](#-topics-covered)
- [⚙️ Getting Started](#️-getting-started)
- [🗄️ Database Setup](#️-database-setup)
- [🚀 Running the Practicals](#-running-the-practicals)
- [🛠️ Tech Stack](#️-tech-stack)
- [👤 Author](#-author)

---

## ✨ Overview

This repository is a hands-on PHP learning lab built and tested using **XAMPP** (Apache + MySQL + PHP). Each file corresponds to a specific concept or practical exercise, progressing from basic HTML/PHP integration all the way to full **CRUD operations** with MySQL and secure session management.

---

## 📁 Project Structure

```
htdocs/
│
├── 🌐 HTML Practicals
│   ├── practical1.html          # Basic HTML structure
│   ├── practical2.html          # HTML forms
│   ├── Practical3.html          # HTML tables & layout
│   └── Practical4.html          # HTML elements & styling
│
├── 🐘 Core PHP
│   ├── Practical5.php           # PHP fundamentals
│   ├── Practical6.php           # Variables & data types
│   ├── practical7.php           # Control flow
│   ├── practical8.php           # Functions & arrays
│   ├── practical9.php           # Strings manipulation
│   ├── practical10.php          # Loops & iteration
│   ├── practical11.php          # Mixed operations
│   ├── practical12.php          # PHP output & formatting
│   ├── practical13.php          # Error handling basics
│   ├── practical14.php          # Form processing
│   ├── practical15.php          # GET/POST methods
│   ├── practical16.php          # PHP includes/requires
│   ├── oddEven.php              # Odd/Even checker
│   ├── arrayOperation.php       # Array operations
│   ├── sorting.php              # Sorting algorithms
│   └── serchingSorting.php      # Searching & sorting
│
├── 📋 Forms & HTTP
│   ├── form.php                 # HTML form (input)
│   ├── forms.php                # Multiple form fields
│   ├── get.php                  # GET method demo
│   ├── usingFGET.php            # fget / file reading
│   └── data.php                 # Form data processing
│
├── 📂 File Handling
│   ├── fileHandling.php         # Read/Write files
│   ├── files.php                # File operations
│   ├── dest.php                 # File destination handler
│   ├── sample.txt               # Sample text file
│   └── log.txt                  # Log file output
│
├── 🍪 Cookies & Sessions
│   ├── cookie.php               # Set cookies
│   ├── cookiephp.php            # Read cookies
│   ├── test_cookies.php         # Cookie testing
│   ├── session.php              # Start session
│   ├── sessions.php             # Session variables
│   ├── newSession.php           # New session handler
│   └── sessiondestroy.php       # Destroy session
│
└── 🗄️ MySQL / Database
    ├── Mysql.php                # DB connection & create DB
    ├── sqlconnection.php        # PDO/MySQLi connection
    ├── insert.php               # INSERT record (PDO)
    ├── dataRetrive.php          # SELECT / fetch records
    ├── updateRecord.php         # UPDATE record
    └── recordDelete.php         # DELETE record
```

---

## 🧩 Topics Covered

| #  | Topic                    | Files                                             |
|----|--------------------------|---------------------------------------------------|
| 01 | HTML Fundamentals        | `practical1-4.html`                               |
| 02 | PHP Basics               | `practical5-16.php`                               |
| 03 | Arrays & Sorting         | `arrayOperation.php`, `sorting.php`               |
| 04 | Form Handling (GET/POST) | `form.php`, `forms.php`, `get.php`                |
| 05 | File Handling            | `fileHandling.php`, `files.php`, `dest.php`       |
| 06 | Cookies                  | `cookie.php`, `cookiephp.php`, `test_cookies.php` |
| 07 | Sessions                 | `session.php`, `sessions.php`, `newSession.php`   |
| 08 | MySQL Connection          | `Mysql.php`, `sqlconnection.php`                  |
| 09 | CRUD Operations          | `insert.php`, `dataRetrive.php`, `updateRecord.php`, `recordDelete.php` |

---

## ⚙️ Getting Started

### Prerequisites

Make sure you have the following installed:

- ✅ [XAMPP](https://www.apachefriends.org/) (v7.x or v8.x)
- ✅ A modern web browser (Chrome, Firefox, Edge)
- ✅ A code editor like [VS Code](https://code.visualstudio.com/)

### Installation

```bash
# 1. Clone the repository into your XAMPP htdocs folder
git clone https://github.com/YOUR_USERNAME/php-learning-lab.git C:/xampp/htdocs/

# 2. Start XAMPP Apache & MySQL services
#    → Open XAMPP Control Panel
#    → Click [Start] next to Apache
#    → Click [Start] next to MySQL

# 3. Open your browser and navigate to:
#    http://localhost/
```

---

## 🗄️ Database Setup

To run the MySQL practicals, set up the database first:

1. Open **phpMyAdmin** → [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
2. Create a new database named **`my_db`**
3. Create a `students` table:

```sql
CREATE TABLE students (
    id    INT AUTO_INCREMENT PRIMARY KEY,
    name  VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL
);
```

> 💡 All database files use `root` with **no password** — the default XAMPP MySQL credentials.

---

## 🚀 Running the Practicals

Open your browser and use any of the following URLs:

| URL | Description |
|-----|-------------|
| `http://localhost/form.php` | HTML Form → Submit data |
| `http://localhost/insert.php` | Insert record into MySQL |
| `http://localhost/dataRetrive.php` | Fetch & display records |
| `http://localhost/updateRecord.php` | Update a student record |
| `http://localhost/recordDelete.php` | Delete a student record |
| `http://localhost/session.php` | Start & use sessions |
| `http://localhost/fileHandling.php` | Read & write files |
| `http://localhost/sorting.php` | Array sorting demo |

---

## 🛠️ Tech Stack

| Technology | Purpose |
|------------|---------|
| **PHP 8.x** | Server-side scripting |
| **MySQL** | Relational database |
| **HTML5** | Page structure |
| **PDO / MySQLi** | Database abstraction |
| **XAMPP** | Local development environment |

---

## 👤 Author

<div align="center">

**Aryan Kawale**

[![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/ARYANKAWALE)

*Learning PHP, one practical at a time. 🚀*

</div>

---

<div align="center">

⭐ **If you found this helpful, give it a star!** ⭐

</div>
