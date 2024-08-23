<?php // этот php-код компилирует less/style.less в css/style.css	
	require "./assets/less/lessc.inc.php";	
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";
	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }
	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache);
	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
		file_put_contents($cacheFile, serialize($newCache));
		file_put_contents($outputFile, $newCache['compiled']);
	  }
	}
	autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=1200px">-->

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!--<link rel="apple-touch-icon" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="72x72" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="114x114" href="ссылка на фавикон для apple"> -->

    <!-- <meta property="og:image" content="ссылка на картинку для превью"> -->
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <div id="mobile-menu">
            <div class="block df">
                <ul>
                    <li>
                        <form action="">
                            <input type="text" placeholder="Search to item here">
                        </form>
                    </li>
                    <li><a href="#"><span>Explore</span></a></li>
                    <li><a href="#"><span>My items</span></a></li>
                    <li><a href="#"><span>Following</span></a></li>
                    <li><a href="#"><span>Create</span></a></li>
                    <li><a href="#"><span>Connect</span></a></li>

                </ul>
            </div>
        </div>
        <header>
            <div class="container">
                <div class="block df ">
                    <div class="logo">
                        <img src="./assets/img/logo.svg" alt="">
                        <span>NFT ART</span>
                    </div>
                    <div class="search">
                        <form action="">
                            <input type="text" placeholder="Search to item here">
                        </form>
                    </div>
                    <div class="items">
                        <div class="item"><a href="#">Explore</a></div>
                        <div class="item"><a href="#">My items</a></div>
                        <div class="item"><a href="#">Following</a></div>
                        <div class="item2"><a href="#">Create</a></div>
                        <div class="item2"><a href="#">Connect</a></div>
                    </div>
                        <div class="menu">
                            <!-- Кнопка Мобильного Меню -->
                            <button id="burger-menu">
                                <div class="box box_item1"></div>
                                <div class="box box_item2"></div>
                                <div class="box box_item3"></div>
                            </button>
                        </div>
                </div>
            </div>
        </header>
        <section class="sec1">
            <div class="container">
                <div class="text">
                    <h1>Discover, collect, and sell extraordinary NFTs</h1>
                    <p>Explore the upcoming NFT projects, get all the info you need to help you decide if that is the right project for you. Don’t forget to check the additional info in the project page, including relevant tips per project.</p>
                </div>
                <div class="buttons">
                    <div class="button"><a href="#">Explore</a></div>
                    <div class="button"><a href="#">Create</a></div>
                </div>
                <div class="link"><a href="">Learn more about NFT ART</a></div>

            </div>
        </section>
        <section class="sec2">
            <div class="container">
                <div class="text">
                    <h1>Top Sellers</h1>
                    <p>The leading top-selling NFT artist in the top 5 list this year.: Examining Some of the Most Popular NFT projects ·</p>
                </div>
                <div class="items">
                    <div class="item">
                        <a href="#">
                            <div class="position"><span>01</span></div>
                            <div class="photo"><img src="./assets/img/p1.png" alt=""></div>
                            <div class="text">
                                <h6>Brian Domanic</h6>
                                <span>21.05 ETH</span>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="position"><span>02</span></div>
                            <div class="photo"><img src="./assets/img/p2.png" alt=""></div>
                            <div class="text">
                                <h6>Ellin Syahnaz</h6>
                                <span>20.65 ETH</span>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="position"><span>03</span></div>
                            <div class="photo"><img src="./assets/img/p3.png" alt=""></div>
                            <div class="text">
                                <h6>Abraham Lincoln</h6>
                                <span>18.35 ETH</span>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="position"><span>04</span></div>
                            <div class="photo"><img src="./assets/img/p4.png" alt=""></div>
                            <div class="text">
                                <h6>Arabella Ava</h6>
                                <span>1.05 ETH</span>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="position"><span>05</span></div>
                            <div class="photo"><img src="./assets/img/p5.png" alt=""></div>
                            <div class="text">
                                <h6>Mike Muliadro</h6>
                                <span>1.05 ETH</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec3">
            <div class="container">
                <div class="text">
                    <h1>Hot Bids</h1>
                    <span>Non-Fungible Tokens (NFTs) are virtual tokens minted on the blockchain for digital scarcity, security, and authenticity. </span>
                </div>
                <div class="items">
                    <div class="item">
                        <a href="#">
                            <div class="nft"><img src="./assets/img/n1.jpg" alt=""></div>
                            <div class="name_price">
                                <div class="name">
                                    <p>David Art</p>
                                    <span>1.25 ETH</span>
                                </div>
                                <div class="buyers">
                                    <img src="./assets/img/pe1.jpg" alt="">
                                    <img src="./assets/img/pe2.jpg" alt="">
                                    <img src="./assets/img/pe3.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="nft"><img src="./assets/img/n2.jpg" alt=""></div>
                            <div class="name_price">
                                <div class="name">
                                    <p>David Art</p>
                                    <span>1.25 ETH</span>
                                </div>
                                <div class="buyers">
                                    <img src="./assets/img/pe4.jpg" alt="">
                                    <img src="./assets/img/pe5.jpg" alt="">
                                    <img src="./assets/img/pe6.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="nft"><img src="./assets/img/n3.jpg" alt=""></div>
                            <div class="name_price">
                                <div class="name">
                                    <p>David Art</p>
                                    <span>1.25 ETH</span>
                                </div>
                                <div class="buyers">
                                    <img src="./assets/img/pe7.jpg" alt="">
                                    <img src="./assets/img/pe8.jpg" alt="">
                                    <img src="./assets/img/pe9.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="nft"><img src="./assets/img/n4.jpg" alt=""></div>
                            <div class="name_price">
                                <div class="name">
                                    <p>David Art</p>
                                    <span>1.25 ETH</span>
                                </div>
                                <div class="buyers">
                                    <img src="./assets/img/pe10.jpg" alt="">
                                    <img src="./assets/img/pe11.jpg" alt="">
                                    <img src="./assets/img/pe12.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="nft"><img src="./assets/img/n5.jpg" alt=""></div>
                            <div class="name_price">
                                <div class="name">
                                    <p>David Art</p>
                                    <span>1.25 ETH</span>
                                </div>
                                <div class="buyers">
                                    <img src="./assets/img/pe13.jpg" alt="">
                                    <img src="./assets/img/pe14.jpg" alt="">
                                    <img src="./assets/img/pe15.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="nft"><img src="./assets/img/n6.jpg" alt=""></div>
                            <div class="name_price">
                                <div class="name">
                                    <p>David Art</p>
                                    <span>1.25 ETH</span>
                                </div>
                                <div class="buyers">
                                    <img src="./assets/img/pe16.jpg" alt="">
                                    <img src="./assets/img/pe17.jpg" alt="">
                                    <img src="./assets/img/pe18.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="nft"><img src="./assets/img/n7.jpg" alt=""></div>
                            <div class="name_price">
                                <div class="name">
                                    <p>David Art</p>
                                    <span>1.25 ETH</span>
                                </div>
                                <div class="buyers">
                                    <img src="./assets/img/pe19.jpg" alt="">
                                    <img src="./assets/img/pe20.jpg" alt="">
                                    <img src="./assets/img/pe21.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="nft"><img src="./assets/img/n8.jpg" alt=""></div>
                            <div class="name_price">
                                <div class="name">
                                    <p>David Art</p>
                                    <span>1.25 ETH</span>
                                </div>
                                <div class="buyers">
                                    <img src="./assets/img/pe22.jpg" alt="">
                                    <img src="./assets/img/pe23.jpg" alt="">
                                    <img src="./assets/img/pe24.jpg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec4">
            <div class="container">

            </div>
        </section>
        <section class="sec5">
            <div class="container">

            </div>
        </section>

        <footer>
            <div class="container">
                <div class="p1">
                    <div class="logo_search">
                        <div class="logo">
                            <img src="./assets/img/logo_foot.svg" alt="">
                            <span>NFT ART</span>
                        </div>
                        <div class="text">
                            <span>Get the lastes Updates</span>
                        </div>
                        <form action="">
                            <input type="text" placeholder="Your Email">
                            <button>Email Me!</button>
                        </form>
                    </div>
                    <div class="items">
                    <div class="nft_art">
                        <ul>
                            <span>NFT ART</span>
                            <li><a href="#">Explore</a></li>
                            <li><a href="#">How it Works</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="account">
                        <ul>
                            <span>My Account</span>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Favorites</a></li>
                            <li><a href="#">My Collections</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </div>
                    <div class="support">
                        <ul>
                            <span>Support</span>
                            <li><a href="#">Help center</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Legal</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="p2">
                    <span>NFT ART, Inc. All Rights Reserved</span>
                    <div class="items">
                        <div class="item"><a href="#"><img src="./assets/img/inst.svg" alt=""></a></div>
                        <div class="item"><a href="#"><img src="./assets/img/twit.svg" alt=""></a></div>
                        <div class="item"><a href="#"><img src="./assets/img/tg.svg" alt=""></a></div>
                        <div class="item"><a href="#"><img src="./assets/img/disc.svg" alt=""></a></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <?php require "modal.php"?>
    <?php require "footer.php"?>
