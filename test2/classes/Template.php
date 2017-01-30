<?php
//TESTS Nr.2

//Uzdevums B.
class Template {
  public $templateString = '';
  public $data = [];

  function parse() :string {
    $dataNew = [];
    foreach ($this->data as $k => $v) $dataNew['{{' . $k . '}}'] = $v;
    $tmp = $this->templateString;
    while (strpos($tmp, '{{ ')!==false || strpos($tmp, ' }}')!==false) $tmp = str_replace(['{{ ', ' }}'], ['{{', '}}'], $tmp);
    return str_replace(array_keys($dataNew), array_values($dataNew), $tmp);
  }

  function loadTemlateFromFile (string $file_path) {
    $res = '';
    $res =@file_get_contents($file_path);
    $this->templateString = $res;
  }

  function setData(array $data) {
    $this->data = $data;
  }
}
?>
