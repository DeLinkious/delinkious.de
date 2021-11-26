<?php
$title = $title ?? "DeLinkious";
$description = $description ?? "Willkommen auf der delinki&ouml;sesten Webseite die ihr finden k&ouml;nnt!";
?>

<title><?php echo $title; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" 				content="width=device-width, initial-scale=1.0">
		<meta name="Description"			content="<?php echo $description; ?>">
		<meta name="Keywords"				content="DeLink, DeLinkious, Home">
		<meta name="Robots" 				content="index,follow,all">
		<meta name="Audience" 				content="all">
		<meta name="expires" 				content="0">
		<meta name="theme-color"			content="#880000">
		<meta name="Author" 				content="DeLink">

		<meta property="og:locale"			content="de_DE">
		<meta property="og:type"			content="Website">
		<meta property="og:site_name"		content="<?php echo $title; ?>">
		<meta property="og:title"			content="<?php echo $title; ?>">
		<meta property="og:description"		content="<?php echo $description; ?>">
		<meta property="og:url"				content="https://delinkious.de/">
		<meta property="og:image"			content="https://delinkious.de/assets/img/logo.png">

		<meta itemprop="name" 				content="<?php echo $title; ?>">
		<meta itemprop="url" 				content="https://delinkious.de/">
		<meta itemprop="website"			content="https://delinkious.de/">
		<meta itemprop="email"				content="info@delinkious.de">
		<meta itemprop="description" 		content="<?php echo $description; ?>">
		<meta itemprop="thumbnailUrl"		content="https://delinkious.de/assets/img/logo.png">

		<meta name="twitter:card"			content="summary">
		<meta name="twitter:site"			content="@DeLinkious">
		<meta name="twitter:title"			content="<?php echo $title; ?>">
		<meta name="twitter:description"	content="<?php echo $title; ?>">
		<meta name="twitter:image"			content="https://delinkious.de/assets/img/logo.png">

		<link rel="shortcut icon"			href="assets/img/favicon.ico" type="image/x-icon">
		<link rel="image_src"				href="assets/img/logo.png">
		<link rel="stylesheet"				href="assets/bootstrap/bootstrap.min.css">
		<link rel="stylesheet"				href="assets/fontawesome/css/all.css">
		<link rel="stylesheet"				href="assets/css/style.css">
