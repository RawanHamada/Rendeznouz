@extends('layouts.dashboard_owner')

@section('page_title', 'Workspace')
@section('breadcramp_title', 'setting')
@section('content')
            <div class="container rounded bg-white mb-5">
                <div class="row">
                    <div class="col-md-3 mb-3 ">
                        <div class="card">
                            <div class="card-body ">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="assets/images/author/avatar.png" alt="Admin" class="rounded-circle"
                                        width="186">
                                    <div class="mt-3">
                                        <h1>Company Name</h1>
                                        <p class="text-secondary mb-1">Show Full Owner Name</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        @foreach ($owners as $owner )
                                        {{ $owner->first_name ." ". $owner->last_name }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$owner->email}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{$owner->phone_number}}
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">City</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                            {{-- {{$cities->city_name}} --}}
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center m-2b">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <div class="row mt-md-2">
                                <div class="col-md-12"><label class="labels">Full Name</label><input type="text"
                                        class="form-control" placeholder="Show its primary name" value=""></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12 mt-2"><label class="labels">Mobile Number</label><input
                                        type="text" class="form-control" placeholder="Show its primary number" value="">
                                </div>
                                <div class="col-md-12 mt-2"><label class="labels">Address </label><input type="text"
                                        class="form-control" placeholder="Show his first address" value=""></div>
                                <div class="col-md-12 mt-2"><label class="labels">Company Name </label><input
                                        type="text" class="form-control" placeholder="Show its primary number" value="">
                                </div>
                                <div class="col-md-12 mt-2"><label class="labels">Email address</label><input
                                        type="text" class="form-control" placeholder="Show its primary address"
                                        value=""></div>
                            </div>
                            <div class=" row col-6 mt-3">
                                <a href="#">Reset Password</a>
                            </div>
                            <div class="mt-3 text-center"><button class="btn btn-primary profile-button"
                                    type="button">Save Profile</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
