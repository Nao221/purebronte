<?php


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$mail = $_POST['mail'];
$message = $_POST['message'];

$conn = new mysqli('localhost', 'root', '', 'lesson01');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into purebronte_contact(first_name, last_name, mail, message)values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $first_name, $last_name, $mail, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    

}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>contact form</title>
    <meta name="Author" content="" />
    <link rel="stylesheet" type="text/css" href="css/contact.css">

    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Lora&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">


</head>

<body>

    <div class="main">

        <div class="logo2">
            <a href="index.html">
                <h1>Pure Bronte</h1>
            </a>
        </div>

        <navbar>
            <div class="logo">
                <a href="index.html">
                    <h1>Pure Bronte</h1>
                </a>

            </div>

            <div class="navbar_menu">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="menu.html">MENU</a></li>
                    <li><a href="#">ONLINE SHOP</a></li>
                    <li><a href="contact.html">CONTACT</a></li>

                </ul>
            </div>


        </navbar>
        <!--スマホサイズの時のみ表示　ハンバーガーメニュー-->

        <div class="icon_wrapper">
            <div class="icon_item line1"></div>
            <div class="icon_item line2"></div>
            <div class="icon_item line3"></div>
        </div>

        <div class="main_img">

        </div>

        <main>

            <div class="text">
                <h1>CONTACT</h1>
            </div>
            <div class="popUp">
             <h1>Thank you for your message</h1>
            </div>

            <div class="contact_form">
                <form action="insert.php" method="post">
                    <div class="name_form">
                        <div class="name">
                            <label>TELL US YOUR NAME<span>*</span></label>
                        </div>

                        <div class="first_name">
                            <input type="text" name="first_name" placeholder="First Name" />
                        </div>
                        <div class="last_name">
                            <input type="text" name="last_name" placeholder="Last Name" />
                        </div>
                    </div>

                    <div class="mail_form">
                        <div class="mail">
                            <label>ENTER YOUR EMAIL<span>*</span></label>
                        </div>

                        <div class="mail_input">
                            <input type="text" name="mail" />
                        </div>

                    </div>

                    <div class="message_form">
                        <div class="message">
                            <label>MESSAGE<span>*</span></label>
                        </div>

                        <div class="message_input">
                            <textarea name="message"></textarea>
                        </div>

                        <div class="submit_button">
                            <input type="submit" name="submit" value="SEND" />
                        </div>
                    </div>




                </form>
            </div>
        </main>
    </div>







    <script>

    </script>
</body>

</html>
