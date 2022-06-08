<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

  


    <div class="container">
      <br>
      <div class="row">

        <div class="col-md-12">
          <center>
          <h1>Edit User</h1>
        </center>
        </div>


        <div class="col-md-2">

             <!--Sidebar-->
             @include('sidebar')
            <!--End Sidebar-->

        </div>

        <div class="col-md-10">
          
          <!-- Button back to Products -->
          <a href="/users" type="button" class="btn btn-info">
            &#8592; Back to Users
          </a>

          <br>
          <br>



              <!--Alerts-->

                 @if(session('success_msg'))
                      <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                         <span class="badge badge-pill badge-success">Success</span>
                             {{session('success_msg')}}
                                    </div>
                  @endif

                     @if(session('error_msg'))
                       <div class="sufee-alert alert with-close alert-error alert-dismissible fade show">
                                        <span class="badge badge-pill badge-error">Error</span>
                                         {{session('error_msg')}}
                                    </div>
                    @endif

                    <!--End Alerts-->



          <!--User Info-->
          <form method="POST" action='/updateuser'>
                @csrf
              <div class="mb-3 row">  
                <label for="staticEmail" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                   <input type="hidden" name="userid" value="{{$user->id}}">
                  <input type="text" name="firstname" class="form-control" id="staticEmail" value="{{$user->first_name}}">
                </div>
              </div>

              <div class="mb-3 row">  
                <label for="staticEmail" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                  <input type="text" name="lastname" class="form-control" id="staticEmail" value="{{$user->last_name}}">
                </div>
              </div>

              <div class="mb-3 row">  
                <label for="staticEmail" class="col-sm-2 col-form-label">Email Address</label>
                <div class="col-sm-10">
                  <input type="email" name="emailaddress" class="form-control" id="staticEmail" value="{{$user->email_address}}">
                </div>
              </div>

              <div class="mb-3 row">  
                <label for="staticEmail" class="col-sm-2 col-form-label">Mobile Number</label>
                <div class="col-sm-10">
                  <input type="number" name="mobilenumber" class="form-control" id="staticEmail" value="{{$user->mobile_number}}">
                </div>
              </div>


              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="address" id="inputPassword">{{$user->address}}</textarea>
                </div>
              </div>

            
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                  <select class="form-control" id="inputPassword" name="userstats">

                    @if($user->status != 'active')
                    <option value="active">Active</option>
                    @else
                    <option value="active" selected>Active</option>
                    @endif

                    @if($user->status != 'block')
                    <option value="block">Block</option>
                    @else
                    <option value="block" selected>Block</option>
                    @endif

                  </select>
                </div>
              </div>



          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Save"></button>
          </div>
          </form>
         

           <!--End User Info-->


        </div>


      </div>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ URL::asset('js/cust_functions.js') }}"></script>
  </body>
</html>