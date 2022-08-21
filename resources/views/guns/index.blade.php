
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB PAGE:</title>
    @include('scaffold.link')
</head>
<body style="font-family: Arial, Helvetica, sans-serif;">
    @include('layout.header')
    <div class="container" >
    <b class="text-primary ml-5" style="font-size: 15px; ">FEATURE</b>
                <h4 class=" ml-5">Main Feature Of PLAY</h4>
                <p class="ml-5">Lorem ipsum dolor sit amet consectetur, <br> adipisicing elit. Aperiam assumenda excepturi ?</p>
      <div class="row mt-5 pt-3">
            <div class="col-md-3">
              <div style=" margin-left: 20px;" >
                <i class="fa fa-gift bg-primary text-light p-2 mb-3 rounded" style="font-size: x-large; "></i>
                <h5>Free and open source</h5>
                <p style="font-size: 10px;margin-top: 20px; ">300,000 online casses <br>Entery A ready of space <br>Entery A ready</p><br>
                <button class="btn " style="font-size: 10px;">Learn More</button>
              </div>
            </div>
            <div class="col-md-3">
              <div style="   margin-left: 20px;" >
              <i class="fa fa-gift bg-primary text-light p-2 mb-3 rounded" style="font-size: x-large; "></i>
                <h5>Free and open source</h5>
                <p style="font-size: 10px;margin-top: 20px; ">300,000 online casses <br>Entery A ready of space <br>Entery A ready</p><br>
                <button class="btn " style="font-size: 10px;">Learn More</button>
              </div>
            </div>
            <div class="col-md-3">
              <div style="   margin-left: 20px;" >
              <i class="fa fa-gift bg-primary text-light p-2 mb-3 rounded" style="font-size: x-large; "></i>
                <h5>Free and open source</h5>
                <p style="font-size: 10px;margin-top: 20px; ">300,000 online casses <br>Entery A ready of space <br>Entery A ready</p><br>
                <button class="btn " style="font-size: 10px;">Learn More</button>
              </div>
            </div>
            <div class="col-md-3">
              <div style="  margin-left: 20px;" >
              <i class="fa fa-gift bg-primary text-light p-2 mb-3 rounded" style="font-size: x-large; "></i>
                <h5>Free and open source</h5>
                <p style="font-size: 10px;margin-top: 20px; ">300,000 online casses <br>Entery A ready of space <br>Entery A ready</p><br>
                <button class="btn " style="font-size: 10px;">Learn More</button>
              </div>
            </div>
      </div>
    </div>

    <div class="bg-light p-5 container-fluid">
        <div style="background-color: white;" class="container p-5">
          <div class="row">
            <div class="col-md-6">
              <button class="btn btn-primary">About Us</button>
              <h2 class="mt-5">Brilliant Toolkkit To Build Nextgen Website Faster.</h2>
              <p class="text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus porro quae, molestiae ab temporibus numquam, deserunt aut omnis possimus voluptatum quam? Saepe explicabo fuga veritatis ab odio modi quaerat obcaecati.</p>
              <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius voluptatum odio veniam ex labore dolorem dolorum, sed accusantium, vel dicta vero ab commodi nisi nulla maiores est illo, ratione quam?</p>
              <button class="btn btn-primary">Learn More</button>
            </div>
            <div class="col-md-6">
              <img class="float-right" src="{{asset('assets/img/ew.PNG')}}" alt="">
            </div>
          </div>
        </div>
    </div>
    <div class="container">
      <div class="text-center">
          <b class=" mt-5 pt-5 mb-5 text-primary">Pricing</b>
          <h2>Our Pricing Plans</h2>
          <p class="text-secondary mb-5 pb-5">There are many varaitions of passages of lorem Ipsum availalbe <br> but the majority have suffred altreation in some form.</p>
      </div>
      <div class="row">
        <div class="col-md-4 mb-5">
          <div style="margin-right: -30px; border: 1px solid skyblue;" class="text-center pt-5 pb-5 rounded">
            <b>Starting FORM</b>
            <h3 class="text-primary">$ 19.99/mo</h3>
            <small>5 User</small><br>
            <small>ALL UI components</small><br>
            <small>Life line access</small><br>
            <small>Free Uptades</small><br>
            <small>Use on 1 (one) project</small><br>
            <small>4Month Support</small><br>
            <button style="border-radius: 20px;" class="mt-5 p-3 btn btn-outline-primary">Purchase Now</button>
          </div>
        </div>
        <div style="margin-top: -40px;" class="col-md-4 mb-5">
          <div class="text-center p-5 bg-primary rounded">
            <button class="btn btn-light text-primary">Popular</button><br><br>
            <b class="text-light">Starting FORM</b>
            <h3 class="text-light">$ 19.99/mo</h3>
            <small class="text-light">5 User</small><br>
            <small class="text-light">ALL UI components</small><br>
            <small class="text-light">Life line access</small><br>
            <small class="text-light">Free Uptades</small><br>
            <small class="text-light">Use on 1 (one) project</small><br>
            <small class="text-light">4Month Support</small><br>
            <button style="border-radius: 20px;" class="mt-5 p-3 btn btn-light">Purchase Now</button>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div style="margin-left: -30px; border: 1px solid skyblue;" class="text-center pt-5 pb-5 rounded">
            <b>Starting FORM</b>
            <h3 class="text-primary">$ 19.99/mo</h3>
            <small>5 User</small><br>
            <small>ALL UI components</small><br>
            <small>Life line access</small><br>
            <small>Free Uptades</small><br>
            <small>Use on 1 (one) project</small><br>
            <small>4Month Support</small><br>
            <button style="border-radius: 20px;" class="mt-5 p-3 btn btn-outline-primary">Purchase Now</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="text-center">
        <b class=" mt-5   text-primary">FAQ</b>
        <h2>Fixed Answer</h2>
        <p class="text-secondary mb-5 pb-5">There are many varaitions of passages of lorem Ipsum availalbe <br> but the majority have suffred altreation in some form.</p>
    </div>
    <div class="row">
      <h1>Template Detaile</h1>
      <div class="col-md-6">
        <p class="mt-5">Seprated they live in.A p river named Duben Follows By <br>Seprated they live in.A p river named Duben Follows By <br>Seprated they live in.A p river named Duben Follows By <br> Seprated they live in.A p river named Duben Follows By <br>Seprated they live in.A p river named Duben Follows By <br>into your mouth. <br> <br>Seprated they live in.A p river named Duben Follows By <br>Seprated they live in.A p river named Duben Follows By <br>Which rostaed parts of sentences into your mouth.</p><br>
      </div>
      <div style="margin-top: -20px;" class="col-md-6">
        <img class="float-right mb-3" src="{{asset('assets/img/m.PNG')}}" alt="">
      </div><br><br>
      <div class="col-md-3">
      <p style=" font-size: 40px; ">18</p>
      <p >Certified Teachers.</p>
      </div>
      <div class="col-md-3">
      <p style=" font-size: 40px; ">100</p>
      <p>Labours</p>
      </div>
      <div class="col-md-3">
      <p style=" font-size: 40px; ">30</p>
      <p>Courses</p>
      </div>
      <div class="col-md-3">
      <p style=" font-size: 40px;">50</p>
      <p>Awards won</p>
      </div>
  </div>
</div>
<div class="bg-light p-5 container-fluid">
    <div class="container">
        <div class="text-center">
            <b class="text-primary">Testimonials</b>
            <h2>What Our Customers Says</h2>
            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Numquam  Autem facilis iste ipsa velit?</p>
        </div>
        <div class="row">
            <div class="col-md-4 ">
        <div class="card" style="margin-top: 20px; width: 300px">
          <img class="card-img-top ml-3" src="{{asset('assets/img/starimage.PNG')}}"  style=" width:50%">
          <div class="card-body">
            <p class="card-text">Lorem, ipsum dolor  inventore debitis repellendus voluptate optio asperiores quam rem adipisci facilis?</p>
           <p> <img src="{{asset('assets/img/5.PNG')}}" height="30px" class="rounded-circle"> Sabo Masties <br><span class="text-secondary " style="font-size: 10px; margin-left: 35px;"> Founder @Uldeck </span></p>
          </div>
        </div>
            </div>
            <div class="col-md-4 ">
        <div class="card" style="margin-top: 20px; width:300px">
            <img class="card-img-top ml-3" src="{{asset('assets/img/starimage.PNG')}}"  style=" width:50%">
            <div class="card-body">
              <p class="card-text">Lorem, ipsum dolor  inventore debitis repellendus voluptate optio asperiores quam rem adipisci facilis?</p>
              <p> <img src="{{asset('assets/img/6.PNG')}}" height="30px" class="rounded-circle"> Margin Gesmu<br><span class="text-secondary" style="font-size: 10px;margin-left: 35px;"> Founder @ Lineicons </span></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="card" style="margin-top: 20px; width:300px">
            <img class="card-img-topml-3" src="{{asset('assets/img/starimage.PNG')}}"  style=" width:50%">
            <div class="card-body">
              <p class="card-text">Lorem, ipsum dolor  inventore debitis repellendus voluptate optio asperiores quam rem adipisci facilis?</p>
              <p><img src="assets/img/8.PNG" height="30px" class="rounded-circle"> Willim Smit<br><span class="text-secondary" style="font-size: 10px;margin-left: 35px;"> Founder @ Gray Grids </span></p>
            </div>
        </div>
          </div>
        </div>
    </div>
</div>
  <div class="container p-5 mt-5">
    <p class="text-secondary">Trusted and Used by ------</p>
      <div class="row">
          <div class="col-md-3">
              <p style="font-size: 30px; font-family: cursive;" ><i class="mt-5 fa fa-audio-description rounded"></i><b> Ayro </b><span> Ul</span></p>
          </div>
          <div class="col-md-3">
              <p style="font-size: 30px; font-family: cursive;" ><i class="mt-5 fa fa-low-vision rounded"></i><b> GRAY</b><span>GRIDS</span> </p>
          </div>
          <div class="col-md-3">
              <p style="font-size: 30px; font-family: cursive;" ><i class="mt-5 fa fa-paw rounded"></i><b> Line Icons</b></p>
          </div>
          <div class="col-md-3">
              <p style="font-size: 30px; font-family: cursive;" ><i class="mt-5 fa fa-cart-plus rounded"></i> ecommerce</p>
          </div>
      </div><br><br>
      <div class="container-fluid bg-light">
<div class="container">
  <div class="row">
            <b class="text-primary text-center" style="font-size: 15px; margin-top: 70px;">Our Team</b>
            <h4 class=" text-center">Meet The Team</h4>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur, <br> adipisicing elit. Aperiam assumenda excepturi ?</p>
        <div class="col-md-3">
          <div style="  padding: 20px; margin-left: 20px;" >
            <img src="{{asset('assets/img/5.PNG')}}" class="rounded" style="width: 170px;">
            <h5 class="mt-5">Adveen Desuza</h5>
            <p class="text-secondary">Ul Designer</p>
            <button class="btn btn-outline-primary mt-3" >Learn More...</button>
          </div>
        </div>
        <div class="col-md-3">
          <div style="  padding: 20px; margin-left: 20px;" >
          <img src="{{asset('assets/img/6.PNG')}}" class="rounded" style="width: 150px;">
            <h5 class="mt-5">Jezmin Uniya</h5>
            <p class="text-secondary">Product Designer</p>
            <button class="btn btn-outline-primary mt-3" >Learn More...</button>
          </div>
        </div>
        <div class="col-md-3">
          <div style="  padding: 20px; margin-left: 20px;" >
          <img src="{{asset('assets/img/team2.jpg')}}" class="rounded" style="width: 150px; height: 170px;">
            <h5 class="mt-5">Andreio Gloree</h5>
            <p class="text-secondary">App Designer</p>
            <button class="btn btn-outline-primary mt-3" >Learn More...</button>
          </div>
        </div>
        <div class="col-md-3">
          <div style="  padding: 20px; margin-left: 20px;" >
            <img src="{{asset('assets/img/team3.jpg')}}" class="rounded" style="width: 150px; height: 170px;">
            <h5 class="mt-5">Jackie Sanders</h5>
            <p class="text-secondary">Contact Writer</p>
            <button class="btn btn-outline-primary mt-3">Learn More</button>
          </div>
        </div>
  </div>
</div>
</div>
<div style="height: 500px;" class="container-fluid bg-light p-5">
  <div class="container">
    <div class="row mt-5 pt-5">
      <div class="col-md-6">
          <b class="text-primary">Contact Us</b>
          <h2>Lets talk about <br> Love to hear Form you</h2>
      </div>
      <div class="col-md-6">
        <form style="background-color: white;" class="p-4 ml-5">
          <h4 class="text-center">Send to a message</h4>
          <label class="ml-2" for="User Name">User Name</label>
          <input style="border-top: none; border-left: none; border-right: none;" type="text" class="form-control" placeholder="User Name">
          <label class="pt-4 ml-2" for="E-mail">E-mail</label>
          <input style="border-top: none; border-left: none; border-right: none;" type="text" class="form-control" placeholder="Enter your E-mail">
          <label class="pt-4 ml-2" for="Password">Password</label>
          <input style="border-top: none; border-left: none; border-right: none;" type="text" class="form-control" placeholder="Enter Your Password">
          <label class="pt-4 ml-2" for="Date">Date</label>
          <input style="border-top: none; border-left: none; border-right: none;" type="date" class="form-control">
          <button class="mt-5 btn btn-primary">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div style="height: 300px;" class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <i class="text-primary fa fa-map"> Our Location</i>
        <p>Hello world How are you and chats the matter.</p>
      </div>
      <div class="col-md-3">
        <i class="text-primary fa fa-envelope"> Message</i>
        <p>Hello world How are you and ehats the matter.</p>
      </div>
    </div>
  </div>
</div>
  @include('layout.footer')
  @include('scaffold.script')
</body>
</html>