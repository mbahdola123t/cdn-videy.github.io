<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Watch Video</title>

  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="Watch Video">
  <meta property="og:description" content="">
  <meta property="og:image" content="play.png">

  <style>
    body {
      margin: 0;
      padding: 0;
      background: black;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
      flex-direction: column;
    }
    a.button {
      padding: 15px 30px;
      background: #00ccff;
      color: black;
      text-decoration: none;
      font-size: 1.5em;
      border-radius: 8px;
      transition: background 0.3s;
    }
    a.button:hover {
      background: #0099cc;
    }
    .info {
      margin-top: 10px;
      font-size: 0.9em;
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <div id="content">
    <!-- Akan dimuat lewat JS -->
  </div>

  <script>
    // Generate random views between 100000 and 99999999
    const randomViews = Math.floor(Math.random() * (99999999 - 100000) + 100000);
    const ogDescription = document.querySelector('meta[property="og:description"]');
    if (ogDescription) {
      ogDescription.setAttribute("content", `${randomViews} Views`);
    }

    const path = window.location.pathname;
    const filename = path.substring(path.lastIndexOf("/") + 1);
    const targetDomain = `https://domaintujuan.com`;

    const content = document.getElementById('content');

    if (filename.endsWith(".mp4")) {
      const buttonHTML = `
        <a class="button" href="${targetDomain}" target="_blank">▶️ Watch Now</a>
        <div class="info">Current file: ${filename}</div>
      `;
      content.insertAdjacentHTML("beforeend", buttonHTML);
    } else {
      content.innerHTML = `<h2>Video not found</h2>`;
    }
  </script>
</body>
</html>