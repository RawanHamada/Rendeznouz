@extends('layouts.dashboard_owner')

@section('content')
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="owner-dashboard.html">Home</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                        {{ auth()->guard(session('guardName'))->user()->first_name }}
                        <i class="fa fa-angle-down"></i>
                    </h4>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Settings</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">
                                logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--top page start-->
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-4 mt-3 mb-3">
                <div class="card">
                    <div class="seo-fact sbg1">
                        <div class="p-4 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon"><i class="ti-layers-alt"></i> Num Of Desktop</div>
                            <h2>120</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-md-3 mb-3">
                <div class="card">
                    <div class="seo-fact sbg2">
                        <div class="p-4 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon"><i class="ti-check"></i> booked </div>
                            <h2>75</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-md-3 mb-3">
                <div class="card">
                    <div class="seo-fact sbg3">
                        <div class="p-4 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon"><i class="ti-bookmark-alt"></i> available </div>
                            <h2>45</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top page end -->

    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">New Rentals</h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table table-hover progress-table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Workspace Name</th>
                                    <th scope="col">Tenant name</th>
                                    <th scope="col">Tenant phone</th>
                                    <th scope="col">e-mail</th>
                                    <th scope="col">Start Date</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach($users as $user) : ?>
                                <tr>
                                    <td><?= $user->id ?> </td>
                                    <td><?= 1 ?></td>
                                    <td><?= $user->first_name . $user->last_name ?></td>
                                    <td><?= $user->phone_number ?></td>
                                    <td><?= $user->email ?></td>
                                    <td><?= $user->created_at ?></td>
                                </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
