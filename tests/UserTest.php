<?php
use PHPUnit\Framework\TestCase;
use Carbon\Carbon;

class UserTest extends TestCase
{

    public function test_valid(){
        $u = new \App\Entity\User();
        $u->setNom("sab");
        $u->setPrenom("samy");
        $u->setEmail("samy@gmail.com");
        $u->setDateNaissance(Carbon::now()->subYears(21));
        $result = $u->isValid();
        $this->assertEquals(true, $result, 'test valid');
    }

    public function test_invalid_age(){
        $u = new \App\Entity\User();
        $u->setNom("sab");
        $u->setPrenom("samy");
        $u->setEmail("samy@gmail.com");
        $u->setDateNaissance(Carbon::now()->subYears(10));
        $this->expectException(Exception::class);
        $result = $u->isValid();
    }
    public function test_valid_password(){
        $u = new \App\Entity\User();
        $u->setNom("sab");
        $u->setPrenom("samy");
        $u->setEmail("samy@gmail.com");
        $u->setPassword("aaaaaaaaaaaaa");
        $u->setDateNaissance(Carbon::now()->subYears(21));
        $result = $u->isValid();
        $this->assertEquals(true, $result, 'test password valid');
    }

    public function test_invalid_password(){

        $u = new \App\Entity\User();
        $u->setNom("sab");
        $u->setPrenom("samy");
        $u->setEmail("samy@gmail.com");
        $u->setPassword("ddd");
        $u->setDateNaissance(Carbon::now()->subYears(21));
        $this->expectException(Exception::class);
        $result = $u->isValid();
    }
}