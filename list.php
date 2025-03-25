<?php
session_start();
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <title>Publications</title>


    <style>
    </style>

     

    
    <script> 

         
          // ajax request for displaying the records from the csv file and displaying in HTML table
        $(document).ready(function () {
            $.ajax({
                url: "records.csv",
                dataType: "text",
                success: function (data) {
                    var records = data.split('\n');
                    var table_data = '<table class="table table-bordered table-striped">';
                    for (var count = 0; count < records.length; count++) {
                        var cell_data = records[count].split(",");
                        table_data += '<tr>';
                        for (var cell_count = 0; cell_count < cell_data.length; cell_count++) {
                            if (count === 0) {
                                table_data += '<th>' + cell_data[cell_count] + '</th>';
                            }
                            else {
                                table_data += '<td>' + cell_data[cell_count] + '</td>';
                            }
                        }
                        table_data += '</tr>';
                    }
                    table_data += '</table>';
                    $('#publications').html(table_data);
                }
            });
        });


       








    </script>
</head>

<body>


    <header class="header">
        <h2 class="logo"><a href="index.html">Web Technologies</a></h2>
        <ul class="navmenu">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="weather.html">Weather Forecast</a></li>
            <li><a class="active" href="session.php">Publication</a></li>
            <li><a href="session.php">Login</a></li>
        </ul>
    </header>



    <div class="smallspacer layer4">



     
        


        <div id="publications">
        </div>

       




    </div>














</body>

</html>