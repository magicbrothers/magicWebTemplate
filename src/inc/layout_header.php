<?php
/*
    magicWebTemplate - Simple no-JS website template
    Copyright (C) 2020  magicbrothers

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/


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
