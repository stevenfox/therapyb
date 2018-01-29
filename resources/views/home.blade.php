@extends('layouts.app')

@section('content')
<div class="container">
            
    <div class="row">
        <a class="col alink" href="#">
            <div class="containers card">
                <span class="card-header top-bar">Weather</span>
                <div class="card-body"></div>
            </div>
        </a>
        <a class="col alink" href="#">
             <div class="containers card">
                 <span class="top-bar card-header">News</span>
                 <div class="card-body"></div>
            </div>
        <a class="col alink" href="#">
             <div class="containers card">
                 <span class="top-bar card-header">Sport</span>
                 <div class="card-body"></div>
            </div>
        </a>
  </div>
     <div class="row">
         <a class="col alink" href="#">
            <div class="containers card">
                <span class="top-bar card-header">Photos</span>
                <div class="card-body"></div>
            </div>
            </a>
        <a class="col alink" href="#">
             <div class="containers card">
                 <span class="top-bar card-header">Tasks</span>
                 <div class="card-body"></div>
            </div>
        </a>
         <a class="col alink" href="#">
             <div class="containers card">
                 <span class="top-bar card-header">Clothes</span>
                 <div class="card-body"></div>
             </div>
         </a>
    </div>
                
  </div>
@endsection
