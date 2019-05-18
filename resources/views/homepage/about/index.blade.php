@extends('homepage.layout')
@section('section')
    <section class="wf100 p100 inner-header ">
        <div class="container"><h1>Hakkımızda</h1>
            <ul class="gt-breadcrumb">
                <li class="first-item">
                    <i class="fas fa-home"></i>
                    <a href="{{route('home')}}">Ana sayfa</a></li>
                <li class="last-item">Hakkımızda</li>
            </ul>
        </div>
    </section>
    <div class="gramotech-content">
        <div class="gramotech-content-area">
            <article id="post-160" class="post-160 page type-page status-publish hentry">
                <div class="gramotech-page-content">
                    <div class="fw-page-builder-content">
                        <section class="fw-main-row   gramotech-builder this-section-css-1   ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="fw-row">
                                            <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-12 fw-col-lg-12   ">
                                                <div class="about-video-section wf100">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="about-text">
                                                                <h2>
                                                                    Genç,dinamik,profesyonel
                                                                </h2>
                                                                <p><strong>
                                                                        Elektronik Atık İstanbul 2007 yılında
                                                                        İstanbul'da elektronik hurdası ticareti yapmak
                                                                        üzerine kurulmuştur.
                                                                    </strong></p>
                                                                <p>
                                                                    Şirketimiz dürüst ve güvenilir bir çalışma
                                                                    sistemi benimsemiş, sektöründe yıllardır sağlam
                                                                    adımlarla ilerleyerek tecrübe ve bilgi birikimi ile
                                                                    hızla büyüyen sayılı şirketlerden biri olmuştur.
                                                                    Kurulduğumuzdan bu yana tonlarca elektronik kart
                                                                    hurdası geri dönüşümünü başarılı bir şekilde
                                                                    gerçekleştiren <b>Elektronik Atık İstanbul</b>
                                                                    arkasında her zaman yüzleri gülen mutlu müşteriler
                                                                    bırakmıştır.

                                                                </p>
                                                                <a href="{{route('contact')}}">İletişime geç</a></div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="about-video-img">
                                                                <img
                                                                    src="/wp-content/uploads/2019/02/aboutPicture.png"
                                                                    alt="img"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{--   <section class="fw-main-row   gramotech-builder this-section-css-3   ">
                               <div class="container">
                                   <div class="row">
                                       <div class="col-md-12 ">
                                           <div class="fw-row">
                                               <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-12 fw-col-lg-12   ">
                                                   <div class="fw-divider-space" style="padding-top: 50px;"></div>
                                               </div>
                                           </div>
                                           <div class="fw-row">
                                               <div class="fw-col-xs-12 fw-col-md-4   ">
                                                   <div class="shortcode-widget-area sidebar fw-sidebar ">
                                                       <div id="services_banner-2"
                                                            class="side-widget widget_services_banner gramotech-widget">
                                                           <div class="story-title-bg">
                                                               <strong class="t1">ecova.</strong>
                                                               <strong class="t2">20+</strong>
                                                               <strong class="t3">Years of Services</strong></div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="fw-col-xs-12 fw-col-md-8   ">
                                                   <div class="section-title-2"><h5>About our History</h5>
                                                       <h2>Our Success Story</h2></div>
                                                   <div class="eco-history">
                                                       <div class="timeline-slider">
                                                           <div class="timeline-nav">
                                                               <div><span><strong>2000 - 2002</strong></span></div>
                                                               <div><span><strong>2002 - 2006</strong></span></div>
                                                               <div><span><strong>2006 - 2009</strong></span></div>
                                                               <div><span><strong>2009 - 2012</strong></span></div>
                                                               <div><span><strong>2012 - 2015</strong></span></div>
                                                               <div><span><strong>2015 - 2018</strong></span></div>
                                                           </div>
                                                           <div class="timeline">
                                                               <div>
                                                                   <div class="row">
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>We Started</h6>
                                                                               <p> In 1998, We took step towards to make
                                                                                   healthy and safe Eco Environment in the
                                                                                   different fields, and our passion is: to
                                                                                   clean the Eco Environment for the next
                                                                                   generations who shall face the problem
                                                                                   in future.</p></div>
                                                                       </div>
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>Results of
                                                                                   Hardwork</h6>
                                                                               <p> We have a very strong group of our
                                                                                   senior team members and volunteers. But
                                                                                   I must explain to you how all this
                                                                                   mistaken idea of denounce pleasure and
                                                                                   praising pain was born and I will give
                                                                                   you a complete account.</p></div>
                                                                       </div>
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>Project</h6>
                                                                               <p> On the other hand, we denounce with
                                                                                   righteous indignation and dislike men
                                                                                   who are so beguiled and demoralized by
                                                                                   the charms of pleasure of the moment, so
                                                                                   blinded by desire, that they cannot
                                                                                   foresee.</p></div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <div>
                                                                   <div class="row">
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>Results of
                                                                                   Hardwork</h6>
                                                                               <p> We have a very strong group of our
                                                                                   senior team members and volunteers. But
                                                                                   I must explain to you how all this
                                                                                   mistaken idea of denounce pleasure and
                                                                                   praising pain was born and I will give
                                                                                   you a complete account.</p></div>
                                                                       </div>
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>Project</h6>
                                                                               <p> On the other hand, we denounce with
                                                                                   righteous indignation and dislike men
                                                                                   who are so beguiled and demoralized by
                                                                                   the charms of pleasure of the moment, so
                                                                                   blinded by desire, that they cannot
                                                                                   foresee.</p></div>
                                                                       </div>
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>We Started</h6>
                                                                               <p> In 1998, We took step towards to make
                                                                                   healthy and safe Eco Environment in the
                                                                                   different fields, and our passion is: to
                                                                                   clean the Eco Environment for the next
                                                                                   generations who shall face the problem
                                                                                   in future.</p></div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <div>
                                                                   <div class="row">
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>We Started</h6>
                                                                               <p> In 1998, We took step towards to make
                                                                                   healthy and safe Eco Environment in the
                                                                                   different fields, and our passion is: to
                                                                                   clean the Eco Environment for the next
                                                                                   generations who shall face the problem
                                                                                   in future.</p></div>
                                                                       </div>
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>Results of
                                                                                   Hardwork</h6>
                                                                               <p> We have a very strong group of our
                                                                                   senior team members and volunteers. But
                                                                                   I must explain to you how all this
                                                                                   mistaken idea of denounce pleasure and
                                                                                   praising pain was born and I will give
                                                                                   you a complete account.</p></div>
                                                                       </div>
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>Project</h6>
                                                                               <p> On the other hand, we denounce with
                                                                                   righteous indignation and dislike men
                                                                                   who are so beguiled and demoralized by
                                                                                   the charms of pleasure of the moment, so
                                                                                   blinded by desire, that they cannot
                                                                                   foresee.</p></div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <div>
                                                                   <div class="row">
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>Results of
                                                                                   Hardwork</h6>
                                                                               <p> We have a very strong group of our
                                                                                   senior team members and volunteers. But
                                                                                   I must explain to you how all this
                                                                                   mistaken idea of denounce pleasure and
                                                                                   praising pain was born and I will give
                                                                                   you a complete account.</p></div>
                                                                       </div>
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>Project</h6>
                                                                               <p> On the other hand, we denounce with
                                                                                   righteous indignation and dislike men
                                                                                   who are so beguiled and demoralized by
                                                                                   the charms of pleasure of the moment, so
                                                                                   blinded by desire, that they cannot
                                                                                   foresee.</p></div>
                                                                       </div>
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>We Started</h6>
                                                                               <p> In 1998, We took step towards to make
                                                                                   healthy and safe Eco Environment in the
                                                                                   different fields, and our passion is: to
                                                                                   clean the Eco Environment for the next
                                                                                   generations who shall face the problem
                                                                                   in future.</p></div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <div>
                                                                   <div class="row">
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>We Started</h6>
                                                                               <p> In 1998, We took step towards to make
                                                                                   healthy and safe Eco Environment in the
                                                                                   different fields, and our passion is: to
                                                                                   clean the Eco Environment for the next
                                                                                   generations who shall face the problem
                                                                                   in future.</p></div>
                                                                       </div>
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>Results of
                                                                                   Hardwork</h6>
                                                                               <p> We have a very strong group of our
                                                                                   senior team members and volunteers. But
                                                                                   I must explain to you how all this
                                                                                   mistaken idea of denounce pleasure and
                                                                                   praising pain was born and I will give
                                                                                   you a complete account.</p></div>
                                                                       </div>
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>Project</h6>
                                                                               <p> On the other hand, we denounce with
                                                                                   righteous indignation and dislike men
                                                                                   who are so beguiled and demoralized by
                                                                                   the charms of pleasure of the moment, so
                                                                                   blinded by desire, that they cannot
                                                                                   foresee.</p></div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                               <div>
                                                                   <div class="row">
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>Results of
                                                                                   Hardwork</h6>
                                                                               <p> We have a very strong group of our
                                                                                   senior team members and volunteers. But
                                                                                   I must explain to you how all this
                                                                                   mistaken idea of denounce pleasure and
                                                                                   praising pain was born and I will give
                                                                                   you a complete account.</p></div>
                                                                       </div>
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>Project</h6>
                                                                               <p> On the other hand, we denounce with
                                                                                   righteous indignation and dislike men
                                                                                   who are so beguiled and demoralized by
                                                                                   the charms of pleasure of the moment, so
                                                                                   blinded by desire, that they cannot
                                                                                   foresee.</p></div>
                                                                       </div>
                                                                       <div class=" col-4">
                                                                           <div class="timeline-box"><h6>We Started</h6>
                                                                               <p> In 1998, We took step towards to make
                                                                                   healthy and safe Eco Environment in the
                                                                                   different fields, and our passion is: to
                                                                                   clean the Eco Environment for the next
                                                                                   generations who shall face the problem
                                                                                   in future.</p></div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="fw-row">
                                               <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-12 fw-col-lg-12   ">
                                                   <div class="fw-divider-space" style="padding-top: 80px;"></div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </section>--}}
                        <section class="fw-main-row   gramotech-builder this-section-css-5   ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="fw-row">
                                            <div class="fw-col-xs-12 fw-col-md-8   ">
                                                <div class="section-title-2">
                                                    <h5>Neden bizi tercih etmelisiniz?</h5> <br>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="eco-box">
                                                            <span class="econ-icon"><i
                                                                    class="far fa-handshake"></i></span>
                                                            <h5>En iyi fiyat garantisi</h5>
                                                            <p>
                                                                Sektörün en iddialı fiyatlarını biz veririz, sizlere
                                                                başka alternatifler aratmayız.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="eco-box">
                                                            <span class="econ-icon"><i class="fas fa-heart"></i></span>
                                                            <h5>Mutlu müşteriler</h5>
                                                            <p>
                                                                Her işin sonunda arkamızda bıraktığımız sayısız memnun müşteri...
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="eco-box">
                                                            <span class="econ-icon"><i class="fas fa-truck"></i></span>
                                                            <h5>Hızlı yükleme</h5>
                                                            <p>
                                                                Atıklarınızı gün içerisinde sizlere zahmet vermeden
                                                                kalabalık kadromuz ile teslim alıyoruz.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="eco-box">
                                                            <span class="econ-icon"><i
                                                                    class="far fa-money-bill-alt"></i></span>
                                                            <h5>Yerinde fiyat teklifi</h5>
                                                            <p>
                                                                Elektronik atıklarınız için gereken görüşmeyi arzu
                                                                ettiğiniz takdirde yüz yüze yapıyoruz.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fw-col-xs-12 fw-col-md-4   ">
                                                <div class="choose-ecova">
                                                    <div class="volunteer-form">
                                                        <div class="section-title"><h3>Sizi arayalım</h3></div>
                                                        <form id="" method="post">
                                                            <ul>
                                                                <li>
                                                                    <input type="text" class="form-control"
                                                                           name="name" id="first_name"
                                                                           placeholder="Ad Soyad"></li>
                                                                <li>
                                                                    <input type="text" class="form-control"
                                                                           name="tel" id="last_name"
                                                                           placeholder="Telefon"></li>
                                                                <li>
                                                                    <input type="submit" class="fsubmit"
                                                                           value="Gönder"></li>
                                                            </ul>
                                                        </form>
                                                        <div class="status"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                      {{--  <section class="fw-main-row   gramotech-builder this-section-css-9   ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="fw-row">
                                            <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-12 fw-col-lg-12   ">
                                                <div class="partner-logos wf100">
                                                    <div id="partner-logos" class="owl-carousel owl-theme">
                                                        <div class="item"><img
                                                                src="../../wp-content/uploads/2019/01/plogo1-1.png"
                                                                alt="img"></div>
                                                        <div class="item"><img
                                                                src="../../wp-content/uploads/2019/01/plogo2.png"
                                                                alt="img"></div>
                                                        <div class="item"><img
                                                                src="../../wp-content/uploads/2019/01/plogo3.png"
                                                                alt="img"></div>
                                                        <div class="item"><img
                                                                src="../../wp-content/uploads/2019/01/plogo4.png"
                                                                alt="img"></div>
                                                        <div class="item"><img
                                                                src="../../wp-content/uploads/2019/01/plogo5.png"
                                                                alt="img"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="fw-main-row   gramotech-builder this-section-css-11   ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="fw-row">
                                            <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-12 fw-col-lg-12   ">
                                                <div class="fw-divider-space" style="padding-top: 80px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>  <section class="fw-main-row   gramotech-builder this-section-css-8   ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="fw-row">
                                            <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-12 fw-col-lg-12   ">
                                                <section class="testimonials-section bg-white wf100 p80">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="section-title-2 text-center">
                                                                <h5>Bizi sizden dinleyin...</h5>
                                                                <h2>Testimonials</h2>
                                                            </div>
                                                            <div id="testimonials" class="owl-carousel owl-theme">
                                                                <div class="item"><p> Proin condimentum, odio ac iaculis
                                                                        feugiat, tortor magna commodo neque, vel
                                                                        fringilla ante mi sed quam. Nunc varius tellus
                                                                        ante, ac suscipit lacus rutrum a. Mauris
                                                                        scelerisque nisl nec dolor dignissim
                                                                        hendrerit.</p>
                                                                    <div class="tuser"><img
                                                                            src="../../wp-content/uploads/2019/01/u5.jpg"
                                                                            alt="img"> <strong>C Howarth</strong>floraia
                                                                        jeans
                                                                    </div>
                                                                </div>
                                                                <div class="item"><p> Lorem ipsum dolor sit amet,
                                                                        consectetur adi pisi cing elit, sed do eiusmod
                                                                        tempor exercitationemut. industry, logistics,
                                                                        finance, business orci ultrices venenatis
                                                                        mauris. Neque porro quisquam est, qui dolorem
                                                                        ipsum quia dolor.</p>
                                                                    <div class="tuser"><img
                                                                            src="../../wp-content/uploads/2019/01/u4.jpg"
                                                                            alt="img"> <strong>Chris Johnson</strong>Anna
                                                                        Lillian
                                                                    </div>
                                                                </div>
                                                                <div class="item"><p>Lorem ipsum dolor sit amet,
                                                                        consectetur dipisicing elit, sed do eiuempor
                                                                        incididunt ut labore et dolorua. Ut enim ad
                                                                        minim veniam.</p>
                                                                    <div class="tuser"><img
                                                                            src="../../wp-content/uploads/2019/01/u3.jpg"
                                                                            alt="img"> <strong>Morgan Khan </strong>Danny
                                                                        Scotten
                                                                    </div>
                                                                </div>
                                                                <div class="item"><p>We’re one of the world&#039;s
                                                                        leading research universities. It is our
                                                                        conviction that even the ongoing academic
                                                                        programs must be kept under microscopic analysis
                                                                        and the curriculums. Learning to live, study and
                                                                        work in a thriving business.</p>
                                                                    <div class="tuser"><img
                                                                            src="../../wp-content/uploads/2019/01/u2.jpg"
                                                                            alt="img"> <strong>James Walters</strong>Director
                                                                    </div>
                                                                </div>
                                                                <div class="item"><p> Lorem ipsum dolor sit amet,
                                                                        consectetur adi pisi cing elit, sed do eiusmod
                                                                        tempor exercitationemut. industry, logistics,
                                                                        finance, business orci ultrices venenatis
                                                                        mauris. Neque porro quisquam est, qui dolorem
                                                                        ipsum quia dolor.</p>
                                                                    <div class="tuser"><img
                                                                            src="../../wp-content/uploads/2019/01/u2.jpg"
                                                                            alt="img"> <strong>Lorem Ipsum</strong>Manager
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                      --}}
                    </div>
                </div>
            </article>
        </div>
    </div>
@endsection
