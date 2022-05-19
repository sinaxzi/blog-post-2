@extends('layouts.app')

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url({{ asset('img/home-bg.jpg') }})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @if ($posts->count())
                    @foreach ($posts as $post )
                        <!-- Post preview-->
                        <div class="post-preview">
                            <a href="{{ route('post.show',$post) }}">
                                <h2 class="post-title">{{ $post->title }}</h2>
                                <p class="post-subtitle">{{Str::limit($post->body,50,'........') }}</p>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="#!">{{ $post->user->name }}</a>
                                on {{ $post->created_at->diffForHumans() }}
                            </p>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                        
                        {{-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div> --}}
                    @endforeach
                    <!-- Pager-->
                    {{ $posts->links() }}

                    <br>
                @else
                    <p>there is no posts</p>
                @endif

            </div>
        </div>
    </div>
@endsection
