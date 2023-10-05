<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mantenimientos;
use PDF;

class ComprobanteController extends Controller
{
    public function generarInforme($id)
    {
        $mantenimiento = Mantenimientos::find($id);

        $data = [
            'mantenimiento' => $mantenimiento,
        ];
    
        $pdf = PDF::loadView('conductores.comprobante', ['mantenimiento' => $mantenimiento]);
    
        return $pdf->stream('Comprobante.pdf');
    }
}

