<?php

$error = ['Name not placed', 'Email not placed', 'Message not placed', 'Bad word founded in '];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['electronic-mail'];

    if (!empty($name)) {
        $name = filter_var($name, FILTER_SANITIZE_STRING);

    } if (!empty($name)) {
        // if (badWords($name) == true) {
        //     echo $error[3] . 'name';

        // } else {
        //     echo $name;
        // }

    }

    if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){


        }
        
    }
}

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
            <input type="text" placeholder="Name" name="name" class="name">
            <input type="email" placeholder="E-mail" name="electronic-mail" class="email">
            <textarea placeholder="Message" name="message" minlength="35" class="message"></textarea>
            <input type="submit" value="Send" name="submit" class="submit">
        </form>
    </div>
    <h2><?php echo 'Tu nombre es: ' . $name;?></h2>
</body>
</html>
