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
         $match = MatchString::matchString();
      } catch (\Throwable $th) {
         //throw $th;
      }
      return 'response';
   }

   public function store() {
      try {
         DB::beginTransaction();

         $result = MatchString::matchString();
         // dd(request('match'));
         $this->match::create([
            'match' => request('match'),
            'text' => request('text'),
            'matching' => $result['find_match'],
            'total' => $result['total'],
         ]);

         $response = [
            'status' => 'success',
            'message' => 'Berhasil menambahkan data!'
         ];

         DB::commit();
      } catch (\Throwable $th) {
         DB::rollBack();

         $response = [
            'status' => 'failed',
            'message' => $th->getMessage(),
         ];
      }
      return $response;
   }
}


?>