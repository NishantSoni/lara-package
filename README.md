# Laravel Package - Artisan command remover 

Sometimes there is a need to remove the artisan commands from the productions for the security reason, so by this package you can remove the artisan commands from artisan commands list. 

## Installation & Configuration

```
composer require nishantsoni/artisanremover
```

Once this operation completes, the final step is to add the service provider. Open config/app.php, and add a new item to the service providers array-

```
\Nishantsoni\Artisanremover\ArtisanRemoverServiceProvider::class,
```

Next step is to clear the configuration cache- 

```
php artisan config:clear
```

### Now it's ready for use!!!!
