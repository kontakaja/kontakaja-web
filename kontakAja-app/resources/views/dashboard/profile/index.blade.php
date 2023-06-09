@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="profile-card">
                <div class="card-body">
                    <div class="mb-4 text-center">
                        <img src="{{ asset('img/content/humans/item-1.jpg') }}" alt="Profile Picture" class="rounded-circle">
                    </div>
                    <h2 class="card-title text-center mb-4" style="font-size: 1.5rem;">{{ $name }} Profile</h2>
                    <ul class="list-group" style="list-style-type: none">
                        <li class="mb-3">
                            Email<br>
                            <div class="border border-5 p-2 mb-2 rounded">{{ $email }}</div>
                        </li>
                        <li class="mb-3">
                            Username<br>
                            <div class="border border-5 p-2 mb-2 rounded">{{ $user }}</div>
                        </li>
                        <li class="mb-3">
                            Name<br>
                            <div class="border border-5 p-2 mb-2 rounded">{{ $name }}</div>
                        </li>
                        <li>
                            Account Created<br>
                            <div class="border border-5 p-2 mb-2 rounded">{{ $emailVerifiedAt }}</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
