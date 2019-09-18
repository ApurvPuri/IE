<?php
/*
	Template Name: classify waste 1
*/
?>
<!DOCTYPE html>

<?php 	
	if(isset($_POST['submit'])){
		$rating = $_POST['radiobutton'];
		$conn = new mysqli('localhost', 'wordpress', 'SBiX5me1', 'wordpress');
		if ($conn->connect_error) {
			echo "error";
		}
		$sql = "INSERT INTO rating (rating) values ('".$_POST['radiobutton']."')";
		if ($conn->query($sql)){
			// will add the response message like "thank you" later
		} else {
			echo "error";
		}
		$conn->close();
	} 
?>


<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<title>Classify your waste &#8211; Towards A Greener Tomorrow</title>
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Towards A Greener Tomorrow &raquo; Feed" href="https://towardsagreenertomorrow.ml/feed/" />
<link rel="alternate" type="application/rss+xml" title="Towards A Greener Tomorrow &raquo; Comments Feed" href="https://towardsagreenertomorrow.ml/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/towardsagreenertomorrow.ml\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.3"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='astra-theme-css-css'  href='https://towardsagreenertomorrow.ml/wp-content/themes/astra/assets/css/minified/style.min.css?ver=2.0.1' type='text/css' media='all' />
<style id='astra-theme-css-inline-css' type='text/css'>
html{font-size:100%;}a,.page-title{color:#fb2056;}a:hover,a:focus{color:#fb2056;}body,button,input,select,textarea{font-family:Verdana,Helvetica,Arial,sans-serif;font-weight:400;font-size:16px;font-size:1rem;line-height:1.49;}blockquote{color:#000000;}h1,.entry-content h1,h2,.entry-content h2,h3,.entry-content h3,h4,.entry-content h4,h5,.entry-content h5,h6,.entry-content h6,.site-title,.site-title a{font-family:Verdana,Helvetica,Arial,sans-serif;font-weight:400;}.site-title{font-size:20px;font-size:1.25rem;}header .site-logo-img .custom-logo-link img{max-width:37px;}.astra-logo-svg{width:37px;}.ast-archive-description .ast-archive-title{font-size:40px;font-size:2.5rem;}.site-header .site-description{font-size:15px;font-size:0.9375rem;}.entry-title{font-size:30px;font-size:1.875rem;}.comment-reply-title{font-size:26px;font-size:1.625rem;}.ast-comment-list #cancel-comment-reply-link{font-size:16px;font-size:1rem;}h1,.entry-content h1{font-size:64px;font-size:4rem;}h2,.entry-content h2{font-size:32px;font-size:2rem;}h3,.entry-content h3{font-size:24px;font-size:1.5rem;}h4,.entry-content h4{font-size:20px;font-size:1.25rem;}h5,.entry-content h5{font-size:18px;font-size:1.125rem;}h6,.entry-content h6{font-size:15px;font-size:0.9375rem;}.ast-single-post .entry-title,.page-title{font-size:30px;font-size:1.875rem;}#secondary,#secondary button,#secondary input,#secondary select,#secondary textarea{font-size:16px;font-size:1rem;}::selection{background-color:#fb2056;color:#ffffff;}body,h1,.entry-title a,.entry-content h1,h2,.entry-content h2,h3,.entry-content h3,h4,.entry-content h4,h5,.entry-content h5,h6,.entry-content h6{color:#222222;}.tagcloud a:hover,.tagcloud a:focus,.tagcloud a.current-item{color:#ffffff;border-color:#fb2056;background-color:#fb2056;}.main-header-menu a,.ast-header-custom-item a{color:#222222;}.main-header-menu li:hover > a,.main-header-menu li:hover > .ast-menu-toggle,.main-header-menu .ast-masthead-custom-menu-items a:hover,.main-header-menu li.focus > a,.main-header-menu li.focus > .ast-menu-toggle,.main-header-menu .current-menu-item > a,.main-header-menu .current-menu-ancestor > a,.main-header-menu .current_page_item > a,.main-header-menu .current-menu-item > .ast-menu-toggle,.main-header-menu .current-menu-ancestor > .ast-menu-toggle,.main-header-menu .current_page_item > .ast-menu-toggle{color:#fb2056;}input:focus,input[type="text"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="reset"]:focus,input[type="search"]:focus,textarea:focus{border-color:#fb2056;}input[type="radio"]:checked,input[type=reset],input[type="checkbox"]:checked,input[type="checkbox"]:hover:checked,input[type="checkbox"]:focus:checked,input[type=range]::-webkit-slider-thumb{border-color:#fb2056;background-color:#fb2056;box-shadow:none;}.site-footer a:hover + .post-count,.site-footer a:focus + .post-count{background:#fb2056;border-color:#fb2056;}.ast-small-footer{color:#d3d3d3;}.ast-small-footer > .ast-footer-overlay{background-color:#191919;}.ast-small-footer a{color:#fb2056;}.ast-small-footer a:hover{color:rgba(78,173,85,0.97);}.footer-adv .footer-adv-overlay{border-top-style:solid;border-top-color:#7a7a7a;}.ast-comment-meta{line-height:1.666666667;font-size:13px;font-size:0.8125rem;}.single .nav-links .nav-previous,.single .nav-links .nav-next,.single .ast-author-details .author-title,.ast-comment-meta{color:#fb2056;}.menu-toggle,button,.ast-button,.button,input#submit,input[type="button"],input[type="submit"],input[type="reset"]{border-radius:60px;padding:8px 38px;color:#ffffff;border-color:#fb2056;background-color:#fb2056;}button:focus,.menu-toggle:hover,button:hover,.ast-button:hover,.button:hover,input[type=reset]:hover,input[type=reset]:focus,input#submit:hover,input#submit:focus,input[type="button"]:hover,input[type="button"]:focus,input[type="submit"]:hover,input[type="submit"]:focus{color:#ffffff;border-color:#fb2056;background-color:#fb2056;}.entry-meta,.entry-meta *{line-height:1.45;color:#fb2056;}.entry-meta a:hover,.entry-meta a:hover *,.entry-meta a:focus,.entry-meta a:focus *{color:#fb2056;}.ast-404-layout-1 .ast-404-text{font-size:200px;font-size:12.5rem;}.widget-title{font-size:22px;font-size:1.375rem;color:#222222;}#cat option,.secondary .calendar_wrap thead a,.secondary .calendar_wrap thead a:visited{color:#fb2056;}.secondary .calendar_wrap #today,.ast-progress-val span{background:#fb2056;}.secondary a:hover + .post-count,.secondary a:focus + .post-count{background:#fb2056;border-color:#fb2056;}.calendar_wrap #today > a{color:#ffffff;}.ast-pagination a,.page-links .page-link,.single .post-navigation a{color:#fb2056;}.ast-pagination a:hover,.ast-pagination a:focus,.ast-pagination > span:hover:not(.dots),.ast-pagination > span.current,.page-links > .page-link,.page-links .page-link:hover,.post-navigation a:hover{color:#fb2056;}.ast-header-break-point .ast-mobile-menu-buttons-minimal.menu-toggle{background:transparent;color:#000000;}.ast-header-break-point .ast-mobile-menu-buttons-outline.menu-toggle{background:transparent;border:1px solid #000000;color:#000000;}.ast-header-break-point .ast-mobile-menu-buttons-fill.menu-toggle{background:#000000;color:#ffffff;}.ast-header-break-point .main-header-bar .ast-button-wrap .menu-toggle{border-radius:0px;}.main-header-bar .button-custom-menu-item .ast-custom-button-link .ast-custom-button{padding-top:10px;padding-bottom:10px;padding-left:26px;padding-right:26px;border-style:solid;border-top-width:0px;border-right-width:0px;border-left-width:0px;border-bottom-width:0px;}.ast-theme-transparent-header .main-header-bar .button-custom-menu-item .ast-custom-button-link .ast-custom-button{color:rgba(255,255,255,0.9);background-color:rgba(255,255,255,0);padding-top:8px;padding-bottom:8px;padding-left:22px;padding-right:22px;border-style:solid;border-color:rgba(255,255,255,0.9);border-top-width:2px;border-right-width:2px;border-left-width:2px;border-bottom-width:2px;}.ast-theme-transparent-header .main-header-bar .button-custom-menu-item .ast-custom-button-link .ast-custom-button:hover{color:#ffffff;background-color:#fb2056;border-color:#fb2056;}@media (min-width:545px){.ast-page-builder-template .comments-area,.single.ast-page-builder-template .entry-header,.single.ast-page-builder-template .post-navigation{max-width:1240px;margin-left:auto;margin-right:auto;}}@media (max-width:768px){.ast-archive-description .ast-archive-title{font-size:40px;}.entry-title{font-size:30px;}h1,.entry-content h1{font-size:44px;}h2,.entry-content h2{font-size:25px;}h3,.entry-content h3{font-size:20px;}.ast-single-post .entry-title,.page-title{font-size:30px;}}@media (max-width:544px){.comment-reply-title{font-size:24px;font-size:1.6rem;}.ast-comment-meta{font-size:12px;font-size:0.8rem;}.widget-title{font-size:21px;font-size:1.4rem;}body,button,input,select,textarea{font-size:15px;font-size:0.9375rem;}.ast-comment-list #cancel-comment-reply-link{font-size:15px;font-size:0.9375rem;}#secondary,#secondary button,#secondary input,#secondary select,#secondary textarea{font-size:15px;font-size:0.9375rem;}.site-title{font-size:20px;font-size:1.25rem;}.ast-archive-description .ast-archive-title{font-size:40px;}.site-header .site-description{font-size:14px;font-size:0.875rem;}.entry-title{font-size:30px;}h1,.entry-content h1{font-size:30px;}h2,.entry-content h2{font-size:24px;}h3,.entry-content h3{font-size:20px;}h4,.entry-content h4{font-size:19px;font-size:1.1875rem;}h5,.entry-content h5{font-size:16px;font-size:1rem;}h6,.entry-content h6{font-size:15px;font-size:0.9375rem;}.ast-single-post .entry-title,.page-title{font-size:30px;}.ast-header-break-point .site-branding img,.ast-header-break-point #masthead .site-logo-img .custom-logo-link img{max-width:100px;}.astra-logo-svg{width:100px;}.ast-header-break-point .site-logo-img .custom-mobile-logo-link img{max-width:100px;}}@media (max-width:768px){html{font-size:91.2%;}}@media (max-width:544px){html{font-size:100%;}}@media (min-width:769px){.ast-container{max-width:1240px;}}@font-face {font-family: "Astra";src: url( https://towardsagreenertomorrow.ml/wp-content/themes/astra/assets/fonts/astra.woff) format("woff"),url( https://towardsagreenertomorrow.ml/wp-content/themes/astra/assets/fonts/astra.ttf) format("truetype"),url( https://towardsagreenertomorrow.ml/wp-content/themes/astra/assets/fonts/astra.svg#astra) format("svg");font-weight: normal;font-style: normal;font-display: fallback;}@media (max-width:921px) {.main-header-bar .main-header-bar-navigation{display:none;}}.ast-desktop .main-header-menu.submenu-with-border .sub-menu,.ast-desktop .main-header-menu.submenu-with-border .children,.ast-desktop .main-header-menu.submenu-with-border .astra-full-megamenu-wrapper{border-color:#000000;}.ast-desktop .main-header-menu.submenu-with-border .sub-menu,.ast-desktop .main-header-menu.submenu-with-border .children{border-top-width:0px;border-right-width:0px;border-left-width:0px;border-bottom-width:0px;border-style:solid;}.ast-desktop .main-header-menu.submenu-with-border .sub-menu .sub-menu,.ast-desktop .main-header-menu.submenu-with-border .children .children{top:-0px;}.ast-desktop .main-header-menu.submenu-with-border .sub-menu a,.ast-desktop .main-header-menu.submenu-with-border .children a{border-bottom-width:1px;border-style:solid;border-color:#eaeaea;}@media (min-width:769px){.main-header-menu .sub-menu li.ast-left-align-sub-menu:hover > ul,.main-header-menu .sub-menu li.ast-left-align-sub-menu.focus > ul{margin-left:-0px;}}.ast-small-footer{border-top-style:solid;border-top-width:0;border-top-color:#7a7a7a;}.ast-small-footer-wrap{text-align:center;}@media (max-width:920px){.ast-404-layout-1 .ast-404-text{font-size:100px;font-size:6.25rem;}}
.ast-header-break-point .site-header{border-bottom-width:0;}@media (min-width:769px){.main-header-bar{border-bottom-width:0;}}.main-header-menu .menu-item, .main-header-bar .ast-masthead-custom-menu-items{-js-display:flex;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-moz-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-moz-box-orient:vertical;-moz-box-direction:normal;-ms-flex-direction:column;flex-direction:column;}.main-header-menu > .menu-item > a{height:100%;-webkit-box-align:center;-webkit-align-items:center;-moz-box-align:center;-ms-flex-align:center;align-items:center;-js-display:flex;display:flex;}.ast-primary-menu-disabled .main-header-bar .ast-masthead-custom-menu-items{flex:unset;}
#masthead .ast-container, .ast-header-breadcrumb .ast-container{max-width:100%;padding-left:35px;padding-right:35px;}@media (max-width:921px){#masthead .ast-container, .ast-header-breadcrumb .ast-container{padding-left:20px;padding-right:20px;}}#masthead .ast-container,.ast-header-breadcrumb .ast-container{max-width:100%;padding-left:35px;padding-right:35px;}@media (max-width:921px){#masthead .ast-container,.ast-header-breadcrumb .ast-container{padding-left:20px;padding-right:20px;}}
.ast-breadcrumbs .trail-browse, .ast-breadcrumbs .trail-items, .ast-breadcrumbs .trail-items li{display:inline-block;margin:0;padding:0;border:none;background:inherit;text-indent:0;}.ast-breadcrumbs .trail-browse{font-size:inherit;font-style:inherit;font-weight:inherit;color:inherit;}.ast-breadcrumbs .trail-items{list-style:none;}.trail-items li::after{padding:0 0.3em;content:"»";}.trail-items li:last-of-type::after{display:none;}
</style>
<link rel='stylesheet' id='astra-menu-animation-css'  href='https://towardsagreenertomorrow.ml/wp-content/themes/astra/assets/css/minified/menu-animation.min.css?ver=2.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='https://towardsagreenertomorrow.ml/wp-includes/css/dist/block-library/style.min.css?ver=5.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-style-css'  href='https://towardsagreenertomorrow.ml/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=2.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href='https://towardsagreenertomorrow.ml/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce-layout.min.css?ver=2.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='https://towardsagreenertomorrow.ml/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce-smallscreen.min.css?ver=2.0.1' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='https://towardsagreenertomorrow.ml/wp-content/themes/astra/assets/css/minified/compatibility/woocommerce/woocommerce.min.css?ver=2.0.1' type='text/css' media='all' />
<style id='woocommerce-general-inline-css' type='text/css'>
.woocommerce span.onsale{background-color:#fb2056;color:#ffffff;}.woocommerce a.button, .woocommerce button.button, .woocommerce .woocommerce-message a.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button,.woocommerce input.button:disabled, .woocommerce input.button:disabled[disabled], .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover, .woocommerce #respond input#submit, .woocommerce button.button.alt.disabled{color:#ffffff;border-color:#fb2056;background-color:#fb2056;}.woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce .woocommerce-message a.button:hover,.woocommerce #respond input#submit:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce input.button:hover, .woocommerce button.button.alt.disabled:hover{color:#ffffff;border-color:#fb2056;background-color:#fb2056;}.woocommerce-message, .woocommerce-info{border-top-color:#fb2056;}.woocommerce-message::before,.woocommerce-info::before{color:#fb2056;}.woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .widget_layered_nav_filters ul li.chosen a, .woocommerce-page ul.products li.product .ast-woo-product-category, .wc-layered-nav-rating a{color:#222222;}.woocommerce nav.woocommerce-pagination ul,.woocommerce nav.woocommerce-pagination ul li{border-color:#fb2056;}.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{background:#fb2056;color:#ffffff;}.woocommerce-MyAccount-navigation-link.is-active a{color:#fb2056;}.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{background-color:#fb2056;}.woocommerce a.button, .woocommerce button.button, .woocommerce .woocommerce-message a.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button,.woocommerce-cart table.cart td.actions .button, .woocommerce form.checkout_coupon .button, .woocommerce #respond input#submit{border-radius:60px;padding:8px 38px;}.woocommerce .star-rating, .woocommerce .comment-form-rating .stars a, .woocommerce .star-rating::before{color:#fb2056;}.woocommerce div.product .woocommerce-tabs ul.tabs li.active:before{background:#fb2056;}.ast-site-header-cart a{color:#222222;}.ast-site-header-cart a:focus, .ast-site-header-cart a:hover, .ast-site-header-cart .current-menu-item a{color:#fb2056;}.ast-cart-menu-wrap .count, .ast-cart-menu-wrap .count:after{border-color:#fb2056;color:#fb2056;}.ast-cart-menu-wrap:hover .count{color:#ffffff;background-color:#fb2056;}.ast-site-header-cart .widget_shopping_cart .total .woocommerce-Price-amount{color:#fb2056;}.woocommerce a.remove:hover, .ast-woocommerce-cart-menu .main-header-menu .woocommerce-custom-menu-item li:hover > a.remove:hover{color:#fb2056;border-color:#fb2056;background-color:#ffffff;}.ast-site-header-cart .widget_shopping_cart .buttons .button.checkout, .woocommerce .widget_shopping_cart .woocommerce-mini-cart__buttons .checkout.wc-forward{color:#ffffff;border-color:#fb2056;background-color:#fb2056;}.site-header .ast-site-header-cart-data .button.wc-forward, .site-header .ast-site-header-cart-data .button.wc-forward:hover{color:#ffffff;}.below-header-user-select .ast-site-header-cart .widget, .ast-above-header-section .ast-site-header-cart .widget a, .below-header-user-select .ast-site-header-cart .widget_shopping_cart a{color:#222222;}.below-header-user-select .ast-site-header-cart .widget_shopping_cart a:hover, .ast-above-header-section .ast-site-header-cart .widget_shopping_cart a:hover, .below-header-user-select .ast-site-header-cart .widget_shopping_cart a.remove:hover, .ast-above-header-section .ast-site-header-cart .widget_shopping_cart a.remove:hover{color:#fb2056;}@media (min-width:769px){.ast-woo-shop-archive .site-content > .ast-container{max-width:1240px;}}
</style>
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='hfe-style-css'  href='https://towardsagreenertomorrow.ml/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.1.4' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='https://towardsagreenertomorrow.ml/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.4.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-animations-css'  href='https://towardsagreenertomorrow.ml/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=2.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='https://towardsagreenertomorrow.ml/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=2.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css'  href='https://towardsagreenertomorrow.ml/wp-content/uploads/elementor/css/global.css?ver=1568708116' type='text/css' media='all' />
<link rel='stylesheet' id='tablepress-default-css'  href='https://towardsagreenertomorrow.ml/wp-content/plugins/tablepress/css/default.min.css?ver=1.9.2' type='text/css' media='all' />
<!--n2css--><script>if (document.location.protocol != "https:") {document.location = document.URL.replace(/^http:/i, "https:");}</script><!--[if IE]>
<script type='text/javascript' src='https://towardsagreenertomorrow.ml/wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=2.0.1'></script>
<script type='text/javascript'>
flexibility(document.documentElement);
</script>
<![endif]-->
<script type='text/javascript' src='https://towardsagreenertomorrow.ml/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='https://towardsagreenertomorrow.ml/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://towardsagreenertomorrow.ml/wp-content/plugins/sticky-menu-or-anything-on-scroll/assets/js/jq-sticky-anything.min.js?ver=2.1.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpgmza_google_api_status = {"message":"Enqueued","code":"ENQUEUED"};
/* ]]> */
</script>
<script type='text/javascript' src='https://towardsagreenertomorrow.ml/wp-content/plugins/wp-google-maps/wpgmza_data.js?ver=5.2.3'></script>
<script type='text/javascript' src='https://towardsagreenertomorrow.ml/wp-content/uploads/hm_custom_css_js/custom.js?ver=1566988269'></script>
<link rel='https://api.w.org/' href='https://towardsagreenertomorrow.ml/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://towardsagreenertomorrow.ml/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://towardsagreenertomorrow.ml/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.2.3" />
<meta name="generator" content="WooCommerce 3.7.0" />
<link rel="canonical" href="https://towardsagreenertomorrow.ml/bin-collection-test/" />
<link rel='shortlink' href='https://towardsagreenertomorrow.ml/?p=1559' />
<link rel="alternate" type="application/json+oembed" href="https://towardsagreenertomorrow.ml/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftowardsagreenertomorrow.ml%2Fbin-collection-test%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://towardsagreenertomorrow.ml/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftowardsagreenertomorrow.ml%2Fbin-collection-test%2F&#038;format=xml" />
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
			<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<link rel="icon" href="https://towardsagreenertomorrow.ml/wp-content/uploads/2019/09/cropped-Capture1-32x32.jpg" sizes="32x32" />
<link rel="icon" href="https://towardsagreenertomorrow.ml/wp-content/uploads/2019/09/cropped-Capture1-192x192.jpg" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://towardsagreenertomorrow.ml/wp-content/uploads/2019/09/cropped-Capture1-180x180.jpg" />
<meta name="msapplication-TileImage" content="https://towardsagreenertomorrow.ml/wp-content/uploads/2019/09/cropped-Capture1-270x270.jpg" />
</head>

<body data-rsssl=1 itemtype='https://schema.org/WebPage' itemscope='itemscope' class="page-template-default page page-id-1559 wp-custom-logo theme-astra woocommerce-no-js ehf-template-astra ehf-stylesheet-astra ast-desktop ast-separate-container ast-two-container ast-no-sidebar astra-2.0.1 ast-header-custom-item-inside ast-single-post ast-inherit-site-logo-transparent ast-normal-title-enabled elementor-default">

<div 
	class="hfeed site" id="page">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	
	
		<header itemtype="https://schema.org/WPHeader" itemscope="itemscope" id="masthead" class="site-header ast-primary-submenu-animation-fade header-main-layout-1 ast-primary-menu-enabled ast-logo-title-inline ast-menu-toggle-icon ast-mobile-header-inline" role="banner">

			
			
<div class="main-header-bar-wrap">
	<div class="main-header-bar">
				<div class="ast-container">

			<div class="ast-flex main-header-container">
				
		<div class="site-branding">
			<div class="ast-site-identity" itemscope="itemscope" itemtype="https://schema.org/Organization">
				<span class="site-logo-img"><a href="https://towardsagreenertomorrow.ml/" class="custom-logo-link" rel="home"><img width="100" height="86" src="https://towardsagreenertomorrow.ml/wp-content/uploads/2019/09/cropped-5614139f-979c-41d4-abcf-2bfb5bfd0a95_200x200-100x86.png" class="custom-logo" alt="Towards A Greener Tomorrow" srcset="https://towardsagreenertomorrow.ml/wp-content/uploads/2019/09/cropped-5614139f-979c-41d4-abcf-2bfb5bfd0a95_200x200-100x86.png 100w, https://towardsagreenertomorrow.ml/wp-content/uploads/2019/09/cropped-5614139f-979c-41d4-abcf-2bfb5bfd0a95_200x200.png 130w" sizes="(max-width: 100px) 100vw, 100px" /></a></span><div class="ast-site-title-wrap">
							<span class="site-title" itemprop="name">
					<a href="https://towardsagreenertomorrow.ml/" rel="home" itemprop="url" >
						Towards A Greener Tomorrow
					</a>
				</span>
							
						</div>			</div>
		</div>

		<!-- .site-branding -->
				<div class="ast-mobile-menu-buttons">

			
					<div class="ast-button-wrap">
			<button type="button" class="menu-toggle main-header-menu-toggle  ast-mobile-menu-buttons-minimal "  aria-controls='primary-menu' aria-expanded='false'>
				<span class="screen-reader-text">Main Menu</span>
				<span class="menu-toggle-icon"></span>
							</button>
		</div>
			
			
		</div>
			<div class="ast-main-header-bar-alignment"><div class="main-header-bar-navigation"><nav itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope" id="site-navigation" class="ast-flex-grow-1 navigation-accessibility" aria-label="Site Navigation"><div class="main-navigation"><ul id="primary-menu" class="main-header-menu ast-nav-menu ast-flex ast-justify-content-flex-end  submenu-with-border astra-menu-animation-fade "><li id="menu-item-1595" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1595"><a href="https://towardsagreenertomorrow.ml/">Home</a></li>
<li id="menu-item-1031" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1031"><a href="https://towardsagreenertomorrow.ml/classify-waste/">Classify waste</a></li>
<li id="menu-item-1522" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1522"><a href="https://towardsagreenertomorrow.ml/bin-collection/">Clear my bin</a></li>
<li id="menu-item-1865" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1865"><a href="https://towardsagreenertomorrow.ml/e-mail-subscription/">Subscribe</a></li>
<li id="menu-item-1840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1840"><a href="https://towardsagreenertomorrow.ml/more/">More</a><button class="ast-menu-toggle" role="button" aria-expanded="false"><span class="screen-reader-text">Menu Toggle</span></button>
<ul class="sub-menu">
	<li id="menu-item-1841" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1841"><a href="https://towardsagreenertomorrow.ml/about/">About us</a></li>
	<li id="menu-item-1842" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1842"><a href="https://towardsagreenertomorrow.ml/contact/">Contact us</a></li>
	<li id="menu-item-1843" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1843"><a href="https://towardsagreenertomorrow.ml/did-you-know/">Facts</a></li>
</ul>
</li>
</ul></div></nav></div></div>			</div><!-- Main Header Container -->
		</div><!-- ast-row -->
			</div> <!-- Main Header Bar -->
</div> <!-- Main Header Bar Wrap -->

			
		</header><!-- #masthead -->

		
	
	
	<div id="content" class="site-content">

		<div class="ast-container">

		

	<div id="primary" class="content-area primary">

		
					<main id="main" class="site-main">

				
					
					

<article 

	class="post-1559 page type-page status-publish ast-article-single" itemtype="https://schema.org/CreativeWork" itemscope="itemscope" id="post-f">

	
	<header class="entry-header ast-header-without-markup">

		
		<h1 class="entry-title" itemprop="headline"></h1>	</header><!-- .entry-header -->

	<div class="entry-content clear" itemprop="text">

		
		
<style>
					body {
						background-color: #ffffff;
                        
					}

					#all {
						width: 100%;
						background-color: #ddd;
					}

					#confidence {
						width: 0%;
						height: 30px;
						background-color: #4CAF50;
					}
                    

                    .left {
						background-color: #ffffff;
						float: left;
						max-width:100%;
						height: relative;
						width: 35%;
                    }
                    .right {
						background-color: #ffffff;
						float: left;
						max-width:100%;
						height: relative;
						width: 35%;
                    }
					.middle {
						background-color: #ffffff;
						float: left;
						max-width:100%;
						height: relative;
						width: 30%;						
					}

                    .container {
                      position: relative;
                    }
				</style>
					
				<div id="all">
				  <div id="confidence"></div>
				</div>
				<br>

				<p>Upload an Image</</p>
				<p style="text-align: center;">
					<input type="file" onchange="previewFile()"><br>
				</p>


				<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">
				
                
                <div class="container">
					<div class="left">
						<div id="uploaded"></div>
					</div> <!-- end .left-half -->
					
					<div class="middle">
						<div id="arrow"></div>
					</div> <!-- end .right-half -->
					
					<div class="right">
						<div id="bin"></div>
					</div> <!-- end .right-half -->

                </div> <!-- end .container -->
                <div class="container">
				<div id="warning"> </div><br>
				</div>
                    <div>
                    <h4>Was this page useful ?</h4>
				<form id="form1" name="form1" method="post" action="" onsubmit="formResponse()">
					<table width="90%" border="0">
						<tr>
							<td>    
								<label>
									<input name="radiobutton" type="radio" value="2" /> Yes 
								</label>
							</td>
						</tr>
						<tr>
							<td>
								<label>
									<input name="radiobutton" type="radio" value="1" /> No
								</label>
							</td>
						</tr>
						<tr>
						<td>
							<label>
								<input type="submit" name="submit" value="submit" />
								<input type="hidden" name="id" value="'.$aID.'" />
							</label>
						</td>
						</tr>
					</table>
				</form>
                </div>

				<script type="text/javascript">
					var reader  = new FileReader();
					
					// check if the uploaded file is an image
					function isFileImage(file) {
						return file && file['type'].split('/')[0] === 'image';
					}	
					
					function formResponse(){
						alert("Thank you for rating!");
						return;
					}
					
					// handle the uploaded file
					function previewFile(){
						var file    = document.querySelector('input[type=file]').files[0]; //sames as here
						
						reader.onloadend = function () {
							
							console.log('RESULT', reader.result);			
				   
							var tmp = reader.result;
							var b64 = tmp.replace(/^data:image.+;base64,/, '');
				   
							var msg=JSON.stringify({"requests":[{  "image":{        "content":b64      }  ,  "features": [{"type":"LABEL_DETECTION","maxResults":15}]    } ]});

							var e=new XMLHttpRequest;
							var objJSON;
							e.onload=function(){
								console.log(e.responseText);
								objJSON = JSON.parse(e.responseText);

								var i;
								var description = [];
								var scores = [];
								var labelAnnotation = objJSON["responses"]["0"]["labelAnnotations"];
								console.log(labelAnnotation);
								for (i = 0; i< labelAnnotation.length; i++){
									description[i] = labelAnnotation[i.toString()]["description"];
									scores[i] = labelAnnotation[i.toString()]["score"];
								}
								console.log(description);
								var category = "unknown";
								var score = 0;
								var recyclable = ["PAPER", "GLASS", "PLASTIC", "CARDBOARD", "BEIGE", "TIN", "LABEL", "DRINK", "BOTTLE", "METAL"];
								var notRecyclable = ["TRASH", "FOOD"];
								var plant = ["PLANT", "TREE"];

								// check if there is a matched keyword for labels in response and record the confidence score
								loop1:
									for (i = 0; i < description.length; i++){
										loop2:
											for (j = 0; j < recyclable.length; j++){
												if (description[i].toUpperCase() === recyclable[j]){
													category = "recyclable";
													score = scores[i];
													break loop1;
												}
											}
											for (k = 0; k < recyclable.length; k++){
												if (description[i].toUpperCase() === notRecyclable[k]){
													category = "notRecyclable";
													score = scores[i];
													break loop1;
												}
											}
											for (l=0; l < plant.length; l++){
												if (description[i].toUpperCase() === plant[l]){
													category = "plant";
													score = scores[i];
													break loop1;
												}
											}
									}			   
								
								
								
								score = Math.round(score * 10000) / 100;
								
								// show uploaded image
								var upimg = new Image();
								var uploaded = document.getElementById('uploaded');
								upimg.onload = function() {
									uploaded.innerHTML = '<img src="'+upimg.src+'" height="500" width="500"/>';
								};   
								upimg.src = reader.result;
							   
								// show confidence score
								confi = document.getElementById("confidence");
								confi.innerHTML = score + "%";
								confi.style.width = score + "%";
								
								// change confidence bar color according to score
								if (score <= 40){
									confi.style.background = "#C0392B";
								} else if (score <= 70){
									confi.style.background = "#F4D03F";
								} else {
									confi.style.background = "#2ECC71";
								}
								
								
								// show the rubbish bin
								var binColor = "Yellow Bin";
								var img = new Image();
								var bin = document.getElementById('bin');  
								
								if (category === "notRecyclable")
								{
									binColor = "Red Bin";

									img.onload = function() {
										bin.innerHTML = '<img src="'+img.src+'" height="500" width="500"/>';
									};   
									img.src = 'https://www.sustainability.vic.gov.au/-/media/SV-WEB-2017-IMAGES/You-and-Your-Home/Waste-and-recycling/Recycling/Recycling-bins/rubbish200.png&h=300&w=200?la=en&hash=B550D9DDA81FA66A922BDDEFCB4F8F3688312615';
									
								}
								
								else if  (category === "unknown")
								{

									binColor = "Question Bin";

									img.onload = function() {
										 bin.innerHTML = '<img src="'+img.src+'" height="500" width="500"/>';
									};   
									img.src = 'https://towardsagreenertomorrow.ml/wp-content/uploads/2019/09/recycling201.jpg';  
								}
							   
								else if  (category === "plant")
								{

									binColor = "Green Bin";

									img.onload = function() {
										 bin.innerHTML = '<img src="'+img.src+'" height="500" width="500"/>';
									};   
									img.src = 'https://www.sustainability.vic.gov.au/-/media/SV-WEB-2017-IMAGES/You-and-Your-Home/Waste-and-recycling/Recycling/Recycling-bins/gardenwaste200.png&h=300&w=200?la=en&hash=1EA7A1689876BC8BC10949725F4F7FC72BDA2D6C';  
								}

								else {
									binColor = "Yellow Bin";
									img.onload = function() {
										bin.innerHTML = '<img src="'+img.src+'" height="500" width="500"/>';
									};
													
									img.src = 'https://www.sustainability.vic.gov.au/-/media/SV-WEB-2017-IMAGES/You-and-Your-Home/Waste-and-recycling/Recycling/Recycling-bins/recycling200.png&h=300&w=200?la=en&hash=0F7821D631837239FD2C971F24795AF97F39E11C';   
								} 

								// if the score is low or there is no matched keywords, give a warning
								if (score === 0){
									document.getElementById("warning").innerHTML = 'We cannot recognize the image with accuracy.';
								} else if (score <= 50){
									document.getElementById("warning").innerHTML = 'The image is ambiguous. We cannot recognize it with appropriate accuracy.';
									
								} else {
									document.getElementById("warning").innerHTML = '';
								}
								
								document.getElementById("arrow").innerHTML = '<img src="http://pluspng.com/img-png/arrow-hd-png-right-arrow-png-transparent-1000.png" height="500" width="500"/>'
								
								

								console.log(binColor);
							   
							   
							};
							e.open("POST","https://vision.googleapis.com/v1/images:annotate?key=AIzaSyCrnxKVwDdIWGFLz7SqOKR1ayCsGB53IyY",!0);
							e.send(msg)
						}	

						if (isFileImage(file)) {
							reader.readAsDataURL(file); //reads the data as a URL
						} else if(file === undefined) {
							
						}
						else {
							var uploaded = document.getElementById('uploaded');
							uploaded.innerHTML = 'Please upload a valid photo';
							var bin = document.getElementById('bin');
							bin.innerHTML = '';
						}
					}

					previewFile();  //calls the function named previewFile()
					
				</script>

		
		
	</div><!-- .entry-content .clear -->

	
	
</article><!-- #post-## -->


					
					
				
			</main><!-- #main -->
			
		
	</div><!-- #primary -->


			
			</div> <!-- ast-container -->

		</div><!-- #content -->

		
		
		
		<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" class="site-footer" role="contentinfo">

			
			
<div class="ast-small-footer footer-sml-layout-1">
	<div class="ast-footer-overlay">
		<div class="ast-container">
			<div class="ast-small-footer-wrap" >
									<div class="ast-small-footer-section ast-small-footer-section-1" >
						<div class="ast-footer-widget-1-area"><aside id="text-12" class="widget widget_text"><h2 class="widget-title">About Towards a Greener Tomorrow</h2>			<div class="textwidget"><p>Towards a Greener Tomorrow provides a one stop solution for Melbourne&#8217;s residents to educate themselves, be aware of the waste classification guidelines and implications of wrongly classifying their waste.</p>
</div>
		</aside></div>					</div>
				
									<div class="ast-small-footer-section ast-small-footer-section-2" >
						<div class="ast-footer-widget-2-area"><aside id="pages-2" class="widget widget_pages"><h2 class="widget-title">Quick Links</h2>		<ul>
			
<li class="page_item page-item-897 menu-item"><a href="https://towardsagreenertomorrow.ml/about/">About us</a></li>
<li class="page_item page-item-900 menu-item"><a href="https://towardsagreenertomorrow.ml/contact/">Contact us</a></li>
<li class="page_item page-item-609 menu-item"><a href="https://towardsagreenertomorrow.ml/did-you-know/">Facts</a></li>
		</ul>
			</aside></div>					</div>
				
			</div><!-- .ast-row .ast-small-footer-wrap -->
		</div><!-- .ast-container -->
	</div><!-- .ast-footer-overlay -->
</div><!-- .ast-small-footer-->

			
		</footer><!-- #colophon -->
		
		
	</div><!-- #page -->

	
		<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
			<script type="text/javascript">
			var wc_product_block_data = JSON.parse( decodeURIComponent( '%7B%22min_columns%22%3A1%2C%22max_columns%22%3A6%2C%22default_columns%22%3A3%2C%22min_rows%22%3A1%2C%22max_rows%22%3A6%2C%22default_rows%22%3A1%2C%22thumbnail_size%22%3A300%2C%22placeholderImgSrc%22%3A%22https%3A%5C%2F%5C%2Ftowardsagreenertomorrow.ml%5C%2Fwp-content%5C%2Fuploads%5C%2Fwoocommerce-placeholder-300x300.png%22%2C%22min_height%22%3A500%2C%22default_height%22%3A500%2C%22isLargeCatalog%22%3Afalse%2C%22limitTags%22%3Afalse%2C%22hasTags%22%3Afalse%2C%22productCategories%22%3A%5B%7B%22term_id%22%3A25%2C%22name%22%3A%22Uncategorized%22%2C%22slug%22%3A%22uncategorized%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A25%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ftowardsagreenertomorrow.ml%5C%2Fproduct-category%5C%2Funcategorized%5C%2F%22%7D%5D%2C%22homeUrl%22%3A%22https%3A%5C%2F%5C%2Ftowardsagreenertomorrow.ml%5C%2F%22%7D' ) );
		</script>
		<script type='text/javascript'>
/* <![CDATA[ */
var astra = {"break_point":"921","isRtl":""};
/* ]]> */
</script>
<script type='text/javascript' src='https://towardsagreenertomorrow.ml/wp-content/themes/astra/assets/js/minified/style.min.js?ver=2.0.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var sticky_anything_engage = {"element":".main-header-bar-wrap","topspace":"0","minscreenwidth":"0","maxscreenwidth":"999999","zindex":"1","legacymode":"","dynamicmode":"","debugmode":"","pushup":"","adminbar":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://towardsagreenertomorrow.ml/wp-content/plugins/sticky-menu-or-anything-on-scroll/assets/js/stickThis.js?ver=2.1.1'></script>
<script type='text/javascript' src='https://towardsagreenertomorrow.ml/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/towardsagreenertomorrow.ml","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='https://towardsagreenertomorrow.ml/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.7.0'></script>
<script type='text/javascript' src='https://towardsagreenertomorrow.ml/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://towardsagreenertomorrow.ml/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.7.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_6794966634cc6217de2f34f56495acff","fragment_name":"wc_fragments_6794966634cc6217de2f34f56495acff","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='https://towardsagreenertomorrow.ml/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.7.0'></script>
<script type='text/javascript' src='https://towardsagreenertomorrow.ml/wp-includes/js/wp-embed.min.js?ver=5.2.3'></script>
			<script>
			/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
			</script>
			
	</body>
</html>
