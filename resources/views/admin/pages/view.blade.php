@extends('layouts.admin')
<x-admin.header />
<div class="container-fluid page-body-wrapper">
    <x-admin.sidebar />
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">View Page</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin/page')}}" >Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product</li>
                    </ol>
                </nav>
            </div>

            <div class="col-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View Information</h4>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="exampleInputName1" disabled="disabled" value="{{$setting->title}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputpage_key">page key</label>
                        <input type="email" class="form-control" id="exampleInputpage_key" disabled="disabled" value="{{$setting->page_key}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputmetakey">meta key</label>
                        <input type="text" class="form-control" id="exampleInputmetakey" disabled="disabled" value="{{$setting->meta_key}}">
                      </div>
                     
                   
                      <div class="form-group">
                        <label for="exampleInputmeta_description">meta description</label>
                        <input type="text" class="form-control" id="exampleInputmeta_description" disabled="disabled" value="{{$setting->meta_description}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" disabled="disabled" name="description">{{$setting->description}}</textarea>
                      </div>

                      <a href="{{ url('admin/page-edit/'.$setting->id) }}" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >  Edit </a>
                      <a href="{{ url('admin/page')}}" class="btn btn-dark btn-cta btn-lg font-weight-medium auth-form-btn" >Back</a>

                    </form>
                  </div>
                </div>
              </div>

            
        </div>
    </div>
</div>