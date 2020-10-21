<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $article = new Article();
        $article->setName('Jeans');
        $manager->persist($article);

        $article = new Article();
        $article->setName('T-shirt');
        $manager->persist($article);

        $article = new Article();
        $article->setName('Shoes');
        $manager->persist($article);

        $article = new Article();
        $article->setName('Jacket');
        $manager->persist($article);

        $manager->flush();
    }
}
