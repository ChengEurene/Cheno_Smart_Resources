<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use App\Models\Quotations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ClientLoginController extends Controller
{
    public function index()
    {
        return view('client_login');
    }

    public function customLogin(Request $request)
    {

        // dd(Hash::make($request->input('password')));

        // if(Auth::attempt($request->only('email','password'))){
            $user = DB::table('clients')
            ->where('email',"=", $request->input('email'))
            ->first();

            $userEmail = DB::table('clients')
            ->select('email')
            ->where('email',"=", $request->input('email'))
            ->first();

            $userPassword = DB::table('clients')
            ->select('password')
            ->where('password',"=", $request->input('password'))
            ->first();



            // dd($userPassword!=null&&$userEmail!=null);
            // dd(Auth::user());
            // if(Auth::attempt($request->only('email','password'))){
                
            if($userPassword!=null&&$userEmail!=null){
                // dd($userName);
                return view('client_dashboard', compact("user"));
                }
            // }

        //     return redirect()->route('dashboard');
        // }

        return redirect('client_login');

    }

    public function dashboard()
    {
       
        return view('client_dashboard');
        
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('client_login');
    }

    public function bookAppointment(Request $request)
    {
        $user = DB::table('clients')
        ->where('email',"=", $request->input('email'))
        ->first();

        return view('client_appointment');
    }

    public function store(Request $request)
    {

        $quotation = new Quotations([
            'name' => $request->get('name'),
            'phone_no' => $request->get('phone_no'),
            'IC'=>$request->get('IC'),
            'quotation_type'=> $request->get('quotation_type'),
            'remark' => $request->get('remark'),
            'other_information' => $request->get('other_information'),
        ]);

        $quotation->save();
        return redirect()->route('bookAppointment')->with('success','your agent will contact you');

    }
}
