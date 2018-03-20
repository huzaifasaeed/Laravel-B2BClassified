@extends('layouts.app')
@section('content')


<div class="main-container inner-page">
<div class="container">
<div class="row clearfix">
<h1 class="text-center title-1"> Manage Users </h1>
<hr class="center-block small text-hr">
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





<div class="panel-body text-center">
<div class="col-sm-12 page-content ">

<h2 class="title-2"> Users List </h2>
<div style="clear:both"></div>
<div class="table-responsive">
<table class="table table-bordered">

<thead>

<tr>
<th><span> ID</span></th>
<th>Name</th>
<th><strong>E-mail</strong></th>
<th> Status</th>
<th> Option</th>
</tr>
</thead>
<tbody>


		@foreach ($user_data as $user)
            <tr>
					<td>{{$user->id}}
					</td>
					<td> {{$user->name}}
					</td>
					<td>{{$user->email}}
					</td>
					
						@if($user->is_active)
									<td><span class="label label-success">Active</span></td>
						@else
									<td><span class="label label-info">Deactivated</span></td>
						@endif
					
					<td>
					
					@if($user->is_active)
						<form action="{{ url('delete-user/'.$user->id) }}" method="POST">
            				{{ csrf_field() }}
            				{{ method_field('DELETE') }}
            				<button type="submit" id="delete-user-{{ $user->id}}" class="btn btn-danger btn-xs">
                			<i class="fa fa-btn fa-trash"> Delete </i>
           				 	</button>
        				</form>
        			@else
        				<form action="{{ url('activate-user/'.$user->id) }}" method="POST">
            				{{ csrf_field() }}
            				{{ method_field('DELETE') }}
            				<button type="submit" id="activate-user-{{ $user->id}}" class="btn btn-success btn-xs">
                			<i class="fa fa-btn fa-active"> Activate </i>
           				 	</button>
        				</form>
        				@endif
					
					</td>
			</tr>
         @endforeach





</tbody>
</table>
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