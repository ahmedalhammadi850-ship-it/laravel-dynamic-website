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
  <h2 class="page-title mb-0">subscribers</h2>
 
</div>

                  <div class="card shadow">
                    <div class="card-body">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>create</th>
                            {{-- <th>Description</th> --}}
                            <th>Action</th>

                           
                          </tr>
                        </thead>
                        <tbody>
                          @if (count($subscribers)>0)
                             @foreach ($subscribers as $subscriber)
                                <tr>
                            <td>{{ $subscribers->firstItem()  + $loop->index  }}</td>
                            <td>{{ $subscriber->email }}</td>
                            {{-- <td><i class="{{ $subscriber->icon }} fa-2x"></i></td> --}}
                                  
                            <td>{{ $subscriber->created_at }}</td>
                          
                            <td>                      
                              {{-- <a href="{{ route('admin.subscribers.show',['subscriber'=> $subscriber ]) }}" class="btn btn-sm btn-primary">
                                <i class="fe fe-eye fa-2x"></i>
                              </a> --}}
                               {{-- زر الحذف --}}
    <form method="POST" action="{{ route('admin.subscribers.destroy', $subscriber->id) }}" 
          onsubmit="return confirm('Are you sure you want to delete this subscriber?')" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fe fe-trash fa-2x"></i>
        </button>
    </form>

                                                          {{-- {{ $subscriber->Action }} --}}
                            </td>
                            
                             </tr>
                         
                          @endforeach                            
                          @else
                             <x-empty-alert></x-empty-alert>                     
                          @endif
                         
                      
                        </tbody>
                      </table>
                      {{ $subscribers->render('pagination::bootstrap-4') }}
                    </div>
              
    
      </main>
@endsection
