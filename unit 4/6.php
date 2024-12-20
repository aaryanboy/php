<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Booking Form</title>
    <style>
        
        .form-container {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 2px soid black;
            background-color: white;
            border-radius: 10px;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }
    </style>
</head>
<body>

    <div class="form-container">
        
        
        <form action="confirm.php" method="POST">
            <fieldset>
            <legend>Travel Booking Form</legend>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="destination">Destination:</label>
            <select id="destination" name="destination" required>
                <option value="Paris">Paris</option>
                <option value="New York">New York</option>
                <option value="Tokyo">Tokyo</option>
                <option value="Sydney">Sydney</option>
            </select>

            <label for="departure_date">Departure Date:</label>
            <input type="date" id="departure_date" name="departure_date" required>

            <label for="return_date">Return Date:</label>
            <input type="date" id="return_date" name="return_date" required>

            <label for="special_requests">Special Requests:</label>
            <textarea id="special_requests" name="special_requests" rows="4" placeholder="Any special requests?"></textarea><br>

            <button type="submit">Submit Booking</button>
            </fieldset>
        </form>
    </div>

</body>
</html>
