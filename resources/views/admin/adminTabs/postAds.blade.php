@extends('admin.layouts.main')

@section('main-container')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">All posted Ads list 
        <a href="{{ url('/admin/create-post/' ) }}" title="Create Ad" class=" ml-3 badge badge-primary">Create Ad</a>

        </h4>

        <hr>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Sr#</th>
                <th>Image</th>
                <th>Vehiclename</th>
                <th>Categories</th>
                <th>Duration</th>
                <th>location</th>
                <th>weight</th>
                <th>Description</th>
                <th>Contact</th>
                <th>Price</th>
                <th>Posted By</th>
                <th>Created At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $srNo = 1;    
                @endphp

                @foreach ($post as $maliha)
                    <tr>
                        <td>{{ $srNo++ }}</td>
                        <td><img src="{{asset($maliha->image)}}" alt="image" style="width:50px ; height:50px"></td>
                        <td>{{ $maliha->vehiclename }}</td>
                        <td>{{ $maliha->categories }}</td>
                        <td>{{ $maliha->duration }}</td>
                        <td>{{ $maliha->location }}</td>
                        <td>{{ $maliha->weight }}</td>
                        <td>{{ $maliha->description }}</td>
                        <td>{{ $maliha->contact }}</td>
                        <td>{{ $maliha->price }}</td>
                        <td>{{ $maliha->user->name }}</td>
                        <td>{{ $maliha->created_at->diffForhumans()}}</td>

                        <td>
                            <a href="{{ url('/admin/delete-post-ads/'. $maliha->id ) }}" title="Delete" class="badge badge-danger">Delete</a>
                            <a href="{{ url('/admin/edit-post/'. $maliha->id ) }}" title="Edit" class="badge badge-primary">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection
