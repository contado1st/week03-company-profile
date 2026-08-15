# ITST 302 — Company Profile Website using Laravel MVC

## 1. Project Title

**RedLine Creative Studios – Company Profile & Portfolio Web Application**

**Subject:** ITST 302 — Client-Server Technologies  
**Project:** Mini Project 02: Company Profile Website using Laravel MVC 
**Course:** Bachelor of Science in Information Technology (BSIT)  

---

## 2. Introduction

### What is a Company Profile Website?
A company profile website is a professional online platform designed to showcase an organization’s identity, background, core offerings, mission, vision, and contact channels to prospective clients, partners, and collaborators. 

### Why Businesses Need One
In the modern digital landscape, an organization's website serves as its primary digital storefront. It establishes brand credibility, provides 24/7 accessibility to global markets, communicates professional competence, and converts casual visitors into long-term clients or project partners.

### Purpose of the Project
This project serves as the technical fulfillment for **Mini Project 02: Company Profile Website using Laravel MVC**. The primary goal is to build a high-performance, multi-page digital platform tailored for **RedLine Creative Studios** an artist-centric digital art agency and collaborative hub specializing in original character (OC) design, game splash art, and 3D asset creation. It demonstrates mastery of the Laravel Model-View-Controller (MVC) architecture, clean routing definitions, modular component layouts, and professional deployment pipelines.

---

## 3. Objectives
By completing this project, the following core objectives were successfully accomplished:
* Mastered Laravel's client-server request lifecycle and template rendering engine.
* Configured robust URL endpoints using Laravel Routing with named route parameters.
* Developed `CompanyController` to handle incoming HTTP requests and return corresponding dynamic views.
* Implemented the Model-View-Controller (MVC) design pattern to achieve strict separation of concerns.
* Built reusable user interface layouts (`app.blade.php`) and components (`navbar.blade.php`, `footer.blade.php`) to eliminate code redundancy.
* Integrated modern styling via Tailwind CSS featuring a bespoke black-and-red dark aesthetic tailored for digital artists.
* Managed project versions using Git with a comprehensive commit history and published a public repository on GitHub.
* Produced rigorous technical documentation and a professional LinkedIn portfolio post.

---

## 4. MVC Architecture

### What is MVC?
The **Model-View-Controller (MVC)** architectural pattern separates an application into three interconnected components:
1. **Model**: Manages the underlying data logic, database interactions, and business rules (though static data arrays and view-rendering controllers drive this specific profile application).
2. **View**: Represents the user interface (UI) layer containing HTML, Tailwind CSS, and Blade directives rendered to the user's browser.
3. **Controller**: Acts as an intermediary layer that processes HTTP requests incoming from routes, invokes necessary logic, and returns the appropriate view response.

### Why Laravel Uses MVC?
Laravel embraces MVC to enforce a clean separation of concerns, ensuring that database queries and routing logic are kept completely separate from HTML presentation code. This modularity enhances code maintainability, testability, and scalability in team environments.

### Advantages of MVC in Software Development
* **Separation of Concerns**: Changes to the UI design do not impact controller logic or data structures.
* **Maintainability & Organization**: Clean directory structures make navigating enterprise projects intuitive.
* **Reusability**: Controllers and views can be shared across multiple application endpoints.
* **Parallel Development**: Frontend designers and backend developers can work concurrently without blocking each other.

### Architecture Diagram Request Flow
```text
Client (Browser)
 │
 ▼
Route (web.php)
 │
 ▼
CompanyController
 │
 ▼
Blade View
 │
 ▼
HTML Response
 │
 ▼
Browser
```

*(Note: The visual architecture diagram is saved under `documentation/architecture-diagram.png` in the repository.)*

---

## 5. Laravel Routing

### Overview of Routing
Routing in Laravel acts as the traffic controller of the web application, intercepting incoming URL requests and mapping them either to closure functions or specific controller methods.

### Key Routing Concepts Used:
* **GET Requests**: Used to retrieve and display web pages (`Route::get(...)`).
* **Named Routes**: Assigning unique handles (e.g., `->name('home')`) to routes allows dynamic URL generation across Blade templates via the `route()` helper function.

### Route Definitions (`routes/web.php`)
```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', [CompanyController::class, 'home'])->name('home');
Route::get('/about', [CompanyController::class, 'about'])->name('about');
Route::get('/services', [CompanyController::class, 'services'])->name('services');
Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
```

---

## 6. Controllers

### Purpose and Benefits of Controllers
Controllers encapsulate application logic, removing bloated closure code directly from routing files. They coordinate between requests, data filtering, and view presentation.

### Controller Methods (`CompanyController.php`)
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
```

---

## 7. Blade Templating Engine

### Overview of Blade Features
Laravel’s native Blade Templating Engine allows developers to write clean templates with plain PHP code integration while providing powerful structural directives:
* **`@extends`**: Inherits a master layout wrapper.
* **`@section` / `@yield`**: Defines and injects dynamic content sections into layout placeholders.
* **`@include`**: Imports modular components (like navigation bars and footers).

### Sample Code Snippet (`resources/views/layouts/app.blade.php`)
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RedLine Creative Studios')</title>
    <script src="[https://cdn.tailwindcss.com](https://cdn.tailwindcss.com)"></script>
    <style>
        body {
            background-color: #0b0b0b;
            background-image: 
                linear-gradient(to right, rgba(220, 38, 38, 0.07) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(220, 38, 38, 0.07) 1px, transparent 1px);
            background-size: 32px 32px;
        }
    </style>
</head>
<body class="text-gray-300 flex flex-col min-h-screen font-sans">
    @include('components.navbar')
    <main class="flex-grow">
        @yield('content')
    </main>
    @include('components.footer')
</body>
</html>
```

---

## 8. Laravel Folder Structure

The project adheres to professional Laravel directory conventions:
* **`app/`**: Contains core application code, including `Http/Controllers/CompanyController.php`.
* **`routes/`**: Houses routing definitions like `web.php`.
* **`resources/`**: Contains raw assets, CSS, and Blade views (`views/layouts/`, `views/components/`, `views/pages/`).
* **`public/`**: Accessible root folder containing compiled assets, user-uploaded studio images (`img/`), and the entry point `index.php`.
* **`bootstrap/`**: Handles framework autoloader and bootstrap initialization scripts.
* **`config/`**: Holds application configuration files (database, mail, services, etc.).

---

## 9. Screenshots

All application user interfaces, component layouts, and backend code screenshots are located within the `app/screenshots/` directory:

### Web Application Pages
* **Home Page**
  ![Home Page](app/screenshots/Home-Page.png)

* **About Page**
  ![About Page](app/screenshots/About-Page.png)

* **Services Page**
  ![Services Page](app/screenshots/Services-Page.jpg)

* **Contact Page**
  ![Contact Page](app/screenshots/Contact-Pag.png)

### Reusable UI Components
* **Navigation Bar Component**
  ![Navigation Bar](app/screenshots/Navigation-Bar.png)

* **Footer Component**
  ![Footer Component](app/screenshots/Footer.png)

### Source Code Architecture
* **Laravel Routes (`routes/web.php`)**
  ![Route Definitions](app/screenshots/Routes.png)

* **Controller Implementation (`CompanyController.php`)**
  ![Company Controller](app/screenshots/CompanyController.php.png)

* **Master Blade Layout (`app.blade.php`)**
  ![Blade Layout](app/screenshots/Blade.png)

* **Footer Component**
  ![Footer Component](app/screenshots/Footer.png)

### Development Environment & Repository
* **VS Code Project Workspace**
  ![VS Code Project Workspace](app/screenshots/VS-Code-Project.png)

* **Laravel Folder Structure**
  ![Laravel Folder Structure](app/screenshots/Laravel-Folder-Structure.png)

* **GitHub Repository & Commit History**
  ![GitHub Repository](app/screenshots/GitHub-Repository.png)

  ---

## 10. Problems Encountered

1. **Asset Path Resolution in Blade Views**: Initially, standard relative image paths (e.g., `img/filename.jpg`) broke when navigating to nested route endpoints or refreshing specific views, leading to broken image placeholders across the site[cite: 1].
2. **Image Cropping Discrepancies**: High-resolution vertical digital art illustrations (*Lord Lu.jpg* and *splash-art.jpg*) were getting clipped and cropped ungracefully at top and bottom boundaries due to standard square container boundaries.
3. **Tailwind CSS Custom Grid Styling**: Standard utility classes did not provide a subtle graph-paper or canvas-grid aesthetic matching the required custom red-and-black studio branding out of the box.

---

## 11. Solutions

1. **Asset Helper Integration**: Replaced raw relative file paths with Laravel's built-in `asset('img/filename.jpg')` helper function, ensuring absolute URL path generation regardless of the active URL route[cite: 1].
2. **Container Height and Scaling Adjustments**: Updated the service card containers to a taller fixed height (`h-[420px]`) and swapped `object-cover` for Tailwind's `object-contain` property, preserving aspect ratios and rendering full illustrations without cropping.
3. **Custom Inline CSS Background**: Embedded a custom CSS background rule inside `app.blade.php` combining solid dark tones (`#0b0b0b`) with linear-gradient red grid line matrices (`rgba(220, 38, 38, 0.07)`).

---

## 12. Reflection

Completing Mini Project 02 for Week 3 of ITST 302 (Client-Server Technologies) provided a practical, hands-on foundation in Laravel's Model-View-Controller (MVC) architecture. Developing the official company profile website for RedLine Creative Studios demonstrated the necessity of separation of concerns in modern web application development. By dividing the project into distinct structural layers, presentation markup remains completely isolated from application routing definitions and controller execution logic. Decoupling these components prevents monolithic spaghetti code where HTML markup and backend PHP logic are tangled together. This architectural separation makes debugging straightforward and ensures that visual styling updates to Blade views or Tailwind CSS components can be executed cleanly without risking breaks in backend routing logic.

Understanding the interconnected relationship between routes, controllers, and views illuminated Laravel's client-server request lifecycle. When a user navigates to an endpoint like `/services` or `/contact` in the browser, Laravel's routing engine (`web.php`) intercepts the HTTP GET request and delegates execution to a designated method inside `CompanyController`. The controller serves as the application's central orchestrator, it processes the incoming request and invokes the corresponding Blade view template. `CompanyController` then returns the dynamic page view, where Blade directives (`@extends`, `@include`, `@yield`) compile the master layout (`app.blade.php`), page views (`pages/`), and modular components (`navbar.blade.php` and `footer.blade.php`) into a complete HTML response sent back to the browser. This request-response lifecycle highlighted how server-side routing and view rendering maintain clean code organization.

These foundational client-server principles extend far beyond a multi-page company website and scale seamlessly into enterprise-level applications. In large-scale enterprise environments, separation of concerns enables cross-functional engineering teams to collaborate concurrently without code conflicts. Frontend developers can independently refine Blade UI templates, user interfaces, and responsive design systems while backend engineers handle database models, business logic, external API integrations, and data validation. Additionally, routing requests through central controllers allows enterprise software to attach critical middleware layers—such as user authentication, role-based access control, input sanitization, and request rate limiting—before views are rendered. Overall, this activity successfully bridged theoretical client-server architecture with industry-standard Laravel development practices.

---

## 13. References

* **Laravel Documentation** — [https://laravel.com/docs](https://laravel.com/docs)  
  Used as the primary reference for routing (`routes/web.php`), controller generation (`CompanyController`), Blade view inheritance (`@extends`, `@yield`, `@include`), and asset management (`asset()`).

* **Tailwind CSS Documentation** — [https://tailwindcss.com/docs](https://tailwindcss.com/docs)  
  Utilized for utility-first styling, grid layouts, custom color configurations, flexbox positioning, and object framing (`object-contain`, `object-cover`).

* **PHP Manual** — [https://www.php.net/manual/en/](https://www.php.net/manual/en/)  
  Referenced for fundamental PHP syntax, object-oriented controller class structures, and server-side request handling.

* **Git & GitHub Documentation** — [https://docs.github.com/](https://docs.github.com/)  
  Referenced for version control workflows, commit message conventions (`feat:`, `style:`), and branch management.
