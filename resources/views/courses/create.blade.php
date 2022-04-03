@extends('layout.navbar')
@section('contact')
<h1 class="text-center text-danger">
create courses
</h1>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
<body>
    <form class="container" action="/courses" method="post">
      @csrf   
                          {{-- to i can enter data by post --}}
        <div class="mb-3"  >
          <label for="exampleInputEmail1" class="form-label">name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">discription</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="description">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">duration</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="duration">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
@endsection
