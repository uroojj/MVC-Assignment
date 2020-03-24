@extends('main')
@section('content')
<div class="container">
    <div class="row">
        <h1>Insert New Employee Record</h1>
    <div class="col-4">
    <form method="POST" action="{{route('home.store')}}">
      @method('POST')
  @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Employee First Name</label>
      <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Employee Last Name</label>
        <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
        
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Employee Gender</label>
        <input type="text" class="form-control" name="gender" placeholder="Enter Gender">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Employee Hiring Date</label>
        <input type="date" class="form-control" name="HiredDate" placeholder="Enter Gender">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Employee Salary</label>
        <input type="number" class="form-control"  name="salary" placeholder="Enter Salary">
      </div>
    <button type="submit" class="btn btn-primary">Save Record</button>
  </form>
    </div>
    <div class="col-6"></div>
</div>
</div>
@endsection