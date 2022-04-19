<?php 


namespace App\Http\Services;

use App\Models\MatchString;
use App\Http\Interfaces\MatchInterface;

class MatchService {
   
   public function __construct(MatchInterface $matchInterface)
   {
      $this->matchInterface = $matchInterface;
   }

   public function index()
   {
      // return $this->matchInterface->index();
   }

   public function store($request)
   {
      return $this->matchInterface->store();
   }

}

?>