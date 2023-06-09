@extends('dashboard.layouts.main')

@section('container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Profile</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                        <li class="list-group-item"><strong>Username:</strong> {{ $user->username }}</li>
                        <li class="list-group-item"><strong>Name:</strong> {{ $user->name }}</li>
                        <li class="list-group-item"><strong>Account Created:</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
