@extends('layout.navbar')
@section('contact')


<html>
<head>
  </head>
<body >
    <div class="container ">
        <h1 > My Profile</h1>
        <div class="card"style="width: 20rem;">
  {{-- <div class="">
    <div class=""> --}}
      <img src="data:image/jpeg;base64,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" height="150" width="100">

    {{-- </div> --}}
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
            {{-- /courses/{{$item['id']}}/edit --}}
           <b>Name :  {{auth()->user()->name}} </b> <a href="/users/{{auth()->user()->id}}/edit">
            <i class="bi bi-pencil-fill"></i></a><br><br><br>
        </h5>
        <p class="card-text">
<b>Email :</b> {{auth()->user()->email}}<br><br><br>
            </p>
            <b>Role :</b> {{auth()->user()->role}}<br><br><br><br>

             <form action="/Users/{{auth()->user()->id}}" method="POST">
    @method("delete")
     @csrf
        <button type="submit" class="btn btn-danger d-inline-block">
           <i class="bi bi-trash"></i> Delete Account </button>
     </form>

      </div>

    </div>
  </div>
</div>
        {{-- <div class="card col-6 ">

      <img src="{{URL::asset('/img/nav1.jpg')}}" class="d-block  card-img-top rounded-pill" alt="..." height="100" width="100">

  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div> --}}



       {{-- <b>Name:</b> {{auth()->user()->name}} <br/>
        <b>Email:</b> {{auth()->user()->email}} <br/>
        <b>role</b> {{auth()->user()->role}} <br/> --}}


</div>
</body>

</html>

@endsection
