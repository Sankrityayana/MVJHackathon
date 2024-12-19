<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildfire</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            color: #343a40; /* Dark gray text */
        }

        h1 {
            color: #d9534f; /* Fire red for the main heading */
            font-weight: bold;
        }

        h3, h4 {
            color: #c9302c; /* Deep red for section headings */
            margin-top: 20px;
        }

        .section {
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .preparation-section {
            background-color: #ffe6e6; /* Light red background */
        }

        .emergency-section {
            background-color: #fff; /* White background for contrast */
        }

        ul {
            margin-left: 20px;
            list-style-type: disc;
        }

        ul li {
            margin-bottom: 10px;
            line-height: 1.6;
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
        <h1>Wildfire</h1>
        <p>
            Wildfires are fast-moving, destructive events that can devastate communities and ecosystems. Preparing your home and having an evacuation plan can save lives and property.
        </p>

        <!-- Preparation Guide Section -->
        <div class="section preparation-section">
            <h3>Preparation Guide</h3>

            <h4>Home Defenses:</h4>
            <ul>
                <li>Create a 30-foot defensible space by clearing dry vegetation.</li>
                <li>Use fire-resistant materials for roofs and walls.</li>
                <li>Install outdoor water hoses for firefighting efforts.</li>
            </ul>

            <h4>Evacuation Plan:</h4>
            <ul>
                <li>Identify fire-safe zones and practice evacuation routes.</li>
                <li>Keep an emergency go-bag ready near the door.</li>
            </ul>

            <h4>Stay Alert:</h4>
            <ul>
                <li>Monitor fire updates via radio or mobile apps.</li>
                <li>Be ready to evacuate as soon as an order is issued.</li>
            </ul>
        </div>

        <!-- Emergency Kit Checklist Section -->
        <div class="section emergency-section">
            <h3>Emergency Kit Checklist</h3>

            <h4>Smoke Protection:</h4>
            <ul>
                <li>N95 masks to filter smoke and particulates.</li>
                <li>Goggles to protect eyes from ash and debris.</li>
            </ul>

            <h4>Fire Safety:</h4>
            <ul>
                <li>Fire extinguishers for small blazes.</li>
                <li>Fire-resistant blankets for personal protection.</li>
            </ul>

            <h4>Navigation:</h4>
            <ul>
                <li>Map of fire-safe zones and alternate routes.</li>
            </ul>

            <h4>Hygiene and Comfort:</h4>
            <ul>
                <li>Wet towels or bandanas for covering the nose and mouth.</li>
                <li>Change of clothes in case of prolonged exposure to smoke.</li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <?php include "./components/footer.php" ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>