<?php include "./config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disasters</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .disaster-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 250px;
            height: 120px;
            margin: 15px;
            background-color: #006400; /* Dark Green */
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 1.2rem;
            font-weight: bold;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, background-color 0.3s;
        }

        .disaster-btn:hover {
            background-color: #004d00; /* Darker Green */
            transform: scale(1.1);
        }

        .disaster-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?php include "./components/header.php" ?>

    <!-- Main Content -->
    <div class="container text-center my-5">
        <h1 class="mb-4">Types of Disasters</h1>
        <p>Select a disaster to learn more:</p>
        <div class="disaster-container">
            <!-- Buttons -->
            <a href="earthquake.html" class="disaster-btn">Earthquake</a>
            <a href="flood.html" class="disaster-btn">Flood</a>
            <a href="hurricane.html" class="disaster-btn">Hurricane</a>
            <a href="wildfire.html" class="disaster-btn">Wildfire</a>
            <a href="tsunami.html" class="disaster-btn">Tsunami</a>
            <a href="landslide.html" class="disaster-btn">landslide</a>
        </div>
    </div>

    <!-- Footer -->
    <?php include "./components/footer.php" ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>