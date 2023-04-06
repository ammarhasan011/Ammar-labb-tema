<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Labb 1</title>
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.js"></script>
</head>

<body>

    <div id="wrap">

        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-sm-6">
                        <a class="logo" href="index.html">Labb 1</a>
                    </div>
                    <div class="col-sm-6 hidden-xs">
                        <form id="searchform" class="searchform">
                            <div>
                                <label class="screen-reader-text">Sök efter:</label>
                                <input type="text" />
                                <input type="submit" value="Sök" />
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-4 text-right visible-xs">
                        <div class="mobile-menu-wrap">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-bars menu-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="mobile-search">
            <form id="searchform" class="searchform">
                <div>
                    <label class="screen-reader-text">Sök efter:</label>
                    <input type="text" />
                    <input type="submit" value="Sök" />
                </div>
            </form>
        </div>

        <nav id="nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="menu">
                            <li>
                                <a href="index.html">Hem</a>
                            </li>
                            <li class="current-menu-item">
                                <a href="blogg.html">Blogg</a>
                            </li>
                            <li>
                                <a href="undersida.html">Undersida</a>
                            </li>
                            <li>
                                <a href="undersida2.html">Undersida 2</a>
                            </li>
                            <li>
                                <a href="undersida3.html">Undersida 3</a>
                            </li>
                            <li>
                                <a href="undersida4.html">Undersida 4</a>
                            </li>
                            <li>
                                <a href="kontakt.html">Kontakt</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div id="primary" class="col-xs-12 col-md-9">
                            <h1>Kategori 1</h1>
                            <article>
                                <img src="img/washington.jpg" />
                                <h2 class="title">
                                    <a href="inlagg.html">Det tredje inlägget</a>
                                </h2>
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i> 1 januari, 2016
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i> <a href="forfattare.html">Peter Pärmenäs</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex. Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis. In sed mi mi. Praesent condimentum sollicitudin nibh. Vivamus vulputate purus quis volutpat fringilla. Ut tortor libero, semper eget dolor vel, hendrerit tempus dui. Suspendisse dictum efficitur blandit. In porta scelerisque nulla ac placerat.</p>
                            </article>
                            <article>
                                <img src="img/paris.jpg" />
                                <h2 class="title">
                                    <a href="inlagg.html">Mitt andra inlägg</a>
                                </h2>
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i> 1 januari, 2016
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i> <a href="forfattare.html">John Doe</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 3</a>
                                    </li>
                                </ul>
                                <p>Integer quis eros at urna pulvinar mollis eget quis ex. Nam fringilla tellus at ligula consequat, sed sagittis ipsum ultricies. Nunc pretium bibendum enim id iaculis. Nam sed leo non sem aliquam imperdiet dictum vitae magna. Phasellus ac accumsan dolor, quis congue mauris. Maecenas vehicula, arcu sed congue euismod, mi urna rhoncus nunc, et feugiat arcu tellus vitae odio. Sed luctus vel lorem vel dictum. Suspendisse potenti. Proin vel efficitur ex. Suspendisse scelerisque rutrum mattis. In sed laoreet augue, non maximus ante. Nam a rhoncus ligula. Aliquam at aliquet lorem. Suspendisse non risus tincidunt, gravida augue non, fringilla libero.</p>
                            </article>
                            <article>
                                <img src="img/london.jpg" />
                                <h2 class="title">
                                    <a href="inlagg.html">Hej världen!</a>
                                </h2>
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i> 1 januari, 2016
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i> <a href="forfattare.html">Peter Pärmenäs</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>, <a href="kategori.html">Kategori 3</a>
                                    </li>
                                </ul>
                                <p>Sed pretium metus in urna vehicula imperdiet. Fusce at odio vitae felis maximus tincidunt. Nunc porttitor ex a elementum dictum. Maecenas eget arcu nulla. Cras auctor dui aliquet, condimentum orci vel, venenatis nisl. Ut semper magna urna, ac congue dui cursus vitae. Nam sed pharetra leo, vel tincidunt est. Phasellus volutpat tortor nec nulla feugiat congue. Donec quis ligula varius, euismod nisl eu, aliquet metus. Aliquam tempus iaculis odio, sed volutpat mi aliquam aliquet.</p>
                            </article>
                            <nav class="navigation pagination">
                                <h2 class="screen-reader-text">Inläggsnavigering</h2>
                                <a class="prev page-numbers" href="">Föregående</a>
                                <span class="page-numbers current">1</span>
                                <a class="page-numbers" href="">2</a>
                                <a class="next page-numbers" href="">Nästa</a>
                            </nav>
                        </div>
                        <aside id="secondary" class="col-xs-12 col-md-3">
                            <div id="sidebar">
                                <ul>
                                    <li>
                                        <form id="searchform" class="searchform">
                                            <div>
                                                <label class="screen-reader-text">Sök efter:</label>
                                                <input type="text" />
                                                <input type="submit" value="Sök" />
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                                <ul role="navigation">
                                    <li class="pagenav">
                                        <h2>Sidor</h2>
                                        <ul>
                                            <li class="page_item current_page_item">
                                                <a href="">Blogg</a>
                                            </li>
                                            <li class="page_item">
                                                <a href="">Exempelsida</a>
                                            </li>
                                            <li class="page_item">
                                                <a href="">Kontakt</a>
                                            </li>
                                            <li class="page_item page_item_has_children">
                                                <a href="">Om mig</a>
                                                <ul class="children">
                                                    <li class="page_item">
                                                        <a href="">Intressen</a>
                                                    </li>
                                                    <li class="page_item page_item_has_children">
                                                        <a href="">Portfolio</a>
                                                        <ul class="children">
                                                            <li class="page_item">
                                                                <a href="">Projekt 1</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="page_item">
                                                <a href="">Startsida</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h2>Arkiv</h2>
                                        <ul>
                                            <li>
                                                <a href="arkiv.html">oktober 2016</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="categories">
                                        <h2>Kategorier</h2>
                                        <ul>
                                            <li class="cat-item">
                                                <a href="">Natur</a> (1)
                                            </li>
                                            <li class="cat-item">
                                                <a href="">Okategoriserade</a> (3)
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </section>
        </main>

        <footer id="footer">
            <div class="container">
                <div class="row top">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <h4>Kort om oss</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
                        <p>Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis.</p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                        <h4>Kontaktuppgifter</h4>
                        <p>
                            The Company<br />
                            Gatgatan 1<br />
                            123 45 Någonstans
                        </p>
                        <p>
                            Tel: 0123456789<br />
                            E-post: <a href="">info@thecompany.com</a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                        <h4>Social media</h4>
                        <ul class="social">
                            <li>
                                <i class="fa fa-facebook"></i> <a href="">Facebook</a>
                            </li>
                            <li>
                                <i class="fa fa-twitter"></i> <a href="">Twitter</a>
                            </li>
                            <li>
                                <i class="fa fa-instagram"></i> <a href="">Instagram</a>
                            </li>
                            <li>
                                <i class="fa fa-linkedin"></i> <a href="">LinkedIn</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row bottom">
                    <div class="col-xs-12">
                        <p>Copyright &copy; Grupp X, 2016</p>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="js/script.js"></script>

</body>

</html>