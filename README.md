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
include_once "inc/layout_header.php";
?>
<h2>Subheader</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae ex sapien. Nullam tempus magna massa, sit amet congue quam elementum commodo. Nunc feugiat leo eu magna laoreet mollis. Mauris in molestie mauris, vitae convallis felis. Donec eu luctus nibh, vitae sollicitudin ante. Maecenas varius arcu vel neque commodo, eu tempor nunc congue. In tempus dui metus, id luctus quam imperdiet vestibulum. Mauris aliquet ligula congue, tempor augue vel, accumsan eros.<br /><br />
Nulla accumsan mi in sapien rhoncus, a varius justo malesuada. Aliquam ac gravida nibh, eget sagittis magna. Morbi mi odio, aliquet nec nibh quis, malesuada ornare erat. Praesent sollicitudin velit sapien. Integer euismod bibendum neque eu dictum. In ornare tincidunt molestie. Suspendisse potenti. Praesent purus magna, volutpat ac commodo sit amet, lobortis non turpis. Nam ex dolor, tempor a nulla eu, mollis ullamcorper est. Integer hendrerit, risus in condimentum viverra, massa risus viverra orci, non vulputate elit arcu quis massa. Aliquam erat volutpat. Nulla molestie elit sed eros suscipit, at venenatis lorem ultrices. Nunc ultricies quam ac ipsum porttitor, eu tincidunt ligula consequat. Proin a vehicula mauris. Aliquam non eros vel libero elementum porta. Aliquam erat volutpat.<br /><br />
Sed varius nisl nec metus faucibus, eget ullamcorper elit consectetur. Morbi vel posuere ipsum. Integer non mauris et metus efficitur interdum et ut sem. Phasellus accumsan sem ligula, non fermentum felis convallis at. Suspendisse rutrum neque ut tempus feugiat. Morbi convallis sed erat vitae rutrum. Cras vitae mauris facilisis, vehicula metus sed, auctor urna. Mauris lobortis nec neque non imperdiet. Nunc ut metus in erat dignissim vulputate.</p>
<?php
include_once "inc/layout_footer.php";
```