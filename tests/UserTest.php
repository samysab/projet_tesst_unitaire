<?php
use PHPUnit\Framework\TestCase;
use Carbon\Carbon;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

use App\Mock\Database;

class UserTest extends KernelTestCase
{

    /** @var \Doctrine\ORM\EntityManager */
    private $entityManager;
    protected function setUp(): void
    {
        $kernel = self::bootKernel();
        $this->entityManager = $kernel
            ->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function test_valid(){
        $u = new \App\Entity\User();
        $u->setNom("sab");
        $u->setPrenom("samy");
        $u->setEmail("samy@gmail.com");
        $u->setPassword("aaaaaaaaaaaaa");
        $u->setDateNaissance(Carbon::now()->subYears(21));

        $this->entityManager->persist($u);
        $this->entityManager->flush();

        $result = $u->isValid($this->entityManager);
        $this->assertEquals(true, $result, 'test valid');
    }
    

    public function test_invalid_age(){
        $u = new \App\Entity\User();
        $u->setNom("sab");
        $u->setPrenom("samy");
        $u->setEmail("samy@gmail.com");
        $u->setPassword("aaaaaaaaaaaaaa");
        $u->setDateNaissance(Carbon::now()->subYears(10));
        $this->expectException(Exception::class);
        $result = $u->isValid($this->entityManager);
    }
    public function test_valid_password(){
        $u = new \App\Entity\User();
        $u->setNom("sab");
        $u->setPrenom("samy");
        $u->setEmail("samy@gmail.com");
        $u->setPassword("aaaaaaaaaaaaa");
        $u->setDateNaissance(Carbon::now()->subYears(21));
        $result = $u->isValid($this->entityManager);
        $this->assertEquals(true, $result, 'test password valid');
    }

    public function test_invalid_password(){

        $u = new \App\Entity\User();
        $u->setNom("sab");
        $u->setPrenom("samy");
        $u->setEmail("samy@gmail.com");
        $u->setPassword("ars");
        $u->setDateNaissance(Carbon::now()->subYears(21));
        $this->expectException(Exception::class);
        $result = $u->isValid($this->entityManager);

    }
}