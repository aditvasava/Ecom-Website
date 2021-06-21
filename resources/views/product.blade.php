<?php
use App\Http\Controllers\ProductController;
$t=0;
if(Session::has('user'))
{
  $t=ProductController::cartitem();
}
?>
<html>
  <head>
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/prodnav.css') }}">
  </head>
  <body>
    <nav>
      <li><img src="{{ asset('/images/finalf.png') }}" style="width:140px;height:90px;margin-top:-33px;"></li>
      <li><a href="/">Home</a></li>
      <li><a href="/">About</a></li>
      <li><a href="/orderplaced">Orders</a></li>
      <li>
        <div class="srch">
      <form action="search">
          <input type="text" name="q" placeholder="Search Products" class="form-control" required autocomplete="off">
        <button type="submit" class="btn btn-info" style="margin-top:-34px;margin-left:380px;width:120px;border-radius:30px;">Search</button>
      </form>
    </div>
    </li>
        <li><a href="/cart">Cart({{$t}})</a></li>
        @if(Session::has('user'))
        <li class="dropdown">
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

    <div class="dl">
      <li><a href="/mobile" style="color:black;"><img src="{{ asset('/images/mobiles.png') }}" class="smalimag">Mobiles</a></li>
      <li><a href="/fridge" style="color:black;"><img src="{{ asset('/images/fridge.png') }}" class="smalimag">Refrigerators</a></li>
      <li><a href="/tv" style="color:black;"><img src="{{ asset('/images/tv.png') }}" class="smalimag">Television</a></li>
      <li><a href="/laptop" style="color:black;"><img src="{{ asset('/images/laptops.png') }}" class="smalimag">Laptops & Pc</a></li>
      <li><a href="/ac" style="color:black;"><img src="{{ asset('/images/ac.png') }}" class="smalimag">AC</a></li>
      <li><a href="/wm" style="color:black;"><img src="{{ asset('/images/wm.png') }}" class="smalimag">WashingMachines</a></li>
      <li><a href="/m" style="color:black;"><img src="{{ asset('/images/accessories.png') }}" class="smalimag">Accessories&more..</a></li>
    </div>
<div class="sldswrap">
        <div class="slidershow middle">
          <div class="slides">
            <input type="radio" name="r" id="r1" checked>
            <input type="radio" name="r" id="r2">
            <input type="radio" name="r" id="r3">
            <input type="radio" name="r" id="r4">
            <input type="radio" name="r" id="r5">
            <div class="slide s1">
              <img src="{{ asset('/images/tv.jpg') }}">
            </div>
            <div class="slide">
              <img src="{{ asset('/images/lap.jpg') }}">
            </div>
            <div class="slide">
              <img src="{{ asset('/images/lg.jpg') }}">
            </div>
            <div class="slide">
              <img src="{{ asset('/images/samsung.jpg') }}">
            </div>
            <div class="slide">
              <img src="{{ asset('/images/ref.png') }}">
            </div>
          </div>
          <div class="navigation">
            <label for="r1" class="bar"></label>
            <label for="r2" class="bar"></label>
            <label for="r3" class="bar"></label>
            <label for="r4" class="bar"></label>
            <label for="r5" class="bar"></label>
          </div>
        </div>
      </div>

              <div class="trwrap">
                  <h3>Deals of the Day</h3>
                  @foreach($products as $item)
                  <div class="trenitem">
                    <a href="detail/{{$item['id']}}">
                    <img class="trenimage" src="{{$item['gallery']}}">
                    <div class="discountdisp">
                      <p style="font-size:17px;">{{$item['name']}}</p>
                    </div>
                  </a>
                  </div>
                  @endforeach
                </div><br><br>
<p style="font-size:20px;border-bottom:1px solid silver">
  E-commerce is revolutionizing the way we all shop.</p><p style="font-size:16px;"> Why do you want to hop from one store to another in search of the latest phone when you can find it on the Internet in a single click? Not only mobiles.It houses everything you can possibly imagine, from trending electronics like laptops, tablets, smartphones, and mobile accessories to appliances that make your life easy like washing machines, TVs, ACs, mixer grinder juicers and other time-saving kitchen and small appliances; from home furnishings like cushion covers, mattresses and bedsheets to toys and musical instruments, we got them all covered. You name it, and you can stay assured about finding them all here. For those of you with erratic working hours, this website is your best bet. This e-commerce never shuts down.
</p><br><br>
<p style="font-size:20px;border-bottom:1px solid silver">
About this website  </p><p style="font-size:16px;">When it comes to laptops, we are not far behind.Filter among dozens of super-fast operating systems, hard disk capacity, RAM, lifestyle, screen size and many other criterias for personalized results in a flash. All you students out there, confused about what laptop to get? Our Back To College Store segregates laptops purpose wise (gaming, browsing and research, project work, entertainment, design, multitasking) with recommendations from top brands and industry experts, facilitating a shopping experience that is quicker and simpler.

Photography lovers, you couldn't land at a better page than ours. Cutting-edge DSLR cameras, ever reliable point-and-shoot cameras, millennial favourite instant cameras or action cameras for adventure junkies: our range of cameras is as much for beginners as it is for professionals. Canon, Nikon, GoPro, Sony, and Fujifilm are some big names you'll find in our store. Photography lovers, you couldn't land at a better page than ours. Cutting-edge DSLR cameras, ever reliable point-and-shoot cameras, millennial favourite instant cameras or action cameras for adventure junkies: our range of cameras is as much for beginners as it is for professionals. Canon, Nikon, GoPro, Sony, and Fujifilm are some big names you'll find in our store.

Turn your home into a theatre with a stunning surround sound system. Choose from our elaborate range of Sony home theatres, JBL soundbars and Philips tower speakers for an experience to remember.

How about jazzing up your phone with our quirky designer cases and covers? Our wide-ranging mobile accessories starting from headphones, power banks, memory cards, mobile chargers, to selfie sticks can prove to be ideal travel companions for you and your phone; never again worry about running out of charge or memory on your next vacation.
</p>
          <footer class="footer">
          <div class="l-footer">
          <h1>
          <img src="{{ asset('/images/finalf.png') }}" style="width:160px;height:150px;margin-left:10px;"></h1>
          <p>

          </p>
          </div>
          <ul class="r-footer">
          <li>
            <h2>
          Social</h2>
          <ul class="box">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Pinterest</a></li>
          <li><a href="#">Dribbble</a></li>
          </ul>
          </li>
          <li class="features">
            <h2>
          Information</h2>
          <ul class="box h-box">
          <li><a href="#">Blog</a></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">Sales</a></li>
          <li><a href="#">Customer Service</a></li>
          </ul>
          </li>
          <li>
            <h2>
          Legal</h2>
          <ul class="box h-box">
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Contract</a></li>
          </ul>
          </li>
          </ul>
          <div class="b-footer">
          <p>
          All rights reserved by Ecom 2021</p>
          </div>
          </footer>
      </body>
    </html>
