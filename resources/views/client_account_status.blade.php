@extends('layouts.app')

@section('content')

<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <!-- <th scope="col">IC</th> -->
        <th scope="col">Email</th>
        <!-- <th scope="col">Date of Birth</th> -->
        <th scope="col">Mobile No</th>
        <!-- <th scope="col">Address</th> -->
        <th scope="col">Policy Status</th>
        <th scope="col">Investment Status</th>
        <th scope="col">Will Content</th>
        <th scope="col">Update/Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($clients as $client)
      <tr>
        <th scope="row">{{$client->id}}</th>
        <td>{{$client->first_name}}&nbsp;{{$client->last_name}}</td>
        <!-- <td>{{$client->IC}}</td> -->
        <td>{{$client->email}}</td>
        <!-- <td>{{$client->date_of_birth}}</td> -->
        <td>0{{$client->mobile_no}}</td>
        <!-- <td>{{$client->address}}<br>{{$client->address_2}}<br>{{$client->city}}&nbsp;{{$client->state}}&nbsp;{{$client->zip}}</td> -->
        <td>{{$client->policy_status}}</td>
        <td>{{$client->investment_status}}</td>
        <td>{{$client->will_content}}</td>
        <div>
          <td><a href="{{url('/edit_client/'.$client->id)}}" class="btn btn-primary">Update</a></td>
        </div>
        <form action="{{url('/delete_client/'.$client->id)}}" method="post">
          {{method_field('DELETE')}}
          {{csrf_field()}}
          <td><button class="btn btn-danger" type="submit">Delete</button></td>
        </form>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection