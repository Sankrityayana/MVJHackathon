<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsunami</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            color: #343a40; /* Dark gray text */
        }

        h1 {
            color: #004d99; /* Deep blue for the main heading */
            font-weight: bold;
        }

        h3, h4 {
            color: #0066cc; /* Ocean blue for section headings */
            margin-top: 20px;
        }

        .section {
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .preparation-section {
            background-color: #e6f2ff; /* Light blue background */
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
    <?php include "./components/header.php"?>

    <!-- Main Content -->
    <div class="container my-5">
        <h1>Tsunami</h1>
        <p>
            Tsunamis are massive sea waves triggered by underwater earthquakes, volcanic eruptions, or landslides. These waves can cause catastrophic damage to coastal areas. Understanding risks and preparing effectively is crucial for survival.
        </p>

        <!-- Preparation Guide Section -->
        <div class="section preparation-section">
            <h3>Preparation Guide</h3>

            <h4>Risk Awareness:</h4>
            <ul>
                <li>Know if you live in a tsunami hazard zone and the nearest high ground.</li>
                <li>Be aware of natural signs like a sudden retreat of the sea or loud roaring sounds.</li>
            </ul>

            <h4>Evacuation Practice:</h4>
            <ul>
                <li>Plan and practice routes to higher ground, aiming for at least 100 feet elevation.</li>
                <li>Stay informed with tsunami alerts via mobile apps or radios.</li>
            </ul>

            <h4>Stay Prepared:</h4>
            <ul>
                <li>Never return to coastal areas until authorities give the all-clear.</li>
            </ul>
        </div>

        <!-- Emergency Kit Checklist Section -->
        <div class="section emergency-section">
            <h3>Emergency Kit Checklist</h3>

            <h4>Life-Saving Gear:</h4>
            <ul>
                <li>Life vests for all family members.</li>
                <li>Signal flares and waterproof flashlight.</li>
            </ul>

            <h4>Water and Food:</h4>
            <ul>
                <li>Portable desalination kits or water filters.</li>
                <li>High-energy, easy-to-carry snacks.</li>
            </ul>

            <h4>Protection:</h4>
            <ul>
                <li>Sturdy waterproof bags for documents and electronics.</li>
                <li>Durable shoes for walking on wet or unstable terrain.</li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <?php include "./components/footer.php"?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>