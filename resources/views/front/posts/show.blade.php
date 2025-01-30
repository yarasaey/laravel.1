@extends('front.layout.app')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{ asset('front') }}/assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>All News</h1>
                            <span class="subheading">A Blog project By Laravel </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
      <!-- Main Content-->
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
               <h2>{{ $post->title }}</h2>
               <div>
                <img src="{{ asset('uploads/posts'.$post->image) }}" alt="Post image">
               </div>
                <div>
                <p>{{ $post->content }}</p>
                </div>
                <form action="" method="POST" class="p-4 rounded shadow" style="background-color: #f9f9f9;">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="comment" class="form-label fw-bold" style="font-size: 16px;">Write a Comment</label>
                        <textarea 
                            class="form-control" 
                            id="comment" 
                            name="comment" 
                            rows="4" 
                            placeholder="Type your comment here..." 
                            style="resize: none;" 
                            required>
                        </textarea>
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary"value="Add Comment">

                    </div>
                </form>
                
             
            </div>
        </div>
    </div>
   @endsection