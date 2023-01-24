@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-header">
                <h4>
                    Category
                    <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-smal text-white float-end">Add Category</a>
                </h4>
            </div>
            <div class="card-body">
            
            </div>
        </div>
    </div>
</div>

@endsection