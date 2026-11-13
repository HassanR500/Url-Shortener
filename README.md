# URL Shortener

A PHP and MySQL application with a JavaScript interface for creating short links and redirecting visitors to their original destinations.

## Features

- Submit a URL through an AJAX form.
- Generate a short code and display a short-link result.
- Display available destination title, description and preview metadata.
- Copy generated links from the interface.
- Administrative login, URL listing and deletion workflows.

## Built with

PHP, MySQL, JavaScript, jQuery and Bootstrap.

## Local setup outline

1. Clone this repository into a PHP-enabled local web environment.
2. Create a local database and review `db/url_shortener.sql` before importing it into that database.
3. Configure your own local database connection in `classes/DBConnection.php`.
4. Review the hardcoded `http://localhost/url_shortener/` paths, including those in `assets/js/script.js`, and align them with your local installation directory.
5. Open the application through your local web server.

The checked-in paths currently assume a particular local directory. This documentation does not claim a verified deployment or production-ready configuration.

## Code guide

- `classes/URLshortener.php`: shortening, metadata lookup, redirects and administrative actions.
- `classes/DBConnection.php`: database connection.
- `assets/js/script.js`: AJAX forms and copy-link interaction.
- `b/`: redirect entry point.
- `db/`: database export.

## Project scope

A portfolio application for exploring URL shortening and PHP/JavaScript integration. Review destination validation, remote URL fetching, authentication and database access before public deployment. Use synthetic data in a local demonstration.

## Author

[Hassan Robert](https://github.com/HassanR500) · [LinkedIn](https://www.linkedin.com/in/hassan-robert/)
