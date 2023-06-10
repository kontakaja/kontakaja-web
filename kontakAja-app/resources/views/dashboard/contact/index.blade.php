@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="page-header">
            <h1 class="page-header__title">Kontak <span class="text-grey">({{ $total_contact }})</span></h1>
        </div>
        <div class="toolbox">
            <div class="toolbox__row row gutter-bottom-xs">
                <div class="toolbox__right col-12 col-lg-auto">
                    <div class="toolbox__right-row row row--xs flex-nowrap">
                        <div class="col col-lg-auto">
                            <form class="toolbox__search" action="/dashboard/contacts">
                                <div class="input-group input-group--white input-group--prepend input-group-lg">
                                    <input type="text" class="form-control" placeholder="Cari kontak"
                                        aria-label="Recipient's username" aria-describedby="button-addon2"
                                        value="{{ request('search') }}" name="search" autocomplete="off">
                                    <button class="btn btn-outline-primary" type="submit"
                                        id="button-addon2">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-auto ml-auto">
                            <button class="button-add button-add--blue">
                                <a href="/dashboard/contacts/create">
                                    <span class="button-add__icon">
                                        <svg class="icon-icon-plus">
                                            <use xlink:href="#icon-plus"></use>
                                        </svg></span><span class="button-add__text">
                                    </span>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-wrapper tab-content">
            <div class="tab-pane fade show active" id="tab-list">
                <div class="contacts-grid">
                    @foreach ($contacts as $contact)
                        <div class="contact-card card">
                            <div class="card__wrapper">
                                <div class="card__container">
                                    <div class="card__body">
                                        <a href="{{ route('show-contact', $contact->id) }}" class="text-center">
                                            <div class="contact-card__avatar">
                                                @if ($contact->image)
                                                    <div class="">
                                                        <img src="{{ asset('storage/' . $contact->image) }}"
                                                            alt="Contact image {{ $user }}" class="rounded-circle" style="height: 200px; width: 200px;">
                                                    </div>
                                                @else
                                                    <div>
                                                        <img src="{{ asset('img/content/humans-2/item-1.jpg') }}"
                                                            alt="Contact image {{ $user }}" class="rounded-circle">
                                                    </div>
                                                @endif
                                            </div>
                                            <h4 class="contact-card__title mt-5">{{ $contact->name }}</h4>
                                            <div class="contact-card__label">
                                                <span class="label label--primary">{{ $contact->category->name }}
                                                </span>
                                            </div>
                                        </a>
                                        {{-- <button class="button-contact" data-modal="#detail">
                                            <div class="contact-card__avatar">
                                                @if ($contact->image)
                                                    <div class="">
                                                        <img src="{{ asset('storage/' . $contact->image) }}"
                                                            alt="Contact image {{ $user }}" class="rounded-circle" style="height: 200px; width: 200px;">
                                                    </div>
                                                @else
                                                    <div>
                                                        <img src="{{ asset('img/content/humans-2/item-1.jpg') }}"
                                                            alt="Contact image {{ $user }}" class="rounded-circle">
                                                    </div>
                                                @endif
                                            </div>
                                            <h4 class="contact-card__title mt-5">{{ $contact->name }}</h4>
                                            <div class="contact-card__label"><span
                                                    class="label label--primary">{{ $contact->category->name }}</span>
                                            </div>
                                        </button> --}}
                                    </div>
                                    <div class="card__footer">
                                        <div class="card__container">
                                            <div class="row row--xs justify-content-between">
                                                <div class="contact-card__address-left col-auto">
                                                    <svg class="icon-icon-phone">
                                                        <use xlink:href="#icon-phone"></use>
                                                    </svg>Nomor Telepon:
                                                </div>
                                                <div class="col-auto text-light-theme"><a
                                                        href="tel:#">{{ $contact->phone_number }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="inbox-add modal modal-compact scrollbar-thin" id="detail" data-simplebar>
        <div class="modal__overlay" data-dismiss="modal"></div>
        <div class="modal__wrap">
            <div class="modal__window">
                <div class="modal__content">
                    <div class="detail-contact-top">
                        <button class="detail-close" data-dismiss="modal">
                            <a class="fa-solid fa-arrow-left-long"></a>
                        </button>
                        <button class="detail-edit">
                            <a class="fa-solid fa-pen-to-square"></a>
                        </button>
                    </div>
                    <div class="modal__body">
                            <div class="modal__container">
                                <div class="detail-contact-middle">
                                    @if ($contact->image)
                                        <div>
                                            <img src="{{ asset('storage/' . $contact->image) }}"
                                                alt="Contact image {{ $user }}" class="profile-pic">
                                            </div>
                                        @else
                                            <img src="{{ asset('img/content/humans-2/item-1.jpg') }}"
                                                alt="Contact image {{ $user }}" class="profile-pic">
                                        @endif
                                        <div class="detail-item">
                                            <h1 class="contact-name">Anggoro</h1>
                                            <h2 class="contact-category">Keluarga</h2>
                                        </div>
                                        <div class="button-vertical">
                                            <a href="https://api.whatsapp.com/send?phone=62 (code)" target="_blank">
                                                <button class="btn-floating whatsapp">
                                                    <i class="fab fa-whatsapp" style="font-size:28px;"></i>
                                                    <h3>WhatsApp</h3>
                                                </button>
                                            </a>
                                            <a href="tel:#number">
                                                <button class="btn-floating telepon">
                                                    <i class="fa fa-phone" style="font-size:28px;"></i>
                                                    <h3>Telepon</h3>
                                                </button>
                                            </a>
                                            <a href="https://goo.gl/maps/">
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
                                                <h3><a href="mailto:#">{{ $contact->email }}</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detail-delete">
                                        <button class="btn-delete">Delete</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
