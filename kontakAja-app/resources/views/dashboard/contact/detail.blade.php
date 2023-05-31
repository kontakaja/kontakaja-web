@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="detail-contact-container">
            <div class="detail-contact">
                <div class="backdrop"></div>
                <div class="detail-contact-top">
                    <a class="fa-solid fa-arrow-left-long"></a>
                    <a class="edit-contact">Edit Kontak</a>
                </div>
                <div class="detail-contact-middle">
                  <div class="profile-pic">
                    <img src="" alt="Contact profile {{ $user }}">
                  </div>
                  <div class="detail-item">
                    <h1 class="contact-name">Anggoro</h1>
                    <h2 class="contact-category">Keluarga</h2>
                  </div>

                  <div class="button-vertical">
                    <div class="whatsapp">
                      <a class="far fa-comment-dots"></a>
                      <h3>WhatsApp</h3>
                    </div>
                    <div>
                        <a class="fa fa-phone" href="tel:#"></a>
                        <h3>Telepon</h3>
                    </div>
                    <div>
                        <a class="fa-solid fa-location-dot"></a>
                        <h3>Maps</h3>
                    </div>
                  </div>
                  <div class="button-horizontal">
                    <div class="number">
                          <h2>081283612300</h2>
                    </div>
                    <div class="email">
                        <a href="mailto:#">example@mail.com</a>
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
