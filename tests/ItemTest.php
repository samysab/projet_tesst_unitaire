<?php
use PHPUnit\Framework\TestCase;
use Carbon\Carbon;

use Symfony\Component\HttpFoundation\Request;


class ItemTest extends TestCase
{


    public function testItem(){
        $controller = new \App\Controller\ItemController();
        $item = new \App\Entity\Item();
        $item->setName("sab");
        $item->setContent("sab");
        $item->setCreatedAt(new \DateTimeImmutable("2021-05-21"));
        $result = $controller->add($item);
        $this->assertEquals(true, $result, 'Item added');
    }

    public function testValidItem(){

        $item = new \App\Entity\Item();
        $item->setName("toto");
        $item->setContent("toto");
        $item->setCreatedAt(new \DateTimeImmutable("2021-05-21"));

        $this->assertTrue($item->isValidItem());

    }
}