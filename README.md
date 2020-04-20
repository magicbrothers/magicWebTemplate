# magicWebTemplate

## create file mwt_config.php with the following content

```php
<?php
$cc_by = "John Doe";
$cc_by_url = "example.org";
$base = "https://".$_SERVER["HTTP_HOST"]."/";
$header = "magicWebTemplate";
$links = array("Home" => "index.php");
```

## include this code in every frontend-PHP-file

```php
<?php
require_once "mwt_config.php";
$custom_links = array();
$page_title = "Home";
include_once "magicWebTemplate/src/inc/layout_header.php";
?>
<h2>Subheader</h2>
<p>Paragraph</p>
<?php
include_once "magicWebTemplate/src/inc/layout_footer.php";
```
