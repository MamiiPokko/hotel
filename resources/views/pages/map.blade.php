@extends('layouts.app')

@section('content')
<style>
table, th, td {
    border: 1px solid black;
}
</style>

<!-- GOOGLE MAP-->
<center>
<div class="panel">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.1195359186113!2d98.2993037261114!3d7.88256025209396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c9991f5de889b69!2sPatong+Ocean+View+Resort!5e0!3m2!1sen!2sth!4v1509094872274" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</center>
<!--end google map -->

<div class="section-margin-top">
            <div class="row">               
                <div class="tm-section-header">
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
                    <div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">ระยะทาง</h2></div>
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>  
                </div>
            </div>
<body>	

 <div class="row">
   	<div class="col-md-3" style=""><i class="fa fa-plane" aria-hidden="true"></i> สนามบินใกล้เคียง</div>
    <div class="col-md-3" style=""><i class="fa fa-hospital-o" aria-hidden="true"></i> โรงพยาบาล และ คลิกนิก</div>
    <div class="col-md-3" style=""><i class="fa fa-heartbeat" aria-hidden="true"></i> ร้านขายยา</div>
    <div class="col-md-3" style=""><i class="fa fa-shopping-cart" aria-hidden="true"></i> ร้านสะดวกซื้อ</div>
 </div>
 <div class="col">
  	<div class="col-md-3" style="">สนามบินนานาชาติภูเก็ต
  		<p>38.2 กิโลเมตร</p>
  	</div>
  	<div class="col-md-3" style="">โรงพยาบาลป่าตอง
  		<p>2.4 กิโลเมตร</p>
  	</div>
  	<div class="col-sm-3" style="">Pharmacy
  		<p>1.9 กิโลเมตร</p>
  	</div>
  	<div class="col-sm-3" style="">Tesco Lotus Supermarket
  		<p>500 เมตร</p>
  	</div>
</div>

</body>

@endsection 