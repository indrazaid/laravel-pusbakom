@extends('layout.main')

@section('isi')
<header class="main-header d-none d-lg-block">
    <div class="tp-header">
       <div id="header-sticky" class="tp-header__wrapper-inner">
          <div class="tp-header__logo grey-bg-1">
             <a href="index.html"><img src="assets/img/logo/logo.png" alt="" style="width: 240px;"></a>
          </div>
          <div class="tp-header__main-header">
             <div class="tp-header__top grey-bg-2">
                <div class="tp-header__top-left text-left">
                   <marquee><p class="tp-header-top-left-text white-text">Selamat Datang di Website Pusbakom</p></marquee>
                </div>
                <div class="tp-header__top-right text-end white-text">
                   <div class="tp-location mr-30">
                      <a href="https://www.google.com/maps/place/Maricopa,+AZ,+USA/@33.0435146,-112.0317544,13z/data=!3m1!4b1!4m5!3m4!1s0x872ae52ea99557e3:0x702c0500cea3bb0!8m2!3d33.0581063!4d-112.0476423"
                         target="_blank"> <i class="flaticon-telephone"></i> (0711)888 999)</a>
                   </div>
                   <div class="envelope">
                      <a href="https://html.weblearnbd.net/cdn-cgi/l/email-protection#17797272737f727b675774787a6776796e3974787a"><i class="fa-solid fa-envelope"></i>
                         <span class="__cf_email__" data-cfemail="49272c2c2d212c2539092a262439282730672a2624">[email&#160;pusbakom@unuha.ac.id]</span></a>
                   </div>
                </div>
             </div>
             <div class="tp-main-menu">
                <div class="tp-header__bottom d-flex align-items-center justify-content-between">
                   <div class="main-menu">
                      <div class="tp-header__wrapper-inner">
                         <div class="tp-header__menu text-center ">
                            <nav id="mobile-menu">
                               <ul>
                                  <li ><a href="index.html">Home</a></li>
                                  <li><a href="#">Profil</a>
                                     <ul class="sub-menu">
                                        <li><a href="/visi">Visi & Misi</a></li>
                                        
                                        <li><a href="struktur.html" style="font-size: 14px;">Struktur Organisasi </a></li>
                                     </ul>
                                  </li>
                                  <li><a href="#">Fasilitas</a>
                                     <ul class="sub-menu">
                                        
                                        <li><a href="lab-bahasa.html">Lab Bahasa</a></li>
                                        <li><a href="lab-komputer.html">Lab Komputer</a></li>
                                        <li><a href="perpus.html">Perpustakaan</a></li>
                                     </ul>
                                  </li>
                                  <li><a href="portfolio_01.html">Galeri</a></li>
                                  <li><a href="our-blog.html">Berita</a></li>
                                  <li><a href="contact.html">Contact</a></li>
                               </ul>
                            </nav>
                         </div>
                      </div>
                   </div>
                   <div class="tp-header__right-box d-flex justify-content-end align-items-center">
                      <div class="tp-header__right d-flex align-items-center">
                         <div class="tp-header-search search-open-btn">
                            <a href="javascript:void(0);"> <i class="fa-regular fa-magnifying-glass"></i></a>
                         </div>
                         <div class="tp-header__contact-number">
                            <div class="sm-clist__icon">
                               <i class="flaticon-telephone"></i>
                            </div>
                            <div class="sm-clist__text text-start ml-15 mr-25">
                               <span>Telp</span>
                               <a href="(0713)888 999 ">(0713)888 999 </a>
                            </div>
                         </div>
                         <div class="tp-header-btn">
                            <a class="tp-btn" href="contact.html">Daftar</a>
                         </div>
                      </div>
                      <div class="sidebar__menu">
                         <a class="tp-menu-bar text-black" href="#"><i class="fa-solid fa-bars"></i></a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </header>
 <div class="mobile-header d-md-none grey-bg-1">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-6">
             <div class="mobile__logo">
                <a href="index.html"><img src="assets/img/logo/pusbakom.png" alt="" style="width: 300px;"></a>
             </div>
          </div>
          <div class="col-6">
             <div class="mobile__menu text-end">
                <a class="tp-menu-bar" href="javascript:void(0)"><i class="fa-solid fa-bars"></i></a>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
