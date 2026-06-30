@extends('admin.master')
@section('content')

   <main role="main" class="main-content">
        <div class="container-fluid">
          {{-- <div class="row justify-content-center"> --}}
            <div class="col-12">
                <h1>{{ __('Create Feature') }} </h1>
              <div class="card shadow mb-4">        
                <div class="card-body">
                  
                    <div>
                      <div class="form-group mb-3">
                        <label for="simpleinput">Icon</label>
                        <input type="text" id="simpleinput" readonly name="icon" value="{{ $feature->icon }}" class="form-control">
                      </div>
                      <div class="form-group mb-3">
                        <label for="example-email">Title</label>
                        <input type="email" id="example-email" readonly name="title" class="form-control" placeholder="{{ $feature->title }}">
                      </div>
                      <div class="form-group mb-3">
                        <label for="example-password">Description</label>
                        <input type="text" readonly name="description"  id="example-password" class="form-control" value="{{ $feature->description }}">
                      </div>
                      
                  </div>
                  
              </div> <!-- / .card -->
             
            </div> <!-- .col-12 -->
          {{-- </div> <!-- .row --> --}}
        </div> <!-- .container-fluid -->
    
        
      </main>
@endsection