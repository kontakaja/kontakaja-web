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
                                        <div class="contact-card__avatar">
                                            {{-- <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"> --}}
                                                <g filter="url(#filter0_dd)">
                                                    <path
                                                        d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z"
                                                        fill="white"></path>
                                                </g>
                                                <g filter="url(#filter1_dd)">
                                                    <path
                                                        d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                                        fill="url(#imagePattern0)"></path>
                                                </g>
                                                <defs>
                                                    <filter id="filter0_dd" x="23" y="183" width="206"
                                                        height="89" filterUnits="userSpaceOnUse"
                                                        color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                        <feOffset dy="8" />
                                                        <feGaussianBlur stdDeviation="8" />
                                                        <feColorMatrix type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                            result="effect1_dropShadow" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                        <feOffset dy="16" />
                                                        <feGaussianBlur stdDeviation="16" />
                                                        <feColorMatrix type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                        <feBlend mode="normal" in2="effect1_dropShadow"
                                                            result="effect2_dropShadow" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow"
                                                            result="shape" />
                                                    </filter>
                                                    <filter id="filter1_dd" x="0" y="0" width="252"
                                                        height="252" filterUnits="userSpaceOnUse"
                                                        color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                        <feOffset dy="12" />
                                                        <feGaussianBlur stdDeviation="8" />
                                                        <feColorMatrix type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                            result="effect1_dropShadow" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                        <feOffset dy="2" />
                                                        <feGaussianBlur stdDeviation="2" />
                                                        <feColorMatrix type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0" />
                                                        <feBlend mode="normal" in2="effect1_dropShadow"
                                                            result="effect2_dropShadow" />
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                            in2="effect2_dropShadow" result="shape" />
                                                    </filter>
                                                    <pattern id="imagePattern0" patternContentUnits="objectBoundingBox"
                                                        width="1" height="1">
                                                        <use xlink:href="#avatarImage0" transform="scale(0.00142857)">
                                                        </use>
                                                    </pattern>
                                                    @if ($contact->image)
                                                    <div>
                                                        <img src="{{ asset('storage/' . $contact->image) }}"
                                                        alt="Contact image {{ $user }}" class="rounded-circle">
                                                    </div>
                                                    @else
                                                        <img src="{{ asset('img/content/humans-2/item-1.jpg') }}"
                                                            alt="Contact image {{ $user }}" class="rounded-circle">
                                                    @endif
                                                </defs>
                                            </svg>
                                        </div>
                                        <h4 class="contact-card__title mt-4">{{ $contact->name }}</h4>
                                        <div class="contact-card__label"><span
                                                class="label label--primary">{{ $contact->category->name }}</span>
                                        </div>
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
@endsection
