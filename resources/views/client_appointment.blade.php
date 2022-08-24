@extends('layouts.client_loggin_app')

@section('content')

<div class="container">
  <form method="post" action="{{url('/quotation_requested')}}"" class=" container">
    {{csrf_field()}}
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="name" name="name" class="form-control" id="inputEmail3">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Phone No</label>
      <div class="col-sm-10">
        <input type="phone_no" name="phone_no" class="form-control" id="inputPassword3">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">IC</label>
      <div class="col-sm-10">
        <input type="IC" name="IC" class="form-control" id="inputPassword3">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Quotation Type</label>
      <div class="col-sm-10">
        <input type="quotation_type" name="quotation_type" class="form-control" id="inputPassword3" placeholder="Insurance, Investment, Will and Trust or others?">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Remark</label>
      <div class="col-sm-10">
        <input type="remark" name="remark" class="form-control" id="inputPassword3">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Other Information</label>
      <div class="col-sm-10">
        <input type="other_information" name="other_information" class="form-control" id="inputPassword3">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Book Now</button>
  </form>
</div>
@endsection