<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
// use GuzzleHttp\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view ('client_account_status',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_client');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name' => ['required','string','max:255'],
            'last_name' => ['required','string','max:255'],
            'IC'=>['required','string','max:255'],
            'email'=> ['required','string','email','max:255'],
            'password'=> ['required','string', 'min:8'],
            'date_of_birth'=> ['required','string','date','max:255'],
            'mobile_no'=>['required','string'],
            'address'=> ['required','string','max:255'],
            'address_2' => ['required','string','max:255'],
            'city'=> ['required','string','max:255'],
            'state' => ['required','string','max:255'],
            'zip' => ['required','string','max:255'],
            'policy_status' => ['string','max:255'],
            'investment_status' => ['string','max:255'],
            'will_content' => ['string','max:255']
        ]);
        $clients = new Client([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'IC' => $request->get('IC'),
            'email' => $request->get('email'),
            'password' => Hash::make($request['password']),
            'date_of_birth' => $request->get('date_of_birth'),
            'mobile_no' => $request->get('mobile_no'),
            'address' => $request->get('address'),
            'address_2' => $request->get('address_2'),
            'city' => $request->get('city'),
            'state' => $request->get('state'),
            'zip' => $request->get('zip'),
            'policy_status' => $request->get('policy_status'),
            'investment_status' => $request->get('investment_status'),
            'will_content' => $request->get('will_content'),
        ]);
        $clients->save();
        return redirect()->route('client.create')->with('success','Client Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($clients)
    {
        $client = Client::find($clients);
        return view('edit_client',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $clients)
    {
        $input = $request->all();
        
        $client = Client::find($clients);
        $client -> first_name = $input['first_name'];
        $client -> last_name = $input['last_name'];
        $client -> IC = $input['IC'];
        $client -> email = $input['email'];
        $client -> password = $input['password'];
        $client -> date_of_birth = $input['date_of_birth'];
        $client -> mobile_no = $input['mobile_no'];
        $client -> address = $input['address'];
        $client -> address_2 = $input['address_2'];
        $client -> city = $input['city'];
        $client -> state = $input['state'];
        $client -> zip = $input['zip'];
        $client -> policy_status = $input['policy_status'];
        $client -> investment_status = $input['investment_status'];
        $client -> will_content = $input['will_content'];

        $client->save();
        return redirect('/client_account_status');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($clients)
    {
        Client::find($clients)->delete();
        return redirect()->back();
    }
}
