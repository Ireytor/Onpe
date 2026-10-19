<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ParticipacionController extends Controller{
    public function nacional(){
        $data = DB::select('call sp_getVotos(?, ?)', [1, 25]);

        return response()->json($data);
    }

    public function extranjero(){
        $data = DB::select('call sp_getVotos(?, ?)', [26, 30]);

        return response()->json($data);
    }

    public function departamento(string $nombre){
        $data = DB::select('call sp_getVotosDepartamento(?)', [$nombre]);

        return response()->json($data);
    }

    public function provincia(string $nombre){
        $data = DB::select('call sp_getVotosProvincia(?)', [$nombre]);

        return response()->json($data);
    }
}