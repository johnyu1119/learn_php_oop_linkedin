<?php
    $form_complete=null;
?>

<h2>Contact</h2>

<form name="contact" method ="POST" action="process.php">
    <div>
        <?php
            if (isset($_POST['name']) && empty(trim($_POST['name'])))
            {
                echo "<p class=\"alert\">Name is required</p>";
                $form_complete=false;
            }
        ?>
        <label for="name">Name:</label><input type="text" name="name" placeholder="Your Name" />
    </div>
    <div>
        <?php
            $email_regex='^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^';
            if (isset($_POST['email']) && empty(trim($_POST['email'])))
            {
                echo "<p class=\"alert\">Email is required</p>";
                $form_complete=false;
            }
            else if (!preg_match($email_regex,$_POST['email']))
            {
                echo "<p class=\"alert\">Please enter a valid Email Address</p>";
                $form_complete=false;    
            }
        ?>
        <label for="name">Email:</label><input type="email" name="email" placeholder="Your Email" />
    </div>

    <div>
        <p>Reason for Contact:</p>
        <input type="radio" name="reason" id="consult" value="consult" />
        <label for="consult">Consult</label>
        <input type="radio" name="reason" id="question" value="question" />
        <label for="question">Question</label>
        <input type="radio" name="reason" id="hello" value="hello" />
        <label for="hello">Hello</label>
    </div>

    <div>
        <?php
            
            if (isset($_POST['message']) && empty(trim($_POST['message'])))
            {
                echo "<p class=\"alert\">Message is required</p>";
                $form_complete=false;
            } 
            
        ?>
        <label for="message">What's your message?</label><textarea name="message"></textarea>
    </div>
    <div><input type="submit" name="submit" value="Submit" /></div>
</form>

<style>
    .alert {
        color:red;
        font-weight: bold;
    }
</style>

<?php
    $form_complete ?:true;
    if ($form_complete)
    {

    }
?>