<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar menu Responsive</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Cookie&family=Oxygen:wght@300&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check" />
      <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
      </label>
      <label image></label>
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
        Here at belles maids we focus on making your work environment as clean
        and fresh as possible.we have a variety of cleaning services here in
        North Carolina, from building maintenance,floor waxing,construction
        cleaning,and house cleaning. We are a licensed and insured company. Our
        employees are trained to satisfy the customers needs in a orderly
        fashion.
      </h2>
    </div>
    <div id="services">
      <h3>Services</h3>
    </div>
    <section>
      <div class="contactUs">
          <h2>Contact us</h2>
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
