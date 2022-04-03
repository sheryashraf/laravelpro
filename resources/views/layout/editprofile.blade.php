@extends('layout.navbar')
@section('contact')
<div class="container">
 <form class="container" action="{{url('users/'.$data['id'])}}" method="POST">
        @method("put")
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" value="{{old('name',$data['name'])}}" class="form-control" name="name">
          <label  class="text-danger">{{$errors->first('name')}}</label>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      </div>
@endsection
