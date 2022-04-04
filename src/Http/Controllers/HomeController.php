<?php
namespace Vitae\Http\Controllers;

/*
  *---------------------------------------------------------
  * ©IIPEC
  * Santo Domingo República Dominicana.
  *---------------------------------------------------------
*/

use Vitae\Http\Controllers\Support\HomeSupport;

class HomeController extends Controller {

   public function __construct( HomeSupport $app ) {
      $this->boot($app);
   }

   public function index() {
      return $this->render( "home.index", $this->app->data() );
   }

}
