<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

      <div class="container">
      <br>
      <div class="row">

        <div class="col-md-12">
          <center>
          <h1>Orders</h1>
          <br>
        </center>
        </div>

        <div class="col-md-2">

             <!--Sidebar-->
            @include('sidebar')
            <!--End Sidebar-->

        </div>

        <div class="col-md-10">

          <!--Orders Table-->
          <table class="table" style="width: 100%;">
            <thead>
              <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
               
              @foreach($orders as $order)
                <tr>
                  <td>{{$order->id}}</td>
                  <td>{{$order->product->product_name}}</td>
                  <td>{{$order->user->first_name}} {{$order->user->last_name}}</td>
                  <td>{{$order->price}}</td>
                </tr>
              
              @endforeach
                <tr>
                  <td colspan="4"></td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td><b>Subtotal</b></td>
                  <td><b>{{$total}}</b></td>

                </tr>
              
            </tbody>
          </table>

            <!--End Orders Table-->


        </div>


      </div>
    </div>

    





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ URL::asset('js/cust_functions.js') }}"></script>
  </body>
</html>