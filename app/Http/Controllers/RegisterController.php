<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Address;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('pages.users.register', ['cities' => $cities]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        try{
            $addrid = Address::create([
                'street_name' => $data['street_name'],
                'street_number' => $data['street_number'],
                'city_id' => $data['city']
            ])->id;
            User::create([
               'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role_id' => 2,
                'address_id' => $addrid
            ]);
            return redirect()->route('login')->with('success', 'Successfull registrated!');
        }catch(\Exception $e){
            dd($e);
            return redirect()->back()->with('error', 'Unsuccessfull registrated!');
        }
    }
}
