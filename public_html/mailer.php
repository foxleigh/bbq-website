<?php
    if($_POST['js']) {
        $name = stripslashes($_POST['yourname']);
        $enquiry = stripslashes($_POST['enquiry']);
        $email = stripslashes($_POST['email']);
        $website = stripslashes($_POST['website']);
        $tel = stripslashes($_POST['tel']);

        $message  = '<h1>'.$name .' has just sent a message!</h1>';

        $message .= '<p><h2>Contact details</h2>';
        $message .= '<strong>Email:</strong> <a href="mailto:'.$email.'">'.$email.'</a><br />';
        if ($tel) $message .= '<strong>Telephone number:</strong> ' .$tel. '<br />';
        if ($website) $message .= '<strong>Website address:</strong> <a href="'.$website.'">' .$website. '</a><br />';
        $message .= '</p><p><strong>The message is as follows</strong><br />'.$enquiry.'</p>';

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
       mail('sayhi@bbqdigital.com', 'Email from BBQ Website', $message, $headers);
       header('Location: '. '/contact-us.html?posted=true');
       die();
    } else {
      header('Location: '. '/error.html');
    }
?>
