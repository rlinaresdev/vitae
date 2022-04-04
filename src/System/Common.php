<?php

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/


## CONSTANT
define("__VITAE__", __DIR__."/");
define("__HTTP__", realpath(__DIR__."/../Http/")."/");

##LOAD ROUTES
$PROVIDERS = [
   \Vitae\Providers\RouteServiceProvider::class
];

foreach ($PROVIDERS as $provider) {
   $this->app->register($provider);
}
