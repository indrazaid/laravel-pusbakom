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
                   {{-- <div class="breadcrumb__list mb-10">
                      <span><a href="index.html">INSUREZ </a></span>
                      <span class="dvdr"> / </span>
                      <span class="sub-page-black"> Our Portfolio 01</span>
                   </div> --}}
                   <h3 class="breadcrumb__title mb-20">Fasilitas</h3>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!--  breadcrumb-area  end -->
 <!--  portfolio-area  start -->
 <div class="tp-portfolio-warp portfolio-padding  pt-120 mb-40">
    <div class="container">
       <div class="row">
          <div class="tp-portfolio__btn-box text-center pb-60">
             <div class="tp-portfolio__button masonary-menu">
                <button class="active" data-filter="*">View All</button>
                <button data-filter=".cat1">Lab Bahasa</button>
                <button data-filter=".cat2">Lab Komputer</button>
                <button data-filter=".cat3">Perpustakaan</button>
                {{-- <button data-filter=".cat4">Strategy</button> --}}
             </div>
          </div>
       </div>
       <div class="row grid mixitup-active">
          <div class="col-xl-4 col-md-6 col-sm-6  grid-item cat1  ">
             <div class="tpproject mb-30  position-relative">
                <div class="tpproject__thumb fix">
                   <img src="assets/img/project/img.jpg" alt="">
                   <div class="project-icon">
                      <a href="portfolio-details.html"><i class="fa-solid fa-arrow-right-long"></i></a>
                   </div>
                </div>
                <div class="tpproject__content">
                   <span>Lab Bahasa</span>
                   <h3><a href="portfolio-details.html">Life Protection</a></h3>
                </div>
             </div>
          </div>
          <div class="col-xl-4  col-md-6 col-sm-6 grid-item   cat1">
             <div class="tpproject  mb-30 position-relative">
                <div class="tpproject__thumb fix">
                   <img src="assets/img/project/img2.jpg" alt="">
                   <div class="project-icon">
                      <a href="portfolio-details.html"><i class="fa-solid fa-arrow-right-long"></i></a>
                   </div>
                </div>
                <div class="tpproject__content">
                   <span>Lab Bahasa</span>
                   <h3><a href="portfolio-details.html">Insurance Policy</a></h3>
                </div>
             </div>
          </div>
          <div class="col-xl-4  col-md-6 col-sm-6 grid-item cat2  ">
             <div class="tpproject  mb-30 position-relative">
                <div class="tpproject__thumb fix">
                   <img src="assets/img/portfolio/portfolio-08.jpg" alt="">
                   <div class="project-icon">
                      <a href="portfolio-details.html"><i class="fa-solid fa-arrow-right-long"></i></a>
                   </div>
                </div>
                <div class="tpproject__content">
                   <span>Lab Komputer</span>
                   <h3><a href="portfolio-details.html">Insurance Claims</a></h3>
                </div>
             </div>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-6  grid-item cat2 ">
             <div class="tpproject  mb-30 position-relative">
                <div class="tpproject__thumb fix">
                   <img src="assets/img/portfolio/portfolio-01.jpg" alt="">
                   <div class="project-icon">
                      <a href="portfolio-details.html"><i class="fa-solid fa-arrow-right-long"></i></a>
                   </div>
                </div>
                <div class="tpproject__content">
                   <span>Lab Komputer </span>
                   <h3><a href="portfolio-details.html">Health Policy</a></h3>
                </div>
             </div>
          </div>
          <div class="col-xl-4  col-md-6 col-sm-6 grid-item cat3  ">
             <div class="tpproject  mb-30 position-relative">
                <div class="tpproject__thumb fix">
                   <img src="assets/img/portfolio/portfolio-03.jpg" alt="">
                   <div class="project-icon">
                      <a href="portfolio-details.html"><i class="fa-solid fa-arrow-right-long"></i></a>
                   </div>
                </div>
                <div class="tpproject__content">
                   <span>Perpustakaan </span>
                   <h3><a href="portfolio-details.html">Insurance Policy</a></h3>
                </div>
             </div>
          </div>
          <div class="col-xl-4  col-md-6 col-sm-6 grid-item cat3  ">
             <div class="tpproject  mb-30 position-relative">
                <div class="tpproject__thumb fix">
                   <img src="assets/img/project/img4.jpg" alt="">
                   <div class="project-icon">
                      <a href="portfolio-details.html"><i class="fa-solid fa-arrow-right-long"></i></a>
                   </div>
                </div>
                <div class="tpproject__content">
                   <span>Perpustakaan </span>
                   <h3><a href="portfolio-details.html">Insurance Claims</a></h3>
                </div>
             </div>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-6  grid-item cat3  ">
             <div class="tpproject  mb-30 position-relative">
                <div class="tpproject__thumb fix">
                   <img src="assets/img/project/project-img3.5.jpg" alt="">
                   <div class="project-icon">
                      <a href="portfolio-details.html"><i class="fa-solid fa-arrow-right-long"></i></a>
                   </div>
                </div>
                <div class="tpproject__content">
                   <span>Perpustakaan </span>
                   <h3><a href="portfolio-details.html">Health Policy</a></h3>
                </div>
             </div>
          </div>
          <div class="col-xl-4  col-md-6 col-sm-6 grid-item cat3  ">
             <div class="tpproject  mb-30 position-relative">
                <div class="tpproject__thumb fix">
                   <img src="assets/img/portfolio/portfolio-04.jpg" alt="">
                   <div class="project-icon">
                      <a href="portfolio-details.html"><i class="fa-solid fa-arrow-right-long"></i></a>
                   </div>
                </div>
                <div class="tpproject__content">
                   <span>Perpustakaan </span>
                   <h3><a href="portfolio-details.html">Insurance Claims</a></h3>
                </div>
             </div>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-6  grid-item cat3  ">
             <div class="tpproject  mb-30 position-relative">
                <div class="tpproject__thumb fix">
                   <img src="assets/img/portfolio/portfolio-02.jpg" alt="">
                   <div class="project-icon">
                      <a href="portfolio-details.html"><i class="fa-solid fa-arrow-right-long"></i></a>
                   </div>
                </div>
                <div class="tpproject__content">
                   <span>Perpustakaan </span>
                   <h3><a href="portfolio-details.html">Health Policy</a></h3>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- portfolio  area end -->
@endsection
