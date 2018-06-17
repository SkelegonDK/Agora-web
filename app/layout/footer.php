        </main>

        <footer class="page-footer">
            <span class="br-space-xl"></span>
            <div class="footer-top-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col l6 m6 s12">
                        <div class="row">
                            <div class="col">
                                <h5><strong>Contact</strong></h5>
                                <p>
                                    Phone: <a href="tel:xxxxxxxx">+45 xx xx xx xx</a><span class="br"></span>
                                    Mail: <a class="email-link" href="mailto:hello@agora.com">hello@agora.com</a><span class="br"></span>
                                    CVR: xxxx xxxx
                                </p>
                                <span class="br-space"></span>
                                <h6><strong>Office opening hours</strong></h6>
                                <div>
                                    <p class="open-hours">Monday: <span>08-16</span></p>
                                    <p class="open-hours">Tuesday: <span>08-16</span></p>
                                    <p class="open-hours">Wednesday: <span>08-14</span></p>
                                    <p class="open-hours">Thursday: <span>08-15</span></p>
                                    <p class="open-hours">Friday: <span>08-15</span></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col l6 m6 s12">
                        <h5>We live here!</h5>
                        <a href="https://www.google.dk/maps/place/KEA+Copenhagen+School+of+Design+and+Technology+-+K%C3%B8benhavns+Erhvervsakademi/@55.7044112,12.5378042,16.98z/data=!4m8!1m2!2m1!1skea+lygten+37!3m4!1s0x0:0x1ebd74bef2cd320!8m2!3d55.703936!4d12.5376642" rel="noopener" target="_blank">
                            <img src="img/footer-map.jpg" alt="#">
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    &copy; <?php echo date("Y") ?> Copyright
                    <a class="page-shift right" href="sitemap">sitemap</a>
                </div>
            </div>
            <div class="container">
                <div class="col center dev-by">
                    <small>School project - Group7</small>
                </div>
            </div>
        </footer>

        <div id="cookie" class="cookie hide-cookie no-js">
            <div class="container cookie-content">
                <p>
                    We use cookies to make our site work better for you.
                    <span class="br"></span>
                    By using our site, you accept our use of cookies.
                    <span class="br"></span>
                    <a class="cookie-link" href="cookie">Read more</a>
                </p>

                <button type="button" id="close-cookie" class="close-cookie">
                    OK
                </button>
            </div>
        </div>

        <!-- Login modal -->
        <div id="login" class="modal">
            <button class="modal-close waves-effect waves-light btn right" type="button">Close</button>
            <div class="modal-content">
                <h4>Login</h4>
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" required>
                            <label for="email">* Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" required>
                            <label for="password">* Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <a id="lgInBtn" href="admin" class="waves-effect waves-light btn">Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" defer></script>
        <script src="js/core.js" defer></script>
        <script src="js/app.js" defer></script>
    </body>
</html>
