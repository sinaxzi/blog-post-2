@extends('layouts.app')
 
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('/img/contact-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Profile</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="my-5">
                        <form action="{{ route('user.profile.update',$user) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-floating">
                                <input class="form-control @error('username')
                                    border-danger
                                @enderror"   name="username" id="username" type="text" value="{{ $user->username }}"/>
                                <div>
                                    @error('username')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="username">Username</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control @error('name')
                                    border-danger
                                @enderror"   name="name" id="name" type="text" value="{{ $user->name }}"/>
                                <div>
                                    @error('name')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="name">Name</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control @error('email')
                                    border-danger
                                @enderror"   name="email" id="email" type="email" value="{{ $user->email }}"/>
                                <div>
                                    @error('email')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="email">Email</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control @error('password')
                                    border-danger
                                @enderror"   name="password" id="password" type="password" />
                                <div>
                                    @error('password')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="password">New Password(if you don't want to change it,don't fill it)</label>
                            </div>

                            <br />
                            <!-- Submit Button-->
                            <button class="btn btn-success text-uppercase" id="submitButton" type="submit">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection