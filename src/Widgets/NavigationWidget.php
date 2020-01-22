<?php

if($topLevelCategory && $depth)
{
  return [
    "categories" => [
      "topLevelCategory" => $topLevelCategory
      "depth" => $depth,
    ]
  ];
}
return [
  "categories" => false
]

?>
