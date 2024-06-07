@extends('layout.main')

@section('isi')

 <!--  breadcrumb-area  start -->
 <div class="wrapper-box p-relative ">
    <div class="breadcrumb__bg breadcrumb__bg__overlay pt-130 pb-130 "
       data-background="assets/img/breadcrumb/breadcrumb-bg-1.jpg">
       <div class="container">
          <div class="row">
             <div class="col-xxl-12">
                <div class="breadcrumb__content p-relative z-index-1 text-center">
                   <div class="breadcrumb__list mb-10">
                      <span><a href="index.html">INSUREZ </a></span>
                      <span class="dvdr"> / </span>
                      <span class="sub-page-black"> Blog Details</span>
                   </div>
                   <h3 class="breadcrumb__title mb-20">Blog Details</h3>
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
                         <img src="assets/img/blog/blog-details-bg.jpg" alt="">
                         <span> 04 Feb</span>
                   </div>
                   <div class="postbox__content">
                      <div class="postbox__meta">
                         <span><a href="/users/{{$post->user->id}}"><i class="far fa-user"></i>{{$post->user->name}}</a></span>
                         <span><a href="/category/{{$post->category->slug}}"><i class="fal fa-comments"></i> 
                           
                           {{ $post->category->name }}</a></span>
                      </div>
                      <h3 class="postbox__title">
                        {{ $post->judul }}
                      </h3>
                      <div class="postbox__text">
                         <p>{!! $post->body !!}</p>
                      </div>
                      <div class="postbox__tagcloud mt-50">
                         <div class="postbox__tag tagcloud">
                            <h5>Our Tags</h5>
                            <a href="#">Insurance</a>
                            <a href="#">Policy</a>
                         </div>
                         <div class="postbox__social">
                            <div class="icon">
                               <ul>
                                  <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                  <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                  <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                  <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                               </ul>
                            </div>
                         </div>
                      </div>
                      
                     
                   </div>
                </article>
             </div>
          </div>

      



          <div class="col-xxl-4 col-xl-4 col-lg-4">
             <div class="sidebar__wrapper">
                <div class="sidebar__widget sidebar__widget-1 mb-40">
                   <div class="sidebar__widget-content">
                      <div class="sidebar__search">
                         <form action="#">
                            <div class="sidebar__search-input-2">
                               <input type="text" placeholder="Search">
                               <button type="submit"><i class="far fa-search"></i></button>
                            </div>
                         </form>
                      </div>
                   </div>
                </div>
                <div class="sidebar__widget sidebar__widget-2 mb-40">
                   <h3 class="sidebar__widget-title">Our latest post</h3>
                   <div class="sidebar__widget-content">
                       {{-- recent post --}}
                       
                       @foreach($recentPosts as $recentPost)
                     
                      <div class="sidebar__post p-relative">
                         <div class="rc__post d-flex align-items-center">
                            <div class="rc__post-thumb mr-20">
                               <a href="/detail"><img src="assets/img/sideber/resent-post.png" alt=""></a>
                               <span> <i class="flaticon-right-arrows"></i></span>
                            </div>
                            <div class="rc__post-content">
                               <div class="rc__meta">
                                  <span><i class="fal fa-comments"></i> 02 Comments</span>
                               </div>
                               <h3 class="rc__post-title">
                                  <a href="/detail">{{$recentPost->judul}}</a>
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
                        @foreach ($CategoryPost as $val)
                        <li><a href="/category/{{$val->category->slug}}">{{$val->category->name}} <i class="flaticon-right-arrows"></i></a></li>
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

