@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>StudentID</label></br>
        <input type="text" name="studid" id="studid" value="{{$students->studid}}" class="form-control"></br>
        <label>LastName</label></br>
        <input type="text" name="lastname" id="lastname" value="{{$students->lastname}}" class="form-control"></br>
        <label>FirstName</label></br>
        <input type="text" name="firstname" id="firstname" value="{{$students->firstname}}" class="form-control"></br>
        <label>MI</label></br>
        <input type="text" name="MI" id="MI" value="{{$students->MI}}" class="form-control"></br>
        <label>Course</label></br>
        <input type="text" name="course" id="course" value="{{$students->course}}" class="form-control"></br>
        <label>YearLevel</label></br>
        <input type="text" name="yearlevel" id="yearlevel" value="{{$students->yearlevel}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop