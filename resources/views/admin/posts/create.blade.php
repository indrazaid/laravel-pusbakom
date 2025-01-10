@extends('admin.main-admin')
 @section('konten')

 <h2>create</h2>
 <div class="col-lg-8">


     <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" required>
         
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" readonly >
           
          </div>

          <div class="mb-3">
            <label for="formFoto" class="form-label">Upload Gambar</label>
            <input class="form-control" type="file" id="foto" name="foto">
          </div>

          <div class="mb-3">
            <label for="formFile" class="form-label">Upload File</label>
            <input class="form-control" type="file" id="file" name="file">
          </div>

          <div class="mb-3">
            <label for="category" class="form-label">Pilih Kategori:</label>
            <select id="category_id" class="form-select" name="category_id">
              @foreach ($categories as $category)
                @if (old('category_id') == $category->id)
                  <option value="{{$category->id}}" selected >{{$category->name}}</option>
                @else
                  <option value="{{$category->id}}"  >{{$category->name}}</option>
                @endif
                  
              
              @endforeach
               
            </select>
        </div>

        <div class="mb-3">
          <label for="body" class="form-label">Body</label>

          <input id="body" type="hidden" name="body">
         <trix-editor input="body"></trix-editor>
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