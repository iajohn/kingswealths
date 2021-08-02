# KingsWealths Entertainment Official Website

KingsWealths Entertainment is simple static entertainment company website built using PHP Laravel framework.

## Preview
Check how it looks like by following the link (https://www.kingswealths.com)

## Installation
You can install and use KingsWealths Entertainment as a boilerplate:

Clone KingsWealths Repo into your local machine: and run `composer install` in your command line.

```
$ git clone https://github.com/iajohn/kingswealths.git
```

CD into the directory
```
$ cd kingswealths
```

Copy .env.example to .env
```
$ cp .env.example .env
```

Then run in your command line. If you don't have composer already installed in your system, do download and installed  [Composer](https://getcomposer.org/).
```
$ composer install
```

Generate a new key for the project
```
$ php artisan key:generate
```

## Setup GOOGLE_RECAPTCHA 2 with this tutorial on their repo 
(https://github.com/anhskohbo/no-captcha)

` or ` 

(https://www.itsolutionstuff.com/post/laravel-5-google-recaptcha-code-and-validation-example-using-anhskohbo-no-captcha-packageexample.html)

## Usage

There are two ways to run kingswealths

### Running your app
After kingswealths has installed, you can run it by using the built-in PHP server. Navigate to the root folder and run the below command:
```
$ php -S localhost:8000 -t public

```
Going to http://localhost:8000/ will now display your default Homepage.

### Wamp, LAMP, XAMP or Laragon server
Otherwise, you can just put it in your wamp/www, xamp/htdocs, or lragon/www folder and access it by visiting the url on your browser `localhost/your-kingswealths-folder/public`

### Love our work? Give this repo a star.
