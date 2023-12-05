<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fonctionnaire;
use App\Models\Service;


class FonctionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $fonctionnaires = Fonctionnaire::with('service')->get();
        return view('fonctionnaires.index', compact('fonctionnaires'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        #return view('fonctionnaires.create');
        $services = Service::pluck('nom', 'id');

        return view('fonctionnaires.create', compact('services'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        // Validate the request data here if needed
        Fonctionnaire::create($request->all());
        return redirect()->route('fonctionnaires.index')->with('success', 'Fonctionnaire created successfully');
    }

    // Display the specified resource.
    public function show($id)
    {
        
        #$fonctionnaire = Fonctionnaire::findOrFail($id);
        $fonctionnaire = Fonctionnaire::with('service')->findOrFail($id);

        return view('fonctionnaires.show', compact('fonctionnaire'));

    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $fonctionnaire = Fonctionnaire::findOrFail($id);
        $services = Service::pluck('nom', 'id');
        return view('fonctionnaires.edit', compact('fonctionnaire', 'services'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'cin' => 'required|string|max:50',
            'sexe' => 'required|string|max:50',
            'type' => 'required|string|max:50',
            'etat' => 'required|string|max:50',
            'service_nom' => 'required|exists:services,nom', // Validation for existing service by name
        ]);

        // Find the fonctionnaire by ID
        $fonctionnaire = Fonctionnaire::findOrFail($id);

        // Find the service by name
        $service = Service::where('nom', $validatedData['service_nom'])->firstOrFail();

        // Update the fonctionnaire
        $fonctionnaire->update([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'cin' => $validatedData['cin'],
            'sexe' => $validatedData['sexe'],
            'type' => $validatedData['type'],
            'etat' => $validatedData['etat'],
            'id_service' => $service->id,
        ]);

        
        return redirect()->route('fonctionnaires.index')->with('success', 'Fonctionnaire updated successfully');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $fonctionnaire = Fonctionnaire::findOrFail($id);
        $fonctionnaire->delete();
        return redirect()->route('fonctionnaires.index')->with('success', 'Fonctionnaire deleted successfully');
    }
}
