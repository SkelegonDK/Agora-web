<?php
    const TITLE = 'About';
    const DESC = 'About';
    include 'layout/header.php';
?>
<div id="cntnt">
    <div class="page-top-banner-wrap">
        <div class="page-top-banner-content about-banner">
            <h1>We are AGORA <span class="br"></span><span>Helping people create and find tech events</span></h1>
        </div>
        <picture>
            <!--[if IE 9]><video style="display: none;"><![endif]-->
            <source srcset="img/about/about-banner-xl.jpg" media="(min-width: 1000px)">
            <source srcset="img/about/about-banner-l.jpg" media="(min-width: 768px)">
            <source srcset="img/about/about-banner-m.jpg" media="(min-width: 412px)">
            <!--[if IE 9]></video><![endif]-->
            <img src="img/about/about-banner.jpg" alt="#">
        </picture>
    </div>
    <div class="container main-container">
        <h1 class="center">About AGORA</h1>
        <br class="br-space">
        <p class="center">
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
            mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
            cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda
            est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
            voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
            voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
        </p>
        <span class="br-space-xl"></span>
        <hr>
        <span class="br-space-xl"></span>
        <h1 class="center meet-the-team">Meet the team behind AGORA</h1>
        <span class="br-space"></span>
        <div class="person-desc-grid">
            <div class="row person-desc-wrap">
                <div class="col m6 l6">
                    <div class="person-desc">
                        <h3>Jane Jameson</h3>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                            mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                        </p>
                        <a class="waves-effect waves-light btn" href="#modal1">Read more</a>
                    </div>
                </div>
                <div class="col m6 l6 profile-pic">
                    <div>
                        <img src="img/about/jane.jpg" alt="#">
                    </div>
                </div>
            </div>
            <div class="row person-desc-wrap">
                <div class="col m6 l6 profile-pic">
                    <div>
                        <img src="img/about/robert.jpg" alt="#">
                    </div>
                </div>
                <div class="col m6 l6">
                    <div class="person-desc">
                        <h3>Robert Thomsen</h3>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                            mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                        </p>
                        <a class="waves-effect waves-light btn" href="#modal1">Read more</a>
                    </div>
                </div>
            </div>
            <div class="row person-desc-wrap">
                <div class="col m6 l6">
                    <div class="person-desc">
                        <h3>Petra Johanson</h3>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                            mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                        </p>
                        <a class="waves-effect waves-light btn" href="#modal1">Read more</a>
                    </div>
                </div>
                <div class="col m6 l6 profile-pic">
                    <div>
                        <img src="img/about/petra.jpg" alt="#">
                    </div>
                </div>
            </div>
        </div>
        <!-- <span class="br-space-xl"></span>
        <hr>
        <span class="br-space-xl"></span>
        <h2>Images from the office!</h2>
        <span class="br-space"></span>
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="http://lorempixel.com/910/400/people/" alt="#">
                </li>
                <li>
                    <img src="http://lorempixel.com/910/400/people/" alt="#">
                </li>
                <li>
                    <img src="http://lorempixel.com/910/400/people/" alt="#">
                </li>
                <li>
                    <img src="http://lorempixel.com/910/400/people/" alt="#">
                </li>
                <li>
                    <img src="http://lorempixel.com/910/400/people/" alt="#">
                </li>
            </ul>
        </div> -->

    </div>

    <div id="modal1" class="modal">
        <button class="modal-close waves-effect waves-light btn right" type="button">Close</button>
        <div class="modal-content">
            <h4>Jane Jameson</h4>
            <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                <span class="br-space"></span>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
            </p>
        </div>
    </div>

    <div id="modal2" class="modal">
        <button class="modal-close waves-effect waves-light btn right" type="button">Close</button>
        <div class="modal-content">
            <h4>Robert Thomsen</h4>
            <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                <span class="br-space"></span>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
            </p>
        </div>
    </div>

    <div id="modal3" class="modal">
        <button class="modal-close waves-effect waves-light btn right" type="button">Close</button>
        <div class="modal-content">
            <h4>Petra Johanson</h4>
            <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                <span class="br-space"></span>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
            </p>
        </div>
    </div>
</div>
<?php
    include 'layout/footer.php';
?>
