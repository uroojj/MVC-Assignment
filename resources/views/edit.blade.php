@extends('main')
@section('content')
<div class="container">
    <div class="row">
        <h1>Update Employee Record</h1>
    <div class="col-4">
    <form method="POST" action="{{route('home.update',$employee->id)}}">
      @method('PUT')
  @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Employee First Name</label>
      <input type="text" class="form-control" name="firstname" value="{{old('firstname',$employee->first_name)}}" placeholder="Enter First Name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Employee Last Name</label>
        <input type="text" class="form-control" value="{{old('lastname',$employee->last_name)}}" name="lastname" placeholder="Enter Last Name">
        
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Employee Gender</label>
        <input type="text" class="form-control" name="gender" value="{{old('gender',$employee->gender)}}" placeholder="Enter Gender">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Employee Hiring Date</label>
        <input type="text" class="form-control" name="HiredDate" value="{{old('HiredDate',$employee->HiredDate)}}" placeholder="Enter Gender">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Employee Salary</label>
        <input type="number" class="form-control" value="{{old('salary',$employee->salary)}}" name="salary" placeholder="Enter Salary">
      </div>
    <button type="submit" class="btn btn-primary">Update Record</button>
  </form>
    </div>
    <div class="col-6"></div>
</div>
</div>
@endsection