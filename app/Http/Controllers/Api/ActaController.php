<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ActaController extends Controller{
    public function numero(string $id){
        $data = DB::select('call sp_getGrupoVotacion(?)', [$id]);

        return response()->json($data);
    }

    public function ubi_peru(){
        $data = DB::select('call sp_getDepartamentos(?, ?)', [1, 25]);

        return response()->json($data);
    }

    public function ubi_extranjero(){
        $data = DB::select('call sp_getDepartamentos(?, ?)', [26, 30]);

        return response()->json($data);
    }

    //Nombres?
    public function ubi_provinciaN(string $nombre){
        $data = DB::select('call sp_getProvinciasByDepartamento(?)', [$nombre]);

        return response()->json($data);
    }

    public function ubi_distritoN(string $nombre){
        $data = DB::select('call sp_getDistritosByProvincia(?)', [$nombre]);

        return response()->json($data);
    }

    public function ubi_loc_votN(string $nombre1, string $nombre2){
        $data = DB::select('call sp_getLocalesVotacionByDistrito(?, ?)', [$nombre1, $nombre2]);

        return response()->json($data);
    }

    public function ubi_grupos_votN(string $nombre1, string $nombre2, string $nombre3){
        $data = DB::select('call sp_getGruposVotacionByProvinciaDistritoLocal(?, ?, ?)', [$nombre1, $nombre2, $nombre3]);

        return response()->json($data);
    }

    public function ubi_grupo_votN(string $nombre){
        $data = DB::select('call sp_getGrupoVotacion(?)', [$nombre]);

        return response()->json($data);
    }

    //Id?
    public function ubi_provincia(int $id){
        $data = DB::select('call sp_getProvincias(?)', [$id]);

        return response()->json($data);
    }

    public function ubi_distrito(int $id){
        $data = DB::select('call sp_getDistritos(?)', [$id]);

        return response()->json($data);
    }

    public function ubi_loc_vot(int $id){
        $data = DB::select('call sp_getLocalesVotacion(?)', [$id]);

        return response()->json($data);
    }

    public function ubi_grupos_vot(int $id){
        $data = DB::select('call sp_getGruposVotacion(?)', [$id]);

        return response()->json($data);
    }

    public function ubi_grupo_vot(string $id){
        $data = DB::select('call sp_getGrupoVotacion(?)', [$id]);

        return response()->json($data);
    }
}