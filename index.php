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
        we do residential and commerciwe do residential and commercial jobs from
        offices to waxing floors even construction clean ups the construction
        clean ups have 3 phases depending on what the customer wants.
        Residential cleaning includes dusting,mopping,vacuuming,washing
        surfaces, etc. Commercial cleaning we do anything from cleaning class a
        facility’s to class c. We are license and insured. We do contract
        cleaning on the commercial partal jobs from offices to waxing floors
        even construction clean ups the construction clean ups have 3 phases
        depending on what the customer wants. Residential cleaning includes
        dusting,mopping,vacuuming,washing surfaces, etc. Commercial cleaning we
        do anything from cleaning class a facility’s to class c. We are license
        and insured. We do contract cleaning on the commercial part
      </h2>
    </div>
    <div id="services">
      <h3>Services</h3>
    </div>
    <section id="contactUs">
      <div class="containerOne">
          <h3>Contact us</h3>
        <form action="contactform.php" method="post">
          <div class="form-group">
            <label for="name">Full name</label>
            <input type="text" id="name" name="name" />
          </div>
          <div class="form-group">
            <label for="number">Phone Number</label>
            <input type="text" id="number" name="number" />
          </div>
          <div class="form-group">
            <label for="mail">Email</label>
            <input type="text" id="mail" name="mail" />
          </div>
          <div class="form-group">
            <label for="message">message</label>
            <textarea id="message" name="message" cols="30" rows="10"></textarea>
          </div>
          <button type="submit" name="submit">submit</button>
        </form>
      </div>
    </section>
 
  </body>
</html>
