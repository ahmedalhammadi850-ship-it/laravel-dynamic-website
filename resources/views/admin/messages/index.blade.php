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
  <h2 class="page-title mb-0">messages</h2>
 
</div>

                  <div class="card shadow">
                    <div class="card-body">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                       
                          </tr>
                        </thead>
                        <tbody>
                          @if (count($messages)>0)
                             @foreach ($messages as $message)
                                <tr>
                            <td>{{ $messages->firstItem()  + $loop->index  }}</td>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                           <td>{{ $message->subject }}</td>
                            <td>{{ $message->message }}</td>
                          
                            <td>
                              
                              <a href="{{ route('admin.messages.show',['message'=> $message ]) }}" class="btn btn-sm btn-primary">
                                <i class="fe fe-eye fa-2x"></i>
                              </a>
                               {{-- زر الحذف --}}
    <form method="POST" action="{{ route('admin.messages.destroy', $message->id) }}" 
          onsubmit="return confirm('Are you sure you want to delete this message?')" style="display:inline;">
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
                      {{ $messages->render('pagination::bootstrap-4') }}
                    </div>
              
    
      </main>
@endsection
