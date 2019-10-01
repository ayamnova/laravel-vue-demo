# Steps for Getting Vue Working

This repository does *not* interact at all with the database and backend. It is a simply for helping you understand how Vue works.

## Setup Laravel 

### Install project dependencies 

Use these commands:

`composer install'

`composer dumpautoload -o`

### Setup your correct environment by copying the .env.example file and saving it as .env

1. Copy the .env.example file and save it as .env 
2. From the commandline run:

`php artisan key:generate`

### Clear the cache

`php artisan config:clear`
`php artisan config:cache`


## Install Node dependencies

Laravel manages all of its JavaScript dependencies using NPM (Node Package Manager). Just like Composer is used to manage PHP packages, NPM manages JavaScript packages. Before you can use Vue, you need to install it and its dependencies using NPM.

### Install NPM

NPM comes installed with NodeJS. All you need to do is go to this [npmjs.com]("https://www.npmjs.com/get-npm") and download the installer.

### Install NPM dependencies

Make sure that you are in the project folder in the terminal/command line. Then run:

`npm install`

## Making Vue work on a page

1. If you want Vue to run on a page, you need to tell the blade template file that you are using Vue.

At the end of the body section of the html, place this line of code:

`<script src="{{ asset('js/app.js') }}"></script>`

2. You will also need to surmount a security check by including a csrf token. Place this line at the top of your blade file.

`<meta name="csrf-token" content="{{ csrf_token() }}">`
`<script>window.Laravel = { csrfToken: '{{csrf_token() }}' }</script>`

3. Add a div element with the id *app*

`<div id="app"></div>`

## Running the dev environment

Vue will finally work when you run this command from the command line:

`npm run dev`

## Adding compiled CSS to the page

Add this line in the *head* section of the page:

`<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">`

## Seeing changes as you edit

If you are working on your Vue components or CSS files and want to see the changes without having to run the "run dev" command everytime, run this command in the terminal:

`npm run watch`

NPM will then watch for changes and recompile files as necessary.
