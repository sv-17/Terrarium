<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="index.css" />
  <title>Terrarium</title>
</head>

<body>
  <div class="bg-video-wrap inner">
    <video src="forest.mp4" loop muted autoplay></video>
    <div class="overlay"></div>
    <div class="hey">
      <img src="imagee.png" height="maxheight">
      <p>A MICROCOSM OF THE PLACEMENTS WILDERNESS</p>
      <br>
      <p>
        <button onclick="redirectTo('login_password.php')">LOGIN</button>
        <button onclick="redirectTo('sf-sign-in.php')">SIGN UP</button>
      </p>
    </div>
  </div>

  <script>
    function redirectTo(url) {
      window.location.href = url;
    }
  </script>
</body>
