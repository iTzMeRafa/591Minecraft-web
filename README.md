# 591Minecraft - Web Application

591Minecraft is a Minecraft Server running on version 1.13.1.



## Usage & Installation

[Composer](https://getcomposer.org/) and [>=PHP5.0](https://secure.php.net/) is required to run this project.

* Rename the __.env.example__ file to __.env__ and enter your values

* Clone this repository to your desired location and update+install dependencies:
```php
composer update
composer install
php artisan cache:clear
composer dumpautoload
```

* Update your apache2 vHost config file:

```config
<Directory "/var/www/liquidscout.net/public">
    Options Indexes FollowSymLinks Includes ExecCGI
    AllowOverride All
    Require all granted
</Directory>
```

* Grant Permission ```777 ``` to the ```storage/``` folder.


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)