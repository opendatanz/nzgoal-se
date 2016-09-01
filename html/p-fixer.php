<?php
require_once 'simple_html_dom.php';
$file = $argv['1'];
$html = file_get_html($file);
$html->save('./' . $file.'-backup');
$count = 0;
echo "Fixing " . $file . PHP_EOL;
foreach($html->find('li p') as $p) {
  $text_notag = $p->innertext;
  $p->outertext = $text_notag;
  $count = $count + 1;
}
$html->save('./' . $file);
echo "Replaced " . $count . " extra <p> tags.";
