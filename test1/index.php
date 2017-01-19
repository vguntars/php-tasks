<style>
  table, td {border : 1px solid black}
</style>
<?php
// uzdevums B
function get_max_from_array(array $array): int {
  $res = null;
  foreach ($array as $value) if( $res === null || $res < intval($value)) $res = intval($value);
  return $res;
}
echo 'B: ' . get_max_from_array([4, 10, 3, 12]) . '<br><br>';

// uzdevums D
$table = [
  ['ID', 'Title', 'Name', 'Age'],
  [1, 'CEO', 'John', 35],
  [2, 'CTO', 'Sandeep', 29],
  [3, 'CFO', 'Laurel', 31],
  [4, 'Manager', 'Andrew', 25],
  [5, 'Engineer', 'Samantha', 26],
  [6, 'Designer', 'Lee', 24]
];

create_table($table);

function create_table(array $array) {
  $row = 0;
  echo '<table>';
  foreach ($array as $row_array) {
    if ($row === 0){
      echo '<thead>';
      create_table_row('th', $row_array);
      $row = 1;
      echo '</thead><tbody>';
    }
    else {
      create_table_row('td', $row_array);
    }
  }
  echo '</tbody></table>';
}

function create_table_row(string $tag_name ,array $row_array){
  echo '<tr>';
  foreach ($row_array as $value) echo '<' . $tag_name . '>' . $value . '</' . $tag_name . '>';
  echo '</tr>';
  }
?>
