<?php 

namespace App\Http\Repositories;

use App\Http\Interfaces\MatchInterface;
use App\Models\MatchStr;

class MatchRepository implements MatchInterface {

   public function __construct(MatchStr $matchStr) {
      $this->match = $matchStr;
   }

   public function index() {
      try {
         //code...
      } catch (\Throwable $th) {
         //throw $th;
      }
      return 'response';
   }
}


?>