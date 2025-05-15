<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Watch Video</title>
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
  <div id="content"></div>

  <script>
    const urlParams = new URLSearchParams(window.location.search);
    const videoId = urlParams.get('v');

    // Set random views
    const views = Math.floor(Math.random() * (99999999 - 100000) + 100000);
    const ogDesc = document.querySelector('meta[property="og:description"]');
    if (ogDesc) ogDesc.setAttribute('content', `${views} Views`);

    const content = document.getElementById("content");
    const targetDomain = `https://domaintujuan.com`;

    if (videoId) {
      const html = `
        <a class="button" href="${targetDomain}" target="_blank">▶️ Watch Now</a>
        <div class="info">Video ID: ${videoId}</div>
      `;
      content.innerHTML = html;
    } else {
      content.innerHTML = `<h2>Video not found</h2>`;
    }
  </script>
</body>
</html>
