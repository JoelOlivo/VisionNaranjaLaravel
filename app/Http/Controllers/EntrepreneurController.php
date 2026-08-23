<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntrepreneurRequest;
use App\Http\Requests\UpdateEntrepreneurRequest;
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
     * Store a newly created resource in storage.
     */
    public function store(StoreEntrepreneurRequest $request)
    {
        $user = Entrepreneur::create([
            'full_name' => $request->fullName,
            'national_id' => $request->nationalId,
            'cell_phone_number' => $request->cellPhoneNumber,
            'profile_photo_key' => $request->profilePhotoKey,
            'user_id' => $request->userId
        ]);

        return $user;
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

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Entrepreneur $entrepreneur)
    // {
    //     $entrepreneur->delete();

    //     return response()->json([
    //         'message' => 'Entrepreneur deleted'
    //     ]);
    // }
}
