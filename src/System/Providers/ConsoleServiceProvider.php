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

class ConsoleServiceProvider extends ServiceProvider {

   public function boot() {
      /* CONSOLE */
		if ($this->app->runningInConsole()) {
			$this->commands( (new \Vitae\Console\Handle)->commands() );
		}
   }
}
