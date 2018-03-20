@extends('layouts.app')
@section('content')


<div class="main-container inner-page">
<div class="container">
<div class="row clearfix">
<h1 class="text-center title-1"> Add Category </h1>
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


 <div class="panel-body">
        <!-- New Task Form -->
        <form action="{{ url('/add-categories') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="categorie" class="col-sm-3 control-label">Categories</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="categories" class="form-control" required>
                </div>
            </div>
                     <div class="form-group">
                    <label class="col-md-3 control-label" for="textarea"> Category Logo </label>
                    <div class="col-md-8">
                    <div class="mb10">
                    <input name="category_logo" type="file" class="file" data-preview-file-type="text" required>
                    </div>
                    </div>


                    <label class="col-md-3 control-label" for="textarea"> Category Pics </label>
                    <div class="col-md-8">
                    <div class="mb10">
                    <input name="category_pic" type="file" class="file" data-preview-file-type="text" required>
                    </div>
                    </div>
                    </div>
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Add Categories
                    </button>
                </div>
            </div>
        </form>
<hr>

<div style="clear:both"></div>
<div class="table-responsive">
<table class="table table-bordered">


                    <!-- Table Headings -->
                    <thead>
                        <th>Picture</th>
                        <th>Logo</th>
                        <th>Caregories</th>
                        <th>Status</th>
                        <th>Option</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($category_data as $category)
                            <tr>
                                <!-- Task Name -->
                                <td>
                                    <div style="width:70%" class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                                            <a><img src="images\category\{{$category->name}}\picture\{{$category->category_pic}}" class="img-responsive" alt="img">
                                            <h6> {{$category->name}} </h6></a>
                                    </div>
                                </td>

                                <td class="table-text">
                                    <div style="width:90%" class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
                                            <a><img src="images\category\{{$category->name}}\logo\{{$category->category_logo}}" class="img-responsive" alt="img">
                                            <h6> {{$category->name}} </h6></a> 
                                                            
                                                            </div>
                                    
                                </td>
                                <td class="table-text">
                                    <strong><div ><h2 align="center">{{ $category->name }}</h2></div></strong>
                                    
                                    
                                
                                </td>
                                <td>

                                <div>
                                    @if($category->is_active)
                                                <span class="label label-success">Active</span>
                                     @else
                                                <span class="label label-info">Deactivated</span>
                                    @endif
                                    </div>



                                    </br><div>

                                    @if($category->is_shown_on_index)
                                                <span class="label label-success">Active on Index</span>
                                     @else
                                                <span class="label label-info">Deleted From Index</span>
                                    @endif
                                    </div>
                                               </td> 
                                

                                <td>




                                
                                <form action="{{ url('category-delete/'.$category->id) }}" method="POST">
                                  {{ csrf_field() }}
                                   {{ method_field('DELETE') }}
                                  <button type="submit" id="delete-category-{{$category->id}}" class="btn btn-danger btn-xs">
                                  <i class="fa fa-btn fa-trash">Delete</i>
                                   </button>
                                </form>

                                @if($category->is_active)
                                         
                                                    <form action="{{ url('category-deactivate/'.$category->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                     <button type="submit" id="delete-category-{{$category->id}}" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-btn fa-trash">Deactivate</i>
                                                    </button>
                                                    </form>
                                        
                                 @else
                                        
                                                    <form action="{{ url('category-activate/'.$category->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" id="delete-category-{{$category->id}}" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-edit">Activate</i>
                                                     </button>
                                                     </form>
                                        
                                @endif

                                @if(!$category->is_shown_on_index)
                                               <form action="{{ url('category-show-on-index/'.$category->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" id="delete-category-{{$category->id}}" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-mail-forward">Show on Index Page</i>
                                                     </button>
                                                     </form>
                                        
                                @else
                                        
                                                    <form action="{{ url('category-delete-from-index/'.$category->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" id="delete-category-{{$category->id}}" class="btn btn-info btn-xs">
                                                    <i class="fa fa-btn fa-trash">Delete from Index Page</i>
                                                     </button>
                                                     </form>
                                        
                                @endif                             
                                                    <form action="{{ url('category-edit/'.$category->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" id="delete-category-{{$category->id}}" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-edit">Edit</i>
                                                     </button>
                                                     </form>
                                


                                 
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


@endsection