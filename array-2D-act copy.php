<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
    }
</style>

<?php

$jap_regions = [
    "Hokkaido" => ['Hokkaido' => 'Sapporo'],
    "Chubu" => ['Ishikawa' => 'Kanazawa', 'Shizuoka' => 'Fuji', 'Toyama' => 'Toyama', 'Aichi' => 'Nagoya'],
    "Chugoku" => ['Yamaguchi' => 'Shimonoseki', 'Tottori' => 'Tottori']
];



foreach ($jap_regions as $region => $prefectures) {
    echo "<h1>$region</h1>";

    echo "<table>
        <tr>
        <th>Prefecture</th>
        <th>City</th>
    </tr>";
    foreach ($prefectures as $prefecture => $city) {
        echo "<tr>
        <td>$prefecture</td>
        <td>$city</td>
    </tr>";
    }

    echo "</table>";
}
