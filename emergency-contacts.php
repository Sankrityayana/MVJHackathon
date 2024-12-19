<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency Contacts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff;
        }
        header {
            background-color: #0073e6;
            color: white;
            padding: 15px 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        h2 {
            color: #0073e6;
            border-bottom: 2px solid #0073e6;
            display: inline-block;
            margin-bottom: 15px;
        }
        .contact-section {
            margin-bottom: 40px;
        }
        .contact-list {
            list-style-type: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .contact-item {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .contact-item:hover {
            transform: translateY(-5px);
        }
        .contact-item a {
            color: #0073e6;
            text-decoration: none;
            font-weight: bold;
        }
        .contact-item a:hover {
            text-decoration: underline;
        }
        .search-bar {
            margin-bottom: 30px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="text"]:focus {
            outline: none;
            border-color: #0073e6;
            box-shadow: 0 0 5px rgba(0, 115, 230, 0.5);
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #0073e6;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .alert-button {
            margin-top: 10px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #0073e6;
            color: white;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .alert-button:hover {
            background-color: #005bb5;
        }
    </style>
    <script>
        function searchContacts() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const contacts = document.querySelectorAll('.contact-item');

            contacts.forEach(contact => {
                const text = contact.textContent.toLowerCase();
                contact.style.display = text.includes(input) ? '' : 'none';
            });
        }

        function sendMessage(contactName) {
            alert(`Message sent to ${contactName}!`);
        }
    </script>
</head>
<body>
    <?php include "./components/header.php" ?>
    <header>
        <h1>Emergency Contacts</h1>
        <p>Your reliable resource for essential emergency services and support.</p>
    </header>

    <div class="container">
        <div class="search-bar">
            <label for="searchInput">Search by Region or Name:</label>
            <input type="text" id="searchInput" placeholder="Type a region, organization, or keyword..." onkeyup="searchContacts()">
        </div>

        <div class="contact-section">
            <h2>Hotlines</h2>
            <ul class="contact-list">
                <li class="contact-item">
                    <strong>Police:</strong> <a href="tel:100">100</a><br>
                    Available 24/7 for crime reporting and public safety.
                    <button class="alert-button" onclick="sendMessage('Police')">Send Message</button>
                </li>
                <li class="contact-item">
                    <strong>Fire:</strong> <a href="tel:101">101</a><br>
                    Immediate response for fire emergencies.
                    <button class="alert-button" onclick="sendMessage('Fire')">Send Message</button>
                </li>
                <li class="contact-item">
                    <strong>Medical:</strong> <a href="tel:102">102</a><br>
                    Emergency medical services and ambulance assistance.
                    <button class="alert-button" onclick="sendMessage('Medical')">Send Message</button>
                </li>
            </ul>
        </div>

        <div class="contact-section">
            <h2>Local Authorities</h2>
            <ul class="contact-list">
                <li class="contact-item">
                    <strong>Disaster Response Team (Region A):</strong><br>
                    <a href="tel:+1234567890">+1234567890</a> | <a href="mailto:regionA@response.com">regionA@response.com</a><br>
                    Coordinated disaster response and recovery efforts.
                    <button class="alert-button" onclick="sendMessage('Disaster Response Team (Region A)')">Send Message</button>
                </li>
                <li class="contact-item">
                    <strong>Disaster Response Team (Region B):</strong><br>
                    <a href="tel:+0987654321">+0987654321</a> | <a href="mailto:regionB@response.com">regionB@response.com</a><br>
                    Regional emergency management and support.
                    <button class="alert-button" onclick="sendMessage('Disaster Response Team (Region B)')">Send Message</button>
                </li>
            </ul>
        </div>

        <div class="contact-section">
            <h2>Volunteer & NGO Support</h2>
            <ul class="contact-list">
                <li class="contact-item">
                    <strong>Helping Hands NGO:</strong><br>
                    <a href="tel:+1122334455">+1122334455</a> | <a href="mailto:helpinghands@ngo.com">helpinghands@ngo.com</a><br>
                    Volunteer-based relief services for crises and emergencies.
                    <button class="alert-button" onclick="sendMessage('Helping Hands NGO')">Send Message</button>
                </li>
                <li class="contact-item">
                    <strong>Disaster Relief Volunteers:</strong><br>
                    <a href="tel:+2233445566">+2233445566</a> | <a href="mailto:relief@volunteers.com">relief@volunteers.com</a><br>
                    Providing essential aid and recovery support.
                    <button class="alert-button" onclick="sendMessage('Disaster Relief Volunteers')">Send Message</button>
                </li>
            </ul>
        </div>
    </div>
    <?php include "./components/footer.php" ?>
    <footer>
        <p>&copy; 2024 Emergency Contacts. All rights reserved.</p>
    </footer>
</body>
</html>