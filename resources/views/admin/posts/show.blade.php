@extends('admin.main-admin')
 @section('konten')
 <section class="postbox__area pt-120 pb-90">
    <div class="container">
       <div class="row">


       
          <div class="col-xxl-8 col-xl-8 col-lg-8">
             <div class="postbox__wrapper">
                <article class="postbox__item format-image mb-50 transition-3">
                   <div class="postbox__thumb m-img p-relative">
                         <img src="assets/img/blog/blog-details-bg.jpg" alt="">
                         
                   </div>
                   <div class="postbox__content">
                      
                      <h3 class="postbox__title">
                        {{ $post->judul }}
                      </h3>
                      
                      <div class="postbox__meta">
                        <a href="/dashboard/posts" class="btn btn-success">Back </a>
                        <a href="" class="btn btn-info">Edit </a>
                        <span><a  class="btn btn-warning" href="/category/{{$post->category->slug}}"><i class="fal fa-comments"></i> 
                          
                          {{ $post->category->name }}</a></span>
                     </div>
                      <div class="postbox__text">
                       
                         <p>{!! $post->body !!}</p>
                      </div>
                     
                   </div>
                </article>
             </div>
          </div>

      



          
       </div>
    </div>
 </section>
    
 

  @endsection
