<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Belle's Maids to perfection</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
  <script src="https://kit.fontawesome.com/e18b383ed9.js" crossorigin="anonymous"></script>
  </head>
  <body>
   <nav>
     <img src="images/belle's-logo.png" alt="">
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
      <div class="container">Belle's maids to perfection</div>
  </section>
    <div id="aboutus">
      <h3>Welcome to Belle's maids to perfection</h3>
      <h2>
      With COVID 19 we offer disinfection sessions to your schedule

Here at belles maids we focus on making your work environment as clean and fresh as possible.we have a variety of cleaning services here in North Carolina, from building maintenance,floor waxing,construction cleaning,and house cleaning. We are a licensed and insured company. Our employees are trained to satisfy the customers needs in a orderly fashion.
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
        </div>
          <div class="service-items1">
            <img src="images/NicePng_cleaning-services-png_2243656.png" alt="residential-service" >
            <h3>commercial Service</h3>
          </div>
            <div class="service-items2">
              <img src="images/construction clean up.png" alt="Construction Service" >
              <h3>Construction Service</h3>
            </div>
              <div class="service-items3">
                <img src="images/floor-wax.jpeg" alt="waxing_floor-service" >
                <h3>Floor waxing Service</h3>
              </div>
             </div>
            </div>


      </div>
    </div>
    <section>
  <div class="container1">
    <form action="https://formspree.io/f/moqyeagq" method="POST" id="my-form">

      <div class="form-group">
        <label for="firstName"> Fulll name</label>
        <input type="text" id="firstName" name="firstName">
      </div>

      <div class="form-group">
        <label for="phoneNumber">phone number</label>
        <input type="number" id="phoneNumber" name="phoneNumber">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
      </div>

      <div class="form-group">
        <label for="massage">Massage</label>
        <textarea name="massage" id="massage" cols="30" rows="10"></textarea>
      </div>

      <button type="submit">Submit</button>
    </form>
  </div>
  <div id="status"></div>
</section>
<script src="main.js"></script>
  </body>
</html>
