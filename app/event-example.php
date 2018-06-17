<?php
const TITLE = 'Event';
const DESC = 'Event';
include 'layout/header.php';
?>
<div id="cntnt">
    <div class="page-top-banner-wrap">
        <picture>
            <!--[if IE 9]><video style="display: none;"><![endif]-->
            <source srcset="img/events/event-example-xl.jpg" media="(min-width: 1000px)">
            <source srcset="img/events/event-example-l.jpg" media="(min-width: 768px)">
            <source srcset="img/events/event-example-m.jpg" media="(min-width: 412px)">
            <!--[if IE 9]></video><![endif]-->
            <img src="img/contact/event-example.jpg" alt="#">
        </picture>
    </div>
    <div class="container main-container">
        <h1>An upcoming event near you</h1>
        <div class="row">
          <div class="col s7">Quisque condimentum condimentum nulla, pharetra sollicitudin dolor. Vestibulum dignissim, enim at faucibus placerat, risus lectus commodo elit, vel malesuada tellus diam eu erat. Sed sagittis elementum tortor. Vivamus convallis mauris non mi mattis iaculis. Quisque ut leo tincidunt, tristique lacus nec, vulputate sem. Praesent posuere tempus nunc. Sed bibendum bibendum aliquam. Donec euismod, lorem sed aliquet dictum, neque dui iaculis nisl, vitae mattis tortor tortor sit amet risus. Donec volutpat mollis hendrerit. Integer ornare est sed lacus blandit sollicitudin eget eget erat. Cras augue metus, fringilla vel fermentum vel, malesuada sit amet dui. Donec vehicula, nibh id rhoncus lacinia, sem felis fermentum quam, eu gravida neque ex at lectus. Donec nec commodo neque. Sed eget arcu sed arcu dictum euismod nec sit amet ex.</div>
          <div class="col s5">
            <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header"><i class="material-icons">person</i>Speaker 1</div>
                <div class="collapsible-body"><p>Nice speaker from x lorem ipsum</p></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">person</i>Speaker 2</div>
                <div class="collapsible-body"><p>Nice speaker from x lorem ipsum</p></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">person</i>Speaker 3</div>
                <div class="collapsible-body"><p>Nice speaker from x lorem ipsum</p></div>
              </li>
            </ul>
          </div>
        </div>
        <div class="event-map">
            <picture>
                <!--[if IE 9]><video style="display: none;"><![endif]-->
                <source srcset="img/events/map-exampler-xl.jpg" media="(min-width: 1000px)">
                <source srcset="img/events/map-exampler-l.jpg" media="(min-width: 768px)">
                <source srcset="img/events/map-exampler-m.jpg" media="(min-width: 412px)">
                <!--[if IE 9]></video><![endif]-->
                <img src="img/events/map-exampler.jpg" alt="#">
            </picture>
        </div>
    </div>
</div>
<?php
    include 'layout/footer.php';
?>
