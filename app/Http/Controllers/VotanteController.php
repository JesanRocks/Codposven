<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VotanteController extends Controller
{
    public function identificar(Request $request)
    {
        $cedula = $request->input('cedula');

        // Buscar votante por cédula
        $votante = Votante::where('cedula', $cedula)->first();

        if (!$votante) {
            return response()->json(['error' => 'Votante no encontrado'], 404);
        }

        if ($votante->ha_votado) {
            return response()->json(['error' => 'Este votante ya ha votado'], 403);
        }

        // Retornar información del votante y las propuestas asociadas
        $propuestas = Propuesta::where('parroquia_id', $votante->consejoComunal->parroquia_id)->get();

        return response()->json([
            'votante' => $votante,
            'propuestas' => $propuestas
        ]);
    }

}
