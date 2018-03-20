@extends('layouts.app')
@section('content')


<div class="main-container inner-page">
<div class="container">
<div class="row clearfix">
<h1 class="text-center title-1"> Add City Name </h1>
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
<form action="{{ url('add-new-city' ) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}


<div class="form-group">
<label class="col-md-3 control-label">Province</label>
<div class="col-md-4">
<select name="province" id="province" class="form-control">
@foreach($provinces as $province)

<option value="{{$province->id}}"> {{$province->province}}</option>

@endforeach


</select>
</div>
</div>

            <!-- Task Name -->
            <div class="form-group">
                <label for="sub categorie" class="col-sm-3 control-label">City</label>

                <div class="col-sm-4">
                    <input type="text" name="name" id="city" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Add City
                    </button>
                </div>
            </div>
        </form>


        <div style="clear:both"></div>
        <div class="table-responsive">
        <table class="table table-bordered">


                    <!-- Table Headings -->
                    <thead>
                        
                        <th> ID</th>
                        <th>Provinces</th>
                        <th>Cities</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
        @foreach($provinces as $province)
        
        @foreach($cities as $city)
        @if($province->id==$city->provence_id)
        <tr>
        <td>
            {{$city->id}}
        </td>
            
            <td>
                {{$province->province}}
            </td>
            <td>
                {{$city->city}}
            </td>
            

        </tr>
        @endif
        @endforeach
        
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


@endsection