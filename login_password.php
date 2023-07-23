<?php
session_start();
include("include/config.php");
if (isset($_POST['username'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  // $encrypted_password = hash('md5', $password);

  $sql = "select * from user_details where username = '$username' AND password = '$password'";
  if ($username == "admin" && $password == "123456"){
    header("Location: a-admin-dashboard.php");
    exit();
  }

  $result = mysqli_query($conn, $sql) or die("Data retrieval error");

  if (mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_assoc($result);
    $_SESSION["login_lock"] = 1; 
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("Location: s-student-dashboard-profile.php");
  }
  else{
    echo '<script type="text/javascript">';
    echo 'window.addEventListener("load", () => {swal({ title: "Error!", text: "Wrong password!", type: "error", confirmButtonText: "Okay" })})';
    echo '</script>';
  }
}
?>

<html lang="en">
  <head>
    <title>Terrarium | Login</title>
    <meta property="og:title" content="Aqua_Login_Password" />
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
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
  </head>
  <body>
    <div>
      <link href="./sf-loginpassword.css" rel="stylesheet" />

      <div class="s-loginpassword-container">
        <header
          data-thq="thq-navbar"
          class="s-loginpassword-navbar-interactive"
        >
          <img
            alt="logo"
            src="imagee.png"
            class="s-loginpassword-logo"
          />
          <div
            data-thq="thq-navbar-nav"
            data-role="Nav"
            class="s-loginpassword-desktop-menu"
          >
            <nav
              data-thq="thq-navbar-nav-links"
              data-role="Nav"
              class="s-loginpassword-nav"
            ></nav>
          </div>
          <div data-thq="thq-burger-menu" class="s-loginpassword-burger-menu">
            <svg viewBox="0 0 1024 1024" class="s-loginpassword-icon">
              <path
                d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
              ></path>
            </svg>
          </div>
          <div data-thq="thq-mobile-menu" class="s-loginpassword-mobile-menu">
            <div
              data-thq="thq-mobile-menu-nav"
              data-role="Nav"
              class="s-loginpassword-nav1"
            >
              <div class="s-loginpassword-container1">
                <img
                  alt="image"
                  src="https://presentation-website-assets.teleporthq.io/logos/logo.png"
                  class="s-loginpassword-image"
                />
                <div
                  data-thq="thq-close-menu"
                  class="s-loginpassword-menu-close"
                >
                  <svg viewBox="0 0 1024 1024" class="s-loginpassword-icon02">
                    <path
                      d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                    ></path>
                  </svg>
                </div>
              </div>
              <nav
                data-thq="thq-mobile-menu-nav-links"
                data-role="Nav"
                class="s-loginpassword-nav2"
              >
                <span class="s-loginpassword-text">About</span>
                <span class="s-loginpassword-text1">Features</span>
                <span class="s-loginpassword-text2">Pricing</span>
                <span class="s-loginpassword-text3">Team</span>
                <span class="s-loginpassword-text4">Blog</span>
              </nav>
              <div class="s-loginpassword-container2">
                <button class="s-loginpassword-login button">Login</button>
                <button class="button">Register</button>
              </div>
            </div>
            <div class="s-loginpassword-icon-group">
              <svg
                viewBox="0 0 950.8571428571428 1024"
                class="s-loginpassword-icon04"
              >
                <path
                  d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                ></path></svg
              ><svg
                viewBox="0 0 877.7142857142857 1024"
                class="s-loginpassword-icon06"
              >
                <path
                  d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                ></path></svg
              ><svg
                viewBox="0 0 602.2582857142856 1024"
                class="s-loginpassword-icon08"
              >
                <path
                  d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                ></path>
              </svg>
            </div>
          </div>
        </header>
        <div class="s-loginpassword-imagecontainer">
          <img
            alt="image"
            src="public/playground_assets/login_page-900w.png"
            class="s-loginpassword-image1"
          />
        </div>
        <form role="form" method = "post">
        <div class="s-loginpassword-container3">
          <div class="s-loginpassword-container4">
            <h1 class="s-loginpassword-text5">LOGIN</h1>
            <span class="s-loginpassword-text6">Username</span>
            <input
              type="text"
              name = "username"
              required=""
              autofocus=""
              placeholder="Username"
              class="s-loginpassword-textinput input"
            />
            <span class="s-loginpassword-text7">Password</span>
            <input
              type="password"
              name = "password"
              required=""
              placeholder="Password"
              class="s-loginpassword-textinput1 input"
            />
      </br>
      </br>
          <button type = "submit" class = "s-loginpassword-navlink2 button">
            Login
        </button>
          </form>
            <a
              href="sf-forgot-password-email-details.php"
              class="s-loginpassword-navlink"
            >
              Forgot password?
            </a>
            <a href="sf-sign-in.php" class="s-loginpassword-navlink1">
              New user? Click here!
            </a>
          </div>
        </div>
      </div>
    </div>
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>
