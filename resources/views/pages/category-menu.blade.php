@extends('layouts.layout')

@section('content')
        <main>
            <div class="section-1">
                <div class="container text-center">
                    <p class="delicious-p">Our Daily<span class="delicious">Offers</span></p>
                    <img src="/img/2.png" class="price-logo" alt="Native Delicacies Logo">
                    <div class="row justify-content-center text-center">
                    @foreach ($categories as $category)
                        <div class="col-md-4">
                                <div class="card" style="width:20rem; margin-top:40px;">
                                    <div class="card-body">
                                        <a href="/menu/{{$category->title}}">
                                            <h4 class="dishes">{{$category->title}}</h4>
                                        </a>
                                        <p>{{$category->description}}</p>
                                        <span class="price">Starting from ₦{{$category->price}}</span>
                                        {{-- <div class="food-image"><img src="{{$category->image_url}}"></div> --}}
                                        <a href="/menu/{{$category->title}}">
                                            <img src="{{$category->image_url}}" class="img-fluid" alt="Native Delicacies Logo">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </main>
@endsection
