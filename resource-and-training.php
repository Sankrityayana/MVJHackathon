<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disaster Videos</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .header {
      background-color: #0047ab;
      color: white;
      padding: 20px;
      text-align: center;
      position: relative;
    }

    .header .register-btn {
      position: absolute;
      top: 50%;
      right: 20px;
      transform: translateY(-50%);
      background-color: white;
      color: #0047ab;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .header .register-btn:hover {
      background-color: #f4f4f4;
    }

    .container {
      padding: 20px;
    }

    .section {
      margin-bottom: 50px;
    }

    .section h2 {
      text-align: center;
      color: #0047ab;
      margin-bottom: 20px;
    }

    .video-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .video-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 300px;
      transition: transform 0.3s ease;
    }

    .video-card:hover {
      transform: scale(1.05);
    }

    .video-card iframe {
      width: 100%;
      height: 200px;
    }

    .video-card h3 {
      margin: 10px;
      text-align: center;
      color: #0047ab;
    }

    .faqs {
      margin-top: 50px;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .faqs h2 {
      text-align: center;
      color: #0047ab;
      margin-bottom: 20px;
    }

    .faq-item {
      margin-bottom: 15px;
    }

    .faq-item h3 {
      color: #0047ab;
      margin-bottom: 5px;
    }

    .faq-item p {
      margin: 0;
    }
  </style>
</head>
<body>
  <header class="header">
    <h1>Disaster Preparedness Videos</h1>
    <button class="register-btn" onclick="window.location.href='../register.php'">Register</button>
  </header>

  <div class="container">
    <!-- Earthquake Section -->
    <div class="section" id="earthquake">
      <h2>Earthquake Preparedness</h2>
      <div class="video-container">
        <div class="video-card">
          <iframe src="https://www.youtube.com/embed/example1" frameborder="0" allowfullscreen></iframe>
          <h3>How to Stay Safe During an Earthquake</h3>
        </div>
        <div class="video-card">
          <iframe src="https://www.youtube.com/embed/example2" frameborder="0" allowfullscreen></iframe>
          <h3>Emergency Kits for Earthquakes</h3>
        </div>
        <div class="video-card">
          <iframe src="https://www.youtube.com/embed/example3" frameborder="0" allowfullscreen></iframe>
          <h3>Building Safety Tips</h3>
        </div>
      </div>
    </div>

    <!-- Flood Section -->
    <div class="section" id="flood">
      <h2>Flood Preparedness</h2>
      <div class="video-container">
        <div class="video-card">
          <iframe src="https://www.youtube.com/embed/example4" frameborder="0" allowfullscreen></iframe>
          <h3>How to Prepare for a Flood</h3>
        </div>
        <div class="video-card">
          <iframe src="https://www.youtube.com/embed/example5" frameborder="0" allowfullscreen></iframe>
          <h3>Evacuation Procedures</h3>
        </div>
        <div class="video-card">
          <iframe src="https://www.youtube.com/embed/example6" frameborder="0" allowfullscreen></iframe>
          <h3>What to Do After a Flood</h3>
        </div>
      </div>
    </div>

    <!-- Wildfire Section -->
    <div class="section" id="wildfire">
      <h2>Wildfire Preparedness</h2>
      <div class="video-container">
        <div class="video-card">
          <iframe src="https://www.youtube.com/embed/example7" frameborder="0" allowfullscreen></iframe>
          <h3>Evacuating Safely During Wildfires</h3>
        </div>
        <div class="video-card">
          <iframe src="https://www.youtube.com/embed/example8" frameborder="0" allowfullscreen></iframe>
          <h3>Creating a Fire-Resistant Zone</h3>
        </div>
        <div class="video-card">
          <iframe src="https://www.youtube.com/embed/example9" frameborder="0" allowfullscreen></iframe>
          <h3>Understanding Wildfire Alerts</h3>
        </div>
      </div>
    </div>

    <!-- FAQs -->
    <div class="faqs" id="faqs">
      <h2>Frequently Asked Questions (FAQs)</h2>
      <div class="faq-item">
        <h3>Q: What should I include in an emergency kit?</h3>
        <p>A: Basic supplies include water, non-perishable food, flashlight, first aid kit, and important documents.</p>
      </div>
      <div class="faq-item">
        <h3>Q: How can I prepare for a flood?</h3>
        <p>A: Ensure your home is flood-proof, have an evacuation plan, and monitor weather updates regularly.</p>
      </div>
      <div class="faq-item">
        <h3>Q: What is the first step during an earthquake?</h3>
        <p>A: Drop, cover, and hold on. Protect yourself from falling objects and stay away from windows.</p>
      </div>
    </div>
  </div>
</body>
</html>