<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;

class LocationController extends Controller
{
    // Obtener todos los estados
    public function getEstados()
    {
        return response()->json(Estado::all());
    }

    // Obtener municipios por estado
    public function getMunicipios($estadoId)
    {
        return response()->json(Municipio::where('estado_id', $estadoId)->get());
    }

    // Obtener parroquias por municipio
    public function getParroquias($municipioId)
    {
        return response()->json(Parroquia::where('municipio_id', $municipioId)->get());
    }
}
