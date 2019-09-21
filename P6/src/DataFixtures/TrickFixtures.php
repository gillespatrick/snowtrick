<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Trick;
use App\Entity\Category;
use Cocur\Slugify\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TrickFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {


        $faker = Factory::create('US-us');
        $slugify = new Slugify();

        // Fake data for Categories
        for ($j = 1; $j <= 5; $j++) {
            $category = new Category();
            $category->setName($faker->sentence())
                ->setDescription($faker->paragraph(2));

            $manager->persist($category);

            // Fake data for Tricks
            for ($i = 1; $i <= 10; $i++) {

                $trick = new Trick();

                $name = $faker->name('male');
                $description = '<p>' . join('</p><p>', $faker->paragraphs(20)) . '</p>';
                $cover = $faker->imageUrl(1000,350);
                $slug = $slugify -> slugify($name);


                $trick->setName($name)
                      -> setDescription($description)
                      -> setCreateDate(new \DateTime())
                      -> setCover($cover)
                      -> setCategory($category);
                      //-> setSlug($slug);

                $manager->persist($trick);
            }
        }



        $manager->flush();
    }
}
