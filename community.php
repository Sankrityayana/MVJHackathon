<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Communities</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            color: #343a40; /* Dark text */
        }

        h1 {
            color: #006400; /* Dark green */
            font-weight: bold;
            margin-bottom: 20px;
        }

        .search-bar {
            margin: 20px 0;
        }

        .community-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .community-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .community-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .community-card-body {
            padding: 15px;
        }

        .community-card h5 {
            color: #006400;
            font-weight: bold;
        }

        .community-card p {
            margin-bottom: 10px;
        }

        .join-btn {
            background-color: #006400;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .join-btn:hover {
            background-color: #004d00;
        }

        footer iframe {
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?php include "./components/header.php" ?>

    <!-- Main Content -->
    <div class="container my-5">
        <h1>Our Communities</h1>
        <p>Join one of our amazing communities to make a difference and connect with like-minded individuals. Explore the NGOs below and take the first step in helping those in need.</p>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" class="form-control" placeholder="Search for communities..." aria-label="Search">
        </div>

        <!-- Community Cards -->
        <div class="row g-4">
            <!-- Community 1 -->
            <div class="col-md-4">
                <div class="community-card">
                    <img src="./images/demo.jpg" alt="Community 1">
                    <div class="community-card-body">
                        <h5>Disaster Relief Network</h5>
                        <p>Providing immediate help during natural disasters, offering food, shelter, and medical aid.</p>
                        <button class="btn join-btn">Join Now</button>
                    </div>
                </div>
            </div>
            <!-- Community 2 -->
            <div class="col-md-4">
                <div class="community-card">
                    <img src="./images/demo.jpg" alt="Community 2">
                    <div class="community-card-body">
                        <h5>Environmental Warriors</h5>
                        <p>Focused on climate change and environmental preservation through tree planting and clean-ups.</p>
                        <button class="btn join-btn">Join Now</button>
                    </div>
                </div>
            </div>
            <!-- Community 3 -->
            <div class="col-md-4">
                <div class="community-card">
                    <img src="./images/demo.jpg" alt="Community 3">
                    <div class="community-card-body">
                        <h5>Food For All</h5>
                        <p>Dedicated to combating hunger by distributing meals to underprivileged communities.</p>
                        <button class="btn join-btn">Join Now</button>
                    </div>
                </div>
            </div>
            <!-- Add more communities as needed -->
        </div>
    </div>

    <!-- Footer -->
     <?php include "./components/footer.php" ?>
</body>
</html>