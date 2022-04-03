@extends('layout.navbar')
@section("contact")
    <h1 class="text-center text-danger">
        Edit Courses
    </h1>

    <form class="container" action="/courses/{{$data['id']}}" method="POST">
        @method("put")
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" value="{{old('name',$data['name'])}}" class="form-control" name="name">
          <label  class="text-danger">{{$errors->first('name')}}</label>

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Description</label>
          <input type="text" value="{{old('description',$data['description'])}}"  class="form-control" name="description" style="height: 100px">
          <label  class="text-danger">{{$errors->first('description')}}</label>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Duration</label>
          <input type="text" value="{{old('duration',$data['duration'])}}"  class="form-control" name="duration" >
          <label  class="text-danger">{{$errors->first('duration')}}</label>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
      </form>



@endsection
