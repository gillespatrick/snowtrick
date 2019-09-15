<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Trick;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TrickFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('US-us');

        for ($i=1; $i <=12 ; $i++) {

            $trick = new Trick();

            $name = $faker -> name();
            $description = '<p>' . join('</p><p>', $faker -> paragraphs(1)) .'</p>';
            $cover = $faker -> imageUrl("https://lorempixel.com/1000/350/");
            

            $trick -> setName($name)
                   -> setDescription($description)
                   -> setCreateDate(new \DateTime())
                   -> setCover($cover);
            
                   $manager->persist($trick);
            
        }
        
    

        $manager->flush();
    }
}
