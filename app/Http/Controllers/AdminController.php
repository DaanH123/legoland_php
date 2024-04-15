<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Models\admin;
use App\Models\contact;
use App\Models\opentime;
use App\Models\ordertickets;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loginRegisterController = new LoginRegisterController();
        return $loginRegisterController->dashboard();
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }

    public function userdashboard()
    {
        $users = User::all();

        return view('admin.users', ['users' => $users]);
    }

    public function ticketOrdersDashboard()
    {
        $orders = ordertickets::all();

        return view('admin.ticketorders', ['ticketorders' => $orders]);
    }

    public function contactFormDashboard()
    {
        $contactForms = contact::all();

        return view('admin.contactview', ['contacts' => $contactForms]);
    }

    public function opentimesDashboard()
    {
        $opentimes = opentime::all();

        return view('admin.opentimes', ['opentimes' => $opentimes]);
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('users');
    }

    public function destroyUser($id)
    {
        $user = User::find($id);

        if($user->id == Auth::user()->id) {
            return redirect()->route('users');
        }

        $user->delete();

        return redirect()->route('users');
    }
}
