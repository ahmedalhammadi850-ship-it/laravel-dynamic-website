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
  <h2 class="page-title mb-0">Features</h2>
 
  <x-add-new-component href="{{ route('admin.features.create') }}" text="Add New" ></x-add-new-component>
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
                          @if (count($features)>0)
                             @foreach ($features as $feature)
                                <tr>
                            <td>{{ $features->firstItem()  + $loop->index  }}</td>
                            <td>{{ $feature->title }}</td>
                            <td><i class="{{ $feature->icon }} fa-2x"></i></td>
                                  
                            <td>{{ $feature->description }}</td>
                          
                            <td>
                              <a href="{{ route('admin.features.edit',['feature'=> $feature ]) }}" class="btn btn-sm btn-success">
                                <i class="fe fe-edit fa-2x"></i>
                              </a>
                              <a href="{{ route('admin.features.show',['feature'=> $feature ]) }}" class="btn btn-sm btn-primary">
                                <i class="fe fe-eye fa-2x"></i>
                              </a>
                               {{-- زر الحذف --}}
    <form method="POST" action="{{ route('admin.features.destroy', $feature->id) }}" 
          onsubmit="return confirm('Are you sure you want to delete this feature?')" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fe fe-trash fa-2x"></i>
        </button>
    </form>

                                                          {{-- {{ $feature->Action }} --}}
                            </td>
                            
                             </tr>
                         
                          @endforeach                            
                          @else
                             <x-empty-alert></x-empty-alert>                     
                          @endif
                         
                      
                        </tbody>
                      </table>
                      {{ $features->render('pagination::bootstrap-4') }}
                    </div>
              
    
      </main>
@endsection
