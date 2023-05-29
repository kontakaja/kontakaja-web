@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="detail-contact-container">
            <div class="detail-contact">
                <div class="backdrop"></div>
                <div class="profile-card-top">
                    <a class="fa-solid fa-arrow-left-long"></a>
                    <a class="edit-contact">Edit Kontak</a>
                </div>
                <div class="profile-card-middle">
                  <div class="profile-pic">
                    <img src="" alt="">
                  </div>
                  <div class="detail-item">
                    <h1 class="contact-name">Coba Coba Aja</h1>
                    <h2 class="contact-category">Keluarga</h2>
                  </div>
              
                   
                  <div class="social-icons">
                    <div>
                      <a class="far fa-comment-dots"></a>
                      <h3>Pesan</h3>
                    </div>
                    <div>
                        <a class="fa-regular fa-phone"></a>
                        <h3>Telepon</h3>
                    </div>
                    <div>
                        <a class="fa-regular fa-video"></a>
                        <h3>Video</h3>
                    </div>
                  </div>
                  <div class="button-horizontal">
                    <div class="number">
                        <h3>Nomor Telepon</h3>
                        <h2>081283612300</h2>
                    </div>
                    <div class="whatsapp">
                        <h2>WhatsApp</h2>
                    </div>
                  </div>
                </div>
             
              </div>
        </div> 
    </div>
@endsection