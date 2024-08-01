<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">@auth
      {{auth()->user()->name}}
    @endauth</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="POST" class="nav-link px-3">
          @csrf
          <button type="submit" style="background: none;border: none;"class="nav-link px-3"> Logout</button>
         </form>
      
      </div>
    </div>
  </header>
  
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/dashboard">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/silder">
                <span data-feather="file" class="align-text-bottom"></span>
                Slider
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/berita">
                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                Berita
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/galeri">
                <span data-feather="users" class="align-text-bottom"></span>
                Galeri
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/download">
                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                Download
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pengumuman">
                <span data-feather="layers" class="align-text-bottom"></span>
                Pengumuman
              </a>
            </li>
          </ul>
  
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Users</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="/user">
                <span data-feather="file-text" class="align-text-bottom"></span>
                User
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/reset">
                <span data-feather="file-text" class="align-text-bottom"></span>
                Ubah Password
              </a>
            </li>
           
            <li class="nav-item">
                <form action="/logout" method="POST" >
                    @csrf
                    <button type="submit" style="background: none;border: none;"class="nav-link px-3"> Logout</button>
                    
                   </form>
              
            </li>
          </ul>
        </div>
      </nav>
  
      
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       @yield('konten')
      

    </main>
    </div>
    
  </div>

  
  
 
   
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
	 
</body>
</html>




