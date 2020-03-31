# Symfony 4

https://symfonycasts.com/screencast/symfony4/micro-app-phpstorm#play

## Create the project

`composer create-project symfony/skeleton the_spacebar`

## Initialize the GIT repo

`git init`

## Run the development server (webserver)

`php -S 127.0.0.1:8000 -t public`

## Install the web-server-bundle

`composer require server`

This fails because the bundle is discouraged. Use the following instead!

## Run the symfony development server (webserver) 

`symfony server:start`

# Setup IDE (PhpStorm)

- Symfony Support
- Php Annotations
- Enable Symfony Support Plugin
- Configure Composer!

## Adding a route

```
Symfony app is a small route controller system
```