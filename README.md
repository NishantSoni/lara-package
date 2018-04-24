# Laravel Package - Artisan command remover 

Sometimes there is a need to remove the artisan commands from the productions for the security reason, so by this package you can remove the artisan commands from artisan commands list. 

## Installation & Configuration

```
composer require nishantsoni/artisanremover
```

Once this operation completes, the next step is to add the service provider. Open config/app.php, and add a new item to the service providers array-

```
\Nishantsoni\Artisanremover\ArtisanRemoverServiceProvider::class,
```

Next step is to clear the configuration cache- 

```
php artisan config:clear
```

## How to use this package : Example-

Once you have done all the above steps, then you just need to set the ENV variable in .env file and its value will be artisan-commands which you want to remove, example : 

```
REMOVE_COMMANDS=migrate:refresh
```

If you want to remove some more commands then you just need to add by comma, like this : 

```
REMOVE_COMMANDS=migrate:refresh,migrate:reset,migrate:fresh,cache:clear
```

Now You will see in the commands list, the above commands are removed. 


### it's ready for use!!!!
