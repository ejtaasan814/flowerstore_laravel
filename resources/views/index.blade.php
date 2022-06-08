<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flowerstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

  


    <div class="container">
      <br>
      <div class="row">

        <div class="col-md-12">
          <center>
          <h1>Products</h1>
        </center>
        </div>

        <div class="col-md-2">

             <!--Sidebar-->
            @include('sidebar')
            <!--End Sidebar-->

        </div>

        <div class="col-md-10">
          
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
            Add Product
          </button>

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




          <!--Product Table-->
          <table class="table" style="width: 100%;">
            <thead>
              <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach($products as $product)
                @if($product->status == 'enable')
                <tr>
                @else
                <tr class="table-secondary">
                @endif
                  <td>{{$product->product_name}}</td>
                  <td>{{$product->product_description}}</td>
                  <td>{{$product->price}}</td>
                  <td> 
                    <a href="/editproduct/{{$product->id}}" type="button" class="btn btn-info">
                      Edit
                    </a>

                    <a href="deleteproduct/{{$product->id}}" type="button" class="btn btn-danger"
                       onclick="
                        if (confirm('Are you sure you want to delete this product?'))
                         return true; 
                        else 
                         return false;" >
                       Delete
                    </a>

                  </td>
                </tr>
              @endforeach
              
            </tbody>
          </table>

            <!--End Product Table-->


        </div>


      </div>
    </div>

    <!--Add Product Modal -->
    <div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Add Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

              <form method="POST" action='/save'>
                @csrf
              <div class="mb-3 row">  
                <label for="staticEmail" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                  <input type="text" name="productname" class="form-control" id="staticEmail">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="productdesc" id="inputPassword"></textarea>
                </div>
              </div>

               <div class="mb-3 row">  
                <label for="staticEmail" class="col-sm-2 col-form-label">Quantity</label>
                <div class="col-sm-4">
                  <input type="number" class="form-control" name="productquantity" id="staticEmail">
                </div>

                 <div class="col-sm-1">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Price</label>
                 </div>
                 <div class="col-sm-5">
                  <input type="number" class="form-control" name="productprice" id="staticEmail">
                </div>
              </div>


              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                  <select class="form-control" id="inputPassword" name="productstats">
                    <option value="enable">Enable</option>
                    <option value="disabled">Disable</option>
                  </select>
                </div>
              </div>



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Save"></button>
          </div>
          </form>
        </div>
      </div>
    </div>


    <!--End Add Product Modal-->






    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ URL::asset('js/cust_functions.js') }}"></script>
  </body>
</html>