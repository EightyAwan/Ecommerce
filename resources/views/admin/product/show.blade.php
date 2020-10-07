   
    @extends('layouts.admin')

    @section('content')

          <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Product List</h2>
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

                  <div class="table"   style="overflow: overlay;">
                  @if ($message = Session::get('flash_message'))
                  <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
                  </div>
                  @endif

                    <table class="table table-striped table-bordered dataTable">
                      <thead>
                        <tr>
                         
                          <th>sno.</th>
                          <th>Name</th>
                          <th>description</th>
                          <th>quantity</th>
                          <th>kg</th>
                          <th>image</th>
                          <th>Price</th>
                          <th>Category</th> 
                          <th>Staus</th> 
                          <th colspan=3>Action</th> 
                        </tr>
                      </thead>
                      <tbody>

                      @foreach($product as $key => $products) 

                        <tr>
                          <td>{{ $key +1 }}</td>
                          <td>{{ $products->name }}</td>
                          <td>{{ $products->description }}</td>  
                          <td>{{ $products->quantity }}</td>  
                          <td>{{ $products->kg }}</td>  
                          <td><img width="50%" src="{{ asset('images/'.$products->image) }}"   /></td>  
                          
                          

                          <td>{{  $products->price  }}</td>  
                          <td>{{  $products->category[0]->name  }}</td>  
                          <td>{{ $products->status }}</td>  

                          <td>
                            <form action="{{ route('deleteproduct') }}" method="POST">
                                {{ csrf_field() }} 
                                <input type="hidden" name="id" value="{{ $products->id }}">
                                 
                                 <a style="    font-size: 10PX;" href="{{ route('editproduct', $products->id ) }}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
                                 
                                <button  style="    font-size: 10PX;" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</button>
                               

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

        @endsection
