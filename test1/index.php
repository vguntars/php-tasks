<?php
//TESTS Nr.1

// uzdevums B
function get_max_from_array(array $array) {
  $res = null;
  foreach ($array as $value) if( $res === null || $res < intval($value)) $res = intval($value);
  return $res;
}
echo 'B: ' . get_max_from_array([4, 10, 3, 12])
?>

<br><br>
<style>
  table, td {border : 1px solid black}
</style>

<?php
// uzdevums D
echo 'D: ';
$table = [
  ['ID', 'Title', 'Name', 'Age'],
  [1, 'CEO', 'John', 35],
  [2, 'CTO', 'Sandeep', 29],
  [3, 'CFO', 'Laurel', 31],
  [4, 'Manager', 'Andrew', 25],
  [5, 'Engineer', 'Samantha', 26],
  [6, 'Designer', 'Lee', 24]
];

echo create_table($table);

function create_table(array $array) :string {
  if (!count($array)) return '';
  $rowNr = 0;
  $table= '<table>';
  foreach ($array as $row_array) {
    if ($rowNr === 0){
      $table .= '<thead>';
      $table .= create_table_row('th', $row_array);
      $table .= '</thead><tbody>';
    }
    else {
      $table .= create_table_row('td', $row_array);
    }
    $rowNr++;
  }
  $table .= '</tbody></table>';
  return $table;
}

function create_table_row(string $tag_name, array $row_array) :string {
  $row = '<tr>';
  foreach ($row_array as $value) $row .= '<' . $tag_name . '>' . $value . '</' . $tag_name . '>';
  $row .= '</tr>';
  return $row;
  }
?>
