<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Response</title>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #007acc, #003d66);
            color: #ffffff;
            overflow-x: hidden;
        }

        header {
            background-color: #001f33;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
        }

        .section {
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s;
        }

        .section:hover {
            transform: translateY(-5px);
        }

        .section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #ffcc00;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .disaster-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .disaster-button {
            flex: 1 1 calc(30% - 20px);
            min-width: 150px;
            background: linear-gradient(135deg, #6274de, #a7b1d4);
            color: white;
            border: none;
            padding: 15px;
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            font-size: 1.1rem;
            font-weight: bold;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 5px 15px rgba(255, 87, 136, 0.3);
        }

        .disaster-button:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(255, 87, 136, 0.5);
        }

        .disaster-steps {
            display: none;
            margin-top: 20px;
            padding: 15px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.2);
            border: 1px solid #ffcc00;
            color: #fff;
        }

        .contact {
            margin-top: 10px;
            font-size: 1rem;
            color: #ffcc00;
        }

        .contact button {
            background-color: #ffcc00;
            color: #003d66;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact button:hover {
            background-color: #ffc107;
        }

        .confirmation {
            margin-top: 10px;
            color: #00ff99;
            font-weight: bold;
            text-align: center;
        }

        .shelter-list {
            list-style: none;
            padding: 0;
        }

        .shelter-item {
            margin-bottom: 15px;
            padding: 15px;
            background: linear-gradient(135deg, #d9e4f5, #a3cce3);
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .shelter-item:hover {
            transform: translateY(-5px);
        }

        .map-container {
            position: relative;
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, #bde0fe, #84a9d1);
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: #2a5298;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .evacuation-tips {
            padding: 15px;
            background: #fdfdfd;
            border-radius: 10px;
            color: #2a5298;
            font-weight: 500;
        }

        .evacuation-tips ul {
            padding-left: 20px;
        }

        .evacuation-tips li {
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .disaster-button {
                flex: 1 1 calc(50% - 15px);
            }

            .map-container {
                height: 250px;
            }
        }

        @media (max-width: 500px) {
            .disaster-button {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>
    <?php include "./components/header.php" ?>
    <header>
        Emergency Response
    </header>

    <div class="container">
        <div class="section" id="what-to-do">
            <h2>What to Do During a Disaster</h2>
            <div class="disaster-buttons">
                <button class="disaster-button" onclick="showSteps('earthquake')">Earthquake</button>
                <button class="disaster-button" onclick="showSteps('flood')">Flood</button>
                <button class="disaster-button" onclick="showSteps('tsunami')">Tsunami</button>
                <button class="disaster-button" onclick="showSteps('hurricane')">Hurricane</button>
                <button class="disaster-button" onclick="showSteps('wildfire')">Wildfire</button>
                <button class="disaster-button" onclick="showSteps('landslide')">Landslide</button>
            </div>

            <div id="earthquake" class="disaster-steps">
                <p>Drop, cover, and hold on. Stay away from windows and heavy furniture.</p>
                <div class="contact">
                    Contact NGO: +1234567890 | email@example.com
                    <button onclick="alertContact('Earthquake NGO', '+1234567890', 'email@example.com')">Alert</button>
                </div>
                <div class="confirmation" id="confirmation-earthquake"></div>
            </div>
            <div id="flood" class="disaster-steps">
                <p>Move to higher ground immediately. Avoid walking or driving through floodwaters.</p>
                <div class="contact">
                    Contact NGO: +1234567891 | email@example.com
                    <button onclick="alertContact('Flood NGO', '+1234567891', 'email@example.com')">Alert</button>
                </div>
                <div class="confirmation" id="confirmation-flood"></div>
            </div>
            <div id="tsunami" class="disaster-steps">
                <p>Move inland or to higher ground as quickly as possible.</p>
                <div class="contact">
                    Contact NGO: +1234567892 | email@example.com
                    <button onclick="alertContact('Tsunami NGO', '+1234567892', 'email@example.com')">Alert</button>
                </div>
                <div class="confirmation" id="confirmation-tsunami"></div>
            </div>
            <div id="hurricane" class="disaster-steps">
                <p>Secure your home. Stay indoors and away from windows.</p>
                <div class="contact">
                    Contact NGO: +1234567893 | email@example.com
                    <button onclick="alertContact('Hurricane NGO', '+1234567893', 'email@example.com')">Alert</button>
                </div>
                <div class="confirmation" id="confirmation-hurricane"></div>
            </div>
            <div id="wildfire" class="disaster-steps">
                <p>Evacuate if instructed. Close all windows and vents in your home.</p>
                <div class="contact">
                    Contact NGO: +1234567894 | email@example.com
                    <button onclick="alertContact('Wildfire NGO', '+1234567894', 'email@example.com')">Alert</button>
                </div>
                <div class="confirmation" id="confirmation-wildfire"></div>
            </div>
            <div id="landslide" class="disaster-steps">
                <p>Stay alert and move to safer ground if necessary.</p>
                <div class="contact">
                    Contact NGO: +1234567895 | email@example.com
                    <button onclick="alertContact('Landslide NGO', '+1234567895', 'email@example.com')">Alert</button>
                </div>
                <div class="confirmation" id="confirmation-landslide"></div>
            </div>
        </div>

        <div class="section">
            <h2>Shelter Information</h2>
            <ul class="shelter-list">
                <li class="shelter-item"><strong>Shelter 1</strong> <span>Distance: 2.5 km</span></li>
                <li class="shelter-item"><strong>Shelter 2</strong> <span>Distance: 5.0 km</span></li>
                <li class="shelter-item"><strong>Shelter 3</strong> <span>Distance: 7.8 km</span></li>
            </ul>
        </div>

        <div class="section">
            <h2>Evacuation Plans</h2>
            <div class="map-container">Interactive Map Coming Soon</div>
            <div class="evacuation-tips">
                <strong>Tips:</strong>
                <ul>
                    <li>Follow marked evacuation routes.</li>
                    <li>Keep an emergency kit with you.</li>
                    <li>Stay tuned to emergency broadcasts.</li>
                </ul>
            </div>
        </div>
    </div>
    <?php include "./components/footer.php" ?>
    <script>
        function showSteps(disaster) {
            const steps = document.querySelectorAll('.disaster-steps');
            steps.forEach(step => step.style.display = 'none');
            document.getElementById(disaster).style.display = 'block';
        }

        function alertContact(ngoName, phone, email) {
            alert(`You are contacting ${ngoName}.\nPhone: ${phone}\nEmail: ${email}`);
        }
    </script>
</body>
</html>