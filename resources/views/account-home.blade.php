@extends('layouts.app')

@section('content')

 
<div class="main-container">
<div class="container">
<div class="row">
<div class="col-sm-3 page-sidebar">
<aside>
<div class="inner-box">
<div class="user-panel-sidebar">
<div class="collapse-box">
<h5 class="collapse-title no-border"> My Classified <a href="#MyClassified" data-toggle="collapse" class="pull-right"><i class="fa fa-angle-down"></i></a></h5>
<div class="panel-collapse collapse in" id="MyClassified">
<ul class="acc-list">
<li><a class="active" href="account-home"><i class="icon-home"></i>
Personal Home </a></li>
</ul>
</div>
</div>
 
<div class="collapse-box">
<h5 class="collapse-title"> My Ads <a href="#MyAds" data-toggle="collapse" class="pull-right"><i class="fa fa-angle-down"></i></a></h5>
<div class="panel-collapse collapse in" id="MyAds">
<ul class="acc-list">
<li><a href="account-myads"><i class="icon-docs"></i> My ads <span class="badge">42</span> </a></li>

<li><a href="account-pending-approval-ads"><i class="icon-hourglass"></i> Pending approval <span class="badge">42</span></a></li>
</ul>
</div>
</div>
 
<div class="collapse-box">

<div class="panel-collapse collapse in" id="TerminateAccount">
<ul class="acc-list">

</ul>
</div>
</div>
 
</div>
</div>
 
</aside>
</div>
 
<div class="col-sm-9 page-content">
<div class="inner-box">
<div class="row">
<div class="col-md-5 col-xs-4 col-xxs-12">
<h3 class="no-padding text-center-480 useradmin"><a href="#"><img class="userImg" src="images/user.jpg" alt="user"> {{ Auth::user()->name }} 
</a></h3>
</div>
<div class="col-md-7 col-xs-8 col-xxs-12">
<div class="header-data text-center-xs">
 
<div class="hdata">
<div class="mcol-left">
 
<i class="fa fa-eye ln-shadow"></i></div>
<div class="mcol-right">
 
<p><a href="#">7000</a> <em>visits</em></p>
</div>
<div class="clearfix"></div>
</div>
 
<div class="hdata">
<div class="mcol-left">
 
<i class="icon-th-thumb ln-shadow"></i></div>
<div class="mcol-right">
 
<p><a href="#">12</a><em>Ads</em></p>
</div>
<div class="clearfix"></div>
</div>
 
<div class="hdata">
<div class="mcol-left">
 
<i class="fa fa-user ln-shadow"></i></div>
<div class="mcol-right">
 
<p><a href="#">18</a> <em>Favorites </em></p>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</div>
<div class="inner-box">
<div class="welcome-msg">
<h3 class="page-sub-header2 clearfix no-padding">Hello {{ Auth::user()->name }}  </h3>
<span class="page-sub-header-sub small">You last logged in at: 01-01-2014 12:40 AM [UK time (GMT + 6:00hrs)]</span>
</div>
<div id="accordion" class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#collapseB1" data-toggle="collapse"> My
details </a></h4>
</div>
<div class="panel-collapse collapse in" id="collapseB1">
<div class="panel-body">
<form class="form-horizontal" role="form">
<div class="form-group">
<label class="col-sm-3 control-label">First Name</label>
<div class="col-sm-9">
<input type="text" class="form-control" placeholder="Jhon">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Last name</label>
<div class="col-sm-9">
<input type="text" class="form-control" placeholder="{{ Auth::user()->name }} ">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Email</label>
<div class="col-sm-9">
<input type="email" class="form-control" placeholder="jhon.deo@example.com">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Address</label>
<div class="col-sm-9">
<input type="text" class="form-control" placeholder="..">
</div>
</div>
<div class="form-group">
<label for="Phone" class="col-sm-3 control-label">Phone</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="Phone" placeholder="880 124 9820">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Postcode</label>
<div class="col-sm-9">
<input type="text" class="form-control" placeholder="1217">
</div>
</div>
<div class="form-group hide">  
<label class="col-sm-3 control-label">Facebook account map</label>
<div class="col-sm-9">
<div class="form-control"><a class="link" href="fb">{{ Auth::user()->name }} </a> <a class=""> <i class="fa fa-minus-circle"></i></a></div>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-9"></div>
</div>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-9">
<button type="submit" class="btn btn-default">Update</button>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#collapseB2" data-toggle="collapse"> Settings </a>
</h4>
</div>
<div class="panel-collapse collapse" id="collapseB2">
<div class="panel-body">
<form class="form-horizontal" role="form">
<div class="form-group">
<div class="col-sm-12">
<div class="checkbox">
<label>
<input type="checkbox">
Comments are enabled on my ads </label>
</div>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">New Password</label>
<div class="col-sm-9">
<input type="password" class="form-control" placeholder="">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Confirm Password</label>
<div class="col-sm-9">
<input type="password" class="form-control" placeholder="">
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-9">
<button type="submit" class="btn btn-default">Update</button>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title"><a href="#collapseB3" data-toggle="collapse">
Preferences </a></h4>
</div>
<div class="panel-collapse collapse" id="collapseB3">
<div class="panel-body">
<div class="form-group">
<div class="col-sm-12">
<div class="checkbox">
<label>
<input type="checkbox">
I want to receive newsletter. </label>
</div>
<div class="checkbox">
<label>
<input type="checkbox">
I want to receive advice on buying and selling. </label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 
</div>
</div>
 
</div>
 
</div>
 
</div>
 
@endsection