<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etxe;

class EtxeController extends Controller
{
    public function show()
    {
        $etxes = Etxe::all();
        return view('etxes-list', ['etxes' => $etxes]);
    }
    public function filter()
    {
        $etxes = Etxe::all();
        return view('edit', ['etxes' => $etxes]);
    }
    public function updatear()
    {
        $etxes = Etxe::all();
        return view('update', ['etxes' => $etxes]);
    }
    public function showFiltered(Request $request)
    {
        $id = $request->input('id');
        $query = Etxe::where('id', $request->query('id'));
        $etxes = $query->get();
        return view('list', ['etxes' => $etxes]);
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
        $etxe = Etxe::where('id', $id)->firstOrFail();

        $request->validate([
            'helbidea' => 'required|string|max:255',
            'logelak' => 'required|integer|min:1',
            'eraikuntza_urtea' => 'required|integer|min:1800|max:' . date('Y'),
        ]);

        $etxe->update($request->all());

        return redirect('/');
    }
    public function updatee(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:etxeas,id',
            'helbidea' => 'required|string|max:255',
            'logelak' => 'required|integer|min:1',
            'eraikuntza_urtea' => 'required|integer|min:1800|max:' . date('Y'),
        ]);

        // Buscar el etxe correspondiente por su ID
        $etxea = Etxe::findOrFail($request->id);

        // Actualizar los valores
        $etxea->helbidea = $request->helbidea;
        $etxea->logelak = $request->logelak;
        $etxea->eraikuntza_urtea = $request->eraikuntza_urtea;

        $etxea->update();

        return redirect('/');
    }
    public function showById($id)
    {
        return Etxe::findOrFail($id);
    }

    public function destroyEtxe($id)
    {
        $character = Etxe::findOrFail($id);
        $character->delete();

        return response()->json(null, 204);
    }
}
