#!/bin/sh

# Check APP_KEY
if [ -z "$APP_KEY" ]; then
  echo "ERROR: APP_KEY is not set."
  exit 1
fi

# Optional: Storage link (ignore if exists)
php artisan storage:link 2>/dev/null || true
chmod -R 775 storage
php artisan config:clear
php artisan cache:clear
php artisan config:cache

exec apache2-foreground
