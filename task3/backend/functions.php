<?php
function getProducts() {
  $products = [ [ 'id' => 1, 'name' => 'Первичное посещение врача', 'price' => 1000 ], [ 'id' => 2, 'name' => 'Полное обследование', 'price' => 11200 ], [ 'id' => 3, 'name' => 'МРТ', 'price' => 3000 ] ];
  echo json_encode($products);
}