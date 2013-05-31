<?php
/*
 * This tpl will be used to render the message from the contactform module
 *
 */
dpm($variables, '$variables');
?>
<?php echo($menu_email)?>
<p>Date : <?php echo $date?> à <?php echo $hour?><br />
  From : <?php echo $name?>  <?php echo $firstname?> < <?php echo $email ?> ></p>
<div id="message"><?php echo $message ?></h2>

