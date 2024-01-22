<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="logn.css" />
    <title>MY HOTEL</title>
  </head>
  <body>
    <header>
      <div class="navbar">
        <div class="logo">logo</div>
        <div class="toggle-button" id="toggle-button">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        <ul class="nav-links" id="nav-links">
          <li><a href="home.html">HOME</a></li>
          <li><a href="about.html">ABOUT US</a></li>
          <li><a href="login.html">BOOKING</a></li>
          <li><a href="contact.html">CONTACT US</a></li>
        </ul>
      </div>
    </header>




<div class="header">
<div class="button2">
  <div  id="button"><ion-icon name="arrow-back-outline"></ion-icon></div>
</div>

<div class="p">
      <p>booking a room</p>
    </div>

</div>
   




    <div class="body">
      <img src="images/standard_room.webp" alt="">
    </div>

    <div class="container1">
      <form action="send.php" method="POST" id="bookingForm">
        <div class="input-box">
          <div class="name">
            <label for="name">full-name</label><br>
            <input type="text" placeholder="full-name" name="name" required>
          </div>

          <div class="date">
            <div class="name1">
              <label for="check-in">check-in</label>
              <input type="date" name="check-in" required>
            </div>

            <div class="name2">
              <label for="check-out">check-out</label>
              <input type="date" name="check-out" required>
            </div>
          </div>

          <div class="name">
            <div class="room">
              <label for="room">choose a room</label><br>
              <select name="select-room" id="">
                <option value="choose" selected disabled>choose-one</option>
                <option value="standard">standard room</option>
                <option value="service">serviced room</option>
                <option value="suprior">supirior room</option>
                <option value="deplomatic">deplomatic room</option>
                <option value="duplex">duplex room</option>
              </select>
            </div>

            <div class="num">
              <div class="name">
                <label for="guest">number of guest</label><br>
                <select name="select-guest" id="">
                  <option value="0" selected disabled>0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>

              <div class="name">
                <label for="guest">number of rooms</label><br>
                <select name="select-number-rooms" id="">
                  <option value="0" selected disabled>0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </div>
          </div>
          <div class="button">
            <button type="submit" name="sendBooking">submit</button>
          </div>
        </div>
      </form>
    </div>
    <div id="loader" class="loader"></div>

    <!-- <div class="link2">
      <div class="icon1">
        <div class="i">
          <a href="home.html"><i><ion-icon name="home-outline"></ion-icon></i></a>
        </div>
        <p>home</p>
      </div>
      <div class="icon2">
        <a href="about.html"><i><ion-icon name="person-outline"></ion-icon></i></a>
        <p>about</p>
      </div>
      <div class="icon3">
        <a href="login.php" class="active"><i><ion-icon name="book-outline"></ion-icon></i></a>
        <p>booking</p>
      </div>
      <div class="icon4">
        <a href="contact.html"><i><ion-icon name="phone-portrait-outline"></ion-icon></a>
        <p>contact</p>
      </div>
    </div> -->




<script>
    let btnBack = document.getElementById('button')
    
    btnBack.addEventListener('click',()=>{
      window.history.back()
    })
    </script>

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
      const toggleButton = document.getElementById('toggle-button');
      const navLinks = document.getElementById('nav-links');
      const loader = document.getElementById('loader');
      toggleButton.addEventListener('click', () => {
          navLinks.classList.toggle('active');
      });

      const bookingForm = document.getElementById('bookingForm');
      bookingForm.addEventListener('submit', function () {
          loader.style.display = 'block';
      });
    </script>
  </body>
</html>
