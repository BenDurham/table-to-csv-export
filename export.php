<?php
  //$html = str_get_html($html); // give this your HTML string
  $html = $_POST["csv"];

  $output_path = '';
  header('Content-type: application/ms-excel');
  header('Content-Disposition: attachment; filename=sample.csv');

  $fp = fopen("values.csv", "w");
    fwrite($fp, $html);

  fclose($fp);

  unset($html);
  exit;
?>