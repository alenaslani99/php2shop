@extends('layouts.layout')
@section('title') Admin Dashboard @endsection

@section('content')
    <div class="container-fluid">
        <div class="container mt-4">
            <h1 class="text-center">Admin Dashboard</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="" alt="">
                                    </div>
                                    <div class="media-body">
                                        <p></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <a>Edit</a>
                            </td>
                            <td>
                                <a>Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="col-lg-12 d-flex justify-content-center">
                <a href="" class="btn btn-primary text-light">Add new product</a>
            </div>
        </div>
    </div>
@endsection
