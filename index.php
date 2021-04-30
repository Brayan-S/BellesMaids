<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Belle's Maids to perfection</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
        <li><a href="#contactus">Contact Us</a></li>
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
    <div id="services">
      <h3>Services</h3>
    </div>
    <section id="contactUs">
      <div class="containerOne">
          <h3>Contact us</h3>
        <form action="contactform.php" method="post">
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
          <button type="submit" name="submit">submit</button>
        </form>
      </div>
    </section>
 
  </body>
</html>
