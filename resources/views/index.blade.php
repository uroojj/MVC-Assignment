@extends('main')
@section('content')


<div class="row">
<div style="text-align: center" class="col-lg-12">
    <h1>MVC Assignment</h1>
    <h4>By: Syeda Urooj Sohail</h4>
</div>
</div>

<div class="row">
    <div style="text-align: center" class="col-lg-12">
        <h5>Select Option:</h5>
    </div>
    <div style="text-align: center" class="col-lg-12">
    <a href="{{url('/insert')}}" class="btn btn-primary">Insert New Record</a>
    </div>
    </div>
<div class="row">
    <div style="text-align: center" class="col-lg-12"><h3> All Record With Update and Delete Options</h3></div>
</div>
@if ($employee)
    

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Hired Date</th>
        <th scope="col">Salary</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @php
            $i = 1;
        @endphp
        @foreach ($employee as $employ)

      <tr>
      <th scope="row">{{$i}}</th>
        <td>{{$employ->first_name}}</td>
        <td>{{$employ->last_name}}</td>
        <td>{{$employ->gender}}</td>
        <td>{{$employ->HiredDate}}</td>
        <td>{{$employ->salary}}</td>
        <td>
          <form action="{{ route('home.destroy', $employ->id)}}" method="POST" 
            style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button class="btn-sm btn-danger"type="submit">Delete</button>
          </form>
        <a href="{{route('home.edit',$employ->id)}}" class="btn btn-warning">Edit</a>
        </td>
      </tr>
      </tr>
      @php
          $i++;
      @endphp
      @endforeach
    </tbody>
  </table>
  @endif
@endsection
