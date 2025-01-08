@extends('admin.main-admin')
 @section('konten')



    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Berita</h1>
      
    </div>

   
    <h2>Selamat Datang di Laman Berita </h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
           
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$post->judul}}</td>
            <td>{{$post->category->name}}</td>
            <td>
            
                <a href="/dashboard/posts/{{$post->slug}}">lihat</a>
                <a href="">ubah</a>
                <a href="">hapus</a>

              
            </td>
            
          </tr>
          @endforeach
          
      
        </tbody>
      </table>
    </div>
 


   
    
 

  @endsection
