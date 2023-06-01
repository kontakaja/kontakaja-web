@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="detail-contact-container">
            <div class="detail-contact">
                <div class="backdrop"></div>
                <div class="detail-contact-top">
                    <a class="fa-solid fa-arrow-left-long"></a>
                    <a class="fa-solid fa-pen-to-square"></a>
                </div>
                <div class="detail-contact-middle">
                  <div class="profile-pic">
                    {{-- <img src="" alt="Contact profile {{ $user }}"> --}}
                  </div>
                  <div class="detail-item">
                    <h1 class="contact-name">Anggoro</h1>
                    <h2 class="contact-category">Keluarga</h2>
                  </div>
                  <div class="button-vertical">
                    <a href="https://wa.me/number.." target="_blank">
                        <button class="btn-floating whatsapp">
                            <i class="fa fa-whatsapp" style="font-size:28px;"></i>
                            <h3>WhatsApp</h3>
                        </button>
                    </a>
                    <a href="tel:#number">
                        <button class="btn-floating telepon">
                            <i class="fa fa-phone" style="font-size:28px;"></i>
                            <h3>Telepon</h3>
                        </button>
                    </a>
                    <a href="link">
                        <button class="btn-floating maps">
                            <i class='fas fa-map-marker-alt' style="font-size:28px;"></i>
                            <h3>Maps</h3>
                        </button>
                    </a>
                </div>
                <div class="button-horizontal">
                    <div class="box-detail number">
                        <h3>081123456789</h3>
                    </div>
                    <div class="box-detail email">
                        <h3><a href="mailto:#">example@mail.com</a></h3>
                    </div>
                  </div>
                </div>
                <div class="delete">
                    <h3>Delete</h3>
                </div>

              </div>
        </div>
    </div>
@endsection
