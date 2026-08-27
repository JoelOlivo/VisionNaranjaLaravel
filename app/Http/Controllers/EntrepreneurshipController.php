<?php

namespace App\Http\Controllers;

use App\Http\Requests\Entrepreneurships\StoreEntrepreneurshipRequest;
use App\Http\Requests\Entrepreneurships\UpdateEntrepreneurshipRequest;
use App\Models\Entrepreneurship;
// use Illuminate\Http\Request;

class EntrepreneurshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Entrepreneurship::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEntrepreneurshipRequest $request)
    {
        $entrepreneurship = Entrepreneurship::create([
            'name' => $request->name,
            'description' => $request->description,
            'logo_key' => $request->logoKey,
            'entrepreneur_id' => $request->entrepreneurId
        ]);

        return $entrepreneurship;
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrepreneurship $entrepreneurship)
    {
        return $entrepreneurship;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntrepreneurshipRequest $request, Entrepreneurship $entrepreneurship)
    {
        $entrepreneurship->update([
            'name' => $request->name,
            'description' => $request->description,
            'logo_key' => $request->logoKey
        ]);

        return $entrepreneurship;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrepreneurship $entrepreneurship)
    {
        $entrepreneurship->delete();

        return response()->json([
            'message' => 'Entrepreneuship deleted'
        ]);
    }
}