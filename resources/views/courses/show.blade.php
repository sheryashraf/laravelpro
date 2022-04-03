@extends('layout.navbar')

{{-- <h1> contact us
</h1> --}}
@section('contact')
    my post
{{-- @dd($data["title"]) --}}
    <div class="card container" style="width: 18rem;">
      <h5 class="card-header">Courses Details
        <a href="/availablecourse" class="btn btn-primary bttn rounded-pill">Back</a>
    
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
          <h5 class="card-header">Course Reviews</h5>
          <div class="card-body">
        <h5> Add Feedback</h5>
           <form action="{{route('comments.store')}}"" method="POST">
        @csrf
        <textarea class="form-control rounded-pill" name="body">
        </textarea>
        <input type="text" name="course_id" hidden value="{{$data->id}}">
        <br>
        
        <input type="submit" class="btn btn-success rounded-pill" value="Add Feedback">
            </form>
          </div>
        </div>
              @include('courses.displaycomment',['comments'=>$data->comments,"course_id"=>$data->id])
      </div>

    @endsection
 
  