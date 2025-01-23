<?php include("guest-header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - Eli Coffee</title>
  <style>
    /* General Stylingg */
    body {
      font-family: "Roboto", sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5efe6;
      color: #333;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    /* Header Styling */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
      background-color: #fff;
      border-bottom: 1px solid #ccc;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      text-transform: uppercase;
    }

    /* Hero Section */
    .hero {
      background-image: url("assets/about-us/aboutus_herobg.png");
      background-size: cover;
      background-position: center;
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-transform: uppercase;
      font-size: 36px;
      font-weight: bold;
    }

    /* About Us Section */
    .about {
      text-align: center;
      padding: 50px 30px;
    }

    .about h2 {
      font-size: 28px;
      text-transform: uppercase;
      margin-bottom: 20px;
    }

    .about p {
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 15px;
      padding: 20px 0;
    }

    .gallery img {
      width: 100%;
      height: auto;
      border-radius: 5px;
    }

    /* Meet the Team Section */
    .team {
      text-align: center;
      padding: 50px 30px;
    }

    .team h2 {
      font-size: 28px;
      text-transform: uppercase;
      margin-bottom: 30px;
    }

    .team .avatars {
      display: flex;
      justify-content: center;
      gap: 30px;
    }

    .team .avatar {
      text-align: center;
    }

    .team img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .team .name {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .team .role {
      font-size: 14px;
      color: #777;
    }

    /* Location Section */
    .location {
      display: flex;
      gap: 30px;
      padding: 50px 30px;
      align-items: center;
    }

    .location img {
      width: 50%;
      height: auto;
      border-radius: 5px;
    }

    .location .details {
      flex: 1;
    }

    .location h2 {
      font-size: 28px;
      text-transform: uppercase;
      margin-bottom: 20px;
    }

    .location p {
      line-height: 1.6;
    }
  </style>
</head>

<body>
  <section class="hero">About Eli Coffee</section>

  <section class="about" id="about">
    <h2>About Us</h2>
    <p>
      Lorem ipsum dolor sit amet. Est fuga perspiciatis est doloremque quis
      qui voluptatem maxime. Eos voluptates deleniti nam quasi animi et
      exercitationem quas eum consequatur consequatur? Qui possimus rerum in
      exercitationem beatae ut dolorem temporibus et nemo unde.
    </p>
    <p>
      Quo explicabo corporis ut magni deleniti non quam aperiam sit ipsa rerum
      aut laborum quasi et numquam maiores. Aut blanditiis expedita et dolores
      velit id quia modi eum fuga fugit ut officiis sunt et iusto doloribus.
      Qui officiis cupiditate ut veritatis pariatur et quasi provident.
    </p>
    <div class="gallery">
      <img src="assets/about-us/gallery1.jpg" alt="Gallery Image 1" />
      <img src="assets/about-us/gallery2.jpg" alt="Gallery Image 2" />
      <img src="assets/about-us/gallery3.jpg" alt="Gallery Image 3" />
      <img src="assets/about-us/gallery4.jpg" alt="Gallery Image 4" />
    </div>
  </section>

  <section class="team">
    <h2>Meet the Team</h2>
    <div class="avatars">
      <div class="avatar">
        <img src="assets/about-us/avatar1.png" alt="Kobe" />
        <div class="name">Kobe</div>
        <div class="role">Project Lead</div>
      </div>
      <div class="avatar">
        <img src="assets/about-us/avatar2.png" alt="Jesse" />
        <div class="name">Jesse</div>
        <div class="role">Design Lead</div>
      </div>
      <div class="avatar">
        <img src="assets/about-us/avatar3.png" alt="Raven" />
        <div class="name">Raven</div>
        <div class="role">Quality Lead</div>
      </div>
      <div class="avatar">
        <img src="assets/about-us/avatar4.png" alt="Von" />
        <div class="name">Von</div>
        <div class="role">Development Lead</div>
      </div>
      <div class="avatar">
        <img src="assets/about-us/avatar5.png" alt="CD" />
        <div class="name">CD</div>
        <div class="role">Business Analyst</div>
      </div>
    </div>
  </section>

  <section class="location">
    <img src="assets/about-us/map.jpg" alt="Map" />
    <div class="details">
      <h2>Location</h2>
      <p>Eli Coffee</p>
      <p>
        2nd Floor Pearlpiple Building, San Juan, Darangan Bridge, Binangonan,
        1940 Rizal
      </p>
    </div>
  </section>

  <div class="form_container">
    <i class="uil uil-times form_close"></i>

    <!-- Sign In Form -->
    <div class="signin_form">
      <form action="#">
        <h2>Welcome Back!</h2>
        <div class="input_box">
          <input type="email" placeholder="Enter your email" required />
          <i class="uil uil-envelope"></i>
        </div>
        <div class="input_box">
          <input type="password" placeholder="Enter your password" required />
          <i class="fas fa-eye-slash pw_hide me-1"></i>
        </div>
        <div class="option_field">
          <span class="checkbox" style="cursor: pointer">
            <input type="checkbox" id="check" style="cursor: pointer" />
            <label for="check" style="cursor: pointer"> Remember me</label>
          </span>
        </div>
        <div class="forgot-container">
          <a href="#" class="forgot_pw">Forgot password</a>
        </div>
        <button class="button">Sign In</button>
        <div class="signup">
          Don't have an account?
          <a href="#" class="toggle-signup">Sign up</a>
        </div>
      </form>
    </div>

    <!-- Signup Form -->
    <div class="signup_form">
      <form action="#">
        <h2>Create An Account</h2>
        <div class="input_box">
          <input type="email" placeholder="Enter your email" required />
          <i class="uil uil-envelope"></i>
        </div>
        <div class="input_box">
          <input type="password" placeholder="Enter your password" required />
          <i class="uil uil-eye-slash pw_hide"></i>
        </div>
        <button class="button">Sign Up</button>
        <div class="signup">
          Already have an account?
          <a href="#" class="toggle-signup">Sign in</a>
        </div>
      </form>
    </div>
  </div>

  <footer class="bg-dark text-light py-4 footer d-flex align-items-center">
    <div class="container">
      <div class="text-start ps-0">
        &copy; 2025 Eli Coffee. All rights reserved.
      </div>
    </div>
    <div class="container mx-auto d-flex justify-content-end gap-2">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating" href="https://www.facebook.com/elicoffeeph" target="_blank" role="button"><i class="fab fa-facebook-f"></i></a>
      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating" href="https://www.instagram.com/elicoffeeph/" target="_blank" role="button"><i class="fab fa-instagram"></i></a>
    </div>
  </footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>