<?php
namespace Vitae\Providers;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Translation\Translator;
use Illuminate\Support\ServiceProvider;

class VitaeServiceProvider extends ServiceProvider {

   public function boot( Kernel $HTTP, Translator $LANG ) {   
      require_once(__HTTP__."App.php");
   }

   public function register() {
      require_once(__DIR__."/../Common.php");
   }

   public function getGrammars( $locale="es" ) {

      if( $this->app["files"]->exists(__VENDORPATH__."App/Http/Langs/$locale.php") ) {
         return $this->app["files"]->getRequire(__VENDORPATH__."App/Http/Langs/$locale.php");
      }

      return NULL;
   }
}
