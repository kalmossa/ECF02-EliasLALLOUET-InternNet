<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    /**

     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $offers = Offer::all();
        return view('offers.index', compact('offers'));
    }

    /**

     @return \Illuminate\View\View
     */
    public function create()
    {
        return view('offers.create');
    }

    /**

     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Offer::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('offers.index')->with('success', 'Offre de stage créée avec succès.');
    }
    public function show($id)
    {
        $offer = Offer::find($id);

        // Vérifie si l'offre existe
        if (!$offer) {
            // Si l'offre n'existe pas:
            abort(403);
        }

        // L'offre existe:
        return view('create.blade.php', compact('offer'));
    }
}
