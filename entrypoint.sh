#!/bin/sh

# Copy .env.example to .env if missing
if [ ! -f .env ]; then
  cp .env.example .env
fi

# Generate key if missing
php artisan key:generate --force

# Create storage link
php artisan storage:link || true

exec "$@"
