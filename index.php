<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kebab Box</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      background-color: white;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
    }

    .logo-container {
      height: 20vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: white;
    }

    .progress-container {
      height: 80vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: white;
    }

    .logo-container img {
      max-width: 100%;
      height: auto;
      object-fit: contain;
    }

    .progress-container img {
      max-width: 100%;
      height: auto;
      object-fit: cover;
    }

    @media (max-width: 768px) {
      .logo-container {
        height: 15vh;
      }
      .progress-container {
        height: 85vh;
      }
    }
  </style>
</head>
<body>

  <div class="logo-container">
    <img src="logo.png" alt="Logo">
  </div>

  <div class="progress-container">
    <img src="in-progress.jpg" alt="In Progress">
  </div>

</body>
</html>
