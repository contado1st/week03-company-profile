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
