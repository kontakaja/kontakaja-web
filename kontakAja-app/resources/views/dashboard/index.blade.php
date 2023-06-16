@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <section class="section">
            <div class="row justify-content-center gutter-bottom-xl">
                <div class="col-12 col-lg-7 col-xl-8 d-flex">
                    <div class="card card--overview">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="projectCard">
                                        <div class="projectTop">
                                            <h2 id="welcomeMessage">Hiii!!! {{ $user }} 🎉<br>Selamat datang
                                                kembali<br>Ayo check kegiatan kamu hari ini!!!</h2>
                                            <img src="img/groupImg/image1.png" alt="img1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-xl-4 d-flex">
                    <div class="card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header custom-header">
                                    <div class="box-info">
                                        <div class="custom-icon">
                                            <i class="bx bxs-user"></i>
                                        </div>
                                        <div class="text">
                                            <div class="text-wrapper">
                                                <h3>{{ $total_contact }}</h3>
                                                <p>Jumlah Kontak</p>
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
        <section class="section">
            <div class="section__title d-none">
                <h2>Section</h2>
            </div>
            <div class="row gutter-bottom-xl">
                <div class="col-12 col-md-6 col-xl-4 d-flex">
                    <div class="card pb-0">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Calendar</h3>
                                    </div>
                                    <div class="card__tools-more">
                                    </div>
                                </div>
                                <div class="card__body">
                                    <div class="calendar-inline" id="calendarOne">
                                        <div class="js-calendar-inline"></div>
                                    </div>
                                </div>
                                <div class="card__footer card__footer--md">
                                    <div class="card__container">
                                        <div class="calendar-widget" data-calendar="#calendarOne">
                                            <div class="calendar-widget__row">
                                                <div class="calendar-widget__item calendar-widget__item--left">
                                                    <div class="calendar-widget__day"><span
                                                            class="calendar-widget__dateday">13</span><sup
                                                            class="calendar-widget__weekday text-grey">TH</sup>
                                                    </div>
                                                    <div class="calendar-widget__month text-grey"></div>
                                                </div>
                                                <div class="calendar-widget__item">
                                                    <div class="calendar-widget__status"><span
                                                            class="circle color-green"></span><span></span>
                                                    </div>
                                                    <div class="calendar-widget__order text-grey">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 d-flex">
                    <div class="card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left my-header">
                                        <div class="table-data">
                                            <div class="order">
                                                <div class="head">
                                                    <h3>Recent Contact</h3>
                                                </div>
                                                <div class="contact-list">
                                                    @foreach ($recentContacts as $contact)
                                                        <div class="contact-item">
                                                            @if ($contact->image)
                                                                <div class="">
                                                                    <img src="{{ asset('storage/' . $contact->image) }}"
                                                                        alt="Contact image {{ $user }}">
                                                                </div>
                                                            @else
                                                                <div>
                                                                    <img src="{{ asset('img/content/humans-2/item-1.jpg') }}"
                                                                        alt="Contact image {{ $user }}">
                                                                </div>
                                                            @endif
                                                            <p>{{ $contact->name }}</p>
                                                        </div>
                                                        <br>
                                                    @endforeach
                                                </div>
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
    </div>
@endsection
