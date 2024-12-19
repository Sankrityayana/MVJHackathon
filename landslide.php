<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landslide</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            color: #343a40; /* Dark gray text */
        }

        h1 {
            color: #8B0000; /* Dark red for the main heading */
            font-weight: bold;
        }

        h3, h4 {
            color: #800000; /* Maroon for section headings */
            margin-top: 20px;
        }

        .section {
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .preparation-section {
            background-color: #fdecea; /* Light red background */
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
        <h1>Landslide</h1>
        <p>
            Landslides are sudden movements of rock, earth, or debris down a slope. They are often triggered by heavy rainfall, earthquakes, or human activity. Understanding the risks and preparing effectively can minimize damage and save lives.
        </p>

        <!-- Preparation Guide Section -->
        <div class="section preparation-section">
            <h3>Preparation Guide</h3>

            <h4>Risk Assessment:</h4>
            <ul>
                <li>Avoid building on steep slopes or near cliffs.</li>
                <li>Be alert to signs of landslides, such as cracks in the ground or leaning trees.</li>
            </ul>

            <h4>Prevention Measures:</h4>
            <ul>
                <li>Divert water away from slopes using proper drainage systems.</li>
                <li>Reinforce retaining walls or slopes near your property.</li>
            </ul>

            <h4>Evacuation Readiness:</h4>
            <ul>
                <li>Familiarize yourself with landslide-prone areas and alternate evacuation routes.</li>
                <li>Stay indoors during heavy rainfall unless evacuation is necessary.</li>
            </ul>
        </div>

        <!-- Emergency Kit Checklist Section -->
        <div class="section emergency-section">
            <h3>Emergency Kit Checklist</h3>

            <h4>Specialized Gear:</h4>
            <ul>
                <li>Sturdy rope, harnesses, and carabiners for climbing or rescue.</li>
                <li>Shovel and pickaxe for minor debris clearing.</li>
            </ul>

            <h4>Navigation:</h4>
            <ul>
                <li>Maps showing escape routes and alternate paths.</li>
                <li>Compass or GPS device.</li>
            </ul>

            <h4>Protection:</h4>
            <ul>
                <li>Goggles to protect eyes from dust and flying debris.</li>
                <li>Sturdy gloves for handling rocks and sharp objects.</li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <?php include"./components/footer.php" ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>