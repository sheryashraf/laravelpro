@extends('layout.navbar')
@section('contact')
<html>
<head>

  </head>
<body>
  @foreach ($data as $item)

    <div class="container ">

<div class="row">
  <div class=" rounded-pill">
    <div class="card">
          <div class="card-header" >
   <h4>  {{$item["name"]}}</h4>

  </div>
       <div class="card-body">
    <h5 class="card-title">Description</h5>
    <p class="card-text">{{$item["description"]}}</p>

    <h5 class="card-title">Duration</h5>
    <p class="card-text">{{$item["duration"]}} </p>
    <a class="btn btn-danger rounded-pill" type="button" href="/courses/{{$item['id']}}">
           Take A View</a>
           <a class="btn btn-success " href="{{route("usercources",$item->id)}}" role="button" >
             Enroll</a>
            
           {{-- <form method="post" action="/enroll/{{$item['id']}}">
	{{csrf_field()}}
	<input type="hidden" name="course_id" value="{{ $item->id }}" />
	<input type="Enroll">
</form> --}}

  </div>
    </div>
  </div>

</div>
</div>
 <br>
  <br>
  <br>
  @endforeach

</body>

</html>
@endsection

