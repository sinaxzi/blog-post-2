@extends('layouts.app')
 
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url({{ asset('img/post-sample-image.jpg') }})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Login</h1>
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
                        @if (session('status'))
                        <strong class="text-danger">
                            {{ session('status') }}
                        </strong>
                            
                        @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf

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

                            <br />
                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
