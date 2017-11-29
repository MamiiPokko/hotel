@extends('layouts.app')

@section('content')
<section>
<div class="section-margin-top">
            <div class="row">               
                <div class="tm-section-header">
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
                    <div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">ROOM TYPE</h2></div>
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="tm-home-box-2">                     
                        <img src="images/index-03.jpg" alt="image" class="img-responsive">
                        <h3>Penhouse suite room</h3>
                        <p class="tm-date"></p>
                        <div class="tm-home-box-2-container">
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
                            <a href="{{URL('/penhouse')}}" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Detail</span></a>
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="tm-home-box-2">                     
                        <img src="images/index-04.jpg" alt="image" class="img-responsive">
                        <h3>Top floor room</h3>
                        <p class="tm-date"></p>
                        <div class="tm-home-box-2-container">
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
                            <a href="{{URL('/topfloor')}}"" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Deatil</span></a>
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="tm-home-box-2">                     
                        <img src="images/medium/medium1.jpg" alt="image" class="img-responsive">
                        <h3>Medium floor room</h3>
                        <p class="tm-date"></p>
                        <div class="tm-home-box-2-container">
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
                            <a href="{{URL('/medium')}}" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Deatil</span></a>
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="tm-home-box-2 tm-home-box-2-right">                     
                        <img src="images/pool/pool1.jpg" alt="image" class="img-responsive">
                        <h3> Pool access room</h3>
                        <p class="tm-date"></p>
                        <div class="tm-home-box-2-container">
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
                            <a href="{{URL('/pool')}}" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Detail</span></a>
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="home-description">Holiday is free Bootstrap v3.3.5 responsive template for tour and travel websites. You can download and use this layout for any purpose. You do not need to provide a credit link to us. If you have any question, feel free to <a href="http://www.facebook.com/templatemo" target="_parent">contact us</a>. Credit goes to <a rel="nofollow" href="http://unsplash.com" target="_parent">Unspash</a> for images used in this template.</p>                    
                </div>
            </div>          
        </div>
    </section>      

@endsection 