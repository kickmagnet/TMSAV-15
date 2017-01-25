<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package TMSAV-15
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>



<div id="secondary" class="widget-area" role="complementary">

<div id="left">
<img src="http://www.texasmediasystems.com/images/tms_ico.jpg" alt="Texas Media Systems Logo" class="logo">

<nav>
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="slicknav-tmsav/jquery.slicknav.js"></script>
    <script>
        $(document).ready(function(){
            $('#menu').slicknav(
			
			);
        });
    </script>


<ul class="side-nav">
<a href="http://www.texasmediasystems.com/about" title="About Texas Media Systems"><li class="first">About Us</li></a>
<a href="http://www.texasmediasystems.com/contact" title="Contact Texas Media Systems"><li>Contact</li></a>
<a href="http://www.texasmediasystems.com/news.php" title="Texas Media Systems News"><li>News</li></a>
<a href="http://www.texasmediasystems.com/nle.php" title="Non-Linear Editing"><li>NLE</li></a>
<a href="http://www.texasmediasystems.com/video.php" title="TMS Pro Video"><li>Pro Video</li></a>
<a href="http://www.texasmediasystems.com/audio.php" title="TMS Pro Audio"><li>Pro Audio</li></a>
<a href="http://www.texasmediasystems.com/pres.php" title="TMS Presentation"><li>Presentation</li></a>
<a href="http://www.texasmediasystems.com/line-card" title="Line Card"><li>Line Card</li></a>
<a href="rentals" title="TMS Rental Equipment"><li>Rentals</li></a>
<a href="http://www.texasmediasystems.com/jobs.php" title="TMS Jobs"><li>Jobs</li></a>
<a href="http://www.texasmediasystems.com/download.php" title="Downloads"><li>Downloads</li></a>
<a href="http://www.texasmediasystems.com/spanish.php" title="Texas Media Systems"><li>Espa&ntilde;ol</li></a>
<a href="http://shop.texasmediasystems.com/Privacy-Policy_ep_38-1.html" title="TMS Privacy Policy"><li>Privacy Policy</li></a>
</ul> <!-- end .nav -->
</nav>

<table style="text-align:center;margin-bottom:20px;" cellpadding="0" cellspacing="3" class="social-icons" >
<tbody>
<tr>
<td style="padding:0;">
<a  href="http://twitter.com/txmedia"><img src="http://www.texasmediasystems.com/images/twitter2_32.png" ></a></td>
<td style="padding:0;">
<a href="http://vimeo.com/txmedia"><img src="http://www.texasmediasystems.com/images/vimeo_32.png" ></a></td>
<td style="padding:0;">
<a  href="http://www.facebook.com/texasmediasystems"><img src="http://www.texasmediasystems.com/images/facebook_32.png" ></a></td>
<td style="padding:0;">
<a  href="http://pinterest.com/txmedia"><img src="http://www.texasmediasystems.com/images/pinterest_32.png" ></a></td>
</tr>

</tbody>
</table>



</div><!-- end #left -->

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
