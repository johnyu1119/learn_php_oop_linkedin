<?php
//var_dump($_POST);
$message='';
foreach ($_POST as $name=> $value )
{
    if ('submit'!=$name) {
        if (is_array($value))
        {
            $value=implode(', ',$value);
        }
        //echo "<p><b>".ucfirst($name)."</b> is $value.</p>";
        $message.=ucfirst($name) ."is $value.\n\n";
    }
}
//$_POST['email']=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
//$_POST['message']=strip_tags(filter_var($_POST['message'],FILTER_SANITIZE_ADD_SLASHES));

$to="John Yu<john.yu@manchester.ac.uk>";
$subject="Reason for Contact: ". $_POST['reason'];
$from=$_POST['name'].'<'.$_POST['email'].'>';

$headers='From: '.$from."\r\n". 'Reply-To: '.$from."\r\n".'X-Mailer: PHP/'.phpversion();

if (mail($to, $subject, $message)) 
{
    echo "<h3>Your message has been sent.</h3>";
}