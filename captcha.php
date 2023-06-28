<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Captcha Generator</title>
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  
      <div class="wrapper">
        <canvas id="canvas" width="200" height="70"></canvas>
        <button id="reload-button">
          <i class="fa-solid fa-arrow-rotate-right"></i>
        </button>
      </div>
      <input
        type="text"
        id="user-input"
        placeholder="Enter the text in the image"
      />
      <button id="submit-button">Submit</button>
    
    <!-- Script -->
    <script src="script.js"></script>
  </body>
</html>