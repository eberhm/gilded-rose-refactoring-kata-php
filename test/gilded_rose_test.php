<?php

class GildedRoseTest extends \PHPUnit_Framework_TestCase {

    function testFoo() {
        $items = array(new \Kata\Item("foo", 0, 0));
        $gildedRose = new \Kata\GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals("fixme", $items[0]->name);
    }

}
