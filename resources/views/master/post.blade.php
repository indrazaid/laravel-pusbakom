   @extends('layout.main')
 @section('isi')
     <!--  breadcrumb-area  start -->
   <div class="wrapper-box p-relative ">
    <div class="breadcrumb__bg breadcrumb__bg__overlay pt-130 pb-130 "
       {{-- data-background="assets/img/breadcrumb/breadcrumb-bg-1.jpg" --}}>
       <div class="container">
          <div class="row">
             <div class="col-xxl-12">
                <div class="breadcrumb__content p-relative z-index-1 text-center">
                   {{-- <div class="breadcrumb__list mb-10">
                      <span><a href="index.html">INSUREZs </a></span>
                      <span class="dvdr"> / </span>
                      <span class="sub-page-black">Our Blog</span>
                   </div> --}}
                   <h3 class="breadcrumb__title mb-20">Berita</h3>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!--  breadcrumb-area  end -->
 <!-- team area start -->
 <div class="tp-blog pt-120 pb-90">
    <div class="container">
       <div class="row">
         @foreach ($post as $val)
          <div class="col-xl-4 col-md-6 col-sm-6">
             <div class="tpblog pb-30">
                <div class="tpblog__thumb-2 fix">
                   <a href="/detail"><img src="assets/img/blog/img2.jpg" alt=""></a>
                   <div class="tpblog__catagori-2">
                      <span><a href="/post/{{$val->slug}}">{{$val->category->name}}</a></span>
                   </div>
                </div>
                <div class="tpblog__content-2">
                   <div class="tpblog__meta-2 mb-15">
                      <span class="date pr-25"><i class="fa-regular fa-calendar"></i> {{$val->created_at}}</span>
                      <span class="user"><i class="fa-light fa-user"></i> <a href="/users/{{$val->user_id}}">{{$val->user->name}}</a></span>
                   </div>
                   <h3 class="tp-blog-title mb-25"><a href="/post/{{$val->slug}}">{{$val->judul}}</a></h3>
                   <div class="tp-feed-link d-flex align-items-center">
                      <a class="tp-btn-4 " href="/post/{{$val->slug}}">Read More</a>
                   </div>
                   <div class="tpblog__arrow-box-2">
                      <span>
                         <a href="/detail"> <i class="fa-solid fa-arrow-right-long"></i></a>
                      </span>
                   </div>
                </div>
             </div>
          </div>
         
          @endforeach

          <div class="sidebar__widget-content">
                  
                         
                    
           
         
         </div>

       </div>
    </div>

 </div>

 <!-- team area end -->
 @endsection