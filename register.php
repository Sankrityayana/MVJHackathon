<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 500px;
      margin: 50px auto;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #0047ab;
      margin-bottom: 20px;
    }

    form label {
      display: block;
      margin-bottom: 5px;
      color: #0047ab;
    }

    form input, form select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    form button {
      width: 100%;
      padding: 10px;
      background-color: #0047ab;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    form button:hover {
      background-color: #003580;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Register</h1>
    <form action="#" method="POST">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <label for="disaster-type">Preferred Disaster Preparedness Topic</label>
      <select id="disaster-type" name="disaster-type">
        <option value="earthquake">Earthquake</option>
        <option value="flood">Flood</option>
        <option value="wildfire">Wildfire</option>
        <option value="tsunami">Tsunami</option>
      </select>

      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>