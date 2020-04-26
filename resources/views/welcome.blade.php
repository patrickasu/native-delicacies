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
            <div class="section-2">
                <div class="container-fluid">
                    <div class="d-flex justify-content-end">
                        <div class="d-flex flex-column">
                            <h1 class="header1">Best Delicious Food Ever</h1>
                            <p class="header-desc">This command should be used on fresh applications and will install. <br> applications and will install a layout applications and will install. <br> applications and will install a layout application and will.</p>
                            <div class="d-flex flex-row">
                                <a href="/about" class="section2-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-5">
              <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-row">
                            <p class="news-caption">Stay Updated</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-row">
                            <h1 class="header-news">Latest News & Events</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">    
                        <div class="d-flex flex-column">
                            <img src="/img/foody.png" class="img-fluid" alt="Native Delicacies Logo">
                            <p class="news-desc">Food and Beverage Magazine has remained the leading resource</p>
                            <i class="fa fa-calendar-check-o" aria-hidden="true"> 15/03/2020</i>
                        </div>   
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-column">
                            <img src="/img/a5.jpg" class="img-fluid" alt="Native Delicacies Logo">
                            <p class="news-desc">Food and Beverage Magazine has remained the leading resource</p>
                            <i class="fa fa-calendar-check-o" aria-hidden="true"> 15/03/2020</i>
                        </div> 
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-column">
                            <img src="/img/a4.jpg" class="img-fluid" alt="Native Delicacies Logo">
                            <p class="news-desc">Food and Beverage Magazine has remained the leading resource</p>
                            <i class="fa fa-calendar-check-o" aria-hidden="true"> 15/03/2020</i>
                        </div> 
                    </div>
                </div> 
             </div>  
            </div>
            {{-- <div class="footer">
              <div class="container">
                <div class="row">
                        <div class="col-md-4">    
                            <div class="d-flex flex-column">
                                <i class="fa fa-address-card-o" aria-hidden="true"></i>
                                <p class="footer-header">Contact Address</p>
                                <p class="footer-desc">Bovibe Villa N0. 25 Cooperative <br/> Villa Estate Badore Ajah, Lagos</p>
                            </div>   
                        </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-column">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <p class="footer-header">Opening Hours</p>
                            <p class="footer-desc">Monday - Friday: 10AM - 12PM <br> Saturday - Sunday: 10AM - 1PM</p>
                            <p class="footer-desc"></p>
                        </div> 
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-column">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            <p class="footer-header">Private Dinning</p>
                            <p class="footer-desc">Email: reservations@nativedelicacies.com <br> Phone: +234815838036, 07034456234</p>
                            <p class="footer-desc"></p>
                        </div> 
                    </div>
                </div> 
             </div>  
            </div> --}}
        </main>
@endsection
