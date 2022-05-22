<?php require_once("./parts/Header.php")?>


<?php

    session_start();

?>


<p>
    wellcom<?php echo $_SESSION['user']['name'];  ?>
    </p>
    <p>
    your password: <?php echo $_SESSION['user']['password'];  ?>

</p>

<a class="btn btn-primary" href="logeout.php" type="submit">loge out</a>






<?php require_once("./parts/Footer.php") ?>