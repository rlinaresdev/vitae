<?php

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

/*
* SKIN */
$skin = new \Vitae\Support\Skin("bluelight");

/* VIEWS */
$this->loadViewsFrom(__DIR__.'/Views', "vitae");
$skin->share([
   "language"     => "es",
   "charset"      => "utf-8",
   "title"        => "Vitae Page",
]);

/* ASSETS */
$this->publishes($skin->assets(), "vitae");

\Artisan::call("vendor:publish", [
   "--tag" => "vitae",
   "--force" => true
]);
