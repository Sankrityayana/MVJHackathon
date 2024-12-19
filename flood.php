<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flood</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            color: #343a40; /* Dark gray text */
        }

        h1 {
            color: #004d80; /* Blue color for the main heading */
            font-weight: bold;
        }

        h3, h4 {
            color: #003366; /* Darker blue for section headings */
            margin-top: 20px;
        }

        .section {
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .preparation-section {
            background-color: #e8f4fc; /* Light blue background */
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
        <h1>Flood</h1>
        <p>
            Floods are one of the most common and destructive natural disasters, causing widespread damage to property and threatening lives. Proper preparation can mitigate risks and enhance safety.
        </p>

        <!-- Preparation Guide Section -->
        <div class="section preparation-section">
            <h3>Preparation Guide</h3>

            <h4>Home Preparation:</h4>
            <ul>
                <li>Elevate utilities and appliances to prevent water damage.</li>
                <li>Use water-resistant sealant on basement walls to prevent seepage.</li>
                <li>Keep sandbags or flood barriers in accessible locations.</li>
            </ul>

            <h4>Know Your Risks:</h4>
            <ul>
                <li>Identify if your home is in a floodplain and know evacuation routes.</li>
                <li>Subscribe to flood alerts and warnings in your area.</li>
            </ul>

            <h4>Before Evacuation:</h4>
            <ul>
                <li>Turn off electricity at the breaker box to prevent electrical hazards.</li>
                <li>Move important items and documents to higher ground.</li>
            </ul>
        </div>

        <!-- Emergency Kit Checklist Section -->
        <div class="section emergency-section">
            <h3>Emergency Kit Checklist</h3>

            <h4>Waterproof Essentials:</h4>
            <ul>
                <li>Waterproof bags or cases for storing documents, electronics, and maps.</li>
                <li>Water purification tablets or portable filtration systems.</li>
            </ul>

            <h4>Clothing and Gear:</h4>
            <ul>
                <li>Rubber boots, raincoats, and gloves for navigating flooded areas.</li>
            </ul>

            <h4>Lighting and Power:</h4>
            <ul>
                <li>Flashlight and portable solar charger for devices.</li>
            </ul>

            <h4>Hygiene:</h4>
            <ul>
                <li>Wet wipes and hand sanitizer.</li>
                <li>Trash bags for sanitation needs.</li>
            </ul>

            <h4>Survival Supplies:</h4>
            <ul>
                <li>Emergency blankets to keep warm.</li>
                <li>Multi-purpose tools for cutting or prying during rescue efforts.</li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <?php include "./components/footer.php"?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>