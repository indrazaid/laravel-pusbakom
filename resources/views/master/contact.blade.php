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
                      <span class="sub-page-black">Contact Us</span>
                   </div>
                   <h3 class="breadcrumb__title mb-20">Contact Us</h3>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!--  breadcrumb-area  end -->
 <!-- contact area start -->
 <div class="tp-faq-area pb-120 pt-50 grey-bg-1 p-relative">
    <div class="container">
       <div class="row">
          <div class="col-xl-5 col-lg-5 col-md-6 col-12">
             <div class="contact">
                <div class="contact__form mb-30">
                   <form id="contact-form" action="https://html.weblearnbd.net/insurez/assets/mail.php">
                      <div class="contact__form-wrap">
                         <div class="tp-form-box">
                            <span class="tp-form-subtitle right">contact us</span>
                            <h2 class="tp-form-title mb-30 mt-10">
                               Write an email
                            </h2>
                         </div>
                         <div class="contact__input">
                            <input class="w-100" type="text" placeholder="Enter name" name="name" required="">
                         </div>
                         <div class="contact__input">
                            <input class="w-100" type="email" placeholder="Email address" name="email" required="">
                         </div>
                         <div class="contact__input">
                            <input class="w-100" type="text" placeholder="Phone number" name="number" required="">
                         </div>
                         <div class="contact__input">
                            <textarea class="w-100" placeholder="Message" name="message" required=""></textarea>
                         </div>

                         <div class="contact__button">
                            <button class="tp-btn-3" type="submit">SEND A MEASSAGE</button>
                         </div>
                      </div>
                   </form>
                   <p class="ajax-response"></p>
                </div>
             </div>
          </div>
          <div class="col-xl-7 col-lg-7 col-md-6 col-12">
             <div class="contact ml-40">
                <div class="map-area">
                   <div class="tpmap-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3978.8455764003165!2d104.46269698055335!3d-4.250287181952045!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e39030076894cad%3A0x22267490e6050a45!2sKampus%20B%20Universitas%20Nurul%20Huda!5e0!3m2!1sid!2sid!4v1717120410467!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   </div>
                </div>
                <div class="contact__wrap mt-25">
                   <div class="contact__info-item d-flex align-items-start mb-35">
                      <div class="contact__info-icon">
                         <i class="flaticon-phone-call-1"></i>
                      </div>
                      <div class="contact__info-text">
                         <h4>087782027638</h4>
                      </div>
                   </div>
                   <div class="contact__info-item d-flex align-items-start mb-35">
                      <div class="contact__info-icon">
                         <i class="flaticon-email"></i>
                      </div>
                      <div class="contact__info-text">
                         <h4><a href="https://html.weblearnbd.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c22292928242d29203c240c2f23213c2d2235622f2321">pusbakom@unuha.ac.id</a></h4>
                      </div>
                   </div>
                   <div class="contact__info-item d-flex align-items-start">
                      <div class="contact__info-icon">
                         <i class="flaticon-location-1"></i>
                      </div>
                      <div class="contact__info-text">
                         <h4>Kampus A & B: Jl. Kota Baru, Sukaraja, Buay Madang, OKU Timur</h4>

                      </div>

                      <div class="contact__info-text">
                       

                        <h4>Kampus C: Jl. Tanah Merah Jembatan 2, Tanah Merah, Belitang Madang Raya OKU Timur</h4>
                     </div>
                   </div>
                   <div class="contact__social pt-30">
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
          </div>
       </div>
    </div>
 </div>
 <!-- contact area end -->
    
@endsection