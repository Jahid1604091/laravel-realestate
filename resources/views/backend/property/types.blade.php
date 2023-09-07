@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-wrapper">

        <!-- partial:partials/_navbar.html -->
        @include('admin.components.header')

        <div class="page-content">

            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Properties</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('property.types.add')}}" class="btn btn-inverse-primary mb-2">Add Property Type</a>
                            <div class="table-responsive">

                                <table id="dataTableExample" class="table">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Type Name</th>
                                            <th>Icon</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($types as  $key=>$item)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$item->type_name}}</td>
                                            <td>{{$item->type_icon}}</td>
                                            <td><a href="" class="btn btn-inverse-warning">Edit</a>  <a href="" class="btn btn-inverse-danger">Delete</a> </td>
                                        </tr>
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
