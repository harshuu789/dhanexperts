#!/bin/sh

# Do NOT create .env – Laravel will read environment variables directly

# Generate key only if not set
if [ -z "$APP_KEY" ]; then
  echo "ERROR: APP_KEY is not set in Render Environment Variables"
  exit 1
fi

# Link storage directory
php artisan storage:link || true

php artisan config:clear
php artisan cache:clear
php artisan config:cache

exec "$@"
