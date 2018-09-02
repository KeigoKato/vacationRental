        <footer>
            <div class="text-light py-4">
                <div class="container text-center">
                    <?php
                    wp_nav_menu(array(
                        'container' => false,
                        'items_wrap' => '<ul class="nav justify-content-center ml-auto">%3$s</ul>',
                        'theme_location' => 'footer',
                    ));
                    ?>
                    <h1 class="py-3"><a href="<?php echo home_url(); ?>">Site Logo</a></h1>
                    <p class="footer-address">
                        東京都目黒区大岡山<br>
                        １−１−１−１<br>
                        国立東京工業大学
                    </p>
                </div>
            </div>
        </footer>
        <p class="text-center py-2"><small>Copyright &copy;2017 HOTEL Vacation Rental, All Rights Reserved.</small></p>

        <?php wp_footer(); ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script>
            // console.log('見れた？');
            // document.addEventListener( 'wpcf7submit', function( event ) {
            //     alert( "Fire!" );
            // }, false );
        </script>
    </body>
</html>