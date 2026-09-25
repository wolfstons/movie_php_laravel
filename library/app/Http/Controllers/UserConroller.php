<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserConroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record=new User();
        $record->create($request->all());
        return $record;
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        return $user->update($request->all());        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        return $record=User::destroy($user->id);
    }
}
