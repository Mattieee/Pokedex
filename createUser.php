<?php
require 'userCrud.php';

include 'header.php' ;

if(!empty($_POST)) {
    createUser($con, $_POST);
    $success = '<strong>Bienvenue '.$_POST['username'].' '.$_POST['age'].' ans</strong>';
}


?>



<h1>Créer un nouvel utilisateur</h1>
<?php echo $displaySuccess = (isset($success)) ? $success : '' ; ?>
<form action="" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <label for="age">Age</label>
    <input type="text" name="age" id="age">
    <input type="hidden" name="permission" value="1">
    <input type="submit" value="Submit">
</form>

<?php include 'footer.php' ;?>