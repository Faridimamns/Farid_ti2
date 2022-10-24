<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset style="width: 55%; background-color: beige; border: 0; margin-left: 20%;">
        <h1 style="text-align: center;">THANK YOU</h1>
        <hr color="skyblue">
        <section style="font-family: Arial;">
            <p>Thankyou for ordering from Black Goose Bistro. We have received the following <br> information about your order:</p>
            <p style="color: red;"><b>Your Information</b></p>
            <div style="margin-left: 40px;">
                <?php
                $nama = $_POST['nama'];
                echo "<b>Name:</b> $nama";
                echo "<br />";
                $alamat = $_POST['alamat'];
                echo "<b>Address:</b> $alamat";
                echo "<br />";
                $notelp = $_POST['notelp'];
                echo "<b>Telephone:</b> $notelp";
                echo "<br />";
                $email = $_POST['email'];
                echo "<b>Email:</b> $email";
                echo "<br />";
            
                ?>
            </div>
            <div style="margin-top: 10px;">
                <?php
                $deliveryintructions = $_POST['deliveryintructions'];
                echo "<b>Delivery intructions:</b> $deliveryintructions";
                echo "<br />";
                ?>
            </div>
            <br>
            <p style="color: red;"><b>Your Pizza</b></p>
            <div style="margin-left: 40px;">
                <?php
                $crust = $_POST['crust'];
                echo "<b>Crust:</b>" . $crust;
                echo "<br />";
                echo "<b>Toppings:</b>";
                $tp = $_POST['tp'];
                for ($i = 0; $i < count($tp); $i++) 
                {
                    echo $tp[$i];
                }
                echo "<br />";
                echo "<b>Number:</b>";
                echo $_POST['jumlah'];
                ?>
            </div>
            <br>
            <hr color="orange">
            <p>This site is for educational purposes only. No pizzas will be delivered.</p>
        </section>
    </fieldset>
</body>

</html>