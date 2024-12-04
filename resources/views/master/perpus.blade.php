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
                         <span><a href="/detail"><i class="far fa-user"></i>By Themepure</a></span>
                         <span><a href="/detail"><i class="fal fa-comments"></i> 02 Comments</a></span>
                      </div>
                      <h3 class="postbox__title">
                        Start an insurance policy for your future
                      </h3>
                      <div class="postbox__text">
                         <p>Curabitur luctus euismod metus, eu pellentesque mauris tempus sit amet. Proin ante odio,
                            posuere id lacus auctor, elementum tempor tellus. Integer mattis justo eu enim tempus
                            lacinia. Fusce vitae enim diam. Ut commodo viverra magna non egestas. Integer sodales
                            massa at odio tristique volutpat. Proin posuere odio maximus, eleifend felis sed, ultrices
                            turpis. Proin ultricies sodales nisl vel euismod. Praesent vestibulum sem lorem, eget
                            fermentum justo iaculis et. Integer tellus dolor, venenatis vitae tortor et, accumsan
                            laoreet sem. Sed laoreet rutrum ex, et efficitur enim pharetra non. Mauris rhoncus, odio
                            eu vulputate interdum, ipsum erat sagittis purus, vitae lobortis eros purus non augue.
                            Nullam molestie augue diam, scelerisque porta dolor mollis a. Cras condimentum elementum
                            eros at finibus. pharetra condimentum sagittis. Donec consequat velit et nisi scelerisque,
                            quis iaculis felis tincidunt. In faucibus sapien ut elit hendrerit, et tristique mauris
                            lacinia. Phasellus tincidunt scelerisque lectus sed scelerisque. Donec at enim facilisis,
                            tempus nisi quis, pharetra enim</p>
                         <p>Curabitur luctus nisl in justo maximus egestas. Curabitur sit amet sapien vel nunc
                            molestie pulvinar at vitae quam. Aliquam lobortis nisi vitae congue consectetur. Aliquam
                            et quam non metus ultrices faucibus sit amet non nisi. Duis at urna vel turpis aliquet
                            venenatis et eget ipsum. Praesent felis nibh, dictum eu tincidunt sed, elementum at dolor.
                            Duis ultricies urna a tortor faucibus venenatis. Phasellus consequat eu lacus laoreet
                            posuere. Sed ipsum quam, placerat porta aug</p>
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
 