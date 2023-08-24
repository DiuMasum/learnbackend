<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        <pre>
        @php
          print_r($errors->all());
        @endphp
        </pre>
        
  <div class="container">
    <h1 class="text-center">register</h1>
    <div class="form-group">
      <label for="" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
      <span class="text-danger>
        @error('name')
          {{$message}}
        @enderror
    </span>
    </div>
    <div class="form-group">
      <label for="" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
      <span class="text-danger>
        @error('name')
          {{$message}}
        @enderror
    </span>
    </div>
    <div class="form-group">
      <label for="" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
      <span class="text-danger>
        @error('name')
          {{$message}}
        @enderror
    </span>
    </div>
    <button class = "btn-primary">Submits</button>
  </div>
  </form>
</body>

</html>