<?php

namespace App\DataFixtures;

use App\Entity\MicroPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use DateTime;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $micropost1 = new MicroPost();
        $micropost1->setTitle('Welcome to Poland!');
        $micropost1->setText('Poland Text...');
        $micropost1->setCreated(new DateTime());
        $manager->persist($micropost1);

        $micropost2 = new MicroPost();
        $micropost2->setTitle('Welcome to US!');
        $micropost2->setText('US Text...');
        $micropost2->setCreated(new DateTime());
        $manager->persist($micropost2);

        $micropost3 = new MicroPost();
        $micropost3->setTitle('Welcome to France!');
        $micropost3->setText('France Text...');
        $micropost3->setCreated(new DateTime());
        $manager->persist($micropost3);

        $micropost4 = new MicroPost();
        $micropost4->setTitle('Welcome to Germany!');
        $micropost4->setText('Germany Text...');
        $micropost4->setCreated(new DateTime());
        $manager->persist($micropost4);

        $manager->flush();
    }
}
