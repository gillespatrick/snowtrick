<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Faker\Factory;
use App\Entity\Trick;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TrickFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {


        $faker = Factory::create('US-us');


        for ($j = 1; $j <= 5; $j++) {
            $category = new Category();
            $category->setName($faker->sentence())
                ->setDescription($faker->paragraph());

            $manager->persist($category);


            for ($i = 1; $i <= 12; $i++) {

                $trick = new Trick();

                $name = $faker->name();
                $description = '<p>' . join('</p><p>', $faker->paragraphs(1)) . '</p>';
                $cover = $faker->imageUrl();


                $trick->setName($name)
                    -> setDescription($description)
                    -> setCreateDate(new \DateTime())
                    -> setCover($cover)
                    -> setCategory($category);;

                $manager->persist($trick);
            }
        }



        $manager->flush();
    }
}
