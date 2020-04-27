@extends('layouts.layout')

@section('content')
        <div class="single-food-section">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-row">
                            <p class="food-item-header">{{$foodItem}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                @foreach ($foodItems as $foodItem)
                    <div class="col-md-6"> 
                        <div class="d-flex flex-column">
                            <div class="items">
                                <h4>{{$foodItem->title}}</h4>
                                <span class="menu-price">₦{{$foodItem->price}}</span>
                            </div>
                            <div class="ingredient">
                                <p class="ingredients">{{$foodItem->ingredients}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div> 
            </div>
        </div>
@endsection
