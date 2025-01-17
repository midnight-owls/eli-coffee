<?php include("user-header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - Eli Coffee</title>
  <link rel="stylesheet" href="css/about-us.css" />
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

  <footer class="bg-dark text-light py-4 footer">
    <div class="container">
      <div class="row">
        <!-- Contact Us -->
        <div class="col-md-4">
          <h6>Contact Us</h6>
          <p><strong>Eli Coffee</strong></p>
          <p>2nd Floor Pearl Building, Binangonan, Philippines</p>
          <p><strong>Phone:</strong> 0917 562 0306</p>
          <p><strong>Email:</strong> <a href="mailto:elicoffeetea@gmail.com" class="text-light text-decoration-none">elicoffeetea@gmail.com</a></p>
        </div>

        <!-- About Us -->
        <div class="col-md-4 text-center">
          <h6>About Us</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-light text-decoration-none">Our Company</a></li>
            <li><a href="#" class="text-light text-decoration-none">Stories and News</a></li>
            <li><a href="#" class="text-light text-decoration-none">Customer Service</a></li>
          </ul>
        </div>

        <!-- Opening Hours -->
        <div class="col-md-4 text-end">
          <h6>Opening Hours</h6>
          <ul class="list-unstyled">
            <li><strong>Monday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Tuesday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Wednesday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Thursday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Friday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Saturday:</strong> 8:00 am - 2:00 pm</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <p class="mb-0">&copy; 2025 Eli Coffee. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>