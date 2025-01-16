<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alokairu;
class AlokairuController extends Controller
{
    public function showById($id)
    {
        return Alokairu::findOrFail($id);
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'alokatzailea' => 'sometimes|required|max:255',
            'etxe_id' => 'sometimes|required|exists:etxes,id',
        ]);

        $character = Alokairu::findOrFail($id);
        $character->update($data);

        return response()->json($character);
    }
    public function destroyCharacter($id)
    {
        $character = Alokairu::findOrFail($id);
        $character->delete();

        return response()->json(null, 204);
    }
}
