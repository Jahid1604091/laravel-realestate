@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.components.header')

        <div class="page-content">

            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Properties</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update Property Type</h4>
                            <form method="POST" action="{{route('property.types.update')}}">
                                @csrf

                                <input type="hidden" name="id" value="{{$types->id}}">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input id="name" class="form-control" name="type_name" type="text" value="{{$types->type_name}}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Icon</label>
                                    <input id="email" class="form-control" name="type_icon" type="text"  value="{{$types->type_icon}}">
                                </div>

                                <input class="btn btn-primary" type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>

            </div>










        </div>
    </div>
@endsection
