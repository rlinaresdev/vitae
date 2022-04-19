<?php
namespace Vitae\Support;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

class Skin {

   protected $name;

   protected $path = "packages";

   public function __construct( $name=null, $path=null ) {
      $this->name = $name;
      $this->path = $this->path."/".$name."/";
   }

   public function assets() {
      return [
         __HTTP__."Resources/".$this->name => public_path($this->path)
      ];
   }

   public function slug() {
      return $this->name;
   }

   public function share($data=null) {
      $data["skin"] = $this;
      view()->share($data);
   }

   public function url( $uri=null, $args=null, $param=null ) {
      return url($this->path.$uri, $args, $param);
   }

   public function path($setment=null) {
      return "vitae::layout.".$this->name.'.'.$setment;
   }

   public function view($path=NULL, $data=[], $mergeData=[]) {
		if( view()->exists( ($path = $this->path($path)) ) ) {
			return view($path, $data, $mergeData);
		}

		return "ERROR 404 :: La vista {$path} no existe.";
	}

}
