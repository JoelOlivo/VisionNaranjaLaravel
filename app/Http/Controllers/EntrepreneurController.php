<?php

namespace App\Http\Controllers;

use App\Http\Requests\Entrepreneurs\UpdateEntrepreneurRequest;
use App\Models\Entrepreneur;
// use Illuminate\Http\Request;

class EntrepreneurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Entrepreneur::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrepreneur $entrepreneur)
    {
        return $entrepreneur;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntrepreneurRequest $request, Entrepreneur $entrepreneur)
    {
        $entrepreneur->update([
            'full_name' => $request->fullName, 
            'cell_phone_number'=> $request->cellPhoneNumber,
            'profile_photo_key' => $request->profilePhotoKey
        ]);

        return $entrepreneur;
    }
}