<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Health extends Controller
{
    public function health(){

        $connection = DB::connection()->getDatabaseName();
        $connectionTest = DB::connection() ? 'Connected' : 'Not Connected';
    
        $dataResponse = [
            'status' => 'RUNING',
            'version' => app()->version(),
            'date'  => Carbon::now()->format('d/m/Y'),
            'databaseName' => $connection,
            'databaseStatus' => $connectionTest
        ];
    
        return response()->json($dataResponse, 200);
    }
}