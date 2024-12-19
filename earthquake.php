<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Earthquake</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            color: #343a40; /* Dark gray text */
        }

        h1 {
            color: #006400; /* Green color for the main heading */
            font-weight: bold;
        }

        h3, h4 {
            color: #004d00; /* Dark green for section headings */
            margin-top: 20px;
        }

        .section {
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .preparation-section {
            background-color: #e9f7ef; /* Light green background */
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
        <h1>Earthquake</h1>
        <p>
            An earthquake is the shaking of the surface of the Earth resulting from a sudden release of energy in the Earth's lithosphere that creates seismic waves.
        </p>

        <!-- Preparation Guide Section -->
        <div class="section preparation-section">
            <h3>Preparation Guide</h3>

            <h4>Home Safety:</h4>
            <ul>
                <li>Secure heavy furniture like bookcases and cabinets to walls using brackets.</li>
                <li>Move breakable items, such as glass vases, to lower shelves.</li>
                <li>Install latches on cupboards to prevent them from opening during a quake.</li>
            </ul>

            <h4>Plan Ahead:</h4>
            <ul>
                <li>Identify safe spots like under sturdy tables or against interior walls.</li>
                <li>Teach everyone in the family the “Drop, Cover, and Hold On” technique.</li>
                <li>Have an emergency contact outside your region to coordinate family communications.</li>
            </ul>

            <h4>Utilities Awareness:</h4>
            <ul>
                <li>Learn how to shut off gas, electricity, and water supplies in case of damage.</li>
                <li>Install flexible pipe fittings to reduce damage to gas and water lines.</li>
            </ul>
        </div>

        <!-- Emergency Kit Checklist Section -->
        <div class="section emergency-section">
            <h3>Emergency Kit Checklist</h3>

            <h4>Protective Gear:</h4>
            <ul>
                <li>Hard hats, gloves, and sturdy shoes for dealing with debris.</li>
                <li>Dust masks or N95 respirators to protect against inhaling dust.</li>
            </ul>

            <h4>Communication:</h4>
            <ul>
                <li>Battery-powered or hand-crank radio to stay informed.</li>
                <li>Emergency whistle to signal rescuers if trapped.</li>
            </ul>

            <h4>First Aid:</h4>
            <ul>
                <li>Comprehensive first-aid kit with antiseptics, bandages, and pain relievers.</li>
            </ul>

            <h4>Utilities and Tools:</h4>
            <ul>
                <li>Multi-tool or pocketknife for various uses.</li>
                <li>Flashlight with extra batteries.</li>
            </ul>

            <h4>Supplies:</h4>
            <ul>
                <li>At least three days' worth of water (1 gallon per person per day).</li>
                <li>High-energy, non-perishable food items like protein bars and canned goods.</li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
     <?php include "./components/footer.php" ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>