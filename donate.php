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
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
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
                    <span class="mdl-layout-title">Donate Commodities</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                </div>
            </header>
            <div class="mdl-drawer mdl-layout__drawer">
                <header class="mdl-drawer-header">
                    <img src="images/demo-avatar.png" class="mdl-profile-avatar"/>
                        <div class="demo-avatar-dropdown">
                            <span>Display Username from Session</span>
                            <div class="mdl-layout-spacer"></div>
                        </div>
                </header>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="ngolist.php">
                    <i class="material-icons md-24" role="presentation">format_list_bulleted</i>
                    &nbsp;Partnered NGOs
                </a>
                <a class="mdl-navigation__link selected-link" href="donate.php">
                    <i class="material-icons md-24" role="presentation">add_shopping_cart</i>
                    &nbsp;Donate Commodities
                </a>
                <a class="mdl-navigation__link" href="money.php">
                    <i role="presentation">&nbsp;<img src="images/Indian_Rupee_symbol2.png" width=auto height=20/></i>
                    &nbsp;&nbsp;Donate Money&nbsp;<span id="beta" style="color: red;"><sup>beta</sup></span>
                </a>
            </nav>
            <div class="mdl-layout-spacer navbar"></div>
            <div class="mdl-layout-spacer navbar"></div>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="dindex.html">
                    <i class="material-icons md-24" role="presentation">home</i>
                    &nbsp;Home
                </a>
                <a class="mdl-navigation__link" href="#">
                    <i class="material-icons md-24" role="presentation">account_box</i>
                    &nbsp;Account
                </a>
                <a class="mdl-navigation__link" href="signout.php"><i class="material-icons md-24" role="presentation">exit_to_app</i>
                    &nbsp;Sign out
                </a>
            </nav>
          </div>
          <main class="mdl-layout__content donate_page">
            <div class="donate-page-partone page-content">
                <div class="mdl-card-wide mdl-card mdl-shadow--24dp donate-page-partone">
                  <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Books/Stationary</h2>
                  </div>
                  <div class="mdl-card__supporting-text">
                    <form action="donateBooks.php" method="post">   
                    <div class="books-wrapper donate-page">
                        <br /> <br />
                        <div class="wide-textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="title" name="title">
                            <label class="mdl-textfield__label" for="title">Book Title/Description <span style="color: red;">*</span></label>
                        </div> <br /> <br />
                        <label>Choose a category : 
                        <select id="books-category">
                          <option value="Notebook">Notebook</option>
                          <option value="PrintedBook">Novels</option>
                          <option value="Others">Others</option>
                        </select> </label><br /> <br /> <br />
                        
                        <div class="buttons-wrapper-partone donate-page">
                            <button type="submit" class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect" style="font-size: 16px;">
                                ADD BOOK TO LISTING
                            </button><br /> <br />
                            <button type="reset" class="mdl-button mdl-button--primary mdl-js-button mdl-js-ripple-effect" style="font-size: 16px;">
                                Reset
                        </button> <br />
                        </div>
                    </div>
                </form>
                  </div>
                </div>
                
                <div class="mdl-card-wide mdl-card mdl-shadow--24dp donate-page-parttwo">
                  <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Clothing/Apparel</h2>
                  </div>
                  <div class="mdl-card__supporting-text">
                    <form action="donateClothes.php" method="post">
                    <div class="clothes-wrapper donate-page-parttwo">
                        <div class="wide-textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="title" name="title">
                            <label class="mdl-textfield__label" for="title">Product Name</label>
                        </div> <br /> <br />
                        <div class="wide-textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="number" id="quantity" name="quantity">
                            <label class="mdl-textfield__label" for="quantity">Quantity</label>
                        </div> <br /> <br />
                        
                        <label>Choose a category : 
                        <select id="clothes-category">
                          <option value="Women">Women</option>
                          <option value="Men">Men</option>
                          <option value="Kids">Kids</option>
                          <option value="General">General</option>
                        </select> </label><br /> <br /> 
                        
                        <div class="buttons-wrapper-parttwo donate-page">
                        <button type="submit" class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect" style="font-size: 16px;">
                            ADD CLOTHING TO LISTING
                        </button><br /> <br />
                        <button type="reset" class="mdl-button mdl-button--primary mdl-js-button mdl-js-ripple-effect" style="font-size: 16px;">
                            Reset
                        </button> <br />
                    </div>
                    </div>
                </form>
                  </div>
                </div>
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