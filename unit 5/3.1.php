<!DOCTYPE html>
<html>
<head>
    <title>Travel Booking Form</title>
</head>
<body>

<form action="process_booking.php" method="POST">
    <fieldset>
    <legend>Travel booking Form</legend>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone" required><br><br>

    <label for="destination">Destination:</label><br>
    <input type="text" id="destination" name="destination" required><br><br>

    <label for="travel_date">Travel Date:</label><br>
    <input type="date" id="travel_date" name="travel_date" required><br><br>

    <label for="number_of_passengers">Number of Passengers:</label><br>
    <input type="number" id="number_of_passengers" name="number_of_passengers" required><br><br>

    <button type="submit">Book Now</button>
    </fieldset>
</form>

</body>
</html>
