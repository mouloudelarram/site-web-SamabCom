<?php
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $sj=$_POST['sj'];
    $message=$_POST['message'];
    $to = "contact@samabcom.ma";
    $sujet = "Demande de contact";
    $texte = "Nom : $nom\n
              Email : $email\n
              Message : $message";
    $headers = "From: $nom\n
                Reply-To: $email";
    mail($destinataire, $objet, $texte, $headers);           
    if(mail($to,$sujet,$texte)) {            
        header("location:../index.php?msg= Message envoye avec succes ");
    }
    else {
        header("location:../index.php?msg=Votre message n'est pas envoyer");
    }
?>