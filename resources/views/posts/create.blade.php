@extends('layouts.app')
 
@section('content')
    <!-- Page Header-->
    
    <header class="masthead" style="background-image: url('/img/contact-bg.jpg')" >
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Create Post</h1>
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
                        <form action="{{ route('post.store') }}" method="POST">
                            @csrf
                            <div class="form-floating">
                                
                                <input class="form-control @error('title')
                                    border-danger
                                @enderror"  value="{{ old('title') }}" name="title" id="title" type="text" placeholder="Enter your title..."/>
                                <div>
                                    @error('title')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <label for="title">Title</label>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control @error('body')
                                    border-danger
                                @enderror" value="{{ old('body') }}" name="body"  id="body" type="text" placeholder="Enter your post body..." style="height: 12rem"></textarea>
                                @error('body')
                                <div class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <label for="body">Body</label>
                            </div>

                            <br />
                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Create Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
