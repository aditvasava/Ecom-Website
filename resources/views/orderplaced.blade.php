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
<div class="photwrap">
            <p style="font-size:25px;letter-spacing:1px;border-bottom:1px solid silver;">My Orders</p><br><br>
            @foreach($orders as $item)
            <div class="itwrap">
             <div class="orplaceddiv">
                <a href="detail/{{$item->id}}">
                    <img class="trenimage" src="{{$item->gallery}}">
                  </a>
                </div>
                <div class="orplaceddetail">
                      <h2>Name : {{$item->name}}</h2>
                      <h5>Delivery Status : {{$item->status}}</h5>
                      <h5>Address : {{$item->address}}</h5>
                      <h5>Payment Status : {{$item->payment_status}}</h5>
                      <h5>Payment Method : {{$item->payment_method}}</h5>
              </div>
            </div>
            @endforeach
          </div>
</body>
</html>
