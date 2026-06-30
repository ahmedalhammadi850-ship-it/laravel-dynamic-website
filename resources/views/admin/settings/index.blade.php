@extends('admin.master')
@section('content')

   <main role="main" class="main-content">
     <div class="alert alert-success">
        {{ session('status') }}
    </div>
        <div class="container-fluid">
          {{-- <div class="row justify-content-center"> --}}
            <div class="col-12">
                <h1>{{ __('Create setting') }} </h1>
              <div class="card shadow mb-4">        
                <div class="card-body">
<form action="{{ route('admin.settings.update', ['setting' => $settings]) }}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group mb-3">
        <label for="location">Location</label>
        <input type="text" id="location" name="location" value="{{ $settings->location }}" class="form-control">
        <x-input-error :messages="$errors->get('location')" class="mt-2" />
     
        </div>

    <div class="form-group mb-3">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ $settings->email }}" class="form-control">
           <x-input-error :messages="$errors->get('email')" class="mt-2" />

      </div>

    <div class="form-group mb-3">
        <label for="facebook">Facebook</label>
        <input type="text" id="facebook" name="facebook" value="{{ $settings->facebook }}" class="form-control">
        <x-input-error :messages="$errors->get('facebook')" class="mt-2" />
      </div>

    <div class="form-group mb-3">
        <label for="linkedin">LinkedIn</label>
        <input type="text" id="linkedin" name="linkedin" value="{{ $settings->linkedin }}" class="form-control">
        <x-input-error :messages="$errors->get('linkedin')" class="mt-2" />
      </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

                </div>
              </div> <!-- / .card -->
             
            </div> <!-- .col-12 -->
          {{-- </div> <!-- .row --> --}}
        </div> <!-- .container-fluid -->
    
        
      </main>
@endsection