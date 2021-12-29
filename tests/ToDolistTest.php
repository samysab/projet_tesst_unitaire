<?php
use PHPUnit\Framework\TestCase;
use Carbon\Carbon;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;

class ToDolistTest extends TestCase
{

    private $user;
    private $todolist;
    private $item;


    public function testValidTodoList(){
        $u = new \App\Entity\User();
        $u->setNom("sab");
        $u->setPrenom("samy");
        $u->setEmail("samy@gmail.com");
        $u->setPassword("aaaaaaaaaaaaa");
        $u->setDateNaissance(Carbon::now()->subYears(21));

        $todo = new \App\Entity\ToDoList();
        $todo->setUtilisateur($u);

        $item = new \App\Entity\Item();
        $item->setName("sab");
        $item->setContent("sab");
        $item->setCreatedAt('2012-02-28 12:12:12');

        $todo->addItem($item);

        $result = $todo->canAddItem($item);


        $this->assertEquals(true, $result, 'test todo');
    }

    public function testInvalidDate(){
        $u = new \App\Entity\User();
        $u->setNom("sab");
        $u->setPrenom("samy");
        $u->setEmail("samy@gmail.com");
        $u->setPassword("aaaaaaaaaaaaa");
        $u->setDateNaissance(Carbon::now()->subYears(21));

        $todo = new \App\Entity\ToDoList();
        $todo->setUtilisateur($u);

        $item = new \App\Entity\Item();
        $item->setName("sab");
        $item->setContent("sab");
        $item->setCreatedAt('2012-02-28');

        $todo->addItem($item);

        $this->expectException(\Exception::class);
        $result = $todo->canAddItem($item);
    }

    public function testTooMuchItem(){
        $u = new \App\Entity\User();
        $u->setNom("sab");
        $u->setPrenom("samy");
        $u->setEmail("samy@gmail.com");
        $u->setPassword("aaaaaaaaaaaaa");
        $u->setDateNaissance(Carbon::now()->subYears(21));


        $todo = new \App\Entity\ToDoList();
        $todo->setUtilisateur($u);

        $item = new \App\Entity\Item();
        $item->setName("sab");
        $item->setContent("sab");
        $item->setCreatedAt('2012-02-28 00:00:00');


        $todo = $this->getMockBuilder(\App\Entity\ToDoList::class)->onlyMethods(['getSizeTodolist', 'getLastItem'])->getMock();

        $todo->expects(
            $this->any())->method("getLastItem")->willReturn($item);

        $todo->expects(
            $this->any()
        )->method("getSizeTodolist")->willReturn("12");

        $this->expectException(\Exception::class);
        $result = $todo->canAddItem($item); 
    }


}