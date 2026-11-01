# CST463 Laravel Lab

Laravel 13 project for **CST463 Web Programming (KTU, S7 CSE), Module V**. It runs entirely in your browser with **GitHub Codespaces**. You do not need to install PHP, Composer or MySQL.

## Start (one time, about 2 minutes)
1. Sign in to GitHub. Click the green **Use this template** button, then **Create a new repository**, and name it `laravel-lab`.
2. In your new repository click **Code**, then **Codespaces**, then **Create codespace on main**.
3. Wait until the terminal prints `✅ Ready`.
4. In the terminal type:
   ```
   php artisan serve
   ```
5. Click **Open in Browser** in the pop-up. The lab home page should appear.

> Codespaces stops after 30 minutes of inactivity. Your files stay saved. Open the codespace again and run `php artisan serve`.

## Where things live (MVC)
| Part | Folder | In this lab |
|---|---|---|
| Routes | `routes/web.php` | URL + verb → closure or controller method |
| Controllers (C) | `app/Http/Controllers/` | created with `php artisan make:controller` |
| Models (M) | `app/Models/` | `Student.php` ↔ table `students` |
| Views (V) | `resources/views/` | Blade templates `*.blade.php` |
| Database | `database/migrations`, `database/seeders` | SQLite file `database/database.sqlite` |

## Useful commands
```
php artisan serve                     # run the app on port 8000
php artisan route:list                # show every route
php artisan make:controller XyzController --resource
php artisan migrate:fresh --seed      # rebuild the sample database
php artisan tinker                    # try PHP/Eloquent lines interactively
```

## Lessons
The playlist "CST463 · Laravel with Codespaces" walks through this repository step by step. Folder `lessons/` holds the finished code for each lesson, so you can check your own work against it.
