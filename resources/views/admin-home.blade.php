@extends('layouts.app')
@section('content')







<div class="main-container inner-page">
<div class="container">
<div class="row clearfix">

<div class="col-lg-12 text-center">
 <div class="inner-box">
<div class="row">
<style>.themeControll{background:#2d3e50;height:auto;width:170px;position:fixed;left:0;padding:20px 0;top:100px;z-index:999999;-webkit-transform:translateX(0);-moz-transform:translateX(0);-o-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0);opacity:1;-ms-filter:none;filter:none;-webkit-transition:opacity .5s linear,-webkit-transform .7s cubic-bezier(.56,.48,0,.99);-moz-transition:opacity .5s linear,-moz-transform .7s cubic-bezier(.56,.48,0,.99);-o-transition:opacity .5s linear,-o-transform .7s cubic-bezier(.56,.48,0,.99);-ms-transition:opacity .5s linear,-ms-transform .7s cubic-bezier(.56,.48,0,.99);transition:opacity .5s linear,transform .7s cubic-bezier(.56,.48,0,.99);}.themeControll.active{display:block;-webkit-transform:translateX(-170px);-moz-transform:translateX(-170px);-o-transform:translateX(-170px);-ms-transform:translateX(-170px);transform:translateX(-170px);-webkit-transition:opacity .5s linear,-webkit-transform .7s cubic-bezier(.56,.48,0,.99);-moz-transition:opacity .5s linear,-moz-transform .7s cubic-bezier(.56,.48,0,.99);-o-transition:opacity .5s linear,-o-transform .7s cubic-bezier(.56,.48,0,.99);-ms-transition:opacity .5s linear,-ms-transform .7s cubic-bezier(.56,.48,0,.99);transition:opacity .5s linear,transform .7s cubic-bezier(.56,.48,0,.99);}.themeControll a{border-bottom:1px solid rgba(255,255,255,0.1);border-radius:0;clear:both;color:#fff;display:block;height:auto;line-height:16px;margin-bottom:5px;padding-bottom:8px;text-transform:capitalize;width:auto;font-family:Roboto Condensed,Helvetica Neue,Helvetica,sans-serif;}.tbtn{background:#2D3E50;color:#FFFFFF!important;font-size:30px;height:auto;padding:10px;position:absolute;right:-40px;top:0;width:40px;cursor:pointer;}.linkinner{display:block;height:400px;}.linkScroll .scroller-bar{width:17px;}.linkScroll .scroller-bar,.linkScroll .scroller-track{background:#1d2e40!important;border-color:#1d2e40!important;}@media (max-width: 780px) {.themeControll{display:none;}}</style>
<div class="themeControll">
<h3 style=" color:#fff; font-size: 10px; line-height: 12px;" class="uppercase color-white text-center"> Admin Panel </h3>
<br>
<div class="linkinner linkScroll scrollbar ">
<a  href="pending-add-approval"> Pending-Approvals</a>
<a  href="deactivate-user"> Deactivate Users</a>
<a  href="admin-add-category"> Add category</a>
<a  href="add-sub-category"> Add Subcategory</a>
<a  href="admin-pending-approvals">Admin Pending Approval</a>
<a  href="admin-add-province">Add Province</a>
<a  href="admin-add-city">Add City</a>
</div>
<p class="tbtn"><i class="fa fa-angle-double-left"></i></p>
</div>





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
 
<p><a>{{$total_Active_Users}}</a><em>Active users</em></p>
</div>
<div class="clearfix"></div>
</div>
 
<div class="hdata">
<div class="mcol-left">
 
<i class="icon-th-thumb ln-shadow"></i></div>
<div class="mcol-right">
 
<p><a href="#">{{$total_adds}}</a><em>Total Adds</em></p>
</div>
<div class="clearfix"></div>
</div>
 
<div class="hdata">
<div class="mcol-left">
 
<i class="fa fa-user ln-shadow"></i></div>
<div class="mcol-right">
 
<p><a href="#">{{$total_Users}}</a> <em>total users </em></p>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</div>
<table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th></th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        
                    </tbody>
                </table>
                <div style="clear:both"></div>
</div>
 
</div>
 
</div>
 
</div>
 
@endsection