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
                    <span class="mdl-layout-title">Request for Products</span>
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
                <a class="mdl-navigation__link selected-link" href="requests.php">
                    <i class="material-icons md-24" role="presentation">playlist_add</i>
                    &nbsp;Request for Products
                </a>
                <a class="mdl-navigation__link" href="clothing.php">
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
                <a class="mdl-navigation__link" href="ohtml.php">
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
          <main class="mdl-layout__content donate_page" style="width: inherit;">
            <div class="donate-page page-content" style="width: inherit;">
                <div class="commodity-radiobtn-wrapper donate-page">
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="opt-clothes">
                      <input type="radio" id="opt-clothes" class="mdl-radio__button" name="options" value="1" onclick="handleVisibility(this.value)">
                      <span class="mdl-radio__label">Clothing and Apparel</span>
                    </label> <br /><br />
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="opt-books">
                      <input type="radio" id="opt-books" class="mdl-radio__button" name="options" value="2" onclick="handleVisibility(this.value)">
                      <span class="mdl-radio__label">Books and Stationary</span>
                    </label> <br /><br />
                    <script type="text/javascript">
                        function handleVisibility(selectedRadio) {
                            if (selectedRadio == 2) {
                                document.getElementById("bookdesc").disabled = false;
                                document.getElementById("book-category").disabled = false;
                                document.getElementById("quantity").disabled = true;
                                document.getElementById("category").disabled = true;
                                document.getElementById("description").disabled = true;
                            } else if (selectedRadio == 1) {
                                document.getElementById("bookdesc").disabled = true;
                                document.getElementById("book-cateogry").disabled = true;
                                document.getElementById("quantity").disabled = false;
                                document.getElementById("category").disabled = false;
                                document.getElementById("description").disabled = false;
                            }
                        }
                    </script>
                </div>
                <form action="requestBooks.php" method="post">   
                    <div class="books-wrapper donate-page">
                        <div class="mdl-textfield mdl-js-textfield">
                            <textarea class="mdl-textfield__input" type="text" rows= "3" id="bookdesc" disabled></textarea>
                            <label class="mdl-textfield__label" for="bookdesc">Book Title/Description</label>
                        </div> <br />
                        
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
                            <input class="mdl-textfield__input" type="text" id="book-category" value="Empty Books" readonly tabIndex="-1" disabled>
                            <label for="book-category" class="mdl-textfield__label">Category</label>
                            <ul for="book-category" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                <li class="mdl-menu__item">Empty Books</li>
                                <li class="mdl-menu__item">Printed Books</li>
                                <li class="mdl-menu__item">Other</li>
                            </ul>
                        </div>
                        
                        <div class="buttons-wrapper-partone donate-page">
                            <button type="submit" class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect" style="font-size: 16px;">
                                Request Books/Stationary
                            </button><br /> <br />
                            <button type="reset" class="mdl-button mdl-button--primary mdl-js-button mdl-js-ripple-effect" style="font-size: 16px;">
                                Reset
                        </button> <br />
                        </div>
                    </div>
                </form >
                
                <form action="requestClothing.php" method="post">
                    <div class="clothes-wrapper donate-page">

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fullwidth">
                            <input class="mdl-textfield__input" type="text" id="category" value="Women" readonly tabIndex="-1">
                            <label for="category" class="mdl-textfield__label">Category</label>
                            <ul for="category" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                <li class="mdl-menu__item">Women</li>
                                <li class="mdl-menu__item">Men</li>
                                <li class="mdl-menu__item">Kids</li>
                                <li class="mdl-menu__item">General</li>
                            </ul>
                        </div>
                        <div class="wide-textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="number" id="quantity" name="quantity">
                                <label class="mdl-textfield__label" for="quantity">Quantity</label>
                        </div> <br />
                        <div class="wide-textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="description" name="description">
                                <label class="mdl-textfield__label" for="description">Description</label>
                        </div> <br />
                        
                        <div class="buttons-wrapper-parttwo donate-page">
                        <button type="submit" class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect" style="font-size: 16px;">
                            Request Clothing/Apparel
                        </button><br /> <br />
                        <button type="reset" class="mdl-button mdl-button--primary mdl-js-button mdl-js-ripple-effect" style="font-size: 16px;">
                            Reset
                        </button> <br />
                    </div>
                    </div>
                </form>
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