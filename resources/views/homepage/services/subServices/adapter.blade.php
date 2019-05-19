@extends('homepage.layout')
@section('title','Elektronik Atık İstanbul | Hurda Adaptör')
@section('keyword','elektronik atik,elektronik hurda, hurda adaptör, hurda güç kaynağı,hurda transformatör,hurda balast,hurda trafo')
@section('section')
    <section class="wf100 p100 inner-header">
        <div class="container"><h1>Adaptör Hurdası Alımı</h1>
            <ul class="gt-breadcrumb">
                <li class=""><a href="{{route('home')}}"><i class="fas fa-home"></i> Ana sayfa</a></li>
                <li><a href="{{route('services')}}">Hurda Alımları</a></li>
                <li class="current">Adaptör | Transformatör | Bobin</li>
            </ul>
        </div>
    </section>
    <div class="gramotech-content">
        <div class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 pull-left">
                        <div class="blog-single-content">

                            <h3>Adaptör Hurdası</h3>
                            <p>
                                Kullanım ömrünü tamamlamış arızalı adaptör,transformatör,led driver, balast veya tüm
                                akım dengeleyicileriniz değerinde alınır. Hemen fiyat almak için aşağıdaki formu doldurun.

                            </p>
                            <br>
                            <ul style="margin-botton:15px !important;" class="small-gallery">
                                <li><img src="../../wp-content/uploads/2019/02/mini/trans.jpg" alt="img"></li>
                                <li><img src="../../wp-content/uploads/2019/02/mini/bob.jpg" alt="img"></li>
                                <li><img src="../../wp-content/uploads/2019/02/mini/adap.jpg" alt="img"></li>
                            </ul>


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
