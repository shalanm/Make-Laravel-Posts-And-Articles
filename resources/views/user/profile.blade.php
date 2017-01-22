@extends('layouts.app')
<style type="text/css">
    .profile-img{
        max-width: 150px;
        border: 5px solid #fff;
        border-radius: 50%;
        box-shadow: 0 2px 2px rgba(0,0,0,0.3);
        
    }
    
</style>

@section('content')
<div class ='row'>
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body text-center">
               <br>   <img class ="profile-img" src="http://www.lovemarks.com/wp-content/uploads/profile-avatars/default-avatar-knives-ninja.png" /> 
               <h1>{{$user->email}}</h1>
               <h2>{{$user->name}}</h2>
               <h10>{{$user->dob}}{{"  "}}({{$user->dob->format('L J F Y') }})</h10>
               
               <br>   <br> <button class="btn btn-success">Follow</button>
                
                
            </div>
        </div>
    </div>
</div>

@endsection