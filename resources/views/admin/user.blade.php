   
    @extends('layouts.admin')

    @section('content')

          <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dashboard - Job</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Player add</h2>
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
                    <table>
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Height</th>
                          <th>Weight</th>
                          <th>Last Team</th>
                          <th>Played Year</th>
                          <th>Point Per Game</th>
                          <th>Assest Per Game</th>
                          <th>Rebound Per Game</th>
                          <th>Block Per Game</th>
                          <th>Steal Per Game</th>
                          <th>Passport Country 1</th>
                          <th>Passport Country 2</th>
                          <th>Film link</th>
                          <th>Profile Id</th>
                          <th>Ig Name</th>
                        </tr>
                      </thead>
                      <tbody>

                      @foreach($user as $users) 

                        <tr>
                          <td>{{ $users->name }}</td>
                          <td>{{ $users->email }}</td>
                          <td>{{ $users->height }}</td>
                          <td>{{ $users->weight }}</td>
                          <td>{{ $users->last_team }}</td>
                          <td>{{ $users->year_played }}</td>
                          <td>{{ $users->points_per_game }}</td>
                          <td>{{ $users->assist_per_game }}</td>
                          <td>{{ $users->rebounds_per_game }}</td>
                          <td>{{ $users->blocks_per_game }}</td>
                          <td>{{ $users->steals_per_game }}</td>
                          <td>{{ $users->passport_country1 }}</td>
                          <td>{{ $users->passport_country2 }}</td>
                          <td>{{ $users->film }}</td>
                          <td>{{ $users->profile   }}</td>
                          <td>{{ $users->ig_name }}</td>
                          
                        
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
