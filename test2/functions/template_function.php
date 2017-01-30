<?php
//TESTS Nr.2

//Uzdevums A.
function parse_template(string $template, array $data) :string {
  foreach ($data as $k => $v) $dataNew['{{' . $k . '}}'] = $v;
  while (strpos($template, '{{ ')!==false || strpos($template, ' }}')!==false) $template = str_replace(['{{ ', ' }}'], ['{{', '}}'], $template);
  return str_replace(array_keys($dataNew), array_values($dataNew), $template);
}
//citas f-jas
function loadFromFile(string $file_path) : string {
  $res = '';
  $res =@file_get_contents($file_path);
  return $res;
}
?>
