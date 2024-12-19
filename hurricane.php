<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurricane</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            color: #343a40; /* Dark gray text */
        }

        h1 {
            color: #005f73; /* Teal for the main heading */
            font-weight: bold;
        }

        h3, h4 {
            color: #0a9396; /* Softer teal for section headings */
            margin-top: 20px;
        }

        .section {
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .preparation-section {
            background-color: #e0f7fa; /* Light teal background */
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
    <div id="header">
        <iframe src="header.html" style="width: 100%; height: 100px; border: none;"></iframe>
    </div>

    <!-- Main Content -->
    <div class="container my-5">
        <h1>Hurricane</h1>
        <p>
            Hurricanes are powerful storms that can cause widespread damage through high winds, heavy rainfall, and flooding. Preparing your home and having an emergency plan can significantly improve safety and resilience.
        </p>

        <!-- Preparation Guide Section -->
        <div class="section preparation-section">
            <h3>Preparation Guide</h3>

            <h4>Home Fortifications:</h4>
            <ul>
                <li>Install storm shutters or plywood over windows to prevent shattering.</li>
                <li>Reinforce roofs, doors, and garage doors against strong winds.</li>
                <li>Trim trees and remove outdoor furniture to minimize flying debris.</li>
            </ul>

            <h4>Utilities and Resources:</h4>
            <ul>
                <li>Fill bathtubs with water for washing and flushing.</li>
                <li>Stock up on fuel for generators or vehicles.</li>
            </ul>

            <h4>Evacuation Readiness:</h4>
            <ul>
                <li>Know the nearest shelters and evacuation routes.</li>
                <li>Keep your vehicle fueled and ready to go.</li>
            </ul>
        </div>

        <!-- Emergency Kit Checklist Section -->
        <div class="section emergency-section">
            <h3>Emergency Kit Checklist</h3>

            <h4>Repair Supplies:</h4>
            <ul>
                <li>Tarps, duct tape, and basic tools for temporary fixes.</li>
            </ul>

            <h4>Communication:</h4>
            <ul>
                <li>Battery-powered radio for receiving weather updates.</li>
                <li>Fully charged power banks or solar chargers.</li>
            </ul>

            <h4>Provisions:</h4>
            <ul>
                <li>Three days of non-perishable food and bottled water.</li>
                <li>Manual can opener.</li>
            </ul>

            <h4>Clothing and Shelter:</h4>
            <ul>
                <li>Lightweight rain gear and waterproof boots.</li>
                <li>Emergency blankets and sleeping bags.</li>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <div id="footer">
        <iframe src="footer.html" style="width: 100%; height: 200px; border: none;"></iframe>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>