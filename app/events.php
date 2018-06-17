<?php
    const TITLE = 'Events';
    const DESC = 'Events';
    include 'layout/header.php';
?>
<div id="cntnt">
    <div class="page-top-banner-wrap">
        <picture>
            <!--[if IE 9]><video style="display: none;"><![endif]-->
            <source srcset="img/events/events-banner-xl.jpg" media="(min-width: 1000px)">
            <source srcset="img/events/events-banner-l.jpg" media="(min-width: 768px)">
            <source srcset="img/events/events-banner-m.jpg" media="(min-width: 412px)">
            <!--[if IE 9]></video><![endif]-->
            <img src="img/events/events-banner.jpg" alt="#">
        </picture>
    </div>
    <div class="container main-container">
        <div class="intro-container">
            <h1>Events!</h1>
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
        <span class="br-space"></span>
        <div class="row">
            <div class="col xs s6 m6 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/events/online-identity.jpg" alt="#">
                        <div class="chip card-see-event">
                          <a class="page-shift" href="event-example">See event</a>
                        </div>
                        <div class="chip card-date">
                            25/6/2017
                            <i class="close material-icons">date_range</i>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Online identity</span>
                        <div class="card-att-info">
                            <a href="#attend-event" class="waves-effect waves-light btn event-card-link">Attend</a>
                            <span class="activator event-card-info">info <i class="material-icons">info</i></span>
                        </div>
                        <div class="event-social">
                            <a href="#">
                                <svg class="social-icons" width="9" height="19">
                                    <use xlink:href="/img/icon-system.svg#facebook"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="18">
                                    <use xlink:href="/img/icon-system.svg#google"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="17">
                                    <use xlink:href="/img/icon-system.svg#linkedin"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Online identity<i class="material-icons right">close</i></span>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                        </p>
                    </div>
                </div>
            </div>
            <div class="col xs s6 m6 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/events/hardware.jpg" alt="#">
                        <div class="chip card-see-event">
                          <a class="page-shift" href="event-example">See event</a>
                        </div>
                        <div class="chip card-date">
                            04/7/2017
                            <i class="close material-icons">date_range</i>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Web + Arduino?</span>
                        <div class="card-att-info">
                            <a href="#attend-event" class="waves-effect waves-light btn event-card-link">Attend</a>
                            <span class="activator event-card-info">info <i class="material-icons">info</i></span>
                        </div>
                        <div class="event-social">
                            <a href="#">
                                <svg class="social-icons" width="9" height="19">
                                    <use xlink:href="/img/icon-system.svg#facebook"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="18">
                                    <use xlink:href="/img/icon-system.svg#google"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="17">
                                    <use xlink:href="/img/icon-system.svg#linkedin"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Web + Arduino?<i class="material-icons right">close</i></span>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                        </p>
                    </div>
                </div>
            </div>
            <div class="col xs s6 m6 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/events/network.jpg" alt="#">
                        <div class="chip card-see-event">
                          <a class="page-shift" href="event-example">See event</a>
                        </div>
                        <div class="chip card-date">
                            17/6/2017
                            <i class="close material-icons">date_range</i>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Big data, what now?</span>
                        <div class="card-att-info">
                            <a href="#attend-event" class="waves-effect waves-light btn event-card-link">Attend</a>
                            <span class="activator event-card-info">info <i class="material-icons">info</i></span>
                        </div>
                        <div class="event-social">
                            <a href="#">
                                <svg class="social-icons" width="9" height="19">
                                    <use xlink:href="/img/icon-system.svg#facebook"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="18">
                                    <use xlink:href="/img/icon-system.svg#google"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="17">
                                    <use xlink:href="/img/icon-system.svg#linkedin"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Big data, what now?<i class="material-icons right">close</i></span>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                        </p>
                    </div>
                </div>
            </div>
            <div class="col xs s6 m6 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/events/robotics.jpg" alt="#">
                        <div class="chip card-see-event">
                          <a class="page-shift" href="event-example">See event</a>
                        </div>
                        <div class="chip card-date">
                            05/8/2017
                            <i class="close material-icons">date_range</i>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Future = Robotics</span>
                        <div class="card-att-info">
                            <a href="#attend-event" class="waves-effect waves-light btn event-card-link">Attend</a>
                            <span class="activator event-card-info">info <i class="material-icons">info</i></span>
                        </div>
                        <div class="event-social">
                            <a href="#">
                                <svg class="social-icons" width="9" height="19">
                                    <use xlink:href="/img/icon-system.svg#facebook"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="18">
                                    <use xlink:href="/img/icon-system.svg#google"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="17">
                                    <use xlink:href="/img/icon-system.svg#linkedin"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Future = Robotics<i class="material-icons right">close</i></span>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                        </p>
                    </div>
                </div>
            </div>
            <div class="col xs s6 m6 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/events/hackers.jpg" alt="#">
                        <div class="chip card-see-event">
                          <a class="page-shift" href="event-example">See event</a>
                        </div>
                        <div class="chip card-date">
                            11/9/2017
                            <i class="close material-icons">date_range</i>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Hackers and threat?</span>
                        <div class="card-att-info">
                            <a href="#attend-event" class="waves-effect waves-light btn event-card-link">Attend</a>
                            <span class="activator event-card-info">info <i class="material-icons">info</i></span>
                        </div>
                        <div class="event-social">
                            <a href="#">
                                <svg class="social-icons" width="9" height="19">
                                    <use xlink:href="/img/icon-system.svg#facebook"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="18">
                                    <use xlink:href="/img/icon-system.svg#google"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="17">
                                    <use xlink:href="/img/icon-system.svg#linkedin"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Hackers and threat?<i class="material-icons right">close</i></span>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                        </p>
                    </div>
                </div>
            </div>
            <div class="col xs s6 m6 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/events/quantum.jpg" alt="#">
                        <div class="chip card-see-event">
                          <a class="page-shift" href="event-example">See event</a>
                        </div>
                        <div class="chip card-date">
                            17/6/2017
                            <i class="close material-icons">date_range</i>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Quantum computing</span>
                        <div class="card-att-info">
                            <a href="#attend-event" class="waves-effect waves-light btn event-card-link">Attend</a>
                            <span class="activator event-card-info">info <i class="material-icons">info</i></span>
                        </div>
                        <div class="event-social">
                            <a href="#">
                                <svg class="social-icons" width="9" height="19">
                                    <use xlink:href="/img/icon-system.svg#facebook"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="18">
                                    <use xlink:href="/img/icon-system.svg#google"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="17">
                                    <use xlink:href="/img/icon-system.svg#linkedin"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Quantum computing<i class="material-icons right">close</i></span>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
                            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <span class="br-space"></span>
        <div class="center-content">
            <a class="page-shift waves-effect waves-light btn center-btn" href="#">load more</a>
        </div>
        <span class="br-space-xl"></span>
        <hr>
        <span class="br-space-xl"></span>
        <div class="intro-container">
            <h2>
                Do you have questions <span class="br"></span>about an upcoming event?
            </h2>
            <span class="br-space"></span>
            <a class="page-shift waves-effect waves-light btn" href="contact">Contact us</a>
        </div>
    </div>
</div>
<!-- Attend modal -->
<div id="attend-event" class="modal">
  <div class="modal-content">
    <h4>Attend this event</h4>
    <a href="#!" class="modal-action modal-close close-btn-x">X</a>
      <form class="col s12">
          <div class="row">
              <div class="input-field col s12 m6 l6">
                  <input id="attendeeName" type="text" class="validate">
                  <label for="attendeeName">Your name</label>
              </div>
          </div>
          <div class="row">
              <div class="input-field col s12 m6 l6">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
              </div>
          </div>
          <div class="row">
              <div class="input-field col s12 m6 l6">
                  <input id="phone" type="text" class="validate">
                  <label for="email">Phone</label>
              </div>
          </div>
           <a href="#!" class="modal-action modal-close waves-effect waves-light btn ">Attend</a>
      </form>
  </div>
</div>
<?php
    include 'layout/footer.php';
?>
