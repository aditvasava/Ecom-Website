<html>
  <head>
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/nav.css') }}">
  </head>
  <body>
    <nav>
      <li><img src="{{ asset('/images/finalf.png') }}" style="width:140px;height:90px;margin-top:-33px;margin-right:10px;"></li>
      <li><a href="/">Home</a></li>
      <li><a href="/">About</a></li>
      <li>
        <div class="srch">
      <form action="search">
          <input type="text" name="q" placeholder="Search Products..." class="form-control" required style="border-radius:20px;" autocomplete="off">
        <button type="submit" class="btn btn-success" style="margin-top:-34px;margin-left:380px;width:120px;border-radius:20px;">Search</button>
      </form>
    </div>
    </li>
    </nav>

    <div class="container">
    <div class="main">
    <p id="reg">Enter Your Details</p><br>
    <p style="text-align:center;font-size:17px;letter-spacing:1px;"> Get Exciting coupons and discounts for your first 5 orders.</p>
    <div class="frm">
          <form action="register" method="post">
            @csrf
              <div class="wrapus">
              <div class="inpt">
              <input type="text" name="uname" required autocomplete="off">
              <div class="underline"></div>
              <label>Enter Your Name</label>
            </div>
            </div>

            <div class="wrapus">
            <div class="inpt">
            <input type="text" name="uph" required autocomplete="off">
            <div class="underline"></div>
            <label>Enter Your Phone Number</label>
          </div>
          </div>


              <div class="wrapus">
              <div class="inpt">
              <input type="text" name="uemail" required autocomplete="off">
              <div class="underline"></div>
              <label>Enter Your E-Mail</label>
            </div>
            </div>

              <div class="wrapus">
              <div class="inpt">
              <input type="password" name="upass" required autocomplete="off">
              <div class="underline"></div>
              <label>Enter Your Password</label>
            </div>
            </div>

              <div class="wrapus">
              <div class="inpt">
              <input type="password" name="ucpass" required autocomplete="off">
              <div class="underline"></div>
              <label>Confirm Your Password</label>
            </div>
          </div><br>
            <input type="checkbox" required style="margin-left:20px;"> I agree to the terms & conditions.<br>
            <button type="submit" class="btnn">Register</button>
          </form>
          </div>
      </div>
      <div class="imag">
          <div class="nh">
              Already Have an Account ?
          </div>
          <div class="bu">
            <a href="{{url('/login')}}" id="login">Login</a>
          </div>
      </div>
    </div>
  </body>
</html>
