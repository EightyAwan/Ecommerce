   
    @extends('layouts.admin')

    @section('content')

          <div class="right_col" role="main">
          <div class="">
             
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-8 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Product</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  @if ($message = Session::get('flash_message'))
                  <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
                  </div>
                  @endif
                    <form class="form-horizontal form-label-left" enctype='multipart/form-data' method="post" action="{{ route('storeproduct') }}">
 
                       @csrf
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">  Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input id="name" class="form-control" required data-validate-length-range="6" data-validate-words="2" name="name"  required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">  Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input id="name" class="form-control"  data-validate-length-range="6" data-validate-words="2" name="description"  required="required" type="text">
                        </div>
                      </div> 

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">  Quantity <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input id="name" class="form-control" required data-validate-length-range="6" data-validate-words="2" name="quantity"  required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">  Weight <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input id="name" class="form-control" required data-validate-length-range="6" data-validate-words="2" name="kg"  required="required" type="number">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">  price <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <input id="name" class="form-control" required data-validate-length-range="6" data-validate-words="2" name="price"   required="required" type="text">
                        </div>
                      </div>
 

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="text">Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                         <select class="form-control" required style="font-size: 12px;" name="category_id"> 
                           @foreach($category as $categories)
                           <option value="{{ $categories->id }}">{{ $categories->name }}</option> 
                           @endforeach
                         </select>
                        </div>
                      </div>

                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="text">Image<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6"> 
                           <input id="file" class="form-control" style="font-size: 12px;" required  name="image"  required="required" type="file">
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="text">Status<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                         <select class="form-control" style="font-size: 12px;" name="status">
                           <option value="enable">Enable</option>
                           <option value="disbale">Disable</option>
                         </select>
                        </div>
                      </div>






                      <input type="hidden" name="user_id" value=" ">

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @endsection