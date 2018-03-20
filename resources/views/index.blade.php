@extends('layouts.app')

@section('content')


 
<div class="intro" style="background-image: url(images/bg3.jpg);">
<div class="dtable hw100">
<div class="dtable-cell hw100">
<div class="container text-center">
<h1 class="intro-title animated fadeInDown"> Find Classified Ads </h1>
<p class="sub animateme fittext3 animated fadeIn"> Find local classified ads on bootclassified in
Minutes </p>
<div class="row search-row animated fadeInUp">
<div class="col-lg-4 col-sm-4 search-col relative locationicon">
<i class="icon-location-2 icon-append"></i>
<input type="text" name="country" id="autocomplete-ajax" class="form-control locinput input-rel searchtag-input has-icon" placeholder="City/Zipcode..." value="">
</div>
<div class="col-lg-4 col-sm-4 search-col relative"><i class="icon-docs icon-append"></i>
<input type="text" name="ads" class="form-control has-icon" placeholder="I'm looking for a ..." value="">
</div>
<div class="col-lg-4 col-sm-4 search-col">
<button class="btn btn-primary btn-search btn-block"><i class="icon-search"></i><strong>Find</strong></button>
</div>
</div>
</div>
</div>
</div>
</div>
 
<div class="main-container">
<div class="container">
<div class="col-lg-12 content-box ">
<div class="row row-featured row-featured-category">
<div class="col-lg-12  box-title no-border">
<div class="inner"><h2><span>Browse by</span>
Category <a href="category" class="sell-your-item"> View more <i class="  icon-th-list"></i> </a></h2>
</div>
</div>

@foreach($category_data as $category)
	@if($category->is_shown_on_index)

			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
			<a href="{{ url('/category/'.$category->id) }}"><img src="images\category\{{$category->name}}\picture\{{$category->category_pic}}" class="img-responsive" alt="img">
			<h6> {{$category->name}}   </h6></a>
			</div>
	@endif
@endforeach

</div>
</div>

<div class="col-lg-12 content-box ">
<div class="row row-featured">
<div style="clear: both"></div>
<div class=" relative  content  clearfix">
<div class="">
<div class="tab-lite">
 
<ul class="nav nav-tabs " role="tablist">
<li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><i class="icon-location-2"></i> Top Locations</a></li>
<li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><i class="icon-search"></i> Top Search</a>
</li>
<li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"><i class="icon-th-list"></i> Top Makes</a>
</li>
</ul>
 
<div class="tab-content">



<div role="tabpanel" class="tab-pane active" id="tab1">
<div class="col-lg-12 tab-inner">
<div class="row">


<ul class="cat-list col-sm-3  col-xs-6 col-xxs-12">
@foreach($city_data as $cities)
<li><a href="category">{{$cities->city}}</a></li>
@endforeach
<li><a href="category"> Dallas </a></li>
<li><a href="category"> New York </a></li>
<li><a href="category">Santa Ana/Anaheim </a></li>
<li><a href="category">Wichita </a></li>
<li><a href="category"> Anchorage </a></li>
<li><a href="category"> Miami </a></li>
<li><a href="category">Los Angeles</a></li>

</ul>


<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
<li><a href="category">Boston </a></li>
<li><a href="category">Houston</a></li>
<li><a href="category">Salt Lake City </a></li>
<li><a href="category">Virginia Beach </a></li>
<li><a href="category"> San Diego </a></li>
<li><a href="category">San Francisco </a></li>
<li><a href="category">Tampa </a></li>
<li><a href="category"> Washington DC </a></li>
</ul>


<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
<li><a href="category">Virginia Beach </a></li>
<li><a href="category"> San Diego </a></li>
<li><a href="category">San Francisco </a></li>
<li><a href="category">Tampa </a></li>
<li><a href="category"> Washington DC </a></li>
<li><a href="category">Boston </a></li>
<li><a href="category">Houston</a></li>
<li><a href="category">Salt Lake City </a></li>
</ul>


<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
<li><a href="category">Salt Lake City </a></li>
<li><a href="category">San Francisco </a></li>
<li><a href="category">Tampa </a></li>
<li><a href="category"> Washington DC </a></li>
<li><a href="category">Virginia Beach </a></li>
<li><a href="category"> San Diego </a></li>
<li><a href="category">Boston </a></li>
<li><a href="category">Houston</a></li>
</ul>


</div>
</div>
</div>



<div role="tabpanel" class="tab-pane" id="tab2">
<div class="col-lg-12 tab-inner">
<div class="row">
<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
<li><a href="category">Virginia Beach </a></li>
<li><a href="category"> San Diego </a></li>
<li><a href="category">Boston </a></li>
<li><a href="category">Houston</a></li>
<li><a href="category">Salt Lake City </a></li>
<li><a href="category">San Francisco </a></li>
<li><a href="category">Tampa </a></li>
<li><a href="category"> Washington DC </a></li>
</ul>
<ul class="cat-list col-sm-3  col-xs-6 col-xxs-12">
<li><a href="category">Atlanta</a></li>
<li><a href="category">Wichita </a></li>
<li><a href="category"> Anchorage </a></li>
<li><a href="category"> Dallas </a></li>
<li><a href="category"> New York </a></li>
<li><a href="category">Santa Ana/Anaheim </a></li>
<li><a href="category"> Miami </a></li>
<li><a href="category">Los Angeles</a></li>
</ul>
<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
<li><a href="category">Virginia Beach </a></li>
<li><a href="category"> San Diego </a></li>
<li><a href="category">Boston </a></li>
<li><a href="category">Houston</a></li>
<li><a href="category">Salt Lake City </a></li>
<li><a href="category">San Francisco </a></li>
<li><a href="category">Tampa </a></li>
<li><a href="category"> Washington DC </a></li>
</ul>
<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
<li><a href="category">Virginia Beach </a></li>
<li><a href="category"> San Diego </a></li>
<li><a href="category">Boston </a></li>
<li><a href="category">Houston</a></li>
<li><a href="category">Salt Lake City </a></li>
<li><a href="category">San Francisco </a></li>
<li><a href="category">Tampa </a></li>
<li><a href="category"> Washington DC </a></li>
</ul>
</div>
</div>
</div>



<div role="tabpanel" class="tab-pane" id="tab3">
<div class="col-lg-12 tab-inner">
<div class="row">
<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
<li><a href="category">Virginia Beach </a></li>
<li><a href="category"> San Diego </a></li>
<li><a href="category">Boston </a></li>
<li><a href="category">Houston</a></li>
<li><a href="category">Salt Lake City </a></li>
<li><a href="category">San Francisco </a></li>
<li><a href="category">Tampa </a></li>
<li><a href="category"> Washington DC </a></li>
</ul>
<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
<li><a href="category">Virginia Beach </a></li>
<li><a href="category"> San Diego </a></li>
<li><a href="category">Boston </a></li>
<li><a href="category">Houston</a></li>
<li><a href="category">Salt Lake City </a></li>
<li><a href="category">San Francisco </a></li>
<li><a href="category">Tampa </a></li>
<li><a href="category"> Washington DC </a></li>
</ul>
<ul class="cat-list col-sm-3  col-xs-6 col-xxs-12">
<li><a href="category">Atlanta</a></li>
<li><a href="category">Wichita </a></li>
<li><a href="category"> Anchorage </a></li>
<li><a href="category"> Dallas </a></li>
<li><a href="category"> New York </a></li>
<li><a href="category">Santa Ana/Anaheim </a></li>
<li><a href="category"> Miami </a></li>
<li><a href="category">Los Angeles</a></li>
</ul>
<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
<li><a href="category">Virginia Beach </a></li>
<li><a href="category"> San Diego </a></li>
<li><a href="category">Boston </a></li>
<li><a href="category">Houston</a></li>
<li><a href="category">Salt Lake City </a></li>
<li><a href="category">San Francisco </a></li>
<li><a href="category">Tampa </a></li>
<li><a href="category"> Washington DC </a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-9 page-content col-thin-right">
<div class="inner-box category-content">
<h2 class="title-2">Find Classified Ads World Wide </h2>
<div class="row">




@foreach($category_data as $category)
<div class="col-md-4 col-sm-4 ">
    <div class="cat-list">
<h3 ><a href= "{{ url('/category/'.$category->id) }}" ><img style="width:20%" style="height:10%" src="images\category\{{$category->name}}\logo\{{$category->category_logo}}">  {{$category->name}}  </a>
<span data-target=".cat-id-1" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
</h3>
<ul class="cat-collapse collapse in cat-id-1">
@foreach($sub_category_data as $sub_category)
@if($category->id == $sub_category->categorie_id)
<li><a href="{{ url('/sub-category/'.$sub_category->id) }}">{{$sub_category->name}}</a></li>
@endif
@endforeach
</ul>
</div>
</div>
@endforeach



</div>
</div>
<div class="inner-box has-aff relative">
<a class="dummy-aff-img" href="category"><img src="images/aff2.jpg" class="img-responsive" alt=" aff"> </a>
</div>
</div>
<div class="col-sm-3 page-sidebar col-thin-left">
<aside>
<div class="inner-box no-padding">
<div class="inner-box-content"><a href="#"><img class="img-responsive" src="images/site/app.jpg" alt="tv"></a>
</div>
</div>
<div class="inner-box">
<h2 class="title-2">Popular Categories </h2>
<div class="inner-box-content">
<ul class="cat-list arrow">
<li><a href="sub-category-sub-location"> Apparel (1,386) </a></li>
<li><a href="sub-category-sub-location"> Art (1,163) </a></li>
<li><a href="sub-category-sub-location"> Business Opportunities (4,974) </a>
</li>
<li><a href="sub-category-sub-location"> Community and Events (1,258) </a></li>
<li><a href="sub-category-sub-location"> Electronics and Appliances
(1,578) </a></li>
<li><a href="sub-category-sub-location"> Jobs and Employment (3,609) </a></li>
<li><a href="sub-category-sub-location"> Motorcycles (968) </a></li>
<li><a href="sub-category-sub-location"> Pets (1,188) </a></li>
<li><a href="sub-category-sub-location"> Services (7,583) </a></li>
<li><a href="sub-category-sub-location"> Vehicles (1,129) </a></li>
</ul>
</div>
</div>
<div class="inner-box no-padding"><img class="img-responsive" src="images/add2.jpg" alt="">
</div>
</aside>
</div>
</div>
</div>
</div>
 
<div class="page-info hasOverly" style="background: url(images/bg.jpg); background-size:cover">
<div class="bg-overly">
<div class="container text-center section-promo">
<div class="row">
<div class="col-sm-3 col-xs-6 col-xxs-12">
<div class="iconbox-wrap">
<div class="iconbox">
<div class="iconbox-wrap-icon">
<i class="icon  icon-group"></i>
</div>
<div class="iconbox-wrap-content">
<h5><span>2200</span></h5>
<div class="iconbox-wrap-text">Trusted Seller</div>
</div>
</div>
 
</div>
 
</div>
<div class="col-sm-3 col-xs-6 col-xxs-12">
<div class="iconbox-wrap">
<div class="iconbox">
<div class="iconbox-wrap-icon">
<i class="icon  icon-th-large-1"></i>
</div>
<div class="iconbox-wrap-content">
<h5><span>100</span></h5>
<div class="iconbox-wrap-text">Categories</div>
</div>
</div>
 
</div>
 
</div>
<div class="col-sm-3 col-xs-6  col-xxs-12">
<div class="iconbox-wrap">
<div class="iconbox">
<div class="iconbox-wrap-icon">
<i class="icon  icon-map"></i>
</div>
<div class="iconbox-wrap-content">
<h5><span>700</span></h5>
<div class="iconbox-wrap-text">Location</div>
</div>
</div>
 
</div>
 
</div>
<div class="col-sm-3 col-xs-6 col-xxs-12">
<div class="iconbox-wrap">
<div class="iconbox">
<div class="iconbox-wrap-icon">
<i class="icon icon-facebook"></i>
</div>
<div class="iconbox-wrap-content">
<h5><span>50,000</span></h5>
<div class="iconbox-wrap-text"> Facebook Fans</div>
</div>
</div>
 
</div>
 
</div>
</div>
</div>
</div>
</div>
<div class="page-bottom-info">
<div class="page-bottom-info-inner">
<div class="page-bottom-info-content text-center">
<h1>If you have any questions, comments or concerns, please call the Classified Advertising department
at +92 303 2640161</h1>
<a class="btn  btn-lg btn-primary-dark" href="tel:+923032640161">
<i class="icon-mobile"></i> <span class="hide-xs color50">Call Now:</span> +92 303 2640161 </a>
</div>
</div>
</div>

 @endsection
