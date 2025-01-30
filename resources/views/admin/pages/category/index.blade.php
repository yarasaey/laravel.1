@extends('admin.layout.master')


@section('admin-content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Default Table</h5>

              <a href="{{route('category.create') }}" class="btn btn-primary">Add Category</a>
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created_At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($categories as $category )
                  <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>
                      <form action="" class="d-inline">
                        <button  class="btn btn-warning">Edit </button>
                      </form>
                    </td>
                    <td>
                      <form action="{{ route('category.destroy',$category->id) }}"class="d-inline" method='Post'>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @empty
                    <h1> there are no catogries</h1>
                  @endforelse
                  
                 
                  
                   
                  
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>


        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection