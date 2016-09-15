## Laravel 5.2 SweetAlert

all appreciation to laracasts.com i just can't sleep ! so i created package  :)

##Installation

````
composer require moathdev/sweetalert
````

After install this package you have to set the service provider on your config/app.php file

````
Moathdev\Sweetalert\SweetalertServiceProvider::class,
````

Then you just need to publish files ! Copy and paste it

````
php artisan vendor:publish --provider="Moathdev\Sweetalert\SweetalertServiceProvider"
````

Then in your master view add those styles and scripts. Put this style between the <head> </head> tags

````
 <head>
        <link href="/css/sweetalert.css" rel="stylesheet"/>
````

Add the JS script and include flash view before close your </body> tag.

````
        <script src="/js/sweetalert.min.js"></script>
        @include('Flash')
    </body>
````
###Usage

it's so Easy !

````

 flash('title','message','success',true);

 // there is 4 Types 1-warning 2-error 3-success 4-info

 // showConfirmButton yes = true no = false

````

###Issues

If you have any questions or issues, please open an Issue .