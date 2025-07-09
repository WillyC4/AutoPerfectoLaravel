<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Autos;
use Illuminate\Http\Request;

class AutoController
{
    public function index()
    {
        return response()->json(Autos::all(), 200);
    }

    public function show($id)
    {
        $auto = Autos::find($id);

        if (!$auto) {
            return response()->json(['error' => 'Auto no encontrado'], 404);
        }

        return response()->json($auto, 200);
    }
}
