@extends('admin.layout.master')
@section('admin-content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form action="{{ route('category.store') }}" enctype="multipart/form-data" method="Post">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title">
                    @error('title')
                    <div class="alert alert-danger m-1 " >{{ $message }}</div>
                     @enderror
                  </div>
                </div>
               
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name='image'>
                    @error('image')
                    <div class="alert alert-danger m-1" >{{ $message }}</div>
                     @enderror
                  </div>
                </div>

                

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        

        </div>
      </div>
    </section>

  </main><!-- End #main -->


@endsection