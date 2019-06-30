<?php
include 'userCrud.php';

if(!empty($_POST)) {
    createPokemon($con, $_POST);
    $success = 'Pokemon '.$_POST['name'].'de type'.$_POST['type'].', de force'.$_POST['strength'].', il possède '.$_POST['vitality']. ' de vitalité et appartient a user ' .$_POST['user_id'].'<br> <strong>POKEMON CRÉE </strong>';
}

include 'header.php' ;
?>



<h1>Créer une nouveau Pokemon</h1>
<form action="" method="post">
    <label for="name">name</label>
    <input type="text" name="name" id="name">

    <label for="type">type</label>
    <input type="text" name="type" id="type">

    <label for="type">strength</label>
    <input type="number" name="strength" id="strength">

    <label for="type">vitality</label>
    <input type="number" name="vitality" id="vitality">

    <label for="type">user_id</label>
    <input type="number" name="user_id" id="user_id">

    <input type="submit" value="Submit">
    <br>
    <?php echo $displaySuccess = (isset($success)) ? $success : '' ; ?>
</form>

<?php include 'footer.php' ;?>
