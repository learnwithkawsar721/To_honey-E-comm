@extends('layouts.admin')
@section('title')
Category
@endsection
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Category !</h4>
            <div class="page-title-right">
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-md-12 col-xl-12 text-left mb-3">
        <a href="{{ route('category.index') }}" class="btn btn-primary">Back</a>
    </div>
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Category</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="category_name">Category Name</label>
                                <input type="text" name="category_name" class="form-control"
                                    value="{{ $category->category_name }}" id="category_name"
                                    placeholder="Enter Category Name">

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="category_name">Status</label>
                                <br>
                                <input type="checkbox" id="active" name="status"
                                    {{ ($category->status ==1)?'checked':'' }} value="1">
                                <label for="active">active</label>





                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection