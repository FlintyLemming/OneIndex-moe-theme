<!DOCTYPE html>
<html>


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
	<title>
		<?php e($title.' - '.config('site_name'));?>
	</title>
	<link rel="stylesheet" href="asset/css/head.css">
	<link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/css/mdui.css">
	<style>
		.site-wrapper {
			display: flex;
			flex-direction: column;
			min-height: 100vh;
		}

		.site-main {
			z-index: 100;
			flex-grow: 1;
		}

		/* Full width page blocks */
		.outer {
			position: relative;
			padding: 0 4vw;
		}

		/* Centered content container blocks */
		.inner {
			margin: 0 auto;
			max-width: 1040px;
			width: 100%;
		}

		/* Usage:

<div class="outer">
    <div class="inner">
        Centered content
    </div>
</div>

*/

		/* 3. Special Template Styles
/* ---------------------------------------------------------- */

		@media (min-width: 900px) {

			.home-template .post-feed,
			.tag-template .post-feed,
			.author-template .post-feed {
				margin-top: -70px;
				padding-top: 0;
			}

			.home-template .site-nav {
				position: relative;
				top: -70px;
			}
		}


		/* 4. Site Header
/* ---------------------------------------------------------- */

		.site-header {
			position: relative;
			padding-top: 12px;
			padding-bottom: 12px;
			color: #fff;
			background: color(var(--darkgrey) l(-5%)) no-repeat center center;
			background-size: cover;
		}

		.site-header:before {
			content: "";
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			z-index: 10;
			display: block;
			background: rgba(0, 0, 0, 0.18);
		}

		.site-header:after {
			content: "";
			position: absolute;
			top: 0;
			right: 0;
			bottom: auto;
			left: 0;
			z-index: 10;
			display: block;
			height: 80px;
			background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
		}

		.site-header.no-cover:before,
		.site-header.no-cover:after {
			display: none;
		}

		.site-header-content {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			padding: 10vw 4vw;
			min-height: 200px;
			max-height: 450px;
			text-align: center;
		}

		.site-title {
			z-index: 10;
			margin: 0;
			padding: 0;
			font-size: 3.8rem;
			font-weight: 700;
		}

		.site-logo {
			max-height: 45px;
		}

		.site-description {
			z-index: 10;
			margin: 0;
			padding: 5px 0;
			font-size: 2.2rem;
			font-weight: 300;
			letter-spacing: 0.5px;
			opacity: 0.8;
		}

		@media (max-width: 500px) {
			.site-title {
				font-size: 3rem;
			}

			.site-description {
				font-size: 1.8rem;
			}
		}


		/* 5. Site Navigation
/* ---------------------------------------------------------- */

		.site-nav {
			position: relative;
			z-index: 300;
			display: flex;
			justify-content: space-between;
			align-items: flex-start;
			overflow-y: hidden;
			height: 40px;
			font-size: 1.2rem;
		}

		.site-nav-left {
			display: flex;
			align-items: center;
			overflow-x: auto;
			overflow-y: hidden;
			-webkit-overflow-scrolling: touch;
			margin-right: 10px;
			padding-bottom: 80px;
			letter-spacing: 0.4px;
			white-space: nowrap;

			-ms-overflow-scrolling: touch;
		}

		/* Site Nav Hack Explanation (above):

What's happening above it .site-nav-left is set to overflow-x and allow sideways scrolling, so that when there isn't enough space for all nav items (either due to lots of nav items, or a small viewport), you can still scroll side-to-side to reach them.

The knock-on effect of this is ugly browser-scroll bars at the bottom, so 80px of padding-bottom and a 40px fixed height parent (.site-nav) hides that entirely. Slightly hacky code. But nice clean end-result.

*/

		.site-nav-logo {
			flex-shrink: 0;
			display: block;
			margin-right: 24px;
			padding: 11px 0;
			color: #fff;
			font-size: 1.7rem;
			line-height: 1em;
			font-weight: bold;
			letter-spacing: -0.5px;
		}

		.site-nav-logo:hover {
			text-decoration: none;
		}

		.site-nav-logo img {
			display: block;
			width: auto;
			height: 21px;
		}

		.nav {
			display: flex;
			margin: 0 0 0 -12px;
			padding: 0;
			list-style: none;
		}

		.nav li {
			display: block;
			margin: 0;
			padding: 0;
			text-transform: uppercase;
		}

		.nav li a {
			display: block;
			margin: 0;
			padding: 10px 12px;
			color: #fff;
			opacity: 0.8;
		}

		.nav li a:hover {
			text-decoration: none;
			opacity: 1;
		}

		.site-nav-right {
			flex-shrink: 0;
			display: flex;
			align-items: center;
			height: 40px;
		}

		.social-links {
			flex-shrink: 0;
			display: flex;
			align-items: center;
		}

		.social-links a:last-of-type {
			padding-right: 20px;
		}

		.social-link {
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 0;
			padding: 10px;
			color: #fff;
			opacity: 0.8;
		}

		.social-link:hover {
			opacity: 1;
		}

		.social-link svg {
			height: 1.8rem;
			fill: #fff;
		}

		.social-link-fb svg {
			height: 1.5rem;
		}

		.social-link-wb svg {
			height: 1.6rem;
		}

		.social-link-wb svg path {
			stroke: #fff;
		}

		.social-link-rss svg {
			height: 1.9rem;
		}

		.subscribe-button {
			display: block;
			padding: 4px 10px;
			border: #fff 1px solid;
			color: #fff;
			font-size: 1.2rem;
			line-height: 1em;
			border-radius: 10px;
			opacity: 0.8;
		}

		.subscribe-button:hover {
			text-decoration: none;
			opacity: 1;
		}

		.rss-button {
			opacity: 0.8;
		}

		.rss-button:hover {
			opacity: 1;
		}

		.rss-button svg {
			margin-bottom: 1px;
			height: 2.1rem;
			fill: #fff;
		}

		@media (max-width: 700px) {
			.site-header {
				padding-right: 0;
				padding-left: 0;
			}

			.site-nav-left {
				margin-right: 0;
				padding-left: 4vw;
			}

			.site-nav-right {
				display: none;
			}
		}
	</style>
	<style>
		body {
			background-color: #f2f5fa;
			padding-bottom: 60px;
			background-position: center bottom;
			background-repeat: no-repeat;
			background-attachment: fixed
		}

		.nexmoe-item {
			margin: 20px -8px 0 !important;
			padding: 15px !important;
			border-radius: 5px;
			background-color: #fff;
			-webkit-box-shadow: 0 .5em 3em rgba(161, 177, 204, .4);
			box-shadow: 0 .5em 3em rgba(161, 177, 204, .4);
			background-color: #fff
		}

		.mdui-img-fluid,
		.mdui-video-fluid {
			border-radius: 5px;
			border: 1px solid #eee
		}

		.mdui-list {
			padding: 0
		}

		.mdui-list-item {
			margin: 0 !important;
			border-radius: 5px;
			padding: 0 10px 0 5px !important;
			border: 1px solid #eee;
			margin-bottom: 10px !important
		}

		.mdui-list-item:last-child {
			margin-bottom: 0 !important
		}

		.mdui-list-item:first-child {
			border: none
		}

		.mdui-toolbar {
			width: auto;
			margin-top: 60px !important
		}

		.mdui-appbar .mdui-toolbar {
			height: 56px;
			font-size: 16px
		}

		.mdui-toolbar>* {
			padding: 0 6px;
			margin: 0 2px;
			opacity: .5
		}

		.mdui-toolbar>.mdui-typo-headline {
			padding: 0 16px 0 0
		}

		.mdui-toolbar>i {
			padding: 0
		}

		.mdui-toolbar>a:hover,
		a.mdui-typo-headline,
		a.active {
			opacity: 1
		}

		.mdui-container {
			max-width: 980px
		}

		.mdui-list>.th {
			background-color: initial
		}

		.mdui-list-item>a {
			width: 100%;
			line-height: 48px
		}

		.mdui-toolbar>a {
			padding: 0 16px;
			line-height: 30px;
			border-radius: 30px;
			border: 1px solid #eee
		}

		.mdui-toolbar>a:last-child {
			opacity: 1;
			background-color: #1e89f2;
			color: #ffff
		}

		@media screen and (max-width:980px) {
			.mdui-list-item .mdui-text-right {
				display: none
			}

			.mdui-container {
				width: 100% !important;
				margin: 0
			}

			.mdui-toolbar>* {
				display: none
			}

			.mdui-toolbar>a:last-child,
			.mdui-toolbar>.mdui-typo-headline,
			.mdui-toolbar>i:first-child {
				display: block
			}
		}
	</style>
	<style>
		body {
			background-image: url(http://ww1.sinaimg.cn/large/71c534f0ly1fw9tw14zb3j21hc0u01e4.jpg) !important;
			background-position: center bottom !important;
			background-size: cover !important;
			background-attachment: fixed !important;
			background-repeat: no-repeat !important;
		}
	</style>
	<script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/js/mdui.min.js"></script>
</head>

<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
	<header class="site-header outer" style="background:black;">
		<div class="inner">
			<nav class="site-nav">
				<div class="site-nav-left">
					<a class="site-nav-logo" href="http://flinty.top/"><img src='https://cloud.flinty.top/?/Personal/%E5%9B%BE%E5%BA%8A%E7%94%A8/head.png' /></a>
					<ul class="nav" role="menu">
						<li class="nav-blog" role="menuitem"><a href="http://flinty.top/" style="font-size:12px; text-decoration: none;">Blog</a></li>
						<li class="nav-" role="menuitem"><a href="http://flinty.top/friends/" style="font-size:12px; text-decoration: none;">友情链接</a></li>
						<li class="nav-drive" role="menuitem"><a href="https://cloud.flinty.top/" style="font-size:12px; text-decoration: none;">Drive</a></li>
						<li class="nav-" role="menuitem"><a href="http://flinty.top/ghost" style="font-size:12px; text-decoration: none;">博客后台</a></li>
						<li class="nav-" role="menuitem"><a href="https://cloud.flinty.top/?/admin" style="font-size:12px; text-decoration: none;">网盘后台</a></li>
					</ul>

				</div>
				<div class="site-nav-right">
					<div class="social-links">
						<a class="social-link social-link-fb" href="https://www.facebook.com/chenran.mu" target="_blank" rel="noopener"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="height:16px;width:16px;">
								<path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path>
							</svg>
						</a>
						<a class="social-link social-link-tw" href="https://twitter.com/MuChenran" target="_blank" rel="noopener"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="height:18px;width:18px;">
								<path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path>
							</svg>
						</a>
					</div>
					<a class="rss-button" href="https://feedly.com/i/subscription/feed/http://39.106.177.240:80/rss/" target="_blank" rel="noopener"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="height:21px;width:21px;">
							<circle cx="6.18" cy="17.82" r="2.18"></circle>
							<path d="M4 4.44v2.83c7.03 0 12.73 5.7 12.73 12.73h2.83c0-8.59-6.97-15.56-15.56-15.56zm0 5.66v2.83c3.9 0 7.07 3.17 7.07 7.07h2.83c0-5.47-4.43-9.9-9.9-9.9z"></path>
						</svg>
					</a>
				</div>
			</nav>
		</div>
	</header>
	<div class="mdui-container">
		<div class="mdui-container-fluid">
			<div class="mdui-toolbar nexmoe-item">
				<a href="/">
					<?php e(config('site_name'));?></a>
				<?php foreach((array)$navs as $n=>$l):?>
				<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
				<a href="<?php e($l);?>">
					<?php e($n);?></a>
				<?php endforeach;?>
				<!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>-->
			</div>
		</div>
		<?php view::section('content');?>
	</div>
</body>

</html>
