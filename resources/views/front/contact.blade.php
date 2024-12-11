@extends('front.layout.app')
@section('content')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('{{ asset('front') }}/assets/img/contact-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Contact Me</h1>
                            <span class="subheading">Have questions? I have answers.</span>
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
                        <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                        <div class="my-5">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form method="POST" action="{{url('/send-message') }}">
                                @csrf
                                @if(session('success')!= null)
                                <div class="alert alert-success p-2 text-center">{{ session('success') }}</div>
                            @endif
                            {{-- To check if there any error--}}
                           {{-- @if ($errors->any())
                            {{-- To loop in the error--}}
                           {{-- @foreach ($errors->all() as $error )
                            <div class="alert  alert-danger text-center p-2">{{$error}}</div>
                                
                            @endforeach
                                
                            @endif--}}
                                <div class="form-floating">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Name</label>
                                    @error('name')
                                    <div class="text-danger" data-sb-feedback="email:required">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" name="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                    @error('email')
                                    <div class="text-danger" data-sb-feedback="email:required">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="tel" name="phone" placeholder="Enter your phone number..." data-sb-validations="required" />
                                    <label for="phone">Phone Number</label>
                                    @error('phone')
                                    <div class="text-danger" data-sb-feedback="email:required">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="content" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="message">Message</label>
                                    @error('content')
                                    <div class="text-danger" data-sb-feedback="email:required">{{ $message }}</div>
                                    @enderror
                                    
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                              
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @endsection