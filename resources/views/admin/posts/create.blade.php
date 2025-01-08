@extends('admin.main-admin')
 @section('konten')

 <h2>create</h2>
 <div class="col-lg-8">


     <form method="post" action="dashboard/posts" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" >
         
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" readonly >
           
          </div>
       
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
 </div>

 {{-- <script>
    const judul = document.querySelector('#judul');
    const slug = document.querySelector('#slug');

    judul.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?judul=' + judul.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
 </script> --}}

 <script>
    const judul = document.querySelector('#judul');
    const slug = document.querySelector('#slug');

    judul.addEventListener('input', function () {
        // Buat slug dari nilai input judul
        slug.value = judul.value
            .toLowerCase() // Ubah ke huruf kecil
            .trim() // Hilangkan spasi di awal dan akhir
            .replace(/[^a-z0-9\s-]/g, '') // Hapus karakter non-alphanumeric
            .replace(/\s+/g, '-') // Ganti spasi dengan tanda "-"
            .replace(/-+/g, '-'); // Hilangkan tanda "-" berlebih
    });
</script>

@endsection