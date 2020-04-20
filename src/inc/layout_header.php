<!--
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
-->
<!doctype html>
<html lang="de">
<head>
	<title><?=$header." - ".$page_title?></title>
	<link rel="stylesheet" href="<?=$base?>magicWebTemplate/src/inc/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8" />
</head>
<body>
<div class="row header">
	<header class="col-10"><?=$header?></header>
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
		<h1><?=$page_title?></h1>
