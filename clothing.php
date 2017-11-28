<!DOCtype html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/6ef1b7da-0b7b-40c3-aeac-e375ec111e72.png" type="image/x-icon">
        <title>Do-Net</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <link rel="stylesheet" href="styles.css" type="text/css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <!-- Add textbox validation scripts -->
        
    </head>
    <body>
         <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
          <header class="mdl-layout__header mdl-layout__header--scroll">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Clothing and Apparel Listing</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                </div>
            </header>
            <div class="mdl-drawer mdl-layout__drawer">
                <header class="mdl-drawer-header">
                    <img src="images/demo-avatar.png" class="mdl-profile-avatar"/>
                        <div class="demo-avatar-dropdown">
                            <span>Username</span>
                            <div class="mdl-layout-spacer"></div>
                        </div>
                </header>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="requests.php">
                    <i class="material-icons md-24" role="presentation">playlist_add</i>
                    &nbsp;Request for Products
                </a>
                <a class="mdl-navigation__link selected-link" href="clothing.php">
                    <i class="material-icons md-24" role="presentation">shopping_cart</i>
                    &nbsp;Clothing and Apparel Listing
                </a>
                <a class="mdl-navigation__link" href="books.php">
                    <i class="material-icons md-24" role="presentation">library_books</i>
                    &nbsp;Books and Stationary Listing
                </a>
                <a class="mdl-navigation__link" href="moneyrev.php">
                    <i role="presentation">&nbsp;<img src="images/Indian_Rupee_symbol2.png" width=auto height=20/></i>
                    &nbsp;&nbsp;Money Transfers&nbsp;<span id="beta" style="color: red;"><sup>BETA</sup></span>
                </a>
            </nav>
            <div class="mdl-layout-spacer navbar"></div>
            <div class="mdl-layout-spacer navbar"></div>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="oindex.html">
                    <i class="material-icons md-24" role="presentation">home</i>
                    &nbsp;Home
                </a>
                <a class="mdl-navigation__link" href="#">
                    <i class="material-icons md-24" role="presentation">account_box</i>
                    &nbsp;Account
                </a>
                <a class="mdl-navigation__link" href="signout.php">
                    <i class="material-icons md-24" role="presentation">exit_to_app</i>
                    &nbsp;Sign out
                </a>
            </nav>
          </div>
          <main class="mdl-layout__content home_page" style="width: inherit;">
            <div class="ngo-list page-content" style="width: inherit;">
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--24dp" style="width: inherit;">
                  <thead>
                    <tr>
                      <th class="center-align mdl-data-table__cell--non-numeric">Product Description</th>
                      <th class="center-align mdl-data-table__cell--non-numeric">Category</th>
                      <th class="center-align mdl-data-table__cell--non-numeric">Donor Email ID</th>
                      <th class="center-align mdl-data-table__cell--non-numeric">Phone</th>
                      <th class="center-align mdl-data-table__cell--non-numeric">Address</th>
                      <th class="center-align mdl-data-table__cell--non-numeric"></th>    
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="center-align mdl-data-table__cell--non-numeric">Sample Shirt</td>
                      <td class="center-align mdl-data-table__cell--non-numeric">Men</td>
                      <td class="center-align mdl-data-table__cell--non-numeric"><a href="mailto:example@email.com">example@sample.com</a></td>
                      <td class="center-align mdl-data-table__cell--non-numeric">+91 98451 12345</td>
                      <td class="center-align mdl-data-table__cell--non-numeric">67/A Devaraja Urs Road Mysuru KA - 570 001</td>
                      <td class="center-align mdl-data-table__cell--non-numeric">
                          <button type="submit" class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect" style="font-size: 16px;">Schedule Pickup</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
          </main>
        </div>
        
    </body>
    <footer class="mdl-mini-footer common" style="position: fixed; bottom: 0px; width: 100%; display: block;">
      <div class="mdl-mini-footer__left-section common" style="margin-bottom: 80px; ">
        <div class="mdl-logo" style="font-size: 20px; position: absolute; left: 20px; color: white;">&copy; 2017-2018</div>
        <ul class="mdl-mini-footer__link-list" style="font-size: 16px; color: white; position: absolute; right: 40px;">
          <li><a href="#">Help</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">About</a></li>    
        </ul>
      </div>
    </footer>
</html>