<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Health extends Controller
{
    public function health(){

        $connection = DB::connection()->getDatabaseName();
    
        $dataResponse = [
            'status' => 'RUNING',
            'version' => app()->version(),
            'date'  => Carbon::now()->format('d/m/Y'),
            'databaseName' => $connection,
        ];
    
        return response()->json($dataResponse, 200);
    }
}