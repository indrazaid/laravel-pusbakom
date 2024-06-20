
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('assets/css/sign-in.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 
</head>
<body class="text-center">
   @if(@session()->has('succes'))
    

   <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{session('succes')}}</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if(@session()->has('loginError'))
    

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
   <strong>{{session('loginError')}}</strong> 
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
 @endif

 


  <main class="form-signin w-100 m-auto">
    <form method="POST" action="/login" enctype="multipart/form-data">
     @csrf
     <img class="mb-4" src="{{asset('assets/img/logo/unh.png')}}" alt="error" width="100" height="100">
      <h1 class="h3 mb-3 fw-normal">Login Administrator</h1>
      
      <div class="form-floating">
        <input type="email" class="form-control @error('email') is-nvalid @enderror" id="floatingInput" name="email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      @error('email')
       <div class="invalid-feedback">
        {{$message}}
       </div>
      @enderror
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
  
      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
       
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
      
    </form>
  </main>
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
