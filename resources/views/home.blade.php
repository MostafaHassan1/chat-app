@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-3 bg" id="chat-users">
           <h4>Online Users</h4>
           <hr>
           <ul class="list-group" id="online users">
               <li class="list-group-item ">Active item</li>
               <li class="list-group-item">Item</li>
               <li class="list-group-item disabled">Disabled item</li>
           </ul>
       </div>
       <div class="col-md-9 bg-dark d-flex flex-column" style="height: 80vh;" >
            <div class="h-100" id="chat-box" style="overflow-y: scroll; ">

            </div>
            <div id="chat-form" class="d-flex m-4">
                <input type="text" class="form-control mr-2" placeholder="Write your message">
                <button class="btn btn-primary">Send</button>
            </div>
       </div>
    </div>
</div>
@endsection
