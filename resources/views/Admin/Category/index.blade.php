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
                    <li class="breadcrumb-item active">Category</li>
                </ol>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-md-12 col-xl-12 text-left mb-3">
        <a href="{{ route('category.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="col-md-12 col-xl-12">
        <div class="card">
            <div class="card-header">
                {{-- <h3 class="card-title">Responsive example</h3> --}}
            </div>
            <div class="card-body">
                <table id="responsive-datatable" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $item)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $item->category_name }}</td>
                            <td>
                                {!! status($item->status) !!}
                            </td>
                            <td>
                                <a href="{{ route('category.edit',$item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <button value="{{ route('category.delete',$item->id) }}"
                                    class="btn btn-sm btn-danger delete">Delete</button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
@endsection

@section('script')
<script>
    $( document ).ready(function() {
        $('.delete').click(function(){
           
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                var val = $(this).val();
                window.location.href = val;
            }
            })
        })
    });

</script>
@endsection