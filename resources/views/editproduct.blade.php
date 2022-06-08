<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

  


    <div class="container">
      <br>
      <div class="row">

        <div class="col-md-12">
          <center>
          <h1>Edit Product</h1>
        </center>
        </div>


        <div class="col-md-2">

             <!--Sidebar-->
             @include('sidebar')
            <!--End Sidebar-->

        </div>

        <div class="col-md-10">
          
          <!-- Button back to Products -->
          <a href="/" type="button" class="btn btn-info">
            &#8592; Back to Products
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



          <!--Product Info-->

           <form method="POST" action='/updateproduct'>
                @csrf
               
              <div class="mb-3 row">  
                <label for="staticEmail" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                  <input type="hidden" name="productid" value="{{$product->id}}">
                  <input type="text" name="productname" class="form-control" id="staticEmail" value="{{$product->product_name}}">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="productdesc" id="inputPassword">{{$product->product_description}}</textarea>
                </div>  
              </div>

               <div class="mb-3 row">  
                <label for="staticEmail" class="col-sm-2 col-form-label">Quantity</label>
                <div class="col-sm-4">
                  <input type="number" class="form-control" name="productquantity" id="staticEmail" value="{{$product->quantity}}">
                </div>

                 <div class="col-sm-1">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Price</label>
                 </div>
                 <div class="col-sm-5">
                  <input type="number" class="form-control" name="productprice" id="staticEmail" value="{{$product->price}}">
                </div>
              </div>


              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                  <select class="form-control" id="inputPassword" name="productstats">

                    @if($product->status != 'enable')
                    <option value="enable">Enable</option>
                    @else
                    <option value="enable" selected>Enable</option>
                    @endif

                    @if($product->status != 'disabled')
                    <option value="disabled">Disable</option>
                    @else
                    <option value="disabled" selected>Disable</option>
                    @endif

                  </select>
                </div>
              </div>



          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="UPDATE"></button>
          </div>
          </form>
         

           <!--End Product Info-->


        </div>


      </div>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ URL::asset('js/cust_functions.js') }}"></script>
  </body>
</html>