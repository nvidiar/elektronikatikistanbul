@extends('homepage.layout')
@section('section')
    <section class="wf100 p100 inner-header">
        <div class="container"><h1>Oem Hurda Alımı</h1>
            <ul class="gt-breadcrumb">
                <li class=""><a href="{{route('home')}}"><i class="fas fa-home"></i> Ana sayfa</a></li>
                <li><a href="{{route('services')}}">Hurda Alımları</a></li>
                <li class="current">Oem Hurdalar</li>
            </ul>
        </div>
    </section>
    <div class="gramotech-content">
        <div class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 pull-left">
                        <div class="blog-single-content">

                            <h3>Oem Hurdalar</h3>
                            <p>
                                İşlemci Hurdaları genel olarak eski nesil işlemcilerdir, gelişen ihtiyaçları
                                karşılayamadığı için kullanım dışı kalan bu işlemciler elektronik atık haline gelirler
                                ve elektronik atık geri dönüşüm tesisleri işlemci hurdaları nı satın alarak geri
                                kazanımlarını yaparlar. Bu sayede işlemcilerin üretimlerinde kullanılan kıymetli maden
                                ve her çeşit ekonomik değeri olan elementlerin geri dönüşümü yapılmış olmaktadır.

                            </p>
                            <p>
                                İşlemci hurdaları çok yüksek değerli elektronik atıklardır , bunun sebebi üretimlerinde
                                kullanılan elementler içerisinde altın gümüş paladyum rodyum gibi ender metaller
                                bulunması ve bu metallerin kıymetli madenler olarak endüstri hammaddesi olmalarıdır. Bu
                                sebeple hurda işlemciler çok yüksek değerli elektronik atıklar olarak
                                değerlendirilmektedir, bunun bilincinde hareket eden bilgisayar donanım şirketleri ve
                                geri dönüşüm firmaları ellerinde bulunan hurda işlemcilerin geri dönüşüm yapılması ile
                                ekonomik değer kazandığını bilerek hurda işlemcileri elektronik atık geri dönüşümü
                                tesislerine satarlar ve ek gelir elde etme olanakları olur.
                            </p>
                            <p>
                                Ram Hurdaları yüksek değerli elektronik atıklardır ve üretimlerinde kullanılan kıymetli
                                madenler ve nadir elementlerin geri kazanımı değerlerinin yüksek olmaları sebebi ile çok
                                yüksek değerli elektronik atıklar olarak değerlendirilirler. Özellikle sarı tırnaklı ram
                                modüllerinin değerleri neredeyse plastik işlemci hurdaları kadar yüksektir, gri tırnaklı
                                ram modülleri de metal işlemci hurdaları seviyesinde ekonomik değere sahiptirler.
                            </p>
                            <p>Sizde oem hurdalarınızı değerlendirmek ve en iyi fiyat teklifini almak için iletişim formunu doldurun.</p>
                            <br>
                            <ul style="margin-bottom:15px !important;" class="small-gallery">
                                <li><img src="../../wp-content/uploads/2019/02/mini/cpu.png" alt="img"></li>
                                <li><img src="../../wp-content/uploads/2019/02/mini/vga.jpg" alt="img"></li>
                                <li><img src="../../wp-content/uploads/2019/02/mini/ram.jpg" alt="img"></li>
                            </ul>
                            <br><br>

                            <div id="respond" class="comment-respond">
                                <div class="contact-form">
                                    <h3>Bizimle iletişime geçin</h3>
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{route('contactUs')}}" method="post">
                                        @csrf
                                        <ul class="cform">
                                            <li class="half pr-15"><span
                                                    class="wpcf7-form-control-wrap text-223"><input
                                                        type="text" name="name" value="{{old('name')}}"
                                                        size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="Adınız Soyadınız"></span></li>
                                            <li class="half pl-15"><span
                                                    class="wpcf7-form-control-wrap email-931"><input
                                                        type="text" name="email" value="{{old('email')}}"
                                                        size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="Email"></span></li>
                                            <li class="half pr-15"><span
                                                    class="wpcf7-form-control-wrap text-223">
                                                                            <input
                                                                                type="tel" name="tel"
                                                                                value="{{old('tel')}}"
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                                placeholder="Telefon"></span></li>
                                            <li class="half pl-15"><span
                                                    class="wpcf7-form-control-wrap text-223"><input
                                                        type="text" name="subject" value="{{old('subject')}}"
                                                        size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="Konu"></span></li>
                                            <li class="full"><span
                                                    class="wpcf7-form-control-wrap textarea-255"><textarea
                                                        name="message" cols="40" rows="10"
                                                        class="wpcf7-form-control wpcf7-textarea textarea-control"
                                                        aria-invalid="false"
                                                        placeholder="Mesaj">{{old('message')}}</textarea></span>
                                            </li>
                                            <li class="full"><input type="submit" value="Gönder"
                                                                    class="wpcf7-submit fsubmit">
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
