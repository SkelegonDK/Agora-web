<?php
    const TITLE = 'Index';
    const DESC = 'Index';
    include 'layout/header.php';
?>
<div id="cntnt">
    <div class="page-top-banner-wrap">
        <div class="page-top-banner-content">
            <h1>Welcome to AGORA <span class="br"></span><span>- Tech events in Europe</span></h1>
            <a class="page-shift waves-effect waves-light btn" href="events">Browse events</a>
        </div>
        <picture>
            <!--[if IE 9]><video style="display: none;"><![endif]-->
            <source srcset="img/index/index-banner-xl.jpg" media="(min-width: 1000px)">
            <source srcset="img/index/index-banner-l.jpg" media="(min-width: 768px)">
            <source srcset="img/index/index-banner-m.jpg" media="(min-width: 412px)">
            <!--[if IE 9]></video><![endif]-->
            <img src="img/index/index-banner.jpg" alt="#">
        </picture>
    </div>
    <div class="container intro-container">
        <span class="br-space-xl"></span>
        <h1>We help people create <span class="br"></span>and find tech events</h1>
        <span class="br-space"></span>
        <p>
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
            mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
        </p>
        <span class="br-space"></span>
        <a class="page-shift waves-effect waves-light btn" href="about">Read about us</a>
        <span class="br-space-xl"></span>
        <hr>
    </div>
    <div class="container">
        <div class="center-content">
            <h2>Take a look at the newest events!</h2>
            <span class="br-space-xl"></span>
        </div>
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
                                    <use xlink:href="img/icon-system.svg#facebook"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="18">
                                    <use xlink:href="img/icon-system.svg#google"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="17">
                                    <use xlink:href="img/icon-system.svg#linkedin"></use>
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
                                    <use xlink:href="img/icon-system.svg#facebook"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="18">
                                    <use xlink:href="img/icon-system.svg#google"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="17">
                                    <use xlink:href="img/icon-system.svg#linkedin"></use>
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
                                    <use xlink:href="img/icon-system.svg#facebook"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="18">
                                    <use xlink:href="img/icon-system.svg#google"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="social-icons" width="18" height="17">
                                    <use xlink:href="img/icon-system.svg#linkedin"></use>
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
        </div>
        <span class="br-space"></span>
        <div class="center-content">
            <a class="page-shift waves-effect waves-light btn center-btn" href="events">Browse all events</a>
        </div>
    </div>
</div>

<!-- Attend modal -->
<div id="attend-event" class="modal">
  <div class="modal-content">
    <h4>Attend this event</h4>
    <a href="#!" class="modal-action modal-close close-btn-x">X</a>
    <div class="attend-event-form">
        <form>
          <div class="row">
              <div class="input-field">
                  <input id="attendeeName" type="text" class="validate">
                  <label for="attendeeName">Your name</label>
              </div>
          </div>
          <div class="row">
              <div class="input-field">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
              </div>
          </div>
          <div class="row">
              <div class="input-field">
                  <input id="phone" type="text" class="validate">
                  <label for="email">Phone</label>
              </div>
          </div>
          <div class="input-field col s12">
          <select>
            <option value="" disabled selected>Choose amount</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
          <label>Tickets</label>
        </div>
        </form>
        <form class="checkout" onsubmit="return false">
            <div class="checkout-header">
                <h1 class="checkout-title">
                Checkout
                <span class="checkout-price">$50</span>
                </h1>
            </div>
            <p>
                <input type="text" class="checkout-input checkout-exp" placeholder="MM">
                <input type="text" class="checkout-input checkout-exp" placeholder="YY">
            </p>
            <p>
                <input type="text" class="checkout-input checkout-card" placeholder="4111 1111 1111 1111">
                <input type="text" class="checkout-input checkout-cvc" placeholder="CVC">
            </p>
            <p>
                <input type="submit" value="Attend" class="checkout-btn">
            </p>
        </form>
    </div>
  </div>
</div>
<?php
    include 'layout/footer.php';
?>
