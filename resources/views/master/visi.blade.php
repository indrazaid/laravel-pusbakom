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
                      <span class="sub-page-black"> Visi Misi</span>
                   </div>
                   <h3 class="breadcrumb__title mb-20">Visi & Misi</h3>
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
                   
                   <div class="postbox__content">
                     
                      <h3 class="postbox__title">
                        Visi
                      </h3>
                      <div class="postbox__text" style="text-align: justify;">
                         <p>Menjadi pusat pelatihan dan kegiatan bahasa yang professional bagi civitas akademika dan masyarakat umum.
                        </p>
                         
                      </div><br>

                      <h3 class="postbox__title">
                         Misi
                       </h3>

                      <div class="postbox__text" style="text-align: justify;">
                        <ol><li> <p>Memberikan layanan kursus dan pelatihan bahasa untuk menunjang peningkatan kualitas civitas akademika (dosen, staf dan mahasiswa) dan masyarakat umum.</p></li>
                        <li><p>Menyediakan pelayanan pengujian bahasa Inggris (setara TOEFL)  dan Bahasa Indonesia (UKBI) kepada civitas akademika dan masyarakat umum.</p></li>
                        <li><p>Menjalin kerja sama dengan lembaga-lembaga kebahasaan yang lain demi terwujudnya akselerasi program-program bahasa</p></li>
                        <li><p>Berperan serta secara aktif dalam pemberdayaan masyarakat melalui aktivitas kebahasaan.</p></li>
                        </ol>
                        
                      </div>
                      
                     
                   </div>
                </article>
             </div>
          </div>
          {{-- awal sidebar --}}
          <div class="col-xxl-4 col-xl-4 col-lg-4">
            <div class="sidebar__wrapper">
               
            {{-- @include('partial.sidebar') --}}
            
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
          {{-- akhir sidebar --}}
       </div>
    </div>
 </section>
 <!-- postbox area end -->
 
 @endsection

 