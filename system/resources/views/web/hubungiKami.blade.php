@extends('layout.landing')

@section('title', 'SIRInap - Sistem Informasi Reservasi Penginapan')

@section('content')

    <section class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <ul class="villoz-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>Hubungi Kami</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
            <h2 class="page-header__title">Hubungi Kami</h2>
        </div><!-- /.container -->
        <div class="banner-form__position wow fadeInUp" data-wow-delay="300ms">
            <div class="container">

                @include('layout.filter')

            </div>
        </div>
    </section><!-- /.page-header -->

    <section class="contact-one" style="margin-top: 5em;">
        <div class="container">
            <div class="row gutter-y-60">
                @foreach ($list_penginapan as $penginapan)
                    <div class="col-md-12 col-lg-4 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="contact-one__left">
                            <h3 class="text-center pt-3 text-decoration-underline">{{$penginapan->nama}}</h3>
                            
                            <ul class="list-unstyled contact-one__info">
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-place"></i>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Alamat</p> <!-- /.contact-one__info__text -->
                                        <h4 class="contact-one__info__title"><a href="#">{{$penginapan->alamat}}</a></h4><!-- /.contact-one__info__title -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-phone-call-1"></i>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Telepon</p>
                                        <!-- /.contact-one__info__text -->
                                        <h4 class="contact-one__info__title"><a href="tel:{{$penginapan->telepon}}">{{$penginapan->telepon}}</a> <br>
                                            {{-- <a href="tel:+6800-320-60">+6800-320-60</a> --}}
                                        </h4><!-- /.contact-one__info__title -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                                <li class="contact-one__info__item">
                                    <div class="contact-one__info__icon">
                                        <i class="icon-at"></i>
                                    </div><!-- /.contact-one__info__icon -->
                                    <div class="contact-one__info__content">
                                        <p class="contact-one__info__text">Email</p>
                                        <!-- /.contact-one__info__text -->
                                        <h4 class="contact-one__info__title"><a
                                                href="mailto:{{$penginapan->admin->email}}">{{$penginapan->admin->email}}</a> <br>
                                            {{-- <a href="mailto:mail@villa.com">mail@villa.com</a> --}}
                                        </h4>
                                        <!-- /.contact-one__info__title -->
                                    </div><!-- /.contact-one__info__content -->
                                </li>
                            </ul><!-- /.list-unstyled -->
                            
                        </div><!-- /.contact-one__left -->
                    </div><!-- /.col-md-12 col-lg-5 -->
                @endforeach

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

@endsection
