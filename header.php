<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package TMSAV-15
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<meta name="p:domain_verify" content="4026c0218551c045b2af7cc3bcfd73b5"/> 
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3734497-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Service",
  "name":"Texas Media Systems",
  "url":"http://texasmediasystems.com/",
  "areaServed" : "Austin, Texas",
  "category": "Audio Visual Equipment Services"
}
</script>
<!-- END Google Analytics -->
<!-- START SlickNav -->
<link rel="stylesheet" href="http://texasmediasystems.com/slicknav-tmsav/slicknav.css" />
<script src="http://texasmediasystems.com/slicknav-tmsav/jquery.slicknav.min.js"></script>
<!-- END SlickNav -->
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0021/1751.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>

<div style="display:none" itemscope itemtype="http://schema.org/SiteNavigationElement">
<a href="http://texasmediasystems.com/" itemprop="url"><span itemprop="name">Home</span></a>
<a href="https://shop.texasmediasystems.com/" itemprop="url"><span itemprop="name">Store</span></a>
<a href="http://texasmediasystems.com/blog/" itemprop="url"><span itemprop="name">TMS Blog</span></a>
<a href="http://texasmediasystems.com/rentals/" itemprop="url"><span itemprop="name">Rentals</span></a>
<a href="http://texasmediasystems.com/contact/" itemprop="url"><span itemprop="name">Contact Us</span></a>
<a href="http://www.texasmediasystems.com/about" itemprop="url"><span itemprop="name">About Us</span></a>
<a href="http://www.texasmediasystems.com/news.php" itemprop="url"><span itemprop="name">News</span></a>
<a href="http://www.texasmediasystems.com/nle.php" itemprop="url"><span itemprop="name">Non-Linear Editing</span></a>
<a href="http://www.texasmediasystems.com/video.php" itemprop="url"><span itemprop="name">Pro Video</span></a>
<a href="http://www.texasmediasystems.com/audio.php" itemprop="url"><span itemprop="name">Pro Audio</span></a>
<a href="http://www.texasmediasystems.com/pres.php" itemprop="url"><span itemprop="name">Presentation</span></a>
<a href="http://texasmediasystems.com/line-card/" itemprop="url"><span itemprop="name">Line Card</span></a>
<a href="http://www.texasmediasystems.com/jobs.php" itemprop="url"><span itemprop="name">Jobs</span></a>
<a href="http://www.texasmediasystems.com/download.php" itemprop="url"><span itemprop="name">Downloads</span></a>
<a href="https://shop.texasmediasystems.com/Privacy-Policy_ep_38-1.html" itemprop="url"><span itemprop="name">Privacy Policy</span></a>
</div>

</head>
<body <?php body_class(); ?>>
<div class="top-menu">
<div class="wrapper">
<nav id="top-nav">
<ul>
<li><a href="http://www.texasmediasystems.com" title="Texas Media Systems">Home</a></li>
<li><a href="https://shop.texasmediasystems.com" title="Texas Media Systems Store">Store</a></li>
<li><a href="http://www.texasmediasystems.com/blog" title="Texas Media Systems Blog">TMS Blog</a></li>
<li><a href="http://www.texasmediasystems.com/rentals" title="Texas Media Systems rentals">Rentals</a></li>
<li class="disappear"><a href="http://www.texasmediasystems.com/contact" title=" Contact Texas Media Systems" class="disappear">Contact</a></li>
</ul>
<div class="mobile-nav">
	<ul id="menu">
<li><a href="http://www.texasmediasystems.com/about" title="About Texas Media Systems">About Us</a></li>
<li><a href="http://www.texasmediasystems.com/contact" title="Contact Texas Media Systems">Contact</a></li>
<li><a href="http://www.texasmediasystems.com/news.php" title="Texas Media Systems News">News</a></li>
<li><a href="http://www.texasmediasystems.com/nle.php" title="Non-Linear Editing">NLE</a></li>
<li><a href="http://www.texasmediasystems.com/video.php" title="TMS Pro Video">Pro Video</a></li>
<li><a href="http://www.texasmediasystems.com/audio.php" title="TMS Pro Audio">Pro Audio</a></li>
<li><a href="http://www.texasmediasystems.com/pres.php" title="TMS Presentation">Presentation</a></li>
<li><a href="http://www.texasmediasystems.com/line-card" title="Line Card">Line Card</a></li>
<li><a href="rentals" title="TMS Rental Equipment">Rentals</a></li>
<li><a href="http://www.texasmediasystems.com/jobs.php" title="TMS Jobs">Jobs</a></li>
<li><a href="http://www.texasmediasystems.com/download.php" title="Downloads">Downloads</a></li>
<li><a href="http://www.texasmediasystems.com/spanish.php" title="Texas Media Systems">Espa&ntilde;ol</a></li>
<li><a href="http://shop.texasmediasystems.com/Privacy-Policy_ep_38-1.html" title="TMS Privacy Policy">Privacy Policy</a></li>
</ul>
</div>
</nav>
</div>
</div>
<div id="container">
<div id="clearFloats">
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'texas-media-systems-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div id="store-name">
			<h1 class="store-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="store-slogan"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->
<div id="storelink">
<!--START: FRAME_SEARCH-->        
          <div id="searchBox">
            <form method="get" name="searchForm" action="http://shop.texasmediasystems.com/search.asp">
              <input type="text" id="searchlight" name="keyword" value="" placeholder="SEARCH" />
              <input type="submit" name="search" value="" />
            </form>
            <div class="clear"></div>
          </div>
        <!--END: FRAME_SEARCH--> 
</div>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
