# Laravel and PHP Workshop – OSTAD

This repository contains a **Laravel application** built as part of the **Laravel & PHP Workshop (OSTAD)**.  
It demonstrates the use of Laravel’s **Blade templating engine** and basic **CRUD operations**.

---

## 📌 Features
- **About Page** (`about.blade.php`) – Displays information about the project/workshop.  
- **Create Page** (`create.blade.php`) – Form for adding new records.  
- **Edit Page** (`edit.blade.php`) – Form for updating existing records.  
- Structured for easy extension into a full CRUD application.  

---

## 📂 Project Structure (Partial)

```
/resources/views/
│── about.blade.php     # About page
│── create.blade.php    # Create form page
│── edit.blade.php      # Edit form page
```

---

## ⚙️ Installation & Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/goingdark007/Laravel-and-php-workshop-OSTAD.git
   cd Laravel-and-php-workshop-OSTAD/my-laravel-app
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install frontend dependencies**
   ```bash
   npm install && npm run dev
   ```

4. **Set up environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   Configure your database credentials in the `.env` file.

5. **Run migrations**
   ```bash
   php artisan migrate
   ```

6. **Start the development server**
   ```bash
   php artisan serve
   ```

   The app will be available at:  
   👉 `http://127.0.0.1:8000`

---

## 🚀 Usage
- Visit **`/about`** → About Page  
- Visit **`/create`** → Create new record  
- Visit **`/edit/{id}`** → Edit an existing record  

---

## 🛠️ Technologies Used
- PHP 8+  
- Laravel 10+  
- Blade Templates  
- MySQL / SQLite  
- TailwindCSS (if frontend scaffolding is enabled)  

---

## 🤝 Contribution
1. Fork the repository.  
2. Create a new branch:  
   ```bash
   git checkout -b feature-name
   ```
3. Commit your changes:  
   ```bash
   git commit -m "Added new feature"
   ```
4. Push to branch:  
   ```bash
   git push origin feature-name
   ```
5. Open a **Pull Request**.  

---

## 📜 License
This project is licensed under the **MIT License**.  

---

✨ Happy coding with Laravel! 🚀  
