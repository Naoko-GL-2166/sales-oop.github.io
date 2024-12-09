<?php
// 2D(dimensional)Associative Array or Nested Array

// shortsyntax
$region = [
    "Hokkaido" => ['Hokkaido' => 'Sapporo'],
    "Chubu" => ['Ishikawa' => 'Kanazawa', 'Shizuoka' => 'Fuji', 'Toyama' => 'Toyama', 'Aichi' => 'Nagoya'],
    "Chugoku" => ['Yamaguchi' => 'Shimonoseki', 'Tottori' => 'Tottori']
];





print_r($region);








echo "<h2>Japanese Regions</h2>";

foreach ($region as $region => $section_re) {
    echo    "<h3>$region Region </h3>";
    echo "<table border='1'>";
    echo "<tr>
                <th colspan ='2'>$region</th>
                </tr>";
    foreach ($section_re as $prefecture => $city) {
        echo "<tr>
                        <th>$prefecture</th>
                        <td>$city</td>
                        </tr>";
    }

    echo "</table>";
}
