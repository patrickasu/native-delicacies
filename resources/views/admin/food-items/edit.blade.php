@extends('layouts.admin')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid  dashboard-content">
         <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit Food Item </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/admin/food-items" class="breadcrumb-link">All Food Items</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Food Items</li>
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
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit this item</h5>
                                <div class="card-body">
                                    <form method="POST" action="/admin/food-items/{{$item->id}}">
                                            @csrf 
                                            @method('PUT')
                                        <div class="form-group">
                                            <label for="inputtitle">Food Name</label>
                                            <input id="inputtitle" type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" name="title" value="{{ old('title', $item->title) }}" required autocomplete="title" autofocus placeholder="Food Name">
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div> 
                                         <div class="form-group">
                                            <label for="inputingredients">Ingredients</label>
                                            <input id="inputingredients" type="text" class="form-control form-control-lg @error('ingredients') is-invalid @enderror" name="ingredients" value="{{ old('ingredients', $item->ingredients) }}" required autocomplete="ingredients" autofocus placeholder="Ingredients">
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputprice">Price</label>
                                            <input id="inputprice" type="text" class="form-control form-control-lg @error('price') is-invalid @enderror" name="price" value="{{ old('price', $item->price) }}" required autocomplete="price" autofocus placeholder="Item Price">
                                            @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputcategory">Select Category</label>
                                            <select name="category_id" class="form-control" id="inputcategory">
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                    @if ($category->id == $item->category_id)
                                                            selected
                                                        @endif
                                                @endforeach 
                                            </select>
                                        </div>  
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>   
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        <!-- =================================================
                        ============= -->
                        <!-- ============================================================== -->
                        <!-- horizontal form -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- end horizontal form -->
                        <!-- ============================================================== -->
                    </div>
            </div>
    </div>
@endsection


