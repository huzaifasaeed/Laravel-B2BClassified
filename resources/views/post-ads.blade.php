@extends('layouts.app')

@section('content')
 
<div class="main-container">
<div class="container">
<div class="row">
<div class="col-md-9 page-content">
<div class="inner-box category-content">
<h2 class="title-2 uppercase"><strong> <i class="icon-docs"></i> Post a Free Classified
Ad</strong></h2>
<div class="row">
<div class="col-sm-12">
<form class="form-horizontal" action="store" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<fieldset>
 
<div class="form-group">
<label class="col-md-3 control-label">Category</label>
<div class="col-md-4">
<select name="sub_categorie_id" id="sub_categorie_id" class="form-control">
<option value="0" selected="selected"> Select a category...</option>
@foreach($sub_category_data as $sub_category)
<option value="{{$sub_category->id}}" style="background-color:#E9E9E9;font-weight:bold;">  {{$sub_category->name}}
</option>
@endforeach
</select>
</div>
</div>


 
<div class="form-group">
<label class="col-md-3 control-label">Add Type</label>
<div class="col-md-8">
<label class="radio-inline" for="radios-0">
<input name="add_type" id="radios-0" value="Private" checked="checked" type="radio">
Private </label>
<label class="radio-inline" for="radios-1">
<input name="add_type" id="radios-1" value="business" type="radio">
Business </label>
</div>
</div>
 
<div class="form-group">
<label class="col-md-3 control-label" for="Adtitle">Ad title</label>
<div class="col-md-8">
<input id="Adtitle" name="Adtitle" placeholder="Ad title" class="form-control input-md" required="" type="text">
<span class="help-block">A great title needs at least 60 characters. </span>
</div>
</div>
 
<div class="form-group">
<label class="col-md-3 control-label" for="textarea">Describe ad </label>
<div class="col-md-8">
<textarea rows="6" class="form-control" id="textarea" placeholder="Describe what makes your ad unique" name="describe"></textarea>
</div>
</div>
 
<div class="form-group">
<label class="col-md-3 control-label" for="Price">Price</label>
<div class="col-md-4">
<div class="input-group"><span class="input-group-addon">$</span>
<input id="Price" name="Price" class="form-control" placeholder="price" required="" type="text">
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-3 control-label" for="textarea"> Picture </label>
<div class="col-md-8">

				<div class="mb10">
                    <input name="pic1" type="file" class="file" data-preview-file-type="text" required>
                    </div>
                    <div class="mb10">
                    <input name="pic2" type="file" class="file" data-preview-file-type="text" required>
                    </div>
                    <div class="mb10">
                    <input name="pic3" type="file" class="file" data-preview-file-type="text" required>
                    </div>
                    <div class="mb10">
                    <input name="pic4" type="file" class="file" data-preview-file-type="text" required>
                    </div>

<p class="help-block">Add up to 4 photos. Use a real image of your
product, not catalogs.</p>
</div>
</div>

<div class="content-subheading"><i class="icon-user fa"></i> <strong>Seller
information</strong></div>
 
 <div class="form-group">
<label class="col-md-3 control-label" for="address">Address</label>
<div class="col-md-8">
<input id="address" name="address" placeholder="Address" class="form-control input-md" required="" type="text">
</div>
</div>
 
<div class="form-group">
<label class="col-md-3 control-label" for="Number">Phone Number</label>
<div class="col-md-3">
<input id="Number" name="Number" placeholder="Phone Number" class="form-control input-md" required="" type="text">
</div>
</div>
 
<div class="form-group">
<label class="col-md-3 control-label" for="Number">City</label>
<div class="col-md-3">
<select name="city" id="city" class="form-control">
<option value="0" selected="selected"> Select a city...</option>
@foreach($cities_data as $city)
<option value="{{$city->id}}" style="background-color:#E9E9E9;font-weight:bold;">  {{$city->city}}
</option>
@endforeach
</select>
</div>
</div>

 

 
<div class="form-group">
<label class="col-md-3 control-label">Terms</label>
<div class="col-md-8">
<label class="checkbox-inline" for="checkboxes-0">
<input name="checkboxes" id="checkboxes-0" value="Remember above contact information." type="checkbox" required="">
Remember above contact information. </label>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label"></label>
<div class="col-md-3">
 <button type="submit" class="btn btn-primary">
                        <i class=" Submit "></i> Submit
                    </button>
</div>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
 
<div class="col-md-3 reg-sidebar">
<div class="reg-sidebar-inner text-center">
<div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>
<h3><strong>Post a Free Classified</strong></h3>
<p> Post your free online classified ads with us.</p>
</div>
<div class="panel sidebar-panel">
<div class="panel-heading uppercase">
<small><strong>How to sell quickly?</strong></small>
</div>
<div class="panel-content">
<div class="panel-body text-left">
<ul class="list-check">
<li> Use a brief title and description of the item</li>
<li> Make sure you post in the correct category</li>
<li> Add nice photos to your ad</li>
<li> Put a reasonable price</li>
<li> Check the item before publish</li>
</ul>
</div>
</div>
</div>
</div>
</div>
 
</div>
 
</div>
 
</div>
@endsection
 
