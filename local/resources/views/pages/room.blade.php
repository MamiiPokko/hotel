{{ App::setLocale( Config::get('app.locale') ) }}
@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->
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
                        <a href="{{URL('/penhouse')}}">                     
                            <img src="images/penhouse/pen2.jpg" alt="image" class="img-responsive">
                        </a>
                        <h3>Penhouse suite room</h3>
                        <p class="tm-date"></p>
                        <div class="tm-home-box-2-container"></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="tm-home-box-2">
                    <a href="{{URL('/topfloor')}}">                     
                        <img src="images/topfloor/top2.jpg" alt="image" class="img-responsive"></a>
                        <h3>Top floor room</h3>
                        <p class="tm-date"></p>
                        <div class="tm-home-box-2-container">

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="tm-home-box-2">
                    <a href="{{URL('/medium')}}">                     
                        <img src="images/medium/medium2.jpg" alt="image" class="img-responsive"></a>
                        <h3>Medium floor room</h3>
                        <p class="tm-date"></p>
                        <div class="tm-home-box-2-container">
 
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                    <div class="tm-home-box-2 tm-home-box-2-right">
                    <a href="{{URL('/pool')}}">                     
                        <img src="images/pool/pool2.jpg" alt="image" class="img-responsive"></a>
                        <h3> Pool access room</h3>
                        <p class="tm-date"></p>
                        <div class="tm-home-box-2-container">

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
<!-- </div>       -->
@endsection 