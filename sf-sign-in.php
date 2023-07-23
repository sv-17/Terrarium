
<?php

session_start();
include("include/config.php");

if (isset($_POST['username'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $conf_pass = $_POST['conf_pass'];
  $email = $_POST['email'];

  if($conf_pass != $password){
    echo '<script type="text/javascript">';
    echo 'window.addEventListener("load", () => {swal({ title: "Error!", text: "Passwords don\'t match!", type: "error", confirmButtonText: "Okay" })})';
    echo '</script>';
  }

  $sql = "select * from user_details where email = '$email'";
  $result_email = mysqli_query($conn, $sql) or die("Data retrieval error");

  if(mysqli_num_rows($result_email) > 0){
    echo '<script type="text/javascript">';
    echo 'window.addEventListener("load", () => {swal({ title: "User already exist!", text: "User already registered", type: "error", confirmButtonText: "Okay" })})';
    echo '</script>';
  }

  $sql = "select * from user_details where username = '$username'";
  $result_username = mysqli_query($conn, $sql) or die("Data retrieval error");

  if(mysqli_num_rows($result_username) > 0){
    echo '<script type="text/javascript">';
    echo 'window.addEventListener("load", () => {swal({ title: "Username taken!", text: "Username is already taken by some other user!", type: "error", confirmButtonText: "Okay" })})';
    echo '</script>';
  }

  $sql = "INSERT INTO user_details (username, email, password, profile_pic_link, rating, contrib_rating) VALUES ('$username', '$email', '$password', Null, 0, 0)";
  $result_insert = mysqli_query($conn, $sql) or die("Data insertion error");

                if ($result_insert) {
                  echo '<script type="text/javascript">';
                  echo 'window.addEventListener("load", () => {swal({ title: "Successfully registered!", text: "Account created", type: "success", confirmButtonText: "Okay" }, function(){window.location.replace("login_password.php")})})';
                  echo '</script>';
                } else {
                    echo "Error inserting values.";
                }
}
?>
<html lang="en">
  <head>
    <title>Terrarium | Sign Up</title>
    <meta property="og:title" content="SF-SignIN - Jovial Candid Aardvark" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }

      #login_button[disabled] {
        background-color: lightgray;
        color: darkgray;
      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&amp;display=swap"
      data-tag="font"
    />
    <!--This is the head section-->
    <!-- <style> ... </style> -->
    <style data-section-id="dropdown">
      [data-thq="thq-dropdown"]:hover > [data-thq="thq-dropdown-list"] {
          display: flex;
        }

        [data-thq="thq-dropdown"]:hover > div [data-thq="thq-dropdown-arrow"] {
          transform: rotate(90deg);
        }
    </style>
    <link rel="stylesheet" href="./style.css" />
    <script>
function checkPasswordMatch() {
  var password = document.getElementById("password").value;
  var confirm_password = document.getElementById("conf_pass").value;
  var password_match = document.getElementById("password_match");
  var login_button = document.getElementById("login_button");

  if (password === confirm_password) {
    password_match.innerHTML = "Passwords match!";
    password_match.style.color = "green"; // Set color to green
    login_button.disabled = false;
    login_button.style.display = "block";
  } else {
    password_match.innerHTML = "Passwords do not match";
    password_match.style.color = "red"; // Reset color to default
    login_button.disabled = true;
    login_button.style.display = "none";
  }
}
    </script>
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
  </head>
  <body>
    <div>
      <link href="./sf-sign-in.css" rel="stylesheet" />

      <div class="s-sign-in-container">
        <header data-thq="thq-navbar" class="s-sign-in-navbar-interactive">
          <img
            alt="logo"
            src="imagee.png"
            class="s-sign-in-logo"
          />
          <div
            data-thq="thq-navbar-nav"
            data-role="Nav"
            class="s-sign-in-desktop-menu"
          >
            <nav
              data-thq="thq-navbar-nav-links"
              data-role="Nav"
              class="s-sign-in-nav"
            ></nav>
          </div>
          <div data-thq="thq-burger-menu" class="s-sign-in-burger-menu">
            <svg viewBox="0 0 1024 1024" class="s-sign-in-icon">
              <path
                d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
              ></path>
            </svg>
          </div>
          <div data-thq="thq-mobile-menu" class="s-sign-in-mobile-menu">
            <div
              data-thq="thq-mobile-menu-nav"
              data-role="Nav"
              class="s-sign-in-nav1"
            >
              <div class="s-sign-in-container1">
                <img
                  alt="image"
                  src="https://presentation-website-assets.teleporthq.io/logos/logo.png"
                  class="s-sign-in-image"
                />
                <div data-thq="thq-close-menu" class="s-sign-in-menu-close">
                  <svg viewBox="0 0 1024 1024" class="s-sign-in-icon02">
                    <path
                      d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                    ></path>
                  </svg>
                </div>
              </div>
              <nav
                data-thq="thq-mobile-menu-nav-links"
                data-role="Nav"
                class="s-sign-in-nav2"
              >
                <span class="s-sign-in-text">About</span>
                <span class="s-sign-in-text01">Features</span>
                <span class="s-sign-in-text02">Pricing</span>
                <span class="s-sign-in-text03">Team</span>
                <span class="s-sign-in-text04">Blog</span>
              </nav>
              <div class="s-sign-in-container2">
                <button class="s-sign-in-login button">Login</button>
                <button class="button">Register</button>
              </div>
            </div>
            <div class="s-sign-in-icon-group">
              <svg
                viewBox="0 0 950.8571428571428 1024"
                class="s-sign-in-icon04"
              >
                <path
                  d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                ></path></svg
              ><svg
                viewBox="0 0 877.7142857142857 1024"
                class="s-sign-in-icon06"
              >
                <path
                  d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                ></path></svg
              ><svg
                viewBox="0 0 602.2582857142856 1024"
                class="s-sign-in-icon08"
              >
                <path
                  d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                ></path>
              </svg>
            </div>
          </div>
        </header>
        <form role="form" method = "post">
        <div class="s-sign-in-container3">
          <div class="s-sign-in-container4">
            <h1 class="s-sign-in-text05">SIGN UP</h1>
            <button type = "submit" style="display:none;" id = "login_button" class = "s-sign-in-navlink button" disabled >
            Get Started
          </button>
            <span class="s-sign-in-text06">Email</span>
            <input
                type="email"
                required = ""
                autofocus
                name="email"
                placeholder="Email"
                class="s-sign-in-textinput input"
              />

            <span class="s-sign-in-text07" >Username</span>
            <input
              pattern="[a-zA-Z0-9_]{3,20}"
              type="text"
              required=""
              name = 'username'
              placeholder="Username"
              class="s-sign-in-textinput1 input"
  
            />
            <span class="s-sign-in-text08">Password</span>
            <input
              id = "password"
              type="password"
              required=""
              name = 'password'
              placeholder="Password"
              class="s-sign-in-textinput2 input"
            />
            <span class="s-sign-in-text09">Confirm Password</span>
            <input 
              id = "conf_pass"
              type="password"
              required=""
              name = 'conf_pass'
              placeholder="Confirm Password"
              class="s-sign-in-textinput3 input"
              oninput="checkPasswordMatch()"
            />
            <span id="password_match" style="color: red;margin-top:10px"></span>
            
          </div>
        </div>
      </div>
    </div>
    </form>
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>
