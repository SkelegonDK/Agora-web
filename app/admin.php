<?php
    const TITLE = 'Admin';
    const DESC = 'Admin';
    include 'layout/header.php';
?>
<div id="cntnt">
    <div class="main-container admin-container">
        <div class="admin-menu-shade"></div>
        <div class="admin-menu">
            <div class="admin-menu-btn">
                <i class="material-icons">build</i>
            </div>
            <ul class="admin-menu-list">
                <li>
                    <a class="page-shift" href="admin">Home</a>
                </li>
                <li>
                    <a class="admin-link" href="#" data-admin="admn-accnts">Accounts</a>
                </li>
                <li>
                    <a class="admin-link" href="#" data-admin="admn-evnts">Events</a>
                </li>
                <li>
                    <a class="admin-link" href="#" data-admin="admn-prtnrs">Partners</a>
                </li>
                <li>
                    <a class="admin-link" href="#" data-admin="admn-gnrl">Settings</a>
                </li>
            </ul>
        </div>
        <div class="container admin-content">
            <h1>Welcome back {{name}}</h1>
            <hr>
            <span class="br-space"></span>
            <h3>Quick overview</h3>
            <ul>
                <li>Active events: 43</li>
                <li>Accounts: 5</li>
                <li>Partners: 4</li>
                <li>Previous events: 104</li>
            </ul>
        </div>
    </div>

    <!-- Accounts -->
    <div class="admin-pages admn-accnts">
        <h1>Account workspace</h1>
        <a class="admin-func-link waves-effect waves-light btn" href="#" data-admin="admn-add-prtnr">
            add
        </a>
        <a class="admin-func-link waves-effect waves-light btn" href="#" data-admin="admn-dll-prtnr">
            delete
        </a>
        <a class="admin-func-link waves-effect waves-light btn" href="#" data-admin="admn-dll-ovrvw">
            overview
        </a>
        <span class="br-space"></span>
        <hr>
        <span class="br-space"></span>
        <div class="admin-page-content"></div>

        <!-- Add event -->
        <div class="admin-page-func admn-add-prtnr">
            <h3>Add new account</h3>
            <div class="row admin-row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <input id="eventName" type="text" class="validate">
                            <label for="password">User name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Phone</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <input id="adress" type="text" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                          <select class="icons">
                            <option value="" disabled selected>Choose user role</option>
                            <option value="" class="left circle">Admin</option>
                            <option value=""class="left circle">Event manager</option>
                          </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Upload account thumbnail</span>
                                <input type="file">
                            </div>
                            <div class="file">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <button class="waves-effect waves-light btn" type="submit" name="button">Add account</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Delete account -->
        <div class="admin-page-func admn-dll-prtnr">
            <h3>Delete account</h3>
            <div class="row admin-row">
                <div class="input-field col s12 m6">
                  <select class="icons">
                    <option value="" disabled selected>Choose account</option>
                    <option value="" data-icon="img/partners/thumbs/intel.jpg" class="left circle">Preben(a)</option>
                    <option value="" data-icon="img/partners/thumbs/intel.jpg" class="left circle">Henrik(e)</option>
                  </select>
                </div>
            </div>
            <button class="waves-effect waves-light btn dlt-partners-btn" type="submit" name="button">Delete</button>
        </div>
        <!--  account overview -->
        <div class="admin-page-func admn-dll-ovrvw">
            <h3>account overview</h3>
            <div class="row admin-row">
                <div class="chip">
                    <span class="partner-name">Preben(a)</span>
                    <a class="edit-partner" href="#edit-event">Edit</a>
                </div>
                <div class="chip">
                    <span class="partner-name">Henrik(e)</span>
                    <a class="edit-partner" href="#edit-event">Edit</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Events -->
    <div class="admin-pages admn-evnts">
        <h1>Event workspace</h1>
        <a class="admin-func-link waves-effect waves-light btn" href="#" data-admin="admn-add-prtnr">
            add
        </a>
        <a class="admin-func-link waves-effect waves-light btn" href="#" data-admin="admn-dll-prtnr">
            delete
        </a>
        <a class="admin-func-link waves-effect waves-light btn" href="#" data-admin="admn-dll-ovrvw">
            overview
        </a>
        <span class="br-space"></span>
        <hr>
        <span class="br-space"></span>
        <div class="admin-page-content"></div>

        <!-- Add event -->
        <div class="admin-page-func admn-add-prtnr">
            <h3>Add new event</h3>
            <div class="row admin-row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <input id="eventName" type="text" class="validate">
                            <label for="password">Event title</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Event description</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <input id="adress" type="text" class="validate">
                            <label for="email">Event location</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <input id="date" type="date" class="datepicker">
                            <label for="date">Pick event date</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <select multiple>
                                <option value="" disabled selected>Choose speakers</option>
                                <option value="1">Speaker 1</option>
                                <option value="2">Speaker 2</option>
                                <option value="3">Speaker 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <select multiple>
                                <option value="" disabled selected>Choose sponsors</option>
                                <option value="1">Sponsor 1</option>
                                <option value="2">Sponsor 2</option>
                                <option value="3">Sponsor 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Upload event image</span>
                                <input type="file">
                            </div>
                            <div class="file">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <button class="waves-effect waves-light btn" type="submit" name="button">Add event</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Delete event -->
        <div class="admin-page-func admn-dll-prtnr">
            <h3>Delete event</h3>
            <div class="row admin-row">
                <div class="input-field col s12 m6">
                  <select class="icons">
                    <option value="" disabled selected>Choose event</option>
                    <option value="" data-icon="img/partners/thumbs/intel.jpg" class="left circle">Online identity</option>
                    <option value="" data-icon="img/partners/thumbs/intel.jpg" class="left circle">Web + Arduino?</option>
                    <option value="" data-icon="img/partners/thumbs/intel.jpg" class="left circle">Big data, what now?</option>
                  </select>
                </div>
            </div>
            <button class="waves-effect waves-light btn dlt-partners-btn" type="submit" name="button">Delete</button>
        </div>
        <!--  Events overview -->
        <div class="admin-page-func admn-dll-ovrvw">
            <h3>Events overview</h3>
            <div class="row admin-row">
                <div class="chip">
                    <img src="img/partners/thumbs/intel.jpg" alt="#">
                    <span class="partner-name">Online identity</span>
                    <a class="edit-partner" href="#edit-event">Edit</a>
                </div>
                <div class="chip">
                    <img src="img/partners/thumbs/intel.jpg" alt="#">
                    <span class="partner-name">Web + Arduino</span>
                    <a class="edit-partner" href="#edit-event">Edit</a>
                </div>
                <div class="chip">
                    <img src="img/partners/thumbs/intel.jpg" alt="#">
                    <span class="partner-name">Big data, what now?</span>
                    <a class="edit-partner" href="#edit-event">Edit</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Partners -->
    <div class="admin-pages admn-prtnrs">
        <h1>Partner workspace</h1>
        <a class="admin-func-link waves-effect waves-light btn" href="#" data-admin="admn-add-prtnr">
            add
        </a>
        <a class="admin-func-link waves-effect waves-light btn" href="#" data-admin="admn-dll-prtnr">
            delete
        </a>
        <a class="admin-func-link waves-effect waves-light btn" href="#" data-admin="admn-dll-ovrvw">
            overview
        </a>
        <span class="br-space"></span>
        <hr>
        <span class="br-space"></span>
        <div class="admin-page-content"></div>
        <!-- Add partner -->
        <div class="admin-page-func admn-add-prtnr">
            <h3>Add new partner</h3>
            <div class="row admin-row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <input id="partnerName" type="text" class="validate">
                            <label for="password">Partner name</label>
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
                    <div class="row">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Upload Logo</span>
                                <input type="file">
                            </div>
                            <div class="file">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <button class="waves-effect waves-light btn" type="submit" name="button">Add partner</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Delete partner -->
        <div class="admin-page-func admn-dll-prtnr">
            <h3>Delete partner</h3>
            <div class="row admin-row">
                <div class="input-field col s12 m6">
                  <select class="icons">
                    <option value="" disabled selected>Choose partner</option>
                    <option value="" data-icon="img/partners/thumbs/intel.jpg" class="left circle">Intel</option>
                    <option value="" data-icon="img/partners/thumbs/intel.jpg" class="left circle">Intel</option>
                    <option value="" data-icon="img/partners/thumbs/intel.jpg" class="left circle">Intel</option>
                  </select>
                </div>
            </div>
            <button class="waves-effect waves-light btn dlt-partners-btn" type="submit" name="button">Delete</button>
        </div>
        <!--  Partner overview -->
        <div class="admin-page-func admn-dll-ovrvw">
            <h3>Partner overview</h3>
            <div class="row admin-row">
                <div class="chip">
                    <img src="img/partners/thumbs/intel.jpg" alt="#">
                    <span class="partner-name">Intel</span>
                    <a class="edit-partner" href="#edit-partner">Edit</a>
                </div>
                <div class="chip">
                    <img src="img/partners/thumbs/intel.jpg" alt="#">
                    <span class="partner-name">Intel</span>
                    <a class="edit-partner" href="#edit-partner">Edit</a>
                </div>
                <div class="chip">
                    <img src="img/partners/thumbs/intel.jpg" alt="#">
                    <span class="partner-name">Intel</span>
                    <a class="edit-partner" href="#edit-partner">Edit</a>
                </div>
                <div class="chip">
                    <img src="img/partners/thumbs/intel.jpg" alt="#">
                    <span class="partner-name">Intel</span>
                    <a class="edit-partner" href="#edit-partner">Edit</a>
                </div>
                <div class="chip">
                    <img src="img/partners/thumbs/intel.jpg" alt="#">
                    <span class="partner-name">Intel</span>
                    <a class="edit-partner" href="#edit-partner">Edit</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Generel -->
    <div class="admin-pages admn-gnrl">
        <h1>Generel</h1>
        <hr>
        <span class="br-space"></span>
        <h3>Clear cache</h3>
        <p>Clear cache to ensure that recurring users see the latest material.</p>
        <p>
            <strong>Cache last cleared: 21/04/2017 03:00:01</strong>
        </p>
        <button class="waves-effect waves-light btn" type="button">Clear</button>
        <span class="br-space-xl"></span>
        <hr>
        <span class="br-space-xl"></span>
        <h3>Update sitemap</h3>
        <p>Update sitemap to register new events / partners for search engines.</p>
        <p>
            <strong>Sitemap last updated: 19/05/2017 04:00:01</strong>
        </p>
        <button class="waves-effect waves-light btn" type="button">Update</button>
    </div>
</div>

<div id="edit-partner" class="modal bottom-sheet">
  <div class="modal-content">
    <h4>Intel</h4>
      <form class="col s12">
          <div class="row">
              <div class="input-field col s12 m6 l6">
                  <input id="partnerName" type="text" class="validate">
                  <label for="password">Partner name</label>
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
          <div class="row">
              <div class="file-field input-field">
                  <div class="btn">
                      <span>Upload Logo</span>
                      <input type="file">
                  </div>
                  <div class="file">
                      <input class="file-path validate" type="text">
                  </div>
              </div>
          </div>
          <button class="waves-effect waves-light btn" type="submit" name="button">Edit partner</button>
      </form>
  </div>
</div>


<div id="edit-event" class="modal bottom-sheet">
  <div class="modal-content">
    <h4>Event name</h4>
    <form class="col s12">
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input id="eventName" type="text" class="validate">
                <label for="password">Event title</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Event description</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input id="adress" type="text" class="validate">
                <label for="email">Event location</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input id="date" type="date" class="datepicker">
                <label for="date">Pick event date</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <select multiple>
                    <option value="" disabled selected>Choose speakers</option>
                    <option value="1">Speaker 1</option>
                    <option value="2">Speaker 2</option>
                    <option value="3">Speaker 3</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <select multiple>
                    <option value="" disabled selected>Choose sponsors</option>
                    <option value="1">Sponsor 1</option>
                    <option value="2">Sponsor 2</option>
                    <option value="3">Sponsor 3</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field">
                <div class="btn">
                    <span>Upload event image</span>
                    <input type="file">
                </div>
                <div class="file">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            <button class="waves-effect waves-light btn" type="submit" name="button">Edit event</button>
        </div>
    </form>
  </div>
</div>
<?php
    include 'layout/footer.php';
?>
