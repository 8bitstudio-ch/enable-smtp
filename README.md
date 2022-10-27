# Enable SMTP

Enable SMTP is a MU plugin for handling WordPress SMTP with `.env`.

## Getting Started

### Requirements

- [Bedrock](https://github.com/roots/bedrock)
- [PHP](https://secure.php.net/manual/en/install.php) >= 7.1.3
- [Composer](https://getcomposer.org/download/)

### Installation

Install via Composer:

```sh
composer require 8bitstudio-ch/enable-smtp
```

## Usage

### Configuration

All configuration goes into `.env`.

#### Required

```conf
WP_SMTP_HOST=mail.example.com  # Host
WP_SMTP_USERNAME=example       # Username
WP_SMTP_PASSWORD=secure123     # Password
WP_SMTP_PORT=587               # Port
```
