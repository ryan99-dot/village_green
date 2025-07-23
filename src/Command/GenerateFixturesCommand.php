<?php

namespace App\Command;

use Doctrine\DBAL\Connection;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'generate:fixtures')]
class GenerateFixturesCommand extends Command
{
    public function __construct(private Connection $conn)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $tables = [
            'rubrique' => 'Rubrique',
            'sous_rubrique' => 'SousRubrique',
            'fournisseur' => 'Fournisseur',
            'utilisateur' => 'Utilisateur',
            'produit' => 'Produit',
            'adresse' => 'Adresse',
            'commande' => 'Commande',
            'bon_de_livraison' => 'BonDeLivraison',
            'commande_produit' => 'CommandeProduit',
            'livraison_produit' => 'LivraisonProduit',
            'adresse_commande' => 'AdresseCommande'
        ];

        foreach ($tables as $table => $entity) {
            $output->writeln("📄 Génération des fixtures pour <info>$table</info>");

            $rows = $this->conn->fetchAllAssociative("SELECT * FROM $table");

            $code = "<?php\n\n";
            $code .= "namespace App\\DataFixtures;\n\n";
            $code .= "use App\\Entity\\$entity;\n";
            $code .= "use Doctrine\\Bundle\\FixturesBundle\\Fixture;\n";
            $code .= "use Doctrine\\Persistence\\ObjectManager;\n\n";
            $code .= "class {$entity}Fixtures extends Fixture\n";
            $code .= "{\n    public function load(ObjectManager \$manager): void\n    {\n";

            foreach ($rows as $row) {
                $varName = lcfirst($entity);
                $code .= "        \$$varName = new $entity();\n";

                foreach ($row as $col => $val) {
                    if ($val === null) continue;
                    $method = 'set' . str_replace(' ', '', ucwords(str_replace('_', ' ', $col)));
                    $valExported = var_export($val, true);
                    $code .= "        \$$varName->$method($valExported);\n";
                }

                $code .= "        \$manager->persist(\$$varName);\n\n";
            }

            $code .= "        \$manager->flush();\n";
            $code .= "    }\n}\n";

            file_put_contents("src/DataFixtures/{$entity}Fixtures.php", $code);
        }

        $output->writeln("✅ Tous les fichiers de fixtures ont été générés.");
        return Command::SUCCESS;
    }
}
