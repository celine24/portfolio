<?php
session_start();
$errors = array();

if(isset($_POST["submit"])) {
    $lastname = htmlspecialchars($_POST["lastname"]);
    $firstname = htmlspecialchars($_POST["firstname"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    if (!isset($lastname) || empty($lastname)) {
        $errors ['lastname'] = "Merci de renseigner votre nom.";
    } else {
        if (!preg_match("#^[a-zA-ZÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]+$#", $lastname)) {
            $errors ['lastname'] = "Le nom est invalide.";
        }
    }

    if (!isset($firstname) || empty($firstname)) {
        $errors ['firstname'] = "Merci de renseigner votre prénom.";
    } else {
        if (!preg_match("#^[a-zA-ZÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]+$#", $firstname)) {
            $errors ['firstname'] = "Le prénom est invalide.";
        }
    }

    if (!isset($email) || empty($email)) {
        $errors ['email'] = "Merci de renseigner votre email";
    } else {
        if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)) {
            $errors ['email'] = "L'adresse email est invalide.";
        }
    }

    if (!isset($message) || empty($message) || $message === "Votre Message") {
        $errors ['message'] = "Merci de remplir votre demande.";
    }

    if (!empty($errors)) { // si erreur on renvoie vers la page précédente
        $_SESSION['errors'] = $errors;//on stocke les erreurs
        $_SESSION['inputs'] = $_POST;
        header('Location: index.php#contact');
    }
    else {
//        require_once('vendor/phpmailer/phpmailer/class.phpmailer.php');
//        $mail = new PHPMailer();
//        $mail->SetFrom('$email', '$firstname . \' \' . $lastname');
//        $mail->AddAddress("peyrot.celine@gmail.com", "Céline Peyrot");
//        $mail->Subject = "PHPMailer Test Subject via mail(), basic";
//        $mail->AddReplyTo($email, 'Reply to name');
//        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
//        $mail->MsgHTML($message);
//        if(!$mail->Send()) {
//            echo "Mailer Error: " . $mail->ErrorInfo;
//        } else {
//            echo "Message sent!";
//        }

        $passage_ligne = "\r\n";
        $myEmail = 'peyrot.celine@dev-site-web.fr';

        $header = 'MIME-Version: 1.0' . $passage_ligne;
        $header .= 'Content-type: text/html; charset=utf-8' . $passage_ligne;
        $header .= 'FROM:' . $firstname . ' ' . $lastname . '- <' . $myEmail .'>' . $passage_ligne;
        $header .= 'Reply-to: RETOUR <'. $email . '>'.$passage_ligne;
        $to = 'peyrot.celine@dev-site-web.fr';
        $subject = 'Message envoyé par ' . $firstname . ' ' . $lastname . ' - <i>' . $email . '</i>';
        $message_content = '
          <table>
          <tr>
          <td><b>Emetteur du message:</b></td>
          </tr>
          <tr>
          <td>' . $subject . '</td>
          </tr>
          <tr>
          <td><b>Contenu du message:</b></td>
          </tr>
          <tr>
          <td>' . htmlspecialchars($message) . '</td>
          </tr>
          </table>';
        $sending = mail($to, $subject, $message_content, $header);
        if ($sending === true) {
            $sendingStatus = 'Le mail a bien été envoyé !';
        }
        else {
            $sendingStatus = 'Une erreur s\'est produite. Le mail n\'a pas pu être envoyé.';
        }
        $_SESSION['sending'] = $sendingStatus;
        header('Location: index.php#contact');
    }
}
else
{
    echo 'Vous devez remplir le formulaire.';
}
