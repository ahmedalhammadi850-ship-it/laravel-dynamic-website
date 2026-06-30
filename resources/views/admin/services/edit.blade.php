@extends('admin.master')
@section('content')

   <main role="main" class="main-content">
        <div class="container-fluid">
          {{-- <div class="row justify-content-center"> --}}
            <div class="col-12">
                <h1>{{ __('Edit Service') }} </h1>
              <div class="card shadow mb-4">        
                <div class="card-body">
                <form action="{{ route('admin.services.update',['service' =>$service]) }}" method="post">
                  
                  @method('PUT')
                  @csrf
                    <div>
                      <div class="form-group mb-3">
                        <label for="simpleinput">Icon</label>
                        <input type="text" id="simpleinput" value="{{ $service->icon }}" name="icon" class="form-control">
                        <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                      </div>
                      <div class="form-group mb-3">
                        <label for="example-email">Title</label>
                        <input type="text" id="example-email" value="{{ $service->title }}" name="title" class="form-control" placeholder="Email">
                       <x-input-error :messages="$errors->get('title')" class="mt-2" />
                      </div>
                      <div class="form-group mb-3">
                        <label for="example-description">Description</label>
                        <input type="text" name="description" value="{{ $service->description }}"  id="example-description" class="form-control" value="description">
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                      </div>
                      
                  </div>
                  <button class="btn btn-primary" type="submit">Update</button>
                  </form>
                </div>
              </div> <!-- / .card -->
             
            </div> <!-- .col-12 -->
          {{-- </div> <!-- .row --> --}}
        </div> <!-- .container-fluid -->
    
        
      </main>
@endsection