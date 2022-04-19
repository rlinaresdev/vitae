<?php
namespace Vitae\Http\Controllers;

/*
  *---------------------------------------------------------
  * ©IIPEC
  * Santo Domingo República Dominicana.
  *---------------------------------------------------------
*/

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController {

   use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   protected $app;

   protected $path = "vitae::";

   protected $varViews = [
      "language" => "es",
      "charset"   => "utf-8",
      "title"     => "Vitae"
   ];


   public function boot($app) {
      $this->app = $app;

      ## VIEW PARSE
      //$this->share($this->varViews);

      ## APPSUPPORT PARSE
      if( method_exists($app, "share") ) {
         if( is_array( ($appData = $app->data() ) ) ){
            $this->share($appData);
         }
      }
   }

   public function share($data) {
      view()->share($data);
   }

   public function render($view=NULL, $data=[], $mergeData=[]) {

      if(view()->exists(($path = $this->path.$view))) {
         return view($path, $data, $mergeData);
      }

      abort(500, "La vista {$path} no existe");
   }

}
