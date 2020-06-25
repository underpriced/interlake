$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST[message'];
$mail_to = 'miquel@buildingdreams.team';
$subject = 'Message from a site visitor ' . $field_name;
$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$mail_status = mail($mail_to, $subject, $body_message, $headers);
if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        // Print a message
        alert('Thank you for the message. We will contact you shortly.');
        // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
        window.location = 'contact_page.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        // Print a message
        alert('Message failed. Please, send an email to gordon@template-help.com');
        // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
        window.location = 'contact_page.html';
    </script>
<?php
}?>
