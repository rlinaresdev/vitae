<?php
namespace Vitae\Console;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

class Handle {

   public function commands() {
      return [
         \Vitae\Console\Command\Resource::class,
      ];
   }
}
