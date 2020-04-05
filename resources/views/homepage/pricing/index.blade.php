@extends('homepage.layout')
@section('title','Elektronik Atık İstanbul | Fiyatlandırma')
@section('keyword','elektronik atik,elektronik hurda, hurda anakart, hurda cep telefonu , hurda alımı, hakkımızda')
@section('section')
    <section class="wf100 p100 inner-header ">
        <div class="container"><h1>Fiyatlandırma</h1>
            <ul class="gt-breadcrumb">
                <li class="first-item">
                    <i class="fas fa-home"></i>
                    <a href="{{route('home')}}">Ana sayfa</a></li>
                <li class="last-item">Fiyatlandırma</li>
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
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Hurda Türü</th>
                                                        <th scope="col">Fiyatlandırma</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($items as $item)
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>{{$item->title}}</td>
                                                        <td>{{$item->price}}</td>
                                                    </tr>


                                                        @empty

                                                        <tr>
                                                            <td style="text-align:center" colspan="3"> Fiyatlarımız güncelleniyor... </td>
                                                        </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                                <br><br><br>
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
