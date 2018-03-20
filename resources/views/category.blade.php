@extends('layouts.app')

@section('content')





<div class="search-row-wrapper">
<div class="container ">
<form action="#" method="GET">
<div class="col-sm-3">
<input class="form-control keyword" type="text" placeholder="e.g. Mobile Sale">
</div>
<div class="col-sm-3">
<select class="form-control selecter" name="category" id="search-category">
<option selected="selected" value="">All Categories</option>
<option value="Vehicles" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled">
- Vehicles -
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
<option value="Multimedia" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Multimedia -
</option>
<option value="Telephony"> Telephony</option>
<option value="Image"> Image and sound</option>
<option value="Computers"> Computers and Accessories</option>
<option value="Video"> Video games and consoles</option>
<option value="Real" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> -
Real Estate -
</option>
<option value="Apartment"> Apartment</option>
<option value="Home"> Home</option>
<option value="Vacation"> Vacation Rentals</option>
<option value="Commercial"> Commercial offices and local</option>
<option value="Grounds"> Grounds</option>
<option value="Houseshares"> Houseshares</option>
<option value="Other real estate"> Other real estate</option>
<option value="Services" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled">
- Services -
</option>
<option value="Jobs"> Jobs</option>
<option value="Job application"> Job application</option>
<option value="Services"> Services</option>
<option value="Price"> Price</option>
<option value="Business"> Business and goodwill</option>
<option value="Professional"> Professional equipment</option>
<option value="dropoff" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled">
- Extra -
</option>
<option value="Other"> Other</option>
</select>
</div>

<div class="col-sm-3">
<select class="form-control selecter" name="location" id="id-location">
<option selected="selected" value="">All Locations</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District Of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
<option value="Other-Locations">Other Locations</option>
</select>
</div>
<div class="col-sm-3">
<button class="btn btn-block btn-primary  "><i class="fa fa-search"></i></button>
</div>
</form>
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
 
<ul class="nav nav-tabs add-tabs" id="ajaxTabs" role="tablist">
<li class="active"><a href="ajax/1" data-url="ajax/1" role="tab" data-toggle="tab">All Ads <span class="badge"></span></a>
</li>

</ul>
<div class="tab-filter">
<select class="selectpicker" data-style="btn-select" data-width="auto">
<option>Short by</option>
<option>Price: Low to High</option>
<option>Price: High to Low</option>
</select>
</div>
</div>
 










<table id="addManageTable" class="table table-striped table-bordered add-manage-table table demo" data-filter="#filter" data-filter-text-only="true">
<thead>
<tr>

<th> Photo</th>
<th data-sort-ignore="true"> Adds Details</th>
<th data-type="numeric"> Price</th>
<th> Type</th>
</tr>
</thead>
<tbody>



@foreach ($advertisement as $adds)
@if(($adds->is_approved)&&(!$adds->is_deleted))
<tr>
</td>
<td style="width:14%" class="add-img-td"><a href="ads-details"><img class="thumbnail  img-responsive" src="\images\advertisement\{{$adds->id}}\{{$adds->pic1}}" alt="img"></a></td>



<td style="width:34%" class="ads-details-td">
<div>
<p><strong> <a href="/ads-details/{{ $adds->id }}" title="">{{$adds->Adtitle}}</a>
</strong></p>
<p><strong> Posted BY </strong>:
{{$adds->name}}</p>
<p><strong>Located In:</strong> {{$adds->city}}</p>
<p><strong>Phone Number:</strong> {{$adds->Number}}</p>
<p><strong>E-mail:</strong> {{$adds->email}}</p>
</div>
</div>
</td>



<td style="width:15%" class="price-td">
<div><strong>400</strong></div>
</td>
<td style="width:10%" class="action-td">
<div>

<p><h3>{{$adds->add_type}}</h3> </p>

</div>
</td>

</tr>
@endif
 @endforeach


</tbody>
</table>



																									

 
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
 
<div class="adds-wrapper">
<div class="tab-content">
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
 
@endsection
