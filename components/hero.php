<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LifeLine Shield</title>
  <link rel="stylesheet" href="styles.css">
</head>
<style>/* General Styles */
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #eef2f3;
      color: #333;
      overflow-x: hidden;
    }
    
    /* Mission Section Styles */
    .mission-section {
      height: 100vh;
      background: linear-gradient(to right, #6a11cb, #2575fc);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    
    .mission-section::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('https://source.unsplash.com/1600x900/?rescue,nature');
      background-size: cover;
      background-position: center;
      filter: blur(5px) brightness(0.6);
      z-index: 1;
    }
    
    .mission-content {
      position: relative;
      z-index: 2;
      padding: 20px;
    }
    
    .mission-title {
      font-size: 3.5rem;
      margin-bottom: 20px;
      text-transform: uppercase;
      letter-spacing: 2px;
      line-height: 1.2;
    }
    
    .mission-title .highlight {
      color: #ffd700; /* Gold Color */
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .mission-tagline {
      font-size: 1.5rem;
      margin-bottom: 15px;
      font-style: italic;
      font-weight: 300;
    }
    
    .mission-description {
      font-size: 1.2rem;
      line-height: 1.8;
      margin-bottom: 30px;
    }
    
    /* Call-to-Action Button */
    .cta-button {
      text-decoration: none;
      background: linear-gradient(45deg, #ffd700, #ff6a00);
      color: white;
      padding: 15px 30px;
      border-radius: 25px;
      font-size: 1.2rem;
      font-weight: bold;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .cta-button:hover {
      transform: scale(1.1);
      box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.4);
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
      .mission-title {
        font-size: 2.5rem;
      }
      .mission-tagline {
        font-size: 1.2rem;
      }
      .mission-description {
        font-size: 1rem;
      }
      .cta-button {
        padding: 12px 25px;
        font-size: 1rem;
      }
    }
    </style>
<body>
  <header class="mission-section">
    <div class="mission-content">
      <h1 class="mission-title">Welcome to <span class="highlight">LifeLine Shield</span></h1>
      <p class="mission-tagline">"Empowering communities to prepare, respond, and recover."</p>
      <p class="mission-description">
        At LifeLine Shield, we combine innovation and compassion to create a safer, more resilient world. 
        Join us in building stronger communities, one step at a time.
      </p>
      <a href="#learn-more" class="cta-button">Learn More</a>
    </div>
  </header>
  <script src="script.js"></script>
</body>
</html>