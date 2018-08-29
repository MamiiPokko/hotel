{{ App::setLocale( Config::get('app.locale') ) }}
@extends('layouts.app')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@section('content')
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

<section>
<!--header-->
      <div class="section-margin-top">
            <div class="row">               
                <div class="tm-section-header">
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
                    <div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">TOP FLOOR ROOM</h2></div>
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>  
                </div>
            </div>

<!--slide images-->
<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides" src="{{URL('/images/topfloor/top1.jpg')}}">
  <img class="mySlides" src="{{URL('/images/topfloor/top3.jpg')}}">
  <!--img class="mySlides" src="{{URL('/images/tours-10.jpg')}}" style="width:100%"-->
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<div class="section-margin-top">
              <div class="row">               
                <div class="tm-section-header">
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
                    <div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">@lang('message.facilities')</h2></div>
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>  
                </div>
            </div>

<div class="row">
   	<div class="col-md-3" style=""><i class="fa fa-wifi" aria-hidden="true"></i> @lang('message.airport')</div>
    <div class="col-md-3" style=""><i class="fa fa-hospital-o" aria-hidden="true"></i> @lang('message.hospital')</div>
    <div class="col-md-3" style=""><i class="fa fa-heartbeat" aria-hidden="true"></i> @lang('message.pharmacy')</div>
    <div class="col-md-3" style=""><i class="fa fa-shopping-cart" aria-hidden="true"></i> @lang('message.convenience_store')</div>
 </div>
 <div class="col">
  	<div class="col-md-3" style="">@lang('message.phuket_international_airport')
  		<p>38.2 @lang('message.kilometer')</p>
  	</div>
  	<div class="col-md-3" style="">@lang('message.patong_hospital')
  		<p>2.4 @lang('message.kilometer')</p>
  	</div>
  	<div class="col-sm-3" style="">@lang('message.pharmacy')
  		<p>1.9 @lang('message.kilometer')</p>
  	</div>
  	<div class="col-sm-3" style="">@lang('message.tesco_lotus_supermarket')
  		<p>500 @lang('message.meter')</p>
  	</div>
</div>
</div>


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>



</section>

@endsection