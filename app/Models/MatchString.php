<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchString extends Model
{
    use HasFactory;

    protected $fillable = [
        'match',
        'text',
        'matching',
        'total'
    ];

    public static function matchString()
    {
            // Ambil request dari inputan
            $pattern = request('match');
            $text = request('text');
   

            // buat string menjadi huruf kecil
            $pattern = strtolower($pattern);
            $text = strtolower($text);
            

            // split string menjadi array
            $pattern = str_split($pattern);
            $text = str_split($text);
            
            // default jumlah data match
            $find_match = 0;

            // jumlah dari array
            $lp = count($pattern);
            $lt = count($text);
          
            // lakukan perulangan pada dan pencocokan string
            for($i=0; $i < $lt; $i++) {
                for($j=0; $j < $lp; $j++) {
                    if ($pattern[$j] != $text[$i]) {
                        break;
                    } else {
                        $find_match++;
                    }
                }
            }           
            
            // akumulasi jumlah kemungkinan string muncul
            $result = round(($find_match / $lp) * 100);

            return [
                'total' => $result,
                'find_match' => $find_match
            ];
    }
}
