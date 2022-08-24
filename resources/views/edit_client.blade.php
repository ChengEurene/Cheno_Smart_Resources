@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <br />
    <h3 aling="center">Edit Client</h3>
    <br />
    @if(count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    @if(\Session::has('success'))
    <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div>
    @endif

    <form method="post" action="{{url('/edit_client/'.$client->id)}}">
      {{csrf_field()}}
      <div class="row">
        <div class="col">
          <label for="inputFirstName4" class="form-label">First Name</label>
          <input id="first_name" name="first_name" value="{{old('first_name')??$client->first_name}}" type="text" class="form-control" aria-label="First name">
        </div>
        <div class="col">
          <label for="inputLastName4" class="form-label">Last Name</label>
          <input id="last_name" name="last_name" value="{{old('last_name')??$client->last_name}}" type="text" class="form-control" aria-label="Last name">
        </div>
      </div>
      <div class="col-md-6">
        <label for="inputIC4" class="form-label">IC No</label>
        <input id="IC" name="IC" type="text" value="{{old('IC')??$client->IC}}" class="form-control" id="inputIC4">
      </div>
      <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input id="email" name="email" value="{{old('email')??$client->email}}" type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input id="password" name="password" value="{{old('password')??$client->password}}" type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
          <label for="inputDOB4" class="form-label">Date of Birth</label>
          <input id="date_of_birth" name="date_of_birth" value="{{old('date_of_birth')??$client->date_of_birth}}" type="date" class="form-control" id="inputDOB4">
        </div>
        <div class="col-md-6">
          <label for="inputMobileNo4" class="form-label">Mobile No</label>
          <input id="mobile_no" name="mobile_no" value="{{old('mobile_no')??$client->mobile_no}}" type="text" class="form-control" id="inputMobileNo4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input id="address" name="address" value="{{old('address')??$client->address}}" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Address 2</label>
          <input id="address_2" name="address_2" value="{{old('address_2')??$client->address_2}}" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input id="city" name="city" value="{{old('city')??$client->city}}" type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="state" class="form-label">State</label>
          <select id="state" name="state" class="form-select">
            <option selected>{{old('state')??$client->state}}</option>
            <option>Johor</option>
            <option>Kuala Lumpur</option>
            <option>Malacca</option>
            <option>Pahang</option>
            <option>Kedah</option>
            <option>Penang Island</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input id="zip" name="zip" value="{{old('zip')??$client->zip}}" type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-md-6">
          <label for="inputPolicy" class="form-label">Policy Status</label>
          <input id="policy_status" name="policy_status" value="{{old('policy_status')??$client->policy_status}}" type="text" class="form-control" id="inputPolicy">
        </div>
        <div class="col-md-6">
          <label for="inputInvestment" class="form-label">Investment Status</label>
          <input id="investment_status" name="investment_status" value="{{old('investment_status')??$client->investment_status}}" type="text" class="form-control" id="inputInvestment">
        </div>
        <div class="col-md-6">
          <label for="inputWill" class="form-label">Will Content</label>
          <input id="will_content" name="will_content" value="{{old('will_content')??$client->will_content}}" type="text" class="form-control" id="inputWill">
        </div>
        <div class="col-12">
          <input type="submit" class="btn btn-primary" />
        </div>
      </form>
      {{ __('You are logged in!') }}
    </form>
  </div>
</div>
</div>
</div>
</div>
@endsection