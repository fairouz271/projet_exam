<?php

namespace App\DataFixtures;

use App\Factory\CenterFactory;
use App\Factory\AdressFactory;
use App\Factory\ActivityFactory;
use App\Factory\UserFactory;
use App\Factory\CommentFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
    CenterFactory::createMany(10);




    ActivityFactory::createOne(['name' => 'Parcours aventure']);
    ActivityFactory::createOne(['name' => 'Jeux de motricité et de construction']);
    ActivityFactory::createOne(['name' => 'Activité artistique']);
    ActivityFactory::createOne(['name' => 'Atelier cuisine pour enfants']);
    ActivityFactory::createOne(['name' => 'Jeux collectifs']);

    UserFactory::createMany(100);
    UserFactory::createOne(['roles' => ['ROLE_ADMIN', 'ROLE_USER']]);

    CommentFactory::createMany(1000);





        $manager->flush();
    }
}
