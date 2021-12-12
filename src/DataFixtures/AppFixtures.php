<?php
namespace App\DataFixtures;

use Faker;
use DateTime;
use App\Entity\Marque;
use App\Entity\Modele;
use App\Entity\Voiture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
    
        $mar1=  new Marque();

          $mar1->setLibelle('toyota');
          $manager->persist($mar1);
        $mar2=  new Marque();

          $mar2->setLibelle('peugeot');
          $manager->persist($mar2);

          $mod1 = new Modele();
          $mod1->setLibelle('rav4')
          ->setImage('modelle1.jpg')
          ->setPrixMoyen(150000)
          ->setMarque($mar1);
          $manager->persist($mod1);
          
          $mod2 = new Modele();
          $mod2->setLibelle('land-cruiser')
          ->setImage('modelle2.jpg')
          ->setPrixMoyen(550000)
          ->setMarque($mar1);
          $manager->persist($mod2);
          
          $mod3= new Modele();
          $mod3->setLibelle('celica')
          ->setImage('modelle3.jpg')
          ->setPrixMoyen(250000)
          ->setMarque($mar1);
          $manager->persist($mod3);
          
          $mod4 = new Modele();
          $mod4->setLibelle('starlet')
          ->setImage('modelle4.jpg')
          ->setPrixMoyen(20000)
          ->setMarque($mar1);
          $manager->persist($mod4);
          
          $mod5 = new Modele();
          $mod5->setLibelle('hybrid')
          ->setImage('modelle5.jpg')
          ->setPrixMoyen(60000)
          ->setMarque($mar1);
          $manager->persist($mod5);
 
          $mod1 = new Modele();
          $mod1->setLibelle('106')
          ->setImage('mod1.jpg')
          ->setPrixMoyen(150000)
          ->setMarque($mar2);
          $manager->persist($mod1);

          $mod2 = new Modele();
          $mod2->setLibelle('406')
          ->setImage('mod2.jpg')
          ->setPrixMoyen(250000)
          ->setMarque($mar2);
          $manager->persist($mod2);
          
          $mod3 = new Modele();
          $mod3->setLibelle('308')
          ->setImage('mod3.jpg')
          ->setPrixMoyen(30000)
          ->setMarque($mar2);
          $manager->persist($mod3);
          
          $mod4= new Modele();
          $mod4->setLibelle('504')
          ->setImage('mod4.jpg')
          ->setPrixMoyen(450000)
          ->setMarque($mar2);
          $manager->persist($mod4);
          
          $mod5 = new Modele();
          $mod5->setLibelle('c7 hybrid')
          ->setImage('mod5.jpg')
          ->setPrixMoyen(60000)
          ->setMarque($mar2);
          $manager->persist($mod5);

          $modeles= [$mod1,$mod2,$mod3,$mod4,$mod5];

          foreach($modeles as $mod){
              $rand = mt_rand(2,5);
for($i=0;$i < $rand ; $i++){
    $voitures = new Voiture();
    $voitures-> setImmatriculation($faker->regexify("[A-Z]{3}[0-9]{2,3}[A-Z]{3}"))
    ->setNbportes($faker->randomElement($array=array(3,5)))

    ->setAnnee($faker->numberBetween($min=1990,$max=2019))
    ->setModele($mod);
$manager->persist($voitures);
    
}

          }
          
    
   
   $manager->flush();
}
}