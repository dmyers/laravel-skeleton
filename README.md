# Laravel Skeleton

This is a default setup of Laravel Framework 5.1 with the following changes:

* Setup app scss to work with Bootstrap and Font Awesome
* Setup app js to load jQuery and Bootstrap components
* Configured Gulp with live reload, browserify, minification, and versioned builds
* Added NPM packages (jQuery, Font Awesome)
* Set up Laravel Homestead for this specific app
* Moved welcome route to controller
* Renamed welcome view to home
* Created app layout
* Changed home view to extend app layout
* Removed auth controllers
* Removed app middleware
* Removed user model, migration, and factory
* Removed password reset migration
* Removed 503 down view

## Setup

Configure `Vagrantfile` with your app name.

### Install Composer packages

```
composer install
```

### Create the virtual machine

```
vagrant up
```

### Add hosts file entry

```
192.168.1.10 laravel.app
```

### Start writing code

Go to [http://laravel.app](http://laravel.app) to view your app.
