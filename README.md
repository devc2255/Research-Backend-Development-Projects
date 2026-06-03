# Research Backend Development Projects

A small PHP project repository containing a contact form API, a landing page, and supporting assets for backend development experiments.

## Overview

This repository includes:

- `index.php` — landing page for the project with links to the contact form and Power BI dashboard assets.
- `contact.php` — PHP contact form that sends email via the Resend API using `cURL`.
- `PHPMailer/` — included PHPMailer library source files.
- `projects/` — Power BI report files and dashboard PDF.
- `dockerfile` — Docker image configuration for running the app in a PHP + Apache container.

## Features

- Simple Bootstrap-based contact form UI
- Server-side validation for email, subject, and message
- Email delivery through Resend API
- Support for environment-based API key configuration
- Optional Docker deployment

## Requirements

- PHP 8.2 or later
- `curl` extension enabled
- Web server or built-in PHP server
- Resend account and API key

## Setup

1. Clone the repository:

```bash
git clone https://github.com/devc2255/Research-Backend-Development-Projects.git
cd Research-Backend-Development-Projects
```

2. Configure your Resend API key in the environment:

```bash
export RESEND_API_KEY="your_resend_api_key_here"
```

3. Start a local PHP server for testing:

```bash
php -S localhost:8000
```

Then open `http://localhost:8000/index.php` in your browser.

## Docker Usage

Build and run the Docker image:

```bash
docker build -t research-backend-project .
docker run -p 8080:80 research-backend-project
```

Open `http://localhost:8080/index.php` once the container is running.

## Live Deployment

- `Live URL:` 'https://intel-flow-tech.onrender.com'

## Environment Variables

- `RESEND_API_KEY` — API key used by `contact.php` to authenticate requests to the Resend email API.

## Project Structure

- `index.php` — main landing page for the repository
- `contact.php` — contact form implementation
- `dockerfile` — Docker configuration for PHP + Apache
- `PHPMailer/` — bundled PHPMailer library source files
- `projects/` — Power BI dashboard files and PDF

## Notes

- The contact form currently sends messages to `dev448230@gmail.com` by default.
- For production, disable `display_errors` and secure your API keys properly.

## License

This repository does not include a license file. Add a license if you wish to share or publish this project.
