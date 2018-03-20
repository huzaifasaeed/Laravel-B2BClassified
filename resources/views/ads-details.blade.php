@extends('layouts.app')

@section('content')
<div class="main-container">
<div class="container">
<ol class="breadcrumb pull-left">
@foreach($advertisement as $add)

<li><a href="#"><i class="icon-home fa"></i></a></li>
<li><a href="category">All Ads</a></li>
<li><a href="sub-category-sub-location">{{$add->category}}</a></li>
<li class="active">{{$add->sub_category}}</li>
</ol>
<div class="pull-right backtolist"><a href="sub-category-sub-location"> <i class="fa fa-angle-double-left"></i> Back to Results</a></div>
</div>
<div class="container">
<div class="row">
<div class="col-sm-9 page-content col-thin-right">
<div class="inner ads-details-wrapper">

<h2> {{ $add->Adtitle }}
<small class="label label-default adlistingtype">{{ $add->add_type }}</small>
</h2>
<span class="info-row">  - <span class="category">{{ $add->name }} </span>- <span class="item-location"><i class="fa fa-map-marker"></i> {{ $add->city }}</span> </span>
<div class="ads-image">
<h1 class="pricetag"> RS. {{ $add->Price }}</h1>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide col-lg-9" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="/images/advertisement/{{$add->id}}/{{$add->pic1}}"  width="350" height="300">

      </div>

      <div class="item">
        <img src="/images/advertisement/{{$add->id}}/{{$add->pic2}}"  width="350" height="300">
 
      </div>
    
      <div class="item">
        <img src="/images/advertisement/{{$add->id}}/{{$add->pic3}}"  width="350" height="300">

      </div>

      <div class="item">
        <img src="/images/advertisement/{{$add->id}}/{{$add->pic4}}"  width="350" height="300">
   
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


</div>
 
<div class="Ads-Details">
<h4 class="list-title"><strong>Description: </strong></h4>
<div class="row">
<div class="ads-details-info col-md-8">
<div class="container"><p>{{ $add->describe }}</p></div>
</div>

<div class="col-md-4">
<aside class="panel panel-body panel-details">
<ul>
<li>
<p class=" no-margin "><strong>Price:</strong> RS. {{ $add->Price }}</p>
</li>
<li>
<p class="no-margin"><strong>Type:</strong> {{ $add->name }}</p>
</li>
<li>
<p class="no-margin"><strong>Location:</strong> {{ $add->city }} </p>
</li>

</ul>
</aside>
<div class="ads-action">
<ul class="list-border">
<li><a href="#"> <i class=" fa fa-user"></i> More ads by User </a></li>
<li><a href="#"> <i class=" fa fa-heart"></i> Save ad </a></li>
<li><a href="#"> <i class="fa fa-share-alt"></i> Share ad </a></li>
<li><a href="#reportAdvertiser" data-toggle="modal"> <i class="fa icon-info-circled-alt"></i> Report abuse </a></li>
</ul>
</div>
</div>
</div>
</div>

</div>
 <div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>  </h3>
			
		</div>
	</div>

</div>


		
<div class="col-sm-3  page-sidebar-right">
<aside>
<div class="panel sidebar-panel panel-contact-seller">
<div class="panel-heading">Contact Seller</div>
<div class="panel-content user-info">
<div class="panel-body text-center">
<div class="seller-info">
<h3 class="no-margin"> </h3>
<p> <strong></strong></p>
</div>
<div class="user-ads-action"><a href="#contactAdvertiser" data-toggle="modal" class="btn   btn-default btn-block"><i class=" icon-mail-2"></i> Send a message </a> <a class="btn  btn-info btn-block"><i class=" icon-phone-1"></i> </a></div>
</div>
</div>
</div>
<div class="panel sidebar-panel">
<div class="panel-heading">Safety Tips for Buyers</div>
<div class="panel-content">
<div class="panel-body text-left">
<ul class="list-check">
<li> Meet seller at a public place</li>
<li> Check the item before you buy</li>
<li> Pay only after collecting the item</li>
</ul>
<p><a class="pull-right" href="#"> Know more <i class="fa fa-angle-double-right"></i> </a></p>
</div>
</div>
</div>
 
</aside>
</div>
 
</div>
</div>
</div>
 <div>
 <div class="row">
<div class="col-sm-12">
<form action="{{ url('add-new-comment/'.$add->id ) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
<fieldset>
 <div class="form-group">
<label class="col-md-3 control-label" for="Adtitle">Comment</label>
<div class="col-md-5">
<input id="Comment" name="Comment" placeholder="Comment" class="form-control input-md" required="" type="text"><br>
<button type="submit" class="btn btn-success">
                        <i class="submit"></i> Post Comment
                    </button>
                    </form>


</div>

</div>
<div>
@foreach($comments as $comment)
<br>
				<div class="comment">
					<div class="author-info">

						<div class="author-name">
							<h4>{{ $comment->name }}</h4>
							
						</div>

					</div>

					<div class="comment-content">
						{{ $comment->comment }}
					</div>

				</div>
			@endforeach
			</div></div></div>
			@endforeach
			
@endsection
