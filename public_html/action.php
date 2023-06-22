<?php 
    if(isset($_POST['submit'])) 
    {
        $contact = $_POST['contact'];
        $nom = $_POST['nom'];
        $content = $_POST['message'];
        
        if (empty($contact) || empty($nom) || empty($content)) {
            echo 'Veuillez remplir tous les champs du formulaire.';
            exit;
        }
        
        // Email de destinataire
        $to = '';
        
        // Sujet de l'e-mail
        $sujet = 'Nouveau message de '.$nom;

        // Contenu de l'e-mail
        $message = "Nom: $nom\r\n";
        $message .= "Est: $contact\r\n";
        $message .= "Message: $content\r\n";
        $message = wordwrap($message, 70, "\r\n");

        // En-têtes de l'e-mail
        $entete = "De: ".$nom;
        
        if (mail($to, $sujet, $message, $entete)) {
            echo 'Votre message a été envoyé avec succès.';
        } else {
            echo "Une erreur s'est produite lors de l'envoi du message.";
        }
    }
?>