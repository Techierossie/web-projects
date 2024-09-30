<?php

$errors= array();

if(count($errors)> 0) :?>

    <div class="error">
    <?php foreach($errors as $error) :?>
    <p><?php echo $error ?></p>
    <?php endforeach ?>
    </div>
<?php  endif  ?> 

<!-- <?php

            
            if(count($errors)>0){

        ?>
        
        <div class="alert alert-danger">
            <?php
            foreach($errors as $error){

            ?>
                <li><?php echo($error); ?></li>
            <?php }?>
            </div>
            <?php }?> -->