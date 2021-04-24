<body>
    <div class="header">
        <div class="header-item">
            <div class="logo">
                <a href="index.php"><img src="img/logo.jpg" alt="Логотип" style="width: 150px;"></a>
            </div>

            <div class="header-string">
                <div class="header-main">
                    <a href="index.php" style="text-decoration: none;""><h2>Главная</h2></a>
                </div>
                <div class="header-products">
                    <a href="#" style="text-decoration: none;"><h2>Товары</h2></a>
                </div>
                <div class="header-map">
                    <a href="index-2.php" style="text-decoration: none;"><h2>Контакты</h2></a>
                </div>
                <div class="header-about">
                    <a href="#" style="text-decoration: none;"><h2>О нас</h2></a>
                </div>
            </div>
            
            <div class="dropdown">
                <select name="one" class="dropdown-select" onchange="window.location.href=this.options[this.selectedIndex].value">
                    <option value="index.php">RU</option>
                    <option value="index-en.php">EN</option>
                </select>
            </div>

        </div>
    </div>