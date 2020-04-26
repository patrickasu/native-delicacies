@extends('layouts.admin')

@section('title', 'Page Title')

@section('content')
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Food Items </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                       
                                        <li class="breadcrumb-item active" aria-current="page">Food Items</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
               
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">All Food Items</h5>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Ingredients</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Date Created</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        {{-- <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Afang Soup</td>
                                                <td>$9</td>
                                                <td>3/30/2020</td>
                                                <td><a href="/admin/food-items/1/edit"><i class="far fa-edit"></i></a></td>
                                                <td><a href="/admin/food-items/1/delete" onclick="if(! confirm ('Are you sure you want to delete category?')) { return false; } "><i class="far fa-trash-alt"></i></a></td>
                                            </tr> 
                                        </tbody> --}}
                                       <tbody>
                                            @foreach ($items as $item)
                                                <tr>
                                                <th scope="row">{{$item->id}}</th>
                                                <td>{{$item->title}}</td> 
                                                 <td>{{$item->ingredients}}</td>
                                                <td>{{$item->price}}</td>
                                                <td>{{date('m/d/y', strtotime($item->updated_at))}}</td>
                                                <td><a href="/admin/food-items/{{$item->id}}/edit"><i class="far fa-edit"></i></a></td>
                                                <td><a href="/admin/food-items/{{$item->id}}/delete" onclick="if(! confirm ('Are you sure you want to delete this item?')) { return false; } "><i class="far fa-trash-alt"></i></a></td>
                                            </tr>
                                            @endforeach 
                                        </tbody> 
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection


