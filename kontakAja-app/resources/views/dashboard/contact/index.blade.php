@extends('dashboard.layouts.main')
@section('container')
    @if (session()->has('add'))
        <div class="alert alert-success text-center" role="alert" style="margin: 1rem 35%;">
            {{ session('add') }}
        </div>
    @endif
    @if (session()->has('update'))
        <div class="alert alert-primary text-center" role="alert" style="margin: 1rem 35%;">
            {{ session('update') }}
        </div>
    @endif
    @if (session()->has('delete'))
        <div class="alert alert-danger text-center" role="alert" style="margin: 1rem 35%;">
            {{ session('delete') }}
        </div>
    @endif
    <div class="container">
        <div class="page-header">
            <h1 class="page-header__title text-light">Kontak <span class="text-light">({{ $total_contact }})</span></h1>
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
                                                            alt="Contact image {{ $user }}" class="rounded-circle"
                                                            style="height: 200px; width: 200px;">
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
                                    </div>
                                    <div class="card__footer">
                                        <div class="card__container">
                                            <div class="row row--xs justify-content-between">
                                                <div class="contact-card__phone-left col-auto">
                                                    <svg class="icon-icon-phone">
                                                        <use xlink:href="#icon-phone"></use>
                                                    </svg>Nomor Telepon:
                                                </div>
                                                <div class="col-auto text-light-theme">
                                                    <a class="contact-number" href="tel:{{ $contact->phone_number }}">{{ $contact->phone_number }}</a>
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

    <div class="d-flex justify-content-center">
        {{ $contacts->links() }}
    </div>

@endsection
