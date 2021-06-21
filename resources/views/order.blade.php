<html>
  <head>
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/prodnav.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/searchpage.css') }}">
  </head>
  <body>
    <nav>
      <li><img src="{{ asset('/images/finalf.png') }}" style="width:140px;height:90px;margin-top:-33px;"></li>
      <li><a href="/">Home</a></li>
      <li><a href="/">About</a></li>
      <li><a href="/orderplaced">Orders</a></li>
      <li>
        @if(Session::has('user'))
        <li class="dropdown" style="margin-left:650px;">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['email']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
        </li>
        @else
        <li><a href="/login">Login</a></li>
        <li><a href="/registerl">Register</a></li>
        @endif
    </nav>
<br><br>
<div class="orderwrap">
  <div class="tablewrap">
        <table class="table">
            <tbody>
              <tr>
                <td>Amount</td>
              <td>₹ {{$total}}</td>
              </tr>
              <tr>
                <td>Delivery </td>
                <td>₹ 65</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td>₹ {{$total+65}}</td>
              </tr>
            </tbody>
          </table>
            </div>
          <br><br><br>
          <div>
            <form action="ordersuccess" method="post">
              @csrf
                <div class="adbox">
                  <p style="font-size:15px;">Enter the address where product(s) will be delivered.</p>
                  <textarea name="addr" placeholder="Enter Shipping Address" class="form-control" style="height:100px;" required></textarea>
                </div>
                <br><br><br>
                <div class="paym">
                  <label for="pwd">Select Payment Method</label><br><br>
                  <input type="radio" value="Online Payment" name="pay" required> <span>Online Payment</span><br><br>
                  <input type="radio" value="Cash on Delivery" name="pay"> <span>Cash on Delivery</span><br><br>
                </div><br>
                <button type="submit" class="btn btn-info" style="width:160px;margin-left:20px;">Place Order</button>
              </form>
          </div>
     </div>
</body>
</html>
