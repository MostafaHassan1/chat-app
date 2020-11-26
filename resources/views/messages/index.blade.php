@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row">
   
        <div class="col-md-3 bg" id="chat-users">
   
            <h4>Online Users</h4>
   
            <hr>
   
            <ul class="list-group" id="online-users">
   
            </ul>
   
        </div>
   
        <div class="col-md-9" style="height: 80vh;" >

            <div class="h-100 mb-4 p-4 d-flex flex-column  bg-dark " id="chat-box" style="overflow-y: scroll; ">
        
                @foreach ($messages as $message)
        
                <div class="mt-3 w-auto p-3 text-white rounded {{auth()->user()->id == $message->user_id ? ' align-self-end bg-primary' : ' align-self-start bg-warning'}}">
        
                    <p>{{$message->body}}</p>
        
                </div>
                <div class="clearfix"></div>
        
                @endforeach
        
            </div>
        
            <div id="chat-form" class="d-flex m-4">
        
            <input type="text" data-url="{{route('messages.store')}}" id="chat-input"  class="form-control mr-2" placeholder="Write your message">
        
                <button class="btn btn-primary">Send</button>
        
            </div>
       
        </div>
    
    </div>
</div>
@endsection
