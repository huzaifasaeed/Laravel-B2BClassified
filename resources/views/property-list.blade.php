@extends('layouts.app')

@section('content')
 
<div class="search-row-wrapper">
<div class="container text-center">
<div class="col-sm-3">
<input class="form-control keyword" type="text" placeholder="e.g. Mobile Sale">
</div>
<div class="col-sm-3">
<select class="form-control" name="category" id="search-category">
<option selected="selected" value="">All Categories</option>
<option value="Vehicles" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> -
Vehicles -
</option>
<option value="Cars"> Cars</option>
<option value="Commercial vehicles"> Commercial vehicles</option>
<option value="Motorcycles"> Motorcycles</option>
<option value="Motorcycle Equipment"> Car &amp; Motorcycle Equipment</option>
<option value="Boats"> Boats</option>
<option value="Vehicles"> Other Vehicles</option>
<option value="House" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> -
House and Children -
</option>
<option value="Appliances"> Appliances</option>
<option value="Inside"> Inside</option>
<option value="Games"> Games and Clothing</option>
<option value="Garden"> Garden</option>
<option value="Multimedia" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> -
Multimedia -
</option>
<option value="Telephony"> Telephony</option>
<option value="Image"> Image and sound</option>
<option value="Computers"> Computers and Accessories</option>
<option value="Video"> Video games and consoles</option>
<option value="Real" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Real
Estate -
</option>
<option value="Apartment"> Apartment</option>
<option value="Home"> Home</option>
<option value="Vacation"> Vacation Rentals</option>
<option value="Commercial"> Commercial offices and local</option>
<option value="Grounds"> Grounds</option>
<option value="Houseshares"> Houseshares</option>
<option value="Other real estate"> Other real estate</option>
<option value="Services" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> -
Services -
</option>
<option value="Jobs"> Jobs</option>
<option value="Job application"> Job application</option>
<option value="Services"> Services</option>
<option value="Price"> Price</option>
<option value="Business"> Business and goodwill</option>
<option value="Professional"> Professional equipment</option>
<option value="dropoff" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> -
Extra -
</option>
<option value="Other"> Other</option>
</select>
</div>
<div class="col-sm-3">
<select class="form-control" name="location" id="id-location">
<option selected="selected" value="">All Locations</option>
<option value="New York"> New York</option>
<option value="South-West"> South West</option>
<option value="South-East"> South East</option>
<option value="East-England"> East England</option>
<option value="East-Midlands"> East Midlands</option>
<option value="West-Midlands"> West Midlands</option>
<option value="North-East"> North East</option>
<option value="North-West"> North West</option>
<option value="Scotland"> Scotland</option>
<option value="Wales"> Wales</option>
<option value="Northern-Ireland"> Northern Ireland</option>
<option value="England"> England</option>
<option value="UK"> UK</option>
<option value="Other-Locations">Other Locations</option>
</select>
</div>
<div class="col-sm-3">
<button class="btn btn-block btn-primary  "><i class="fa fa-search"></i></button>
</div>
</div>
</div>
 
<div class="main-container">
<div class="container">
<div class="row">
 
<div class="col-sm-3 page-sidebar mobile-filter-sidebar">
<aside>
<div class="inner-box">
<div class="categories-list  list-filter">
<h5 class="list-title"><strong><a href="#">All Categories</a></strong></h5>
<ul class=" list-unstyled">
<li><a href="sub-category-sub-location"><span class="title">Electronics</span><span class="count">&nbsp;8626</span></a>
</li>
<li><a href="sub-category-sub-location"><span class="title">Automobiles </span><span class="count">&nbsp;123</span></a></li>
<li><a href="sub-category-sub-location"><span class="title">Property </span><span class="count">&nbsp;742</span></a></li>
<li><a href="sub-category-sub-location"><span class="title">Services </span><span class="count">&nbsp;8525</span></a></li>
<li><a href="sub-category-sub-location"><span class="title">For Sale </span><span class="count">&nbsp;357</span></a></li>
<li><a href="sub-category-sub-location"><span class="title">Learning </span><span class="count">&nbsp;3576</span></a></li>
<li><a href="sub-category-sub-location"><span class="title">Jobs </span><span class="count">&nbsp;453</span></a></li>
<li><a href="sub-category-sub-location"><span class="title">Cars & Vehicles</span><span class="count">&nbsp;801</span></a>
</li>
<li><a href="sub-category-sub-location"><span class="title">Other</span><span class="count">&nbsp;9803</span></a></li>
</ul>
</div>
 
<div class="locations-list  list-filter">
<h5 class="list-title"><strong><a href="#">Location</a></strong></h5>
<ul class="browse-list list-unstyled long-list">
<li><a href="sub-category-sub-location"> Atlanta </a></li>
<li><a href="sub-category-sub-location"> Wichita </a></li>
<li><a href="sub-category-sub-location"> Anchorage </a></li>
<li><a href="sub-category-sub-location"> Dallas </a></li>
<li><a href="sub-category-sub-location">New York </a></li>
<li><a href="sub-category-sub-location"> Santa Ana/Anaheim </a></li>
<li><a href="sub-category-sub-location"> Miami </a></li>
<li><a href="sub-category-sub-location"> Virginia Beach </a></li>
<li><a href="sub-category-sub-location"> San Diego </a></li>
<li><a href="sub-category-sub-location"> Boston </a></li>
<li><a href="sub-category-sub-location"> Houston </a></li>
<li><a href="sub-category-sub-location">Salt Lake City </a></li>
<li><a href="sub-category-sub-location"> Other Locations </a></li>
</ul>
</div>
 
<div class="locations-list  list-filter">
<h5 class="list-title"><strong><a href="#">Price range</a></strong></h5>
<form role="form" class="form-inline ">
<div class="form-group col-sm-4 no-padding">
<input type="text" placeholder="$ 2000 " id="minPrice" class="form-control">
</div>
<div class="form-group col-sm-1 no-padding text-center hidden-xs"> -</div>
<div class="form-group col-sm-4 no-padding">
<input type="text" placeholder="$ 3000 " id="maxPrice" class="form-control">
</div>
<div class="form-group col-sm-3 no-padding">
<button class="btn btn-default pull-right btn-block-xs" type="submit">GO
</button>
</div>
</form>
<div style="clear:both"></div>
</div>
 
<div class="locations-list  list-filter">
<h5 class="list-title"><strong><a href="#">Seller</a></strong></h5>
<ul class="browse-list list-unstyled long-list">
<li><a href="sub-category-sub-location"><strong>All Ads</strong> <span class="count">228,705</span></a></li>
<li><a href="sub-category-sub-location">Business <span class="count">28,705</span></a></li>
<li><a href="sub-category-sub-location">Personal <span class="count">18,705</span></a></li>
</ul>
</div>
 
<div class="locations-list  list-filter">
<h5 class="list-title"><strong><a href="#">Condition</a></strong></h5>
<ul class="browse-list list-unstyled long-list">
<li><a href="sub-category-sub-location">New <span class="count">228,705</span></a>
</li>
<li><a href="sub-category-sub-location">Used <span class="count">28,705</span></a>
</li>
<li><a href="sub-category-sub-location">None </a></li>
</ul>
</div>
 
<div style="clear:both"></div>
</div>
 
</aside>
</div>
 
<div class="col-sm-9 page-content col-thin-left">
<div class="category-list">
<div class="tab-box ">
 
<ul class="nav nav-tabs add-tabs" role="tablist">
<li class="active"><a href="#allAds" role="tab" data-toggle="tab">All Ads <span class="badge">228,705</span></a></li>
</ul>
<div class="tab-filter">
<select class="selectpicker" data-style="btn-select" data-width="auto">
<option>Short by</option>
<option>Price: Low to High</option>
<option>Price: High to Low</option>
</select>
</div>
</div>
 
<div class="listing-filter">
<div class="pull-left col-xs-6">
<div class="breadcrumb-list"><a href="#" class="current"> <span>All Properties</span></a> in
 
<span class="cityName"> New York </span> <a href="#selectRegion" id="dropdownMenu1" data-toggle="modal"> <span class="caret"></span> </a></div>
</div>
<div class="pull-right col-xs-6 text-right listing-view-action"><span class="list-view active"><i class="  icon-th"></i></span> <span class="compact-view"><i class=" icon-th-list  "></i></span> <span class="grid-view "><i class=" icon-th-large "></i></span></div>
<div style="clear:both"></div>
</div>
 
 
<div class="mobile-filter-bar col-lg-12  ">
<ul class="list-unstyled list-inline no-margin no-padding">
<li class="filter-toggle">
<a class="">
<i class="  icon-th-list"></i>
Filters
</a>
</li>
<li>
<div class="dropdown">
<a data-toggle="dropdown" class="dropdown-toggle"><i class="caret "></i> Short
by </a>
<ul class="dropdown-menu">
<li><a href="#" rel="nofollow">Relevance</a></li>
<li><a href="#" rel="nofollow">Date</a></li>
<li><a href="#" rel="nofollow">Company</a></li>
</ul>
</div>
</li>
</ul>
</div>
<div class="menu-overly-mask"></div>
 
<div class="adds-wrapper property-list">
<div class="item-list">
<div class="col-sm-3 no-padding photobox">
<div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 2 </span> <a href="property-details"><img class="thumbnail no-margin" src="images/house/thumb/2.jpg" alt="img"></a></div>
</div>
 
<div class="col-sm-6 add-desc-box">
<div class="add-details">
<h5 class="add-title"><a href="property-details">
Exclusive and modern luxury apartment Union Avenue </a></h5>
<span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 | <a><i class="fa fa-map-marker"></i> Map</a> </span> </span>
<div class="prop-info-box">
<div class="prop-info">
<div class="clearfix prop-info-block">
<span class="title ">4+2</span>
<span class="text">Adults | Children</span>
</div>
<div class="clearfix prop-info-block middle">
<span class="title prop-area">171 m²</span>
<span class="text">Area (ca.)</span>
</div>
<div class="clearfix prop-info-block">
<span class="title prop-room">4</span>
<span class="text">room </span>
</div>
</div>
</div>
</div>
</div>
 
<div class="col-sm-3 text-right  price-box">
<a class="btn btn-border-thin  btn-save" title="save ads" data-toggle="tooltip" data-placement="left">
<i class="icon icon-heart"></i>
</a>
<a class="btn btn-border-thin  btn-share ">
<i class="icon icon-export" data-toggle="tooltip" data-placement="left" title="share"></i>
</a>
<h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
<div style="clear: both"></div>
<a class="btn btn-success btn-sm bold" href="property-details">
Check Availabilty
</a>
</div>
 
</div>
 
<div class="item-list">
<div class="col-sm-3 no-padding photobox">
<div class="add-image">
<div id="properites-image-slide" class="carousel slide" data-ride="carousel" data-interval="false">
 
<div class="carousel-inner" role="listbox">
<div class="item active">
<img src="images/house/thumb/4.jpg" alt="...">
</div>
<div class="item">
<img src="images/house/thumb/5.jpg" alt="...">
</div>
<div class="item">
<img src="images/house/thumb/6.jpg" alt="...">
</div>
</div>
 
<a class="left carousel-control" href="#properites-image-slide" role="button" data-slide="prev">
<span class="icon icon-left-open-big icon-prev" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#properites-image-slide" role="button" data-slide="next">
<span class="icon icon-right-open-big icon-next" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
</div>
 
<div class="col-sm-6 add-desc-box">
<div class="add-details">
<h5 class="add-title"><a href="property-details">
Wow ! This item has a image slider ! </a></h5>
<span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 | <a><i class="fa fa-map-marker"></i> Map</a> </span> </span>
<div class="prop-info-box">
<div class="prop-info">
<div class="clearfix prop-info-block">
<span class="title ">4+2</span>
<span class="text">Adults | Children</span>
</div>
<div class="clearfix prop-info-block middle">
<span class="title prop-area">171 m²</span>
<span class="text">Area (ca.)</span>
</div>
<div class="clearfix prop-info-block">
<span class="title prop-room">4</span>
<span class="text">room </span>
</div>
</div>
</div>
</div>
</div>
 
<div class="col-sm-3 text-right  price-box">
<a class="btn btn-border-thin  btn-save" title="save ads" data-toggle="tooltip" data-placement="left">
<i class="icon icon-heart"></i>
</a>
<a class="btn btn-border-thin  btn-share ">
<i class="icon icon-export" data-toggle="tooltip" data-placement="left" title="share"></i>
</a>
<h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
<div style="clear: both"></div>
<a class="btn btn-success btn-sm bold" href="property-details">
Check Availabilty
</a>
</div>
 
</div>
 
<div class="item-list">
<div class="col-sm-3 no-padding photobox">
<div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 4 </span> <a href="property-details"><img class="thumbnail no-margin" src="images/house/thumb/9.jpg" alt="img"></a></div>
</div>
 
<div class="col-sm-6 add-desc-box">
<div class="add-details">
<h5 class="add-title"><a href="property-details">
Exclusive and modern luxury apartment Union Avenue </a></h5>
<span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 | <a><i class="fa fa-map-marker"></i> Map</a> </span> </span>
<div class="prop-info-box">
<div class="prop-info">
<div class="clearfix prop-info-block">
<span class="title ">4+2</span>
<span class="text">Adults | Children</span>
</div>
<div class="clearfix prop-info-block middle">
<span class="title prop-area">171 m²</span>
<span class="text">Area (ca.)</span>
</div>
<div class="clearfix prop-info-block">
<span class="title prop-room">4</span>
<span class="text">room </span>
</div>
</div>
</div>
</div>
</div>
 
<div class="col-sm-3 text-right  price-box">
<a class="btn btn-border-thin  btn-save" title="save ads" data-toggle="tooltip" data-placement="left">
<i class="icon icon-heart"></i>
</a>
<a class="btn btn-border-thin  btn-share ">
<i class="icon icon-export" data-toggle="tooltip" data-placement="left" title="share"></i>
</a>
<h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
<div style="clear: both"></div>
<a class="btn btn-success btn-sm bold" href="property-details">
Check Availabilty
</a>
</div>
 
</div>
 
<div class="item-list">
<div class="col-sm-3 no-padding photobox">
<div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 3 </span> <a href="property-details"><img class="thumbnail no-margin" src="images/house/thumb/13.jpg" alt="img"></a></div>
</div>
 
<div class="col-sm-6 add-desc-box">
<div class="add-details">
<h5 class="add-title"><a href="property-details">
Exclusive and modern luxury apartment Union Avenue </a></h5>
<span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 | <a><i class="fa fa-map-marker"></i> Map</a> </span> </span>
<div class="prop-info-box">
<div class="prop-info">
<div class="clearfix prop-info-block">
<span class="title ">4+2</span>
<span class="text">Adults | Children</span>
</div>
<div class="clearfix prop-info-block middle">
<span class="title prop-area">171 m²</span>
<span class="text">Area (ca.)</span>
</div>
<div class="clearfix prop-info-block">
<span class="title prop-room">4</span>
<span class="text">room </span>
</div>
</div>
</div>
</div>
</div>
 
<div class="col-sm-3 text-right  price-box">
<a class="btn btn-border-thin  btn-save" title="save ads" data-toggle="tooltip" data-placement="left">
<i class="icon icon-heart"></i>
</a>
<a class="btn btn-border-thin  btn-share ">
<i class="icon icon-export" data-toggle="tooltip" data-placement="left" title="share"></i>
</a>
<h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
<div style="clear: both"></div>
<a class="btn btn-success btn-sm bold" href="property-details">
Check Availabilty
</a>
</div>
 
</div>
 
<div class="item-list">
<div class="col-sm-3 no-padding photobox">
<div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 4 </span> <a href="property-details"><img class="thumbnail no-margin" src="images/house/thumb/18.jpg" alt="img"></a></div>
</div>
 
<div class="col-sm-6 add-desc-box">
<div class="add-details">
<h5 class="add-title"><a href="property-details">
Fully Furnished 2 Bedroom in Residence luxury apartment </a></h5>
<span class="info-row"> <span class="item-location">Sports City , NY 25411 | <a><i class="fa fa-map-marker"></i> Map</a> </span> </span>
<div class="prop-info-box">
<div class="prop-info">
<div class="clearfix prop-info-block">
<span class="title ">2+2</span>
<span class="text">Adults | Children</span>
</div>
<div class="clearfix prop-info-block middle">
<span class="title prop-area">271 m²</span>
<span class="text">Area (ca.)</span>
</div>
<div class="clearfix prop-info-block">
<span class="title prop-room">2</span>
<span class="text">room </span>
</div>
</div>
</div>
</div>
</div>
 
<div class="col-sm-3 text-right  price-box">
<a class="btn btn-border-thin  btn-save" title="save ads" data-toggle="tooltip" data-placement="left">
<i class="icon icon-heart"></i>
</a>
<a class="btn btn-border-thin  btn-share ">
<i class="icon icon-export" data-toggle="tooltip" data-placement="left" title="share"></i>
</a>
<h3 class="item-price "> <strong>$5400 - $7260 </strong></h3>
<div style="clear: both"></div>
<a class="btn btn-success btn-sm bold" href="property-details">
Check Availabilty
</a>
</div>
 
</div>
 
<div class="item-list">
<div class="col-sm-3 no-padding photobox">
<div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 4 </span> <a href="property-details"><img class="thumbnail no-margin" src="images/house/thumb/b12.jpg" alt="img"></a></div>
</div>
 
<div class="col-sm-6 add-desc-box">
<div class="add-details">
<h5 class="add-title"><a href="property-details">
Exclusive Furnished and modern luxury apartment </a></h5>
<span class="info-row"> <span class="item-location">Oceana Avenue, Brooklyn, NY 50154 | <a><i class="fa fa-map-marker"></i> Map</a> </span> </span>
<div class="prop-info-box">
<div class="prop-info">
<div class="clearfix prop-info-block">
<span class="title ">4+2</span>
<span class="text">Adults | Children</span>
</div>
<div class="clearfix prop-info-block middle">
<span class="title prop-area">321 m²</span>
<span class="text">Area (ca.)</span>
</div>
<div class="clearfix prop-info-block">
<span class="title prop-room">4</span>
<span class="text">room </span>
</div>
</div>
</div>
</div>
</div>
 
<div class="col-sm-3 text-right  price-box">
<a class="btn btn-border-thin  btn-save" title="save ads" data-toggle="tooltip" data-placement="left">
<i class="icon icon-heart"></i>
</a>
<a class="btn btn-border-thin  btn-share ">
<i class="icon icon-export" data-toggle="tooltip" data-placement="left" title="share"></i>
</a>
<h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
<div style="clear: both"></div>
<a class="btn btn-success btn-sm bold" href="property-details">
Check Availabilty
</a>
</div>
 
</div>
 
<div class="item-list">
<div class="col-sm-3 no-padding photobox">
<div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 6 </span> <a href="property-details"><img class="thumbnail no-margin" src="images/house/thumb/14.jpg" alt="img"></a></div>
</div>
 
<div class="col-sm-6 add-desc-box">
<div class="add-details">
<h5 class="add-title"><a href="property-details">
Majestic Atlantis View from a High Floor luxury apartment </a></h5>
<span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 | <a><i class="fa fa-map-marker"></i> Map</a> </span> </span>
<div class="prop-info-box">
<div class="prop-info">
<div class="clearfix prop-info-block">
<span class="title ">4+2</span>
<span class="text">Adults | Children</span>
</div>
<div class="clearfix prop-info-block middle">
<span class="title prop-area">171 m²</span>
<span class="text">Area (ca.)</span>
</div>
<div class="clearfix prop-info-block">
<span class="title prop-room">4</span>
<span class="text">room </span>
</div>
</div>
</div>
</div>
</div>
 
<div class="col-sm-3 text-right  price-box">
<a class="btn btn-border-thin  btn-save" title="save ads" data-toggle="tooltip" data-placement="left">
<i class="icon icon-heart"></i>
</a>
<a class="btn btn-border-thin  btn-share ">
<i class="icon icon-export" data-toggle="tooltip" data-placement="left" title="share"></i>
</a>
<h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
<div style="clear: both"></div>
<a class="btn btn-success btn-sm bold" href="property-details">
Check Availabilty
</a>
</div>
 
</div>
 
<div class="item-list">
<div class="col-sm-3 no-padding photobox">
<div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 4 </span> <a href="property-details"><img class="thumbnail no-margin" src="images/house/thumb/11.jpg" alt="img"></a></div>
</div>
 
<div class="col-sm-6 add-desc-box">
<div class="add-details">
<h5 class="add-title"><a href="property-details">
Exclusive and modern Atlantis View - Low Floor </a></h5>
<span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 | <a><i class="fa fa-map-marker"></i> Map</a> </span> </span>
<div class="prop-info-box">
<div class="prop-info">
<div class="clearfix prop-info-block">
<span class="title ">4+2</span>
<span class="text">Adults | Children</span>
</div>
<div class="clearfix prop-info-block middle">
<span class="title prop-area">171 m²</span>
<span class="text">Area (ca.)</span>
</div>
<div class="clearfix prop-info-block">
<span class="title prop-room">4</span>
<span class="text">room </span>
</div>
</div>
</div>
</div>
</div>
 
<div class="col-sm-3 text-right  price-box">
<a class="btn btn-border-thin  btn-save" title="save ads" data-toggle="tooltip" data-placement="left">
<i class="icon icon-heart"></i>
</a>
<a class="btn btn-border-thin  btn-share ">
<i class="icon icon-export" data-toggle="tooltip" data-placement="left" title="share"></i>
</a>
<h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
<div style="clear: both"></div>
<a class="btn btn-success btn-sm bold" href="property-details">
Check Availabilty
</a>
</div>
 
</div>
 
<div class="item-list">
<div class="col-sm-3 no-padding photobox">
<div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 4 </span> <a href="property-details"><img class="thumbnail no-margin" src="images/house/thumb/16.jpg" alt="img"></a></div>
</div>
 
<div class="col-sm-6 add-desc-box">
<div class="add-details">
<h5 class="add-title"><a href="property-details">
Exclusive and modern luxury apartment Union Avenue </a></h5>
<span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 | <a><i class="fa fa-map-marker"></i> Map</a> </span> </span>
<div class="prop-info-box">
<div class="prop-info">
<div class="clearfix prop-info-block">
<span class="title ">4+2</span>
<span class="text">Adults | Children</span>
</div>
<div class="clearfix prop-info-block middle">
<span class="title prop-area">171 m²</span>
<span class="text">Area (ca.)</span>
</div>
<div class="clearfix prop-info-block">
<span class="title prop-room">4</span>
<span class="text">room </span>
</div>
</div>
</div>
</div>
</div>
 
<div class="col-sm-3 text-right  price-box">
<a class="btn btn-border-thin  btn-save" title="save ads" data-toggle="tooltip" data-placement="left">
<i class="icon icon-heart"></i>
</a>
<a class="btn btn-border-thin  btn-share ">
<i class="icon icon-export" data-toggle="tooltip" data-placement="left" title="share"></i>
</a>
<h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
<div style="clear: both"></div>
<a class="btn btn-success btn-sm bold" href="property-details">
Check Availabilty
</a>
</div>
 
</div>
 
<div class="item-list">
<div class="col-sm-3 no-padding photobox">
<div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 8 </span> <a href="property-details"><img class="thumbnail no-margin" src="images/house/thumb/building.jpg" alt="img"></a></div>
</div>
 
<div class="col-sm-6 add-desc-box">
<div class="add-details">
<h5 class="add-title"><a href="property-details">
Exclusive and modern luxury apartment Union Avenue </a></h5>
<span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 | <a><i class="fa fa-map-marker"></i> Map</a> </span> </span>
<div class="prop-info-box">
<div class="prop-info">
<div class="clearfix prop-info-block">
<span class="title ">4+2</span>
<span class="text">Adults | Children</span>
</div>
<div class="clearfix prop-info-block middle">
<span class="title prop-area">171 m²</span>
<span class="text">Area (ca.)</span>
</div>
<div class="clearfix prop-info-block">
<span class="title prop-room">4</span>
<span class="text">room </span>
</div>
</div>
</div>
</div>
</div>
 
<div class="col-sm-3 text-right  price-box">
<a class="btn btn-border-thin  btn-save" title="save ads" data-toggle="tooltip" data-placement="left">
<i class="icon icon-heart"></i>
</a>
<a class="btn btn-border-thin  btn-share ">
<i class="icon icon-export" data-toggle="tooltip" data-placement="left" title="share"></i>
</a>
<h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
<div style="clear: both"></div>
<a class="btn btn-success btn-sm bold" href="property-details">
Check Availabilty
</a>
</div>
 
</div>
 
<div class="item-list">
<div class="col-sm-3 no-padding photobox">
<div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 4 </span> <a href="property-details"><img class="thumbnail no-margin" src="images/house/thumb/18.jpg" alt="img"></a></div>
</div>
 
<div class="col-sm-6 add-desc-box">
<div class="add-details">
<h5 class="add-title"><a href="property-details">
Exclusive and modern luxury apartment Union Avenue </a></h5>
<span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 | <a><i class="fa fa-map-marker"></i> Map</a> </span> </span>
<div class="prop-info-box">
<div class="prop-info">
<div class="clearfix prop-info-block">
<span class="title ">4+2</span>
<span class="text">Adults | Children</span>
</div>
<div class="clearfix prop-info-block middle">
<span class="title prop-area">171 m²</span>
<span class="text">Area (ca.)</span>
</div>
<div class="clearfix prop-info-block">
<span class="title prop-room">4</span>
<span class="text">room </span>
</div>
</div>
</div>
</div>
</div>
 
<div class="col-sm-3 text-right  price-box">
<a class="btn btn-border-thin  btn-save" title="save ads" data-toggle="tooltip" data-placement="left">
<i class="icon icon-heart"></i>
</a>
<a class="btn btn-border-thin  btn-share ">
<i class="icon icon-export" data-toggle="tooltip" data-placement="left" title="share"></i>
</a>
<h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
<div style="clear: both"></div>
<a class="btn btn-success btn-sm bold" href="property-details">
Check Availabilty
</a>
</div>
 
</div>
 
</div>
 
<div class="tab-box  save-search-bar text-center"><a href="#"> <i class=" icon-star-empty"></i>
Save Search </a></div>
</div>
<div class="pagination-bar text-center">
<ul class="pagination">
<li class="active"><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#"> ...</a></li>
<li><a class="pagination-btn" href="#">Next &raquo;</a></li>
</ul>
</div>
 
<div class="post-promo text-center">
<h2> Do you get anything for sell ? </h2>
<h5>Sell your products online FOR FREE. It's easier than you think !</h5>
<a href="post-ads" class="btn btn-lg btn-border btn-post btn-danger">Post a Free Ad </a>
</div>
 
</div>
 
</div>
</div>
</div>
 
@endsetion