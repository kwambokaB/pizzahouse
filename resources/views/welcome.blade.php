@extends('Layouts.layout')

@section('content')    
       / <div class="flex-center position-ref full-height">
        <div class="content"> 
        <img src="/img/pizza-house.png" alt="pizza house logo" >
        <div class="title m-b-md">      
        For those sick of Pizza Inn
        </div>
        <p class="msg">{{ session('msg')}}</p>
        <a href="/pizzas/create">Order a Pizza</a>
        </div>
        </div>
 @endsection
