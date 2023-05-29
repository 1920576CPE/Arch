<?php wp_footer() ?>
<footer class="page-footer">
    <div class="container">
        <div class="page-footer__img align--right lg--only">
            <img src="./images/footer-img.jpg" alt="">
        </div>

        <div class="page-footer__wrapper grid">
            <div class="page-footer__navigation">
                <nav class="footer__nav">
                    <h3 class="footer__nav__header">Navigation</h3>
                    <ul>
                        <?php wp_footer_li(); ?>
                    </ul>
                </nav>
                 <nav class="footer__nav">
                    <h3 class="footer__nav__header">Connect</h3>
                    <ul>
                      <?php wp_connect_li(); ?>
                    </ul>
                </nav>
            </div>

            <div class="newletter">
                <form action="">
                    <div class="form__group">
                        <input type="text" required>
                        <label for="">Subscribe to our newsletter</label>
                    </div>
                    <button class="btn btn--dark">Subcribe</button>
                </form>

                <div class="footer__email">
                    <h4>Have a project in mind</h4>
                    <a href="#">info@arcph.com</a>
                </div>
            </div>
           
        </div>
    </div>
    <div class="copyright">
        <p>&copy; 2021 All Right Reserve</p>
    </div>
</footer>
<script src="./js/script.js"></script>
  </body>
</html>