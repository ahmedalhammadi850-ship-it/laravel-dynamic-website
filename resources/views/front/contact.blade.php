@extends('front.master')
@section('contact_active','active')
@section('title-web','Contact')

@section('content')
<!-- contact Start -->
  

<div class="container-xxl bg-primary page-header">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">{{ __('keywords.Contact') }} </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"> <a class="text-white" href="{{ route('front.index') }}"> {{ __('keywords.Home') }} </a> </li>
                            <li class="breadcrumb-item"> <a class="text-white" href="{{ route('front.about') }}">  {{ __('keywords.About') }}  </a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        <!-- Contact Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">{{ __('keywords.Contact') }}</div>
                    <h2 class="mb-5"><p>{{ __('keywords.QueryMessage') }}</p></h2>
                    

                    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                        <p class="text-center mb-4"><p>{{ __('keywords.ContactFormNotice') }}</p> <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <form action="{{ route('front.contact.store') }}" method="post" >
                            @csrf
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('keywords.YourName') }}">
                                        <label for="name">{{ __('keywords.YourName') }}</label>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">{{ __('keywords.YourEmail') }}</label>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">{{ __('keywords.Subject') }}</label>
                                        <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">{{ __('keywords.Message') }}</label>
                                    </div>
                              <x-input-error :messages="$errors->get('message')" class="mt-2" />
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">{{ __('keywords.SendMessage') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        
     
@endsection