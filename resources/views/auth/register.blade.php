@extends('layouts.app')
 
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url({{ asset('img/post-bg.jpg') }})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Register</h1>
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
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-floating">
                                
                                    <input class="form-control @error('name')
                                        border-danger
                                    @enderror"  value="{{ old('name') }}" name="name" id="name" type="text" placeholder="Enter your name..."/>
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
                                <input class="form-control @error('username')
                                    border-danger
                                @enderror" value="{{ old('username') }}" name="username" id="username" type="text" placeholder="Enter your username..."/>
                                @error('username')
                                <div class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <label for="username">Username</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control @error('email')
                                    border-danger
                                @enderror" value="{{ old('email') }}" name="email" id="email" type="email" placeholder="Enter your email..." />
                                @error('email')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email">Email</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control @error('password')
                                    border-danger
                                @enderror" name="password" id="password" type="password" placeholder="Enter your password..."/>
                                @error('password')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password">Password</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control @error('password_confirmation')
                                    border-danger
                                @enderror" name="password_confirmation" id="password_confirmation" type="password" placeholder="Enter your password again..."/>
                                @error('password_confirmation')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password_confirmation">Password_confirmation</label>
                            </div>
                            <br />
                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
