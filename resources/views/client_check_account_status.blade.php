@extends('layouts.client_loggin_app')

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">IC</th>
            <th scope="col">Email</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Mobile No</th>
            <th scope="col">Address</th>
            <th scope="col">Policy Status</th>
            <th scope="col">Investment Status</th>
            <th scope="col">Will Content</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->first_name}}&nbsp;{{$user->last_name}}</td>
            <td>{{$user->IC}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->date_of_birth}}</td>
            <td>0{{$user->mobile_no}}</td>
            <td>{{$user->address}}<br>{{$user->address_2}}<br>{{$user->city}}&nbsp;{{$user->state}}&nbsp;{{$user->zip}}</td>
            <td>{{$user->policy_status}}</td>
            <td>{{$user->investment_status}}</td>
            <td>{{$user->will_content}}</td>
        </tr>
    </tbody>
</table>