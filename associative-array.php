<?php

// Associative Array = uses named keys


// shortsyntax



$grocery = ['fruit' => 'banana', 'vegetable' => 'tomato', 'meat' => 'beef', 'ingredient' => 'black pepper'];




// language construct

// $grocery = array('fruit' => 'banana', 'vegetable' => 'tomato', 'meat' => 'beef', 'ingredient' => 'black pepper');



print_r($grocery);

// Assign using named keys
$age['Joe'] = 44;
$age['Naruto'] = 32;
$age['Naoko'] = 27;


// Individual Display
echo "<h2>Grocery Meat:" . $grocery['meat'] . "</h2>";
echo "<h2>Grocery Fruit:" . $grocery['fruit'] . "</h2>";




// Display All
// foreach loop
foreach ($grocery as $named_key => $value) {
    echo "<h2>$named_key</h2>";
    echo "<p>$value</p>";
}

// display using select element
echo "<form method='post'>";
echo "<select name='category'>";
echo "<option value='' hidden>Select Category</option>";
foreach ($grocery as $category => $item) {
    echo "<option value='$item from $category'>$category</option>";
}
echo "<option value='' hidden>Select Category</option>";


echo "</select>";

echo "<input type='submit' name='send' value='SEND'>";

echo "</form>";



echo "<h3>Value coming from the select element</h3>";

if (isset($_POST['send'])) {
    $array_item = $_POST['category'];

    echo "<h4>The item you sent is: $array_item</h4>";
}
