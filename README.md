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

## Symfony Flex & Aliases

`composer require sec-checker`

Flex is a Composer plugin:
1) alias system 
2) recipes

run the security checker. this is done through the recipies

`./bin/console security:check` in the Git-Bash

## The Twig Recipe

`composer require twig`

Bundles are the plugin system for Symfony.

Extend a base class to render a template!

### Say something

```
{{ something }}
```

### Do something

```
{% if () %}
```

### Comments
```
{# #}
```

[TWIG Documentation](https://twig.symfony.com/doc/2.x/)

## Add the Profiler / web debug toolbar

`composer require profiler --dev`

A very handy tool to dump debug information is:

```
dump($slug, $this)
```

in the controller action.

Packs have a darkside --> versioning!

```
Adjust the web directory of the Symfony plugin in PhpStorm
so that it contains 'public'.
```

## Check autowiring

Run `./bin/console debug:autowiring`