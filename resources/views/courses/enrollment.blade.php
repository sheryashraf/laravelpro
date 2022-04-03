{{-- {{$data}} --}}
@extends('layout.navbar')
@section('contact')
<div class="container">
    
    @foreach ($data as $item)
  
  <div class="card "style="width: 50rem;" >
    <div class="card-header">
  
       {{$item["name"]}}

    </div>
    <div class="card-body">
      <h5 class="card-title">Description</h5>
      <p class="card-text">{{$item["description"]}}</p>
  
      <h5 class="card-title">Duration</h5>
      <p class="card-text">{{$item["duration"]}} </p>
      <a href="{{route("deletecourse",$item->id)}}">unenroll</a>
    </div>
  </div>
  
  <br>
  <br>
  <br>
  <br>
    @endforeach
  
 
  
  </div>
  </div>
  </body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </html>
  
  
@endsection