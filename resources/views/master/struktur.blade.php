@extends('layout.main')

@section('isi')
     <!--  breadcrumb-area  start -->
   <div class="wrapper-box p-relative ">
    <div class="breadcrumb__bg breadcrumb__bg__overlay pt-130 pb-130 "
       data-background="">
       <div class="container">
          <div class="row">
             <div class="col-xxl-12">
                <div class="breadcrumb__content p-relative z-index-1 text-center">
                   <div class="breadcrumb__list mb-10">
                      <span><a href="index.html">Home </a></span>
                      <span class="dvdr"> / </span>
                      <span class="sub-page-black"> Struktur Organisasi</span>
                   </div>
                   <h3 class="breadcrumb__title mb-20">Struktur Organisasi</h3>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!--  breadcrumb-area  end -->
 <!-- postbox area start -->
 <section class="postbox__area pt-120 pb-90">
    <div class="container">
       <div class="row">
          <div class="col-xxl-8 col-xl-8 col-lg-8">
             <div class="postbox__wrapper">
                <article class="postbox__item format-image mb-50 transition-3">
                   <div class="postbox__thumb m-img p-relative">
                      <img src="assets/img/about/struktur.PNG" alt="" width="900px">
                      <span> 04 Feb</span>
                </div>
                 
                </article>
             </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4">
             <div class="sidebar__wrapper">
                
               <div class="sidebar__widget sidebar__widget-2 mb-40">
                  <h3 class="sidebar__widget-title">Our latest post</h3>
                  <div class="sidebar__widget-content">
                      {{-- recent post --}}
                      
                      @foreach($recentPosts as $recentPost)
                    
                     <div class="sidebar__post p-relative">
                        <div class="rc__post d-flex align-items-center">
                           <div class="rc__post-thumb mr-20">
                              <a href="/detail"><img src="{{asset('storage/'.$recentPost->foto)}}" alt=""></a>
                              <span> <i class="flaticon-right-arrows"></i></span>
                           </div>
                           <div class="rc__post-content">
                              <div class="rc__meta">
                                 <span><i class="fal fa-comments"></i> 02 Comments</span>
                              </div>
                              <h3 class="rc__post-title">
                                 <a href="/post/{{$recentPost->slug}}">{{$recentPost->judul}}</a>
                              </h3>
                           </div>
                        </div>
                       
                     </div>
                     @endforeach


                  </div>
               </div>
               
               <div class="sidebar__widget sidebar__widget-3 mb-40">
                  <h3 class="sidebar__widget-title">Catagories</h3>
                  <div class="sidebar__widget-content">
                 
                        
                   
                     <ul>
                       @foreach ($CategoryPost as $category)
                       <li><a href="/category/{{$category->slug}}">{{$category->name}} <i class="flaticon-right-arrows"></i></a></li>
                       @endforeach
                       
                     </ul>
                  
                  </div>
               </div>
               
               
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- postbox area end -->
@endsection