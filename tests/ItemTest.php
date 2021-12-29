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

    public function testNameItemEmpty(){

        $item = new \App\Entity\Item();
        $item->setName("");
        $item->setContent("test");
        $item->setCreatedAt(new \DateTimeImmutable("2021-05-21"));
        $this->assertFalse($item->isValidItem());
    }

    public function testContentItemEmpty(){

        $item = new \App\Entity\Item();
        $item->setContent("");
        $item->setName("toto");
        $item->setCreatedAt(new \DateTimeImmutable("2021-05-21"));
        $this->assertFalse($item->isValidItem());

    }

    public function testDateCreatedItemEmpty(){

        $item = new \App\Entity\Item();
        $item->setContent("toto");
        $item->setName("toto");
        $item->setCreatedAt("");
        $this->assertFalse($item->isValidItem());
    }

    public function testLengthContentItemTrue(){

        $item = new \App\Entity\Item();
        $item->setContent("toto");
        $item->setName("toto");
        $item->setCreatedAt(new \DateTimeImmutable("2021-05-21"));
        $this->assertTrue($item->isValidItem());
    }

    public function testLengthContentItemFalse(){

        $item = new \App\Entity\Item();
        $item->setContent("Lorem ipsum dolor sit amet. Maiores debitis quo asperiores facere ad delectus maiores a enim dolorem ex dolorem quibusdam aut sunt vitae vel veritatis fugiat. A provident facere hic laborum commodi ut nihil ipsam qui repellat ipsa nam consequatur doloremque qui earum galisum nam consectetur quia. Qui incidunt excepturi non velit quae quo corrupti sint. Qui iure rerum eum quas eius quo accusantium eligendi sit galisum cupiditate et quod laudantium! Qui Quis rerum sed exercitationem numquam id accusamus enim aut dolorem autem vel nisi laboriosam ut facere enim id enim galisum. Eos similique minus sed molestiae laudantium qui omnis deleniti ex beatae pariatur non velit accusamus.");
        $item->setName("toto");
        $item->setCreatedAt(new \DateTimeImmutable("2021-05-21"));
        $this->assertFalse($item->isValidItem());
    }
}