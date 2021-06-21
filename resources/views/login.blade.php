<html>
  <head>
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
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
<p id="log">Login Here</p><br>
<p style="text-align:center;font-size:16px;">
Get Access to your orders, wishlist and Recommendations.</p>
<div class="frm">
  <form action="login" method="post">
    @csrf
        <div class="wrapus">
        <div class="inpt">
        <input type="text" name="email" required autocomplete="off">
        <div class="underline"></div>
        <label>Enter Your E-Mail</label>
      </div>
      </div>
      <div class="wrapus">
        <div class="inpt">
        <input type="password" name="password" required autocomplete="off">
        <div class="underline"></div>
        <label>Enter Your Password</label>
      </div>
    </div>
    <br>
    <button type="submit" class="btnn">Login</button>
  </form>
  </div>
</div>
</div>
<div class="imag">
    <div class="nh">
        Don't have an account ?
    </div>
    <div class="content">
      Create new account by clicking below.
    </div>
    <div class="bu">
      <a href="/registerl" id="regis">Create Account !</a>
    </div>
</div>
</body>
</html>
