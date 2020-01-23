<?php

if($topLevelCategory && $depth)
{
  return [
    "categories" => [
      "entries" => $categories
    ]
  ];
}
return [
  "categories" => false
]

?>
