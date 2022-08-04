<?php 

    require "header.php";//header.php linked from split
?>
    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <?php
                if(isset($_SESSION['userId'])){//checked for logged in
                    echo '<p class="login-status">You are logged in!</p>';
                }
                else{//checked for logged out
                    echo '<p class="login_status">you are logged out!</p>';
                }
                ?>
              </section>
        </div>
    </main>

<?php
    require "footer.php";//footer.php linked from split "a very normal thing to do"
    ?>