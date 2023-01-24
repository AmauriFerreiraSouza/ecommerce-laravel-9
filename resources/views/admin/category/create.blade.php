@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-header">
                <h4>
                    Add Category
                    <a href="{{ url('admin/category') }}" class="btn btn-primary btn-smal text-white float-end">BACK</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Nome</label>
                            <input type="text" name="name" class=" form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Slug</label>
                            <input type="text" name="slug" class=" form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Descrição</label>
                            <input type="text" name="description" class=" form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Imagem</label>
                            <input type="text" name="image" class=" form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Status</label>
                            <input type="text" name="status" class=" form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Meta Título</label>
                            <input type="text" name="meta_title" class=" form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Meta Keyword "</label>
                            <input type="text" name="meta_keyword" class=" form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Meta Descrição</label>
                            <input type="text" name="meta_description" class=" form-control" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection