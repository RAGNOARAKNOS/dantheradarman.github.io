<?php
  $check = http_get("https://gdata.youtube.com/feeds/api/videos/GZMzd4PmV1w?v=2", array(), $info);
  print_r($info);
?>
