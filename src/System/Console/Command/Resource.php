<?php
namespace Vitae\Console\Command;

/*
  *---------------------------------------------------------
  * ©IIPEC
  * Santo Domingo República Dominicana.
  *---------------------------------------------------------
*/

use Illuminate\Console\Command;

class Resource extends Command {

   protected $signature        = 'vitae {accion?}';
   protected $description      = 'Vitae Command.';

   public function __construct() {
      parent::__construct();
   }

   public function handle() {
      $method = $this->argument("accion");

      if( !empty($method) ) {
         if(method_exists($this, $method) ) {
            $this->{$method}();
         }
      }
   }

   public function asset() {
      $this->call("vendor:publish", [
         "--tag" => "vitae",
         "--force" => true
      ]);
   }
}
