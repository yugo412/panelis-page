# Panelis Page

Manage static pages directly from the Panelis admin panel.

## Features

* Static page management
* Draft and published pages
* Rich text editor
* Slug generation
* Automatic Panelis plugin discovery

## Requirements

* PHP 8.3+
* Laravel 13+
* Filament 5+

## Installation

Install the package via Composer:

```bash
composer require yugo/panelis-page
```

Run migrations:

```bash
php artisan migrate
```

## Usage

After installation, a **Pages** menu will be available in the Panelis admin panel.

The Page module provides a simple way to create and manage static pages for your application.

Common use cases include:

* About Us
* Contact
* Privacy Policy
* Terms of Service
* Help Center
* Custom landing pages

Available fields include:

* Title
* Slug
* Content
* Publication status

Pages can be saved as drafts or published when ready.

## License

The MIT License (MIT).
