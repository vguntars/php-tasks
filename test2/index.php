
A:
<?php
//TESTS Nr.2

include ('./functions/template_function.php');

$data = [
   'title' => 'Hello, World!',
   'message' => 'This is my text'
];

$template = loadFromFile('template.txt');
echo parse_template($template, $data);
?>

<br><br>

B:
<?php
include ('./classes/Template.php');
$tpl = new Template;
$tpl->loadTemlateFromFile('template.txt');
$tpl->setData($data); // same $data array from the Task A
echo $tpl->parse();
?>
