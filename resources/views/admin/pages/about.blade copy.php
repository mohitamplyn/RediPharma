@extends('layouts.admin')
<x-admin.header />
<div class="container-fluid page-body-wrapper">
<x-admin.sidebar />
<!-- partial -->
<div class="main-panel">
   <div class="content-wrapper">
      <div class="page-header">
         <h3 class="page-title"> About us </h3>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ url('admin/deshboard')}}">Deshboard</a></li>
               <li class="breadcrumb-item active" aria-current="page">About-us</li>
            </ol>
         </nav>
      </div>
      <div class="row">
         <div class="col-12 grid-margin stretch-card">
            <div class="card">
               <div class="card-body" style="color:#000;">
                  <h4>{{$pages->title}}</h4>
                  <h2>{{$pages->page_key}}</h2>
                  <p style=" text-align: justify;">
                     {{$pages->description}}
                     {{$pages->description}}
                     {{$pages->description}}
                     {{$pages->description}}
                  </p> 
               </div>

            </div>
         </div>
      </div>
   </div>
</div>