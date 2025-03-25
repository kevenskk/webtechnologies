<?php session_start();
error_reporting(error_level: E_ALL & ~E_DEPRECATED & ~E_WARNING);

if (!isset($_SESSION['loggedin']))
    header("Location: session.php");
if ($_SESSION['loggedin'] === FALSE)
    header("Location: session.php");




/*   If statement that executes code once the submit button is pressed   */
/*   Form input is placed into array that is looped through and appended into the CSV as new lines */


if (isset($_POST['submit'])) {
    $list = array(array($_POST['title'], $_POST['authors'], $_POST['year'], $_POST['journal'], $_POST['doi'], $_POST['school']));

    $fp = fopen('records.csv', 'a');

    foreach ($list as $line) {
        fputcsv($fp, $line);
    }

    fclose($fp);



}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Open+Sans:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <title> Submit </title>
    <style>
    </style>
</head>

<body>


    <header class="header">
        <h2 class="logo"><a href="index.html">Web Technologies</a></h2>
        <ul class="navmenu">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="weather.html">Weather Forecast</a></li>
            <li><a href="list.php">Publication</a></li>
            <li><a class="active" href="session.php">Login</a></li>
        </ul>
    </header>


    <div class="smallspacer layer4">

        <div class="submit-page">
            <div class="submitcontainer">

                <form class="submit-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">


                    <input type="text" placeholder="Enter title" name="title" required>
                    <input type="text" placeholder="Enter authors" name="authors" required>
                    <input type="month" id="start" name="year" min="1900" value="2022" required>
                    <input type="text" placeholder="Enter journal" name="journal" required>
                    <input type="url" placeholder="Enter DOI" name="doi">
                    <input type="text" placeholder="Enter school" name="school" required>
                    <input type="submit" name="submit" value="Submit">
                    <a href="logout.php">Log out</a>

                </form>
            </div>

        </div>

    </div>



</body>

</html>