# Research Backend Development Projects

A small collection of backend experiment assets and a simple PHP contact form demo.

## Repository Contents

- `index.php` — Landing page that links to the contact form and Power BI assets.
- `contact.php` — Contact form that sends emails via the Resend HTTP API using PHP `cURL`.
- `dockerfile` — Docker build configuration for running the app (PHP + Apache).
- `PHPMailer/` — Bundled PHPMailer library source under `PHPMailer/src/`:
	- `DSNConfigurator.php`
	- `Exception.php`
	- `OAuth.php`
	- `OAuthTokenProvider.php`
	- `PHPMailer.php`
	- `POP3.php`
	- `SMTP.php`
- `projects/` — Power BI files and a dashboard PDF (e.g., `PowerBi Project.pbix`, `powerbi dashboard.pdf`).

## Quick Start

1. Clone the repository and change into it:

```bash
git clone https://github.com/devc2255/Research-Backend-Development-Projects.git
cd Research-Backend-Development-Projects
```

2. Set the Resend API key (used by `contact.php`):

```bash
export RESEND_API_KEY="your_resend_api_key_here"
```

3. Serve locally with PHP's built-in server:

```bash
php -S localhost:8000
```

Then open http://localhost:8000/index.php in your browser.

## Docker

Build and run the Docker image:

```bash
docker build -t research-backend-project .
docker run -p 8080:80 research-backend-project
```

Open http://localhost:8080/index.php when running in Docker.

## Live Demo
[![Live Deployment](https://img.shields.io/badge/Status-Live_on_Render-success)](https://intel-flow-tech.onrender.com)


## Requirements

- PHP 8.2 or later
- `curl` extension enabled (used by `contact.php`)
- Optional: Docker for container runs

## Notes

- `contact.php` currently uses the Resend API (HTTP) to deliver messages via `cURL`.
- The `PHPMailer/` folder is included in the repo but is not required by `contact.php` as provided.
- Default recipient in `contact.php` is `dev448230@gmail.com` — update as needed.
- For production, remove debug `display_errors`, and store API keys securely (not in code).

## License

This repository includes a MIT license
