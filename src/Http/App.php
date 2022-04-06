<?php

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

/* VIEWS */
$this->loadViewsFrom(__DIR__.'/Views', 'vitae');

/* ASSETS */
$this->publishes([
   __HTTP__."Resources" => public_path("vitae"),
], "vitae");
