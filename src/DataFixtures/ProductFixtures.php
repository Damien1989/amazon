<?php

namespace App\DataFixtures;


use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //creation de  15 produits
        for ($i=0; $i < 15; $i++) {

        $product = new Product();

        $product->setTitle('Table');
        $product->setDescription('Super pour manger');
        $product->setCity('Lille');
        $product->setPrice('12');
        $product->setReservationText('merci');
        $product->setPicture('uploads/table.jpg');
        $manager->persist($product);

        $manager->flush();
    }
    }
}
