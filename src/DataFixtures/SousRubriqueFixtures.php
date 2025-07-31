<?php

namespace App\DataFixtures;

use App\Entity\SousRubrique;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SousRubriqueFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Guitares');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2016/03/27/22/20/wood-1284504_1280.jpg');
        $sousRubrique->setRubriqueId(1);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Basses');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2015/08/18/16/58/bass-guitar-894524_1280.jpg');
        $sousRubrique->setRubriqueId(1);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Pianos');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2016/07/02/21/05/piano-1493797_1280.jpg');
        $sousRubrique->setRubriqueId(2);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Synthétiseurs');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2020/11/09/19/14/synth-5727575_1280.jpg');
        $sousRubrique->setRubriqueId(2);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Batteries');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2017/07/05/04/01/battery-2473413_1280.jpg');
        $sousRubrique->setRubriqueId(3);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Congas');
        $sousRubrique->setPhoto('https://images.freeimages.com/variants/TncQuHAUGAypDiSbLhs7kJus/f4a36f6589a0e50e702740b15352bc00e4bfaf6f58bd4db850e167794d05993d?fmt=webp&h=350');
        $sousRubrique->setRubriqueId(3);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Trompettes');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2015/02/05/00/54/music-624421_1280.jpg');
        $sousRubrique->setRubriqueId(4);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Saxophones');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2023/10/30/20/54/saxophone-8353791_1280.jpg');
        $sousRubrique->setRubriqueId(4);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Câbles');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2021/11/10/20/04/microphone-6784749_1280.jpg');
        $sousRubrique->setRubriqueId(5);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Supports');
        $sousRubrique->setPhoto('https://images.freeimages.com/variants/Ju1TMdzM5BLyYjE6bEUJP4cs/f4a36f6589a0e50e702740b15352bc00e4bfaf6f58bd4db850e167794d05993d?fmt=webp&h=350');
        $sousRubrique->setRubriqueId(5);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Clarinette');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2019/11/15/16/28/clarinet-4628755_1280.jpg');
        $sousRubrique->setRubriqueId(6);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Flûte');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2021/09/09/05/43/the-flute-6609536_1280.jpg');
        $sousRubrique->setRubriqueId(6);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Enceintes');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2017/03/26/22/15/speakers-2176734_1280.jpg');
        $sousRubrique->setRubriqueId(7);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Tables de mixage');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2019/11/21/17/32/sound-equipment-4642968_1280.jpg');
        $sousRubrique->setRubriqueId(7);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Projecteurs');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2018/04/05/19/51/spotlight-3293952_1280.jpg');
        $sousRubrique->setRubriqueId(8);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Pieds & Supports');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2017/08/03/13/13/stainless-2576185_1280.jpg');
        $sousRubrique->setRubriqueId(8);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Interfaces audio');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2016/08/01/17/11/audio-interface-1561567_1280.jpg');
        $sousRubrique->setRubriqueId(9);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Claviers maîtres');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2017/08/07/08/37/piano-2601498_1280.jpg');
        $sousRubrique->setRubriqueId(9);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Partitions classiques');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2021/04/10/21/45/music-book-6168179_1280.jpg');
        $sousRubrique->setRubriqueId(10);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Méthodes débutants');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2018/05/13/15/38/lyrics-3396839_1280.jpg');
        $sousRubrique->setRubriqueId(10);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Contrôleurs DJ');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2018/10/08/05/14/dj-3731970_1280.jpg');
        $sousRubrique->setRubriqueId(11);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Logiciels DJ');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2020/02/11/01/13/laptop-4838060_1280.jpg');
        $sousRubrique->setRubriqueId(11);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Microphones filaires');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2015/07/26/17/34/microphone-861449_1280.jpg');
        $sousRubrique->setRubriqueId(12);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Microphones sans fil');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2023/12/08/02/12/microphone-8436595_1280.jpg');
        $sousRubrique->setRubriqueId(12);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Enregistreurs numériques');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2015/10/10/08/50/tascam-dr-60d-980466_1280.jpg');
        $sousRubrique->setRubriqueId(13);
        $manager->persist($sousRubrique);

        $sousRubrique = new SousRubrique();
        $sousRubrique->setNom('Studios portables');
        $sousRubrique->setPhoto('https://cdn.pixabay.com/photo/2015/10/24/09/09/studio-1004158_1280.png');
        $sousRubrique->setRubriqueId(13);
        $manager->persist($sousRubrique);

        $manager->flush();
    }
}
