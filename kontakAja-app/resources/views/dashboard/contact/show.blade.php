@extends('dashboard.layouts.main')

@section('container')
    <div class="container" style="margin-top: 0; padding-top: 0;">
        <div class="detail-contact-container bg-white rounded pb-3">
            <div class="detail-contact-top">
                <button class="detail-close" data-dismiss="modal">
                    <a href="/dashboard/contacts" class="fa-solid fa-arrow-left-long"></a>
                </button>
                <button class="detail-edit">
                    <a href="{{ route('edit-contact', $contact->id) }}" class="fa-solid fa-pen-to-square"></a>
                </button>
            </div>
            <div class="detail-contact-middle">
                @if ($contact->image)
                    <div>
                        <img src="{{ asset('storage/' . $contact->image) }}" alt="Contact image {{ $user }}"
                            class="profile-pic">
                    </div>
                @else
                    <img src="{{ asset('img/content/humans-2/item-1.jpg') }}" alt="Contact image {{ $user }}"
                        class="profile-pic">
                @endif
                <div class="detail-item">
                    <h1 class="contact-name">{{ $contact->name }}</h1>
                    <h2 class="contact-category label label--primary">{{ $contact->category->name }}</h2>
                </div>
                <div class="button-vertical">
                    <a href="https://api.whatsapp.com/send?phone=62{{ $contact->phone_number }}" target="_blank">
                        <button class="btn-floating whatsapp">
                            <i class="fab fa-whatsapp" style="font-size:28px;"></i>
                            <h3>WhatsApp</h3>
                        </button>
                    </a>
                    <a href="tel:{{ $contact->phone_number }}">
                        <button class="btn-floating telepon">
                            <i class="fa fa-phone" style="font-size:28px;"></i>
                            <h3>Telepon</h3>
                        </button>
                    </a>
                    <a href="https://goo.gl/maps/{{ $contact->address }}">
                        <button class="btn-floating maps">
                            <i class='fas fa-map-marker-alt' style="font-size:28px;"></i>
                            <h3>Maps</h3>
                        </button>
                    </a>
                </div>
                <div class="button-horizontal">
                    <div class="box-detail number">
                        <h3><i class="fa fa-phone"></i> {{ $contact->phone_number }}</h3>
                    </div>
                    <div class="box-detail email">
                        <h3><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></h3>
                    </div>
                    <div class="box-detail address">
                        <h3><i class="fas fa-map-marker-alt"></i> {{ $contact->address }}</h3>
                    </div>
                </div>
            </div>
            <div class="detail-delete">
                <form action="{{ route('delete-contact', $contact->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn-delete" onclick="return confirm('Apakah kamu yakin ingin menghapus kontak ini?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
