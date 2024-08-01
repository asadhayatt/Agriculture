@extends('admin.layouts.main')

@section('main-container')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">All posted Ads list</h4>
        <hr>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Sr#</th>
                <th>Vehiclename</th>
                <th>Type</th>
                <th>Image</th>
                <th>Weight</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $srNo = 1;    
                @endphp

                @foreach ($post as $post)
                    <tr>
                        <td>{{ $srNo++ }}</td>
                        <td>{{ $post->vehiclename }}</td>
                        <td>{{ $post->type }}</td>
                        <td><img src="{{asset($post->image)}}" alt="image" style="width:50px ; height:50px"></td>
                        <td>{{ $post->weight }}</td>
                        <td>{{ $post->price }}</td>
                        <td>
                            <a href="{{ url('/admin/delete-post-ads/'. $post->id ) }}" title="Delete" class="badge badge-danger">Delete</a>
                            <a href="{{ url('/admin/edit-post/'. $post->id ) }}" title="Edit" class="badge badge-primary">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection
