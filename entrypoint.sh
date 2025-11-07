#!/bin/sh

if [ -z "$APP_KEY" ]; then
  echo "ERROR: APP_KEY is not set in Render environment."
  exit 1
fi

php artisan storage:link || true

php artisan config:clear
php artisan cache:clear
php artisan config:cache

exec "$@"
