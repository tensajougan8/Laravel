@extends('layouts.dashboard')

@section('content')

  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Profile
            </a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Notifications
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Settings
            </a>
          </li>
        </ul>

       
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Profile</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            
          </div>
        </div>
      </div>
      <form method="POST" action="{{ route('profile_update')}}" class="form-detail" >
                @csrf
                @foreach($profile as $profile)
                <h2>Email : {{$profile->email}} </h2>
                <div class="form-row">
                  <div class="col-sm-3">
                    <label for="your_email">First Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value = "{{$profile->name}}" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                </div>
                <div class="form-row">
                  <div class="col-sm-3">
                    <label for="your_email">Last Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="last_name"  value = "{{$profile->last_name}}" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                </div>
                <br>
                <div class="form-row-last">
                    <input type="submit" name="register" class="btn btn-sm btn-outline-secondary" value="Save">           
    
                </div>
            </form>
            @endforeach
  </main>
</div>



@endsection
