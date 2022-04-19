<?php 

namespace App\Http\Repositories;

use App\Models\MatchStr;
use App\Models\MatchString;
use Illuminate\Support\Facades\DB;
use App\Http\Interfaces\MatchInterface;

class MatchRepository implements MatchInterface {

   public function __construct(MatchString $matchStr) {
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

   public function store($data) {
      try {
         DB::beginTransaction();

         MatchString::matchString();

         $response = [
            'status' => 'success',
            'message' => 'Berhasil menambahkan data!'
         ];

         DB::commit();
      } catch (\Throwable $th) {
         DB::rollBack();

         $response = [
            'status' => 'failed',
            'message' => 'Gagal menambahkan data!',
         ];
      }
      return $response;
   }
}


?>