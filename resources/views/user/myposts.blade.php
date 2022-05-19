@extends('layouts.app')

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url({{ asset('img/contact-bg.jpg') }})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>My Posts</h1>
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

                            
                            {{-- @can('edit',$post)
                                
                            @endcan --}}
                            <div style="white-space: nowrap">
                                <form action="{{ route('post.edit',$post) }}" method="GET"   style="display: inline-block; margin-right:10px">
                                    @csrf
                                    <!-- edit Button-->
                                    <button class="btn btn-success text-uppercase" id="submitButton" type="submit" >Edit</button>
                                </form>
    
                                <form action="{{ route('post.delete',$post->id) }}" method="POST" style="display: inline-block;"  >
                                    @csrf
                                    @method('DELETE')
                                    <!-- delete Button-->
                                    <button class="btn btn-danger text-uppercase" id="submitButton" type="submit" >Delete</button>
                                </form>
                            </div>
                            

                            <!-- Divider-->
                            <hr class="my-4" />
                            {{-- @can('delete',$post)
                                
                            @endcan --}}
                        </div>
                        
                        <!-- Pager-->
                        {{ $posts->links() }}
                        {{-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div> --}}
                    @endforeach
                @else
                    <p>there is no posts</p>
                @endif

            </div>
        </div>
    </div>
@endsection
