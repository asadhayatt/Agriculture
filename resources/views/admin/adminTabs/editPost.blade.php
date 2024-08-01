
@extends('admin.layouts.main')

@section('main-container')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card"><div class="card-body">
    <h4 class="card-title">Edit Post</h4>
    <hr>
    <form method="POST" action="{{ url('/admin/edit-post/'.$post->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="vehiclename">Vehicle Name</label>
            <input type="text" name="vehiclename" value="{{ $post->vehiclename }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" name="type" value="{{ $post->type }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="weight">Weight</label>
            <input type="text" name="weight" value="{{ $post->weight }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" value="{{ $post->price }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
</div>


@endsection