<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Belle's Maids to perfection</title>
    <link type="text/css" rel="stylesheet" href="/stylesheet/style.css" />
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
  <script src="https://kit.fontawesome.com/e18b383ed9.js" ></script>
  </head>
  <body>
   <nav>
     <img class="logo1"src="images/belle's-logo.png" alt="">
      <input type="checkbox" id="check" />
      <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
      </label>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#aboutus">About Us</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contactUs">Contact Us</a></li>
      </ul>
    </nav>
    <section>
      <div class="container" >Belle's Maids to Perfection</div>
      <img class="container1" src="images/charlotte.jpg" alt="">
  </section>
    <div class="aboutus1" id="aboutus">
      <h3>Welcome to Belle's Maids to Perfection</h3>
      <h2>Where our services are maids for you!</h2>
      <h2>
      Do to COVID 19 we offer disinfection sessions to your schedule

Here at belles maids we focus on making your work environment as clean and fresh as possible.
we have a variety of cleaning services here in North Carolina,
from Commercial,Floor waxing,Construction cleaning
and Residential cleaning.
We are a licensed and insured company.
Our employees are trained to satisfy the customers needs in a orderly fashion.
      </h2>
      <img class="cleaningone" src="images/cleaning.jpg" alt="">
       <img class="cleaningtwo" src="images/cleaningOne.jpeg" alt="">
    </div>
    <div class="services" id="services">
      <h3 class="title">Services</h3>
      <div class="service1">
        <div class="service-items">
          <img src="images/residential cleanig.jpg" alt="residential-service">
          <h3>Residential Service</h3>
          <h2 class="discription1">
            <li>Residential: houses , we work with realtors.</li>

          </h2>
        </div>
        <div class="service-items1">
          <img src="images/NicePng_cleaning-services-png_2243656.png" alt="residential-service" >
          <h3>Commercial Service</h3>
          <h2 class="discription2">
            <li>Commercial: buildings,schools, offices,Church’s</li>

          </h2>
        </div>
        <div class="service-items2">
          <img src="images/construction clean up.png" alt="Construction Service" >
          <h3>Construction Service</h3>
          <h2 class="discription3">
            <li>Construction: New Construction house </li>

          </h2>
        </div>
        <div class="service-items3">
          <img src="images/floor-wax.jpeg" alt="waxing_floor-service" >
          <h3>Floor waxing Service</h3>
          <h2 class="disciption4">
            <li>Floor Waxing: depending on what customer wants </li>

          </h2>
        </div>
      </div>
    </div>
  </div>
</div>
<section id="contactUs">
  <div class="containerOne" id="contactUs">
    <h3>Contact us</h3>
    <form action="contactform.php" method="post">
      <form action="contactfrom.php" method="post">
        <div class="form-group">
          <h4>Full name</h4>
          <label for="name"></label>
          <input type="text" id="name" name="name" />
        </div>
        <div class="form-group">
          <h4>Phone Number</h4>
          <label for="number"></label>
          <input type="text" id="number" name="number" />
        </div>
        <div class="form-group">
          <h4>Email</h4>
          <label for="mail"></label>
          <input type="text" id="mail" name="mail" />
        </div>
        <div class="form-group">
          <h4>Message</h4>
          <label for="message"></label>
          <textarea id="message" name="message" cols="30" rows="10"></textarea>
        </div>
        <button class="submit" type="submit" name="submit">submit</button>
      </form>
    </div>
  </section>

</body>
</html>
