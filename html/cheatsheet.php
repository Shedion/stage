<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Form</title>
</head>
<body>
    <h1>User Input Form</h1>

    <form method="POST" action="">
        <label for="name">Enter your name:</label>  <br>
        <input type="text" id="name" name="name" required><br>
        <label for="Password">Enter your Password:</label>  <br>
        <input type="password" id="Password" name="Password" required><br>
        <div><input type="radio" value="ja" name="choice">ja</div>
        <div><input type="radio" value="ne" name="choice">nee</div>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $wachtwoord = $_POST['Password'];
        $name = $_POST['name'];

        if($wachtwoord == "admin123") {
            if (isset($_POST['choice'])) {
                if ($_POST['choice'] == 'ja') {
                    echo "<p>Hello, $name! Jij bent vegatarisch viezerik.</p>";
                } else {
                    echo " Welkom $name ";
                }
            }
        } else {
            echo "Verkeerde wachtwoord";
        }
    }
    ?>
</body>
</html>\