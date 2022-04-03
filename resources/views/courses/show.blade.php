@extends('layout.navbar')

{{-- <h1> contact us
</h1> --}}
@section('contact')
{{-- @dd($data["title"]) --}}
    <div class="card container" >
      <h5 class="card-header">Courses Details
        <a href="/availablecourse" class="btn btn-primary ">Back</a>
    
      </h5>
        <div class="card-body">
          <h5 class="card-title">Name:{{$data["name"]}}</h5>
          <p class="card-text"></p>
          <h5 class="card-title">Description:{{$data["description"]}}</h5>
          <p class="card-text"></p>
          <h5 class="card-title">Duration:{{$data["duration"]}}</h5>
          <p class="card-text"></p>
          {{-- <a href="/posts" class="btn btn-primary">back</a> --}}
        </div>
        <div class="card">
          <h5 class="card-header">Course comments</h5>
          <div class="card-body">
        <h5> Add comment</h5>
           <form action="{{route('comments.store')}}"" method="POST">
        @csrf
        <textarea class="form-control " name="body">
        </textarea>
        <input type="text" name="course_id" hidden value="{{$data->id}}">
        <br>
        
        <input type="submit" class="btn btn-success " value="Add comment">
            </form>
          </div>
        </div>
              @include('courses.displaycomment',['comments'=>$data->comments,"course_id"=>$data->id])
      </div>

    @endsection
 
  