@extends('layouts.dashboard_customers')
@section('page_title', 'Exporation Workspace')
@section('breadcramp_title', 'Exporation')

@section('content')
    <div class="card-area">
        <div class="row">
            @foreach ($workspaces as $workspace)
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="card card-bordered">
                        {{-- {{dd($workspace->gallery)}} --}}

                            <img class="card-img-top img-fluid" src="{{ asset('gallery') . '/' . $workspace->gallery[0] }}"
                                style="height: 340px; width: 450px;" alt="image">
                        {{-- <img class="card-img-top img-fluid" src="assets/images/card/card-img1.jpg" alt="image"> --}}
                        <div class="card-body">
                            <h5 class="title">{{ $workspace->name }}</h5>
                            <p class="card-text">{{ $workspace->description }}</p>
                            </p>
                            <p class="card-text">Location : {{ $workspace->location }}</p>
                            <a href="#" class="btn btn-primary">Get More....</a>
                            <a href="{{ route('customer.showWorkspace', ['id' => $workspace->id]) }}" class="btn btn-primary">
                                Rent
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
@endsection
