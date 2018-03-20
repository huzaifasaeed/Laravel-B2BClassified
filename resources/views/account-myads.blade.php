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
<h5 class="collapse-title"> My Ads <a class="pull-right" data-toggle="collapse" href="#MyAds"><i class="fa fa-angle-down"></i></a></h5>
<div id="MyAds" class="panel-collapse collapse in">
<ul class="acc-list">
<li class="active"><a href="account-myads"><i class="icon-docs"></i> My
ads <span class="badge">42</span> </a></li>

<li><a href="account-pending-approval-ads"><i class="icon-hourglass"></i> Pending approval <span class="badge">42</span></a></li>
</ul>
</div>
</div>
 
<div class="collapse-box">
<div class="panel-collapse collapse in" id="TerminateAccount">
<ul class="acc-list">
</div>
</div>
 
</div>
</div>
 
</aside>
</div>
 
<div class="col-sm-9 page-content">
<div class="inner-box">
<h2 class="title-2"><i class="icon-docs"></i> My Ads </h2>
<div class="table-responsive">
<div class="table-action">

<div class="table-search pull-right col-xs-7">
<div class="form-group">

</div>
</div>
</div>
<table id="addManageTable" class="table table-striped table-bordered add-manage-table table demo" data-filter="#filter" data-filter-text-only="true">
<thead>
<tr>
<th> Photo</th>
<th data-sort-ignore="true"> Adds Details</th>
<th data-type="numeric"> Price</th>
<th> Option</th>
</tr>
</thead>
<tbody>




@foreach ($advertisements as $advertisement)
		<tr>
	
	<td style="width:14%" class="add-img-td"><a href="ads-details"><img class="thumbnail  img-responsive" src="images\advertisement\{{$advertisement->id}}\{{$advertisement->pic1}}" alt="img"></a></td>
	<td style="width:58%" class="ads-details-td">
	<div>
	<p><strong> <a href="ads-details/{{ $advertisement->id }}" title="{{ $advertisement->Adtitle }}">{{ $advertisement->Adtitle }}</a>
	</strong></p>
	<p><strong> Posted On </strong>:
	{{ date('M j, Y', strtotime($advertisement->created_at)) }} </p>
	<p><strong>Located In:</strong> {{ $advertisement->City }}
	</p>
	</div>
	</td>
	<td style="width:16%" class="price-td">
	<div><strong> {{ $advertisement->Price }}</strong></div>
	</td>
	<td style="width:10%" class="action-td">
	<div>
	<p><a class="btn btn-primary btn-xs" href="{{ route('post-ads', $advertisement->id) }}"> <i class="fa fa-edit"></i> Edit </a>
	</p>
	<p><a class="btn btn-danger btn-xs" href="{{ route('post-ads', $advertisement->id) }}"> <i class=" fa fa-trash"></i> Delete
	</a></p>
	</div>
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
 
@endsection