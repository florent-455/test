<body>
    <div class="header">
        <div class="header-item">
            <div class="logo">
                <a href="index.php"><img src="img/logo.jpg" alt="Логотип" style="width: 150px;"></a>
            </div>

            <div class="header-string">
                <div class="header-main">
                    <a href="index.php" style="text-decoration: none;""><h2>Home</h2></a>
                </div>
                <div class="header-products">
                    <a href="#" style="text-decoration: none;"><h2>Products</h2></a>
                </div>
                <div class="header-map">
                    <a href="index-2.php" style="text-decoration: none;"><h2>Contacts</h2></a>
                </div>
                <div class="header-about">
                    <a href="#" style="text-decoration: none;"><h2>About us</h2></a>
                </div>
            </div>
            
            <div class="header-dropdown">
                <select name="one" class="header-dropdown-select" onchange="window.location.href=this.options[this.selectedIndex].value">
                    <option value="index-en.php">EN</option>
                    <option value="index.php">RU</option>
                </select>
            </div>

        </div>
    </div>
