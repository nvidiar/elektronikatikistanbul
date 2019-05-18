@extends('homepage.layout')
@section('section')
    <section class="wf100 p100 inner-header ">
        <div class="container"><h1>Bize ulaşın</h1>
            <ul class="gt-breadcrumb">
                <li class="first-item">
                    <i class="fas fa-home"></i>
                    <a href="{{route('home')}}">Ana sayfa</a></li>
                <li class="last-item">İletişim</li>
            </ul>
        </div>
    </section>
    <div class="gramotech-content">
        <div class="gramotech-content-area">
            <article id="post-887" class="post-887 page type-page status-publish hentry">
                <div class="gramotech-page-content">
                    <div class="fw-page-builder-content">
                        <section class="fw-main-row   gramotech-builder this-section-css-1   ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="fw-row">
                                            <div class="fw-col-xs-12 fw-col-md-6   "><p>
                                                <div role="form" class="wpcf7" id="wpcf7-f1356-p887-o1" lang="en-US"
                                                     dir="ltr">
                                                    <div class="screen-reader-response"></div>
                                                        <div class="contact-form">
                                                            <h3>Bizimle iletişime geçin</h3>
                                                            @if (count($errors) > 0)
                                                                <div class = "alert alert-danger">
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
                                                                                type="tel" name="tel" value="{{old('tel')}}"
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                                aria-required="true" aria-invalid="false"
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
                                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                </div>
                                            </div>
                                            <div class="fw-col-xs-12 fw-col-md-6   ">
                                                <div class="fw-map">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d752.1738495944578!2d28.72503230101235!3d41.0537897779907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa6e34e028669%3A0x226fa1d62c914eb4!2zVGFodGFrYWxlIE1haGFsbGVzaSwgw4dhbMSxa3XFn3UgU2suIE5vOjQsIDM0MzI1IMWeYW1sYXIgS8O2ecO8L0F2Y8SxbGFyL8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1557644291193!5m2!1str!2str" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                                                    <div class="fw-map-canvas"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="fw-main-row   gramotech-builder this-section-css-2   ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="fw-row">
                                            <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-12 fw-col-lg-12   ">
                                                <div class="fw-divider-space" style="padding-top: 55px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="fw-main-row   gramotech-builder this-section-css-3   ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="fw-row">
                                            <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-12 fw-col-lg-12   ">
                                                <div class="contact-info">
                                                    <div class="row">
                                                        <div class="col-md-12"><h3>İletişim bilgileri</h3></div>
                                                        <div class="col-md-4">
                                                            <div class="c-info"><h6>Adres:</h6>
                                                                <p> {{$address}} </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="c-info"><h6>Telefon:</h6>
                                                                <p><strong><a style="color: #555;" href="tel:{{$phone}}">0535 492 80 38</a></strong></p>
                                                                <br>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="c-info"><h6>Email:</h6>
                                                                <p><strong><a style="color: #555" href="mailto:{{$mail}}">{{$mail}}</a></strong></p>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="fw-main-row   gramotech-builder this-section-css-5   ">
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
                        </section>
                    </div>
                </div>
            </article>
        </div>
    </div>
@endsection
