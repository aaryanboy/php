<!DOCTYPE html>
<html>
<head>
    <title>Ticket Issuing System</title>
    <style>
        .form-box{
            background-color: white;
            padding:10px;
            max-width:450px;
            margin: 50px auto;
            border: 3px solid black;
        }
        label{
            font-weight: bold;
        }
        fieldset{
            border:2px solid black;
        }

    </style>
</head>
<body>
    <div class="form-box">
    <form action="process_ticket.php" method="POST" enctype="multipart/form-data" >
        <fieldset>
         <legend>Create a Ticket</legend>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="Issue">Issue:</label><br>
        <select id="Issue" name="Issue" required>
            <option value="Poor Internet Connection">Poor Internet Connection</option>
            <option value="Fiber Breakage">Fiber Breakage</option>
        </select><br><br>

        <label for="comments">Comments:</label><br>
        <textarea id="comments" name="comments" rows="4" cols="50" required></textarea><br><br>

        <label for="screenshot">Screenshot :</label>
        <input type="file" id="screenshot" name="screenshot" accept=".png" required><br><br>

        <button type="submit">Submit </button>
        <button type="reset">Reset</button>
        </fieldset>
    </form>
    </div>
</body>
</html>
