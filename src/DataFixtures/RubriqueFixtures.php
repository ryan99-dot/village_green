<?php

namespace App\DataFixtures;

use App\Entity\Rubrique;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RubriqueFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $rubrique = new Rubrique();
        $rubrique->setId(1);
        $rubrique->setNom('Cordes');
        $rubrique->setPhoto('https://cdn.pixabay.com/photo/2022/05/07/18/12/guitar-7180772_1280.jpg');
        $manager->persist($rubrique);

        $rubrique = new Rubrique();
        $rubrique->setId(2);
        $rubrique->setNom('Claviers');
        $rubrique->setPhoto('https://cdn.pixabay.com/photo/2021/01/25/09/53/piano-5947813_1280.jpg');
        $manager->persist($rubrique);

        $rubrique = new Rubrique();
        $rubrique->setId(3);
        $rubrique->setNom('Percussions');
        $rubrique->setPhoto('https://cdn.pixabay.com/photo/2017/07/05/04/01/battery-2473413_1280.jpg');
        $manager->persist($rubrique);

        $rubrique = new Rubrique();
        $rubrique->setId(4);
        $rubrique->setNom('Cuivres');
        $rubrique->setPhoto('https://cdn.pixabay.com/photo/2023/10/30/20/54/saxophone-8353791_1280.jpg');
        $manager->persist($rubrique);

        $rubrique = new Rubrique();
        $rubrique->setId(5);
        $rubrique->setNom('Accessoires');
        $rubrique->setPhoto('https://cdn.pixabay.com/photo/2021/11/26/19/27/electronics-6826542_1280.jpg');
        $manager->persist($rubrique);

        $rubrique = new Rubrique();
        $rubrique->setId(6);
        $rubrique->setNom('Bois');
        $rubrique->setPhoto('https://cdn.pixabay.com/photo/2016/10/21/18/58/flute-1758799_1280.jpg');
        $manager->persist($rubrique);

        $rubrique = new Rubrique();
        $rubrique->setId(7);
        $rubrique->setNom('Sonorisation');
        $rubrique->setPhoto('https://cdn.pixabay.com/photo/2019/11/21/17/32/sound-equipment-4642967_1280.jpg');
        $manager->persist($rubrique);

        $rubrique = new Rubrique();
        $rubrique->setId(8);
        $rubrique->setNom('Éclairage');
        $rubrique->setPhoto('https://cdn.pixabay.com/photo/2017/08/07/09/00/theatre-2601686_1280.jpg');
        $manager->persist($rubrique);

        $rubrique = new Rubrique();
        $rubrique->setId(9);
        $rubrique->setNom('Informatique musicale');
        $rubrique->setPhoto('https://cdn.pixabay.com/photo/2017/08/07/01/48/laptop-2598571_1280.jpg');
        $manager->persist($rubrique);

        $rubrique = new Rubrique();
        $rubrique->setId(10);
        $rubrique->setNom('Partitions & Méthodes');
        $rubrique->setPhoto('https://cdn.pixabay.com/photo/2023/03/25/12/06/sheet-music-7875782_1280.jpg');
        $manager->persist($rubrique);

        $rubrique = new Rubrique();
        $rubrique->setId(11);
        $rubrique->setNom('DJ & MAO');
        $rubrique->setPhoto('https://cdn.pixabay.com/photo/2015/07/26/17/18/mixer-861403_1280.jpg');
        $manager->persist($rubrique);

        $rubrique = new Rubrique();
        $rubrique->setId(12);
        $rubrique->setNom('Microphones');
        $rubrique->setPhoto('https://cdn.pixabay.com/photo/2016/01/10/21/05/mic-1132528_1280.jpg');
        $manager->persist($rubrique);

        $rubrique = new Rubrique();
        $rubrique->setId(13);
        $rubrique->setNom('Enregistrement');
        $rubrique->setPhoto('https://cdn.pixabay.com/photo/2019/03/29/15/41/radio-4089431_1280.jpg');
        $manager->persist($rubrique);

        $manager->flush();
    }
}
