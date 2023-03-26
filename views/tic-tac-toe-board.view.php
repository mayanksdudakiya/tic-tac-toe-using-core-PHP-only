<?php
include 'partials/header.view.php';
?>
<form method="POST" action="">
    <div class="wrapper">
        <div class="container">
            <?php
            foreach ($_SESSION['boardSquares'] as $key => $squareSessionValue) :
                echo "<input type='submit' name='$key' value='$squareSessionValue' class='button-option'/>";
            endforeach;
            ?>
        </div>
        <button type="submit" name="restart_game" id="restart">Restart</button>
    </div>
</form>
<?php
include 'partials/footer.view.php';
