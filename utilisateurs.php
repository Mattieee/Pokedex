<?php
ini_set("display_errors",0);error_reporting(0);


include 'header.php' ;
?>
<table>
    <div>
        <tr style="position:absolute; right: 53%; font-size: 48px;">
            <th style="padding:20px;">Nom</th>
            <th style="padding:20px;">Age</th>
            

        </tr>
    </div>
    <?php
    require 'userCrud.php';

    $donnes = readuser($con);

    foreach($donnes as $donne){
        ?>
        <tr >
            <th style="position:absolute; padding-left: 500px; padding-top:120px;"><?php echo $donne['username'];?></th>
            <th style="position:absolute; padding-left: 600px; padding-top:120px;"><?php echo $donne['age'];?></th>
            <th style="padding-left: 600px; padding-top:120px;"><?php echo $donne['permssion'];?></th>

        </tr>
        <? require 'createPokemon.php'; ?>
        <tr >
            <th ><?php echo $donne['name'];?></th>
            <th ><?php echo $donne['type'];?></th>
            <th ><?php echo $donne['strength'];?></th>
            <th ><?php echo $donne['vitality'];?></th>

        </tr>
        <?php } include '' ?>
    </table>

    <?php include 'footer.php' ;?>