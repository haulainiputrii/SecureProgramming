
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halo</title> <!-- judul diweb atas-->
    <link rel="stylesheet" href="style.css"> <!-- rel stylesheet : nandain mau ngonekin ke file css, href = style.css : nama filenya -->
</head>
<body>
    <h1 id="terserah"> terserah </h1> <!-- heading/judul pas didlm webnya-->
    <h1> lu </h1>
    <p> blabla </p> <!-- isi webnya -->
    <form action="../Controller/authcontroller.php"> <!-- form act untk bkin form (login atau regist atau aplaah yg nginput2 )-->
        <label for="Name">Name:</label>
        <input id = "text" type="text"> <br> <!-- type buat nginput, br buat space kbwh -->
        <label for="Pass">Pass:</label>
        <input type="password"> <br> <!--Password biar sensor -->
        <input id = "submit" type ="submit">
    </form>
</body>
</html>
