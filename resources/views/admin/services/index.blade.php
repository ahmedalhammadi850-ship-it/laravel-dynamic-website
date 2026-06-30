@extends('admin.master')
@section('content')
   <main role="main" class="main-content">
       @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
            {{-- <div class="col-12"> --}}
<div class="d-flex justify-content-between align-items-center mb-3">
  <h2 class="page-title mb-0">Services</h2>
 
  <x-add-new-component href="{{ route('admin.services.create') }}" text="Add New" ></x-add-new-component>
</div>

                  <div class="card shadow">
                    <div class="card-body">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Icon</th>
                            <th>Description</th>
                            <th>Action</th>

                           
                          </tr>
                        </thead>
                        <tbody>
                          @if (count($services)>0)
                             @foreach ($services as $service)
                                <tr>
                            <td>{{ $services->firstItem()  + $loop->index  }}</td>
                            <td>{{ $service->title }}</td>
                            <td><i class="{{ $service->icon }} fa-2x"></i></td>
                                  
                            <td>{{ $service->description }}</td>
                          
                            <td>
                              <a href="{{ route('admin.services.edit',['service'=> $service ]) }}" class="btn btn-sm btn-success">
                                <i class="fe fe-edit fa-2x"></i>
                              </a>
                              <a href="{{ route('admin.services.show',['service'=> $service ]) }}" class="btn btn-sm btn-primary">
                                <i class="fe fe-eye fa-2x"></i>
                              </a>
                               {{-- زر الحذف --}}
    <form method="POST" action="{{ route('admin.services.destroy', $service->id) }}" 
          onsubmit="return confirm('Are you sure you want to delete this service?')" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fe fe-trash fa-2x"></i>
        </button>
    </form>

                                                          {{-- {{ $service->Action }} --}}
                            </td>
                            
                             </tr>
                         
                          @endforeach                            
                          @else
                             <x-empty-alert></x-empty-alert>                     
                          @endif
                         
                      
                        </tbody>
                      </table>
                      {{ $services->render('pagination::bootstrap-4') }}
                    </div>
              
    
      </main>
@endsection
