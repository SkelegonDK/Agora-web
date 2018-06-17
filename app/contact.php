<?php
const TITLE = 'Contact';
const DESC = 'Contact';
include 'layout/header.php';
?>
<div id="cntnt">
    <div class="page-top-banner-wrap">
        <picture>
            <!--[if IE 9]><video style="display: none;"><![endif]-->
            <source srcset="img/contact/contact-banner-xl.jpg" media="(min-width: 1000px)">
            <source srcset="img/contact/contact-banner-l.jpg" media="(min-width: 768px)">
            <source srcset="img/contact/contact-banner-m.jpg" media="(min-width: 412px)">
            <!--[if IE 9]></video><![endif]-->
            <img src="img/contact/contact-banner.jpg" alt="#">
        </picture>
    </div>
    <div class="container main-container">
        <h1>Contact</h1>
        <p>
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
            mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore.
        </p>
        <p>
            mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore.
        </p>

        <a href="tel:xxxxxxxx" class="contact-page-icon-info">
            <i class="material-icons">phone</i><p>+45 xx xx xx xx</p>
        </a>
        <a href="mailto:hello@agora.com" class="contact-page-icon-info">
            <i class="material-icons">mail_outline</i><p>Click to send mail</p>
        </a>
        <span class="br-space"></span>
        <p>Or use our contact form:</p>
        <form id="contact" class="col s12">
            <div class="row">
                <div class="input-field col s12 m8 l6">
                    <input id="first_name" name="first_name" type="text" class="validate" required>
                    <label for="first_name">Your name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m8 l6">
                    <input id="phone" name="phone" type="text" class="validate" required>
                    <label for="phone">Phone</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m8 l6">
                    <input id="email" name="email" type="email" class="validate" required>
                    <label for="email">Mail</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m8 l6">
                    <textarea id="textarea1" name="msg" class="materialize-textarea" required></textarea>
                    <label for="textarea1">Message</label>
                </div>
            </div>
            <button class="waves-effect waves-light btn" type="submit">Send</button>
            <p id="contactError" class="hide"><strong>Message could not be sent.</strong></p>
            <p id="contactSuccess" class="hide"><strong>THank you! Your message was sent.</strong></p>
        </form>

        <span class="br-space-xl"></span>
        <h2>Office opening hours</h2>
        <div>
            <p class="open-hours">Monday: <span>08-16</span></p>
            <p class="open-hours">Tuesday: <span>08-16</span></p>
            <p class="open-hours">Wednesday: <span>08-14</span></p>
            <p class="open-hours">Thursday: <span>08-15</span></p>
            <p class="open-hours">Friday: <span>08-15</span></p>
        </div>
    </div>
</div>
<?php
    include 'layout/footer.php';
?>
