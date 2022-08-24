@extends('layouts.app')

@section('content')

<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Phone No</th>
        <th scope="col">IC</th>
        <th scope="col">Quotation Type</th>
        <th scope="col">Remark</th>
        <th scope="col">Other Information</th>
      </tr>
    </thead>
    <tbody>
      @foreach($quotations as $quotation)
      <tr>
        <th scope="row">{{$quotation->id}}</th>
        <td>{{$quotation->name}}</td>
        <td>{{$quotation->phone_no}}</td>
        <td>{{$quotation->IC}}</td>
        <td>{{$quotation->quotation_type}}</td>
        <td>{{$quotation->remark}}</td>
        <td>{{$quotation->other_information}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection