@extends('admin.master')
@section('content')

   <main role="main" class="main-content">
        <div class="container-fluid">
          {{-- <div class="row justify-content-center"> --}}
            <div class="col-12">
                <h1>{{ __('Create message') }} </h1>
              <div class="card shadow mb-4">        
                <div class="card-body">
                  
                    <div>
                      <div class="form-group mb-3">
                        <label for="simpleinput">name</label>
                        <input type="text" id="simpleinput" readonly name="icon" value="{{ $message->name }}" class="form-control">
                      </div>
                      <div class="form-group mb-3">
                        <label for="example-email">email</label>
                        <input type="email" id="example-email" readonly name="title" class="form-control" placeholder="{{ $message->email }}">
                      </div>
                      <div class="form-group mb-3">
                        <label for="simpleinput">subject</label>
                        <input type="text" id="simpleinput" readonly name="icon" value="{{ $message->subject }}" class="form-control">
                      </div>
                      <div class="form-group mb-3">
                        <label for="example-password">description</label>
                        <input type="text" readonly name="description"  id="example-password" class="form-control" value="{{ $message->message }}">
                      </div>
                      
                  </div>
                  
              </div> <!-- / .card -->
             
            </div> <!-- .col-12 -->
          {{-- </div> <!-- .row --> --}}
        </div> <!-- .container-fluid -->
    
        
      </main>
@endsection