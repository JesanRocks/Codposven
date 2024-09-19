<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VotoController extends Controller
{
    public function registrarVoto(Request $request)
    {
        $votanteId = $request->input('votante_id');
        $propuestaId = $request->input('propuesta_id');

        // Verificar que el votante no haya votado aún
        $votante = Votante::find($votanteId);

        if ($votante->ha_votado) {
            return response()->json(['error' => 'Ya ha votado'], 403);
        }

        // Registrar voto
        Voto::create([
            'votante_id' => $votanteId,
            'propuesta_id' => $propuestaId,
        ]);

        // Marcar votante como que ya ha votado
        $votante->ha_votado = true;
        $votante->save();

        // Actualizar totalización
        $totalizacion = Totalizacion::where('propuesta_id', $propuestaId)->first();
        $totalizacion->total_votos += 1;
        $totalizacion->save();

        return response()->json(['success' => 'Voto registrado exitosamente']);
    }

}
