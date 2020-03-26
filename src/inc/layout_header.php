<?php
$cc_by = "John Doe";
$cc_by_url = "example.org";
$base = "https://".$_SERVER["HTTP_HOST"]."/";
$header = "magicWebTemplate";
$links = array("Home" => "index.php");
?>
<!doctype html>
<html lang="de">
<head>
	<title><?=$header." - ".$page_title?></title>
	<link rel="stylesheet" href="<?=$base?>inc/style.css" />
	<link rel="icon" href="<?=$base?>inc/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8" />
</head>
<body>
<div class="row header">
	<h1 class="col-10"><?=$header?></h1>
</div>
<div class="row">
	<div class="col-2 navi">
		<label for="togglenav">&#9776;</label><input type="checkbox" id="togglenav" hidden />
		<div class="navi-links">
		<?php
		foreach ($links as $label => $link) {
			$current = "";
			if ($_SERVER["SCRIPT_NAME"] == "/".$link) $current = ' class="current"';
			echo '<a href="'.$base.$link.'"'.$current.'>'.$label.'</a>';
		}
		foreach ($custom_links as $label => $link) {
			$current = "";
			if ($_SERVER["SCRIPT_NAME"] == "/".$link) $current = ' class="current"';
			echo '<a href="'.$base.$link.'"'.$current.'>'.$label.'</a>';
		}
		echo "\n";
		?>
		</div>
	</div>
	<div class="col-8 content">
		<h2><?=$page_title?></h2>
