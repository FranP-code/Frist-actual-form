<?php

$error = ['Name not placed', 'Email not valid', 'Message not placed', 'Bad word founded in '];
$name = null;
$email = null;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['electronic-mail'];
}
    if (!empty($name)) {
        $name = trim($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);

    if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        
    }
}

// } if (!empty($name)) {
//     // if (badWords($name) == true) {
//     //     echo $error[3] . 'name';

//     // } else {
//     //     echo $name;
//     // }

// }

// function badWords ($v) {
//     $badWords = ['fuck', 'prick', 'bastard', 'bellend', 'ass', 'cunt', 'balls', 'shit'];
//     // Source = https://www.fluentin3months.com/dirty-words/

//     for ($i=0; $i < count($badWords); $i++) { 

//         $a = strpos($v, $badWords[$i]);
//         echo $a;

//         if ($a != false) {
//             return true;
//             break;

//         }
//     }
// }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
            <input type="text" placeholder="Name" name="name" class="name" id="name">
            <input type="text" placeholder="E-mail" name="electronic-mail" class="email" id="email">
            <textarea placeholder="Message" name="message" minlength="35" class="message" id="message"></textarea>
            <input type="submit" value="Send" name="submit" class="submit" id="submit">
        </form>
    </div>
    <?php if ($name != null) { if(!empty($name)) {
        
        echo '<div class="error-name"><h2 class="error-name">Tu nombre es: ' . $name . '</div></h2>';
        
        } }?>
    
    <h2 class="error-email"><?php
    if ($email != null) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo '<div class="error-email">Your email is: ' . $email . '</div>';

        } else {
            echo 'Email not valid';
        }
    }
    ?></h2>
</body>
</html>
