<?php

require_once 'GildedRose.php';
require_once 'Item.php';

echo "OMGHAI!\n";

$items = array(
    new \Kata\Item('+5 Dexterity Vest', 10, 20),
    new \Kata\Item('Aged Brie', 2, 0),
    new \Kata\Item('Elixir of the Mongoose', 5, 7),
    new \Kata\Item('Sulfuras, Hand of Ragnaros', 0, 80),
    new \Kata\Item('Sulfuras, Hand of Ragnaros', -1, 80),
    new \Kata\Item('Backstage passes to a TAFKAL80ETC concert', 15, 20),
    new \Kata\Item('Backstage passes to a TAFKAL80ETC concert', 10, 49),
    new \Kata\Item('Backstage passes to a TAFKAL80ETC concert', 5, 49),
    // this conjured item does not work properly yet
    new \Kata\Item('Conjured Mana Cake', 3, 6)
);

$app = new \Kata\GildedRose($items);

$days = 2;
if (count($argv) > 1) {
    $days = (int) $argv[1];
}

for ($i = 0; $i < $days; $i++) {
    echo("-------- day $i --------\n");
    echo("name, sellIn, quality\n");
    foreach ($items as $item) {
        echo $item . PHP_EOL;
    }
    echo PHP_EOL;
    $app->update_quality();
}
