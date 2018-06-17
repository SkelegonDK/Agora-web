<?php
    const TITLE = 'Partners';
    const DESC = 'Partners';
    include 'layout/header.php';
?>
<div id="cntnt">
    <div class="page-top-banner-wrap">
        <picture>
            <!--[if IE 9]><video style="display: none;"><![endif]-->
            <source srcset="img/partners/partners-banner-xl.jpg" media="(min-width: 1000px)">
            <source srcset="img/partners/partners-banner-l.jpg" media="(min-width: 768px)">
            <source srcset="img/partners/partners-banner-m.jpg" media="(min-width: 412px)">
            <!--[if IE 9]></video><![endif]-->
            <img src="img/partners/partners-banner.jpg" alt="#">
        </picture>
    </div>
    <div class="container main-container">
        <div class="intro-container">
            <h1>Our partners</h1>
            <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda
                est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
                voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
            </p>
        </div>
        <div class="intro-container">
            <h2>
                Do you want to <span class="br"></span>be a partner?
            </h2>
            <span class="br-space"></span>
            <a class="page-shift waves-effect waves-light btn" href="contact">Contact us</a>
        </div>
    </div>
</div>
<?php
    include 'layout/footer.php';
?>
