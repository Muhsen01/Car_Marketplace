<!DOCTYPE html>
<html>
<head>
    <title style="font-family: Arial, sans-serif; color: #333;">Max Car Mart</title>
    <style>
        body {
            background: linear-gradient(to bottom, #909db4, #f0f0f0);
            font-family: Arial, sans-serif;
            font-size: 16px; /* Default font size */
        }

        h1 {
            color: #014bbb;
            font-size: 24px; /* Larger heading font size */
        }

        /* Media query for smaller screens */
        @media only screen and (max-width: 600px) {
            body {
                font-size: 14px; /* Decrease font size for smaller screens */
            }

            h1 {
                font-size: 20px; /* Adjust heading font size */
            }

            /* Adjust other elements as needed */
            input[type="text"],
            button {
                padding: 10px;
                border-radius: 8px;
                font-size: 14px; /* Adjust input and button font size */
            }
        }
    </style>
    <div class="image-container">
        <img src="https://media.istockphoto.com/id/1283924180/photo/searching-for-cars-choose-your-car-looking-for-car-selling-icon-magnifying-glass-search-car.jpg?s=2048x2048&w=is&k=20&c=TJdyhxVkcvsxuLq5ciq_Uwy4BdaJFeupfQ6rUQK4kvw=" alt="Description of the image" width="1690" height="350">
    </div>
    </div>
</head>
<body style="background-color: #f4f4f4; font-family: Arial, sans-serif;">

<h1 style="color: #0e68dc;">Search for Cars!</h1>

<form action="search.php" method="post">
    <input type="text" name="search" placeholder="Search for Cars" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
    <button type="submit" name="action" value="Make" style="background-color: #3498db; color: white; border-radius: 5px; padding: 8px 16px; border: none; margin-right: 5px;">Search by Make</button>
    <button type="submit" name="action" value="Model" style="background-color: #3498db; color: white; border-radius: 5px; padding: 8px 16px; border: none; margin-right: 5px;">Search by Model</button>
    <button type="submit" name="action" value="Year" style="background-color: #3498db; color: white; border-radius: 5px; padding: 8px 16px; border: none; margin-right: 5px;">Search by Year</button>
    <button type="submit" name="action" value="Color" style="background-color: #3498db; color: white; border-radius: 5px; padding: 8px 16px; border: none; margin-right: 5px;">Search by Color</button>
    <br><br><br>
    <input type="text" name="lower" placeholder="Lower Price Limit" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc;"><br><br>
    <input type="text" name="upper" placeholder="Upper Price Limit" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc;">

    <button type="submit" name="action" value="Price" style="background-color: #3498db; color: white; border-radius: 5px; padding: 8px 16px; border: none; margin-top: 10px;">Search Price Range</button>

</form>
<br>
<button id="selectionCarButton" style="background-color: #3498db; color: white; border-radius: 5px; padding: 8px 16px; border: none;">View Car Selection</button>
<br>

<?php
session_start();

if (isset($_SESSION["cart"])) {
    echo("Selection Car(s): ". count($_SESSION["cart"]));
}
else{
    echo ("Selection Car(s) is Empty");
}
?>

<script type="text/javascript">
    document.getElementById('selectionCarButton').addEventListener('click',
        function () {
            window.location.href = 'selectionCars.php';
        });
</script>
<br>
<br>
<br>

<button id="homePageButton" style="background-color: #3498db; color: white; border-radius: 5px; padding: 8px 16px; border: none;">Home Page</button>
<script type="text/javascript">
    document.getElementById('homePageButton').addEventListener('click',
        function () {
            window.location.href = 'searchForm.php';
        });
</script>
</body>
</html>
