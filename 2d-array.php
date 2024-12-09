<?php
// 2D(dimensional)Associative Array or Nested Array

// shortsyntax
$market = [
    "fruits" => ['fruit1' => 'watermelon', 'fruit2' => 'mango', 'fruit3' => 'apple'],
    "vegetables" => ['vege1' => 'lettuce', 'vege2' => 'cocumber', 'vege3' => 'cabbage']
    // fruits and vegetables are called sub-array
];




// language construct
// $market = array(
//     "fruits" => array(),
//     "vegetables" => array()
// );


print_r($market);
print_r($market['fruits']);



// Individual Display

echo $market['fruits']['fruit1'];
echo $market['vegetables']['vege3'];


// Display All
echo "<h2>Display All</h2>";
// nested foreach loop

foreach ($market as $sub_array => $sub_values) {
    echo "<h3>$sub_array</h3>";
    // echo "<h3>$sub_values</h3>";
    foreach ($sub_values as $named_key => $value) {
        echo "<h4>$named_key: $value</h4>";
    }
}


echo "<h2>Display inside table element</h2>";

foreach ($market as $section => $section_items) {
    echo    "<h3>$section Section </h3>";
    echo "<table border='1'>";
    echo "<tr>
                <th colspan ='2'>$section Items</th>
                </tr>";
    foreach ($section_items as $item_name => $item_value) {
        echo "<tr>
                        <th>$item_name</th>
                        <td>$item_value</td>
                        </tr>";
    }

    echo "</table>";
}
