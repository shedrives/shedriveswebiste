#!/usr/bin/env bash
# Run this ON THE SERVER, from the project root, after every deploy.
# Without it Laravel keeps serving the previously compiled Blade views.
set -e
cd "$(dirname "$0")"

echo "==> clearing Laravel caches"
php artisan view:clear
php artisan cache:clear
php artisan config:clear
php artisan route:clear

echo "==> rebuilding config + route cache (faster, and safe now that they are fresh)"
php artisan config:cache
php artisan route:cache

# Compiled Blade files are only regenerated when the .blade.php file is NEWER.
# An FTP/zip deploy can preserve old timestamps, which keeps the old page alive.
echo "==> refreshing view file timestamps"
find resources/views -name '*.blade.php' -exec touch {} +

echo "==> resetting PHP OPcache (ignore the error if OPcache is off)"
php -r 'function_exists("opcache_reset") && opcache_reset();' || true

echo
echo "Done. Now hard-reload the site in your browser (Ctrl+Shift+R / Cmd+Shift+R)."
