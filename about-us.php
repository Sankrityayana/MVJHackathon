<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - LifeLine Shield</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background-color: #f4f4f9;
      color: #333;
    }

    .container {
      max-width: 1200px;
      margin: 20px auto;
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #0056a5;
      margin-bottom: 20px;
    }

    /* Scrolling Gallery */
    .gallery {
      display: flex;
      overflow-x: auto;
      gap: 15px;
      padding: 10px;
      border: 2px solid #0056a5;
      border-radius: 10px;
      background: #eef7fc;
      margin-bottom: 30px;
    }

    .gallery img {
      width: 300px;
      height: 180px;
      border-radius: 8px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .gallery img:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .overview, .goals, .team {
      margin-bottom: 30px;
    }

    .section-title {
      font-size: 1.8rem;
      background-color: #0056a5;
      color: #fff;
      padding: 10px 15px;
      border-radius: 8px;
    }

    .content {
      margin-top: 15px;
      font-size: 1.1rem;
      color: #444;
    }

    .content p {
      margin: 10px 0;
    }

    /* Team Section Styling */
    .team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 15px;
    }

    .team-member {
      background: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 10px;
      text-align: center;
      padding: 15px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .team-member:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }

    .team-member img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .team-member h4 {
      margin: 5px 0;
      color: #0056a5;
    }

    .team-member p {
      font-size: 0.9rem;
      color: #666;
    }

    /* Reusable Button */
    .btn {
      display: inline-block;
      padding: 8px 15px;
      font-size: 1rem;
      border: none;
      background-color: #0056a5;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      text-align: center;
    }

    .btn:hover {
      background-color: #003d7e;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>About Us</h1>

    <!-- Scrolling Gallery -->
    <div class="gallery">
      <img src="https://via.placeholder.com/300x180?text=Flood" alt="Flood">
      <img src="https://via.placeholder.com/300x180?text=Earthquake" alt="Earthquake">
      <img src="https://via.placeholder.com/300x180?text=Wildfire" alt="Wildfire">
      <img src="https://via.placeholder.com/300x180?text=Hurricane" alt="Hurricane">
      <img src="https://via.placeholder.com/300x180?text=Tsunami" alt="Tsunami">
    </div>

    <!-- Overview Section -->
    <div class="overview">
      <h2 class="section-title">Overview</h2>
      <div class="content">
        <p>
          LifeLine Shield is committed to empowering communities through disaster preparedness and emergency response solutions. 
          We provide tools, resources, and actionable plans to ensure safety during emergencies.
        </p>
        <p>
          Our mission is to bridge the gap between technology and disaster management to save lives and reduce risks.
        </p>
      </div>
    </div>

    <!-- Goals Section -->
    <div class="goals">
      <h2 class="section-title">Our Goals</h2>
      <div class="content">
        <ul>
          <li>Educate individuals and communities about disaster preparedness.</li>
          <li>Provide real-time updates during emergencies.</li>
          <li>Facilitate effective communication channels for disaster response.</li>
          <li>Collaborate with organizations to enhance disaster management efforts.</li>
        </ul>
      </div>
    </div>

    <!-- Team Section -->
    <div class="team">
      <h2 class="section-title">Meet Our Team</h2>
      <div class="team-grid">
        <div class="team-member">
          <img src="https://via.placeholder.com/120" alt="John Doe">
          <h4>John Doe</h4>
          <p>Disaster Management Specialist</p>
        </div>
        <div class="team-member">
          <img src="https://via.placeholder.com/120" alt="Jane Smith">
          <h4>Jane Smith</h4>
          <p>Community Coordinator</p>
        </div>
        <div class="team-member">
          <img src="https://via.placeholder.com/120" alt="Mark Lee">
          <h4>Mark Lee</h4>
          <p>Technology Lead</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>