@extends('admin.master')
@section('content')

   <main role="main" class="main-content">
        <div class="container-fluid">
          {{-- <div class="row justify-content-center"> --}}
            <div class="col-12">
                <h1>{{ __('Create Service') }} </h1>
              <div class="card shadow mb-4">        
                <div class="card-body">
                <form action="{{ route('admin.services.store') }}" method="post">
                  @csrf
                    <div>
                      <div class="form-group mb-3">
                        <label for="simpleinput">Icon</label>
                        <input type="text" id="simpleinput" name="icon" class="form-control">
                        <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                      </div>
                      <div class="form-group mb-3">
                        <label for="example-email">Title</label>
                        <input type="text" id="example-email" name="title" class="form-control" placeholder="title">
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                      </div>
                      <div class="form-group mb-3">
                        <label for="example-service">Description</label>
                        <input type="text" name="description" id="example-service" class="form-control" value="service">
                        <x-input-error :messages="$errors->get('service')" class="mt-2" />
                      </div>
                      
                  </div>
                  <button class="btn btn-primary" type="submit">Send</button>
                  </form>
                </div>
              </div> <!-- / .card -->
             
            </div> <!-- .col-12 -->
          {{-- </div> <!-- .row --> --}}
        </div> <!-- .container-fluid -->
    
        
      </main>
@endsection