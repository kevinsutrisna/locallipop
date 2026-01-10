# Locallipop

> **Project Status:** This platform was successfully deployed and operational for a 1-year event cycle. While the production server is now decommissioned, the codebase remains fully functional for **Local Development** and technical review.

---

## Project Overview
Locallipop is an automated ticketing platform for Bina Nusantara University events. It streamlines the user experience by integrating Google OAuth for quick logins and Xendit API for instant, secure payment processing and ticket issuance.


---

## Architecture & Tech Stack

* **Core Framework**: Laravel 11 (PHP) & Tailwind CSS.
* **Authentication**: Secure user onboarding via **Google OAuth API**.
* **Payment Integration**: Real-time transaction processing using **Xendit API** (supporting E-wallets, Virtual Accounts, and Credit Cards).
* **Admin Suite**: Comprehensive dashboard for real-time analytics, attendee tracking, and ticket inventory management.
* **Database**: Optimized MySQL schema designed for transactional integrity.



---

## Engineering Highlights

* **Automated Payment Flow**: Leveraged Xendit Webhooks to handle asynchronous payment status updates, ensuring a reliable "Ticket Issuance" logic upon successful payment.
* **Access Control**: Implemented strict Role-Based Access Control (RBAC) to separate Administrative management (Event Organizers) from User interactions (Attendees).
* **Scalability**: Built with an API-first mindset, allowing easy integration with third-party verification and notification services.

---

## How to Run Locally

Since the project has transitioned to an archival state, certain API features (Google Login & Xendit) require local configuration of Client IDs/Secrets in your `.env` file.

### 1. Prerequisites
Ensure you have **PHP >= 8.2**, **Composer**, and **MySQL** (via XAMPP/Laragon) installed.

### 2. Initial Setup
```bash
# Clone the repository
git clone [https://github.com/username/locallipop.git](https://github.com/username/locallipop.git)
cd locallipop

# Install backend dependencies
composer install

# Install frontend assets
npm install && npm run dev

# Environment Configuration
cp .env.example .env
php artisan key:generate

#Database Migration
php artisan migrate --seed

#Launch Application
php artisan serve
```
