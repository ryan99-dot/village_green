-- Commerciaux
INSERT INTO utilisateur (identifiant, role, nom, prenom, mail, mot_de_passe, service_entreprise) VALUES
('com1', 'Commercial', 'Durand', 'Paul', 'paul.durand@villagegreen.fr', 'mdp123', 'Ventes'),
('com2', 'Commercial', 'Lemoine', 'Sophie', 'sophie.lemoine@villagegreen.fr', 'mdp456', 'Ventes'),
('com3', 'Commercial', 'Dupont', 'Camille', 'camille.dupont@villagegreen.fr', 'mdp789', 'Grands Comptes'),
('com4', 'Commercial', 'Garcia', 'Antoine', 'antoine.garcia@villagegreen.fr', 'mdp321', 'Export');

-- Clients professionnels
INSERT INTO utilisateur (identifiant, role, nom, prenom, mail, mot_de_passe, categorie_client, telephone, coefficient_taxe, reduction, identifiant_commercial) VALUES
('cli_pro1', 'Client', 'Martin', 'Jean', 'jean.martin@clientpro.fr', 'pass123', 'Professionnel', '0612345678', 1.20, 0.05, 'com1'),
('cli_pro2', 'Client', 'Bernard', 'Claire', 'claire.bernard@clientpro.fr', 'pass456', 'Professionnel', '0698765432', 1.15, 0.10, 'com2'),
('cli_pro3', 'Client', 'Leroy', 'Nathalie', 'nathalie.leroy@clientpro.fr', 'pro789', 'Professionnel', '0623456789', 1.10, 0.08, 'com3'),
('cli_pro4', 'Client', 'Faure', 'Olivier', 'olivier.faure@clientpro.fr', 'pro321', 'Professionnel', '0634567891', 1.18, 0.06, 'com4'),
('cli_pro5', 'Client', 'Simon', 'Julie', 'julie.simon@clientpro.fr', 'pro654', 'Professionnel', '0645678912', 1.20, 0.07, 'com2');

-- Clients particuliers
INSERT INTO utilisateur (identifiant, role, nom, prenom, mail, mot_de_passe, categorie_client, telephone, coefficient_taxe, identifiant_commercial) VALUES
('cli_part1', 'Client', 'Petit', 'Lucie', 'lucie.petit@clientpart.fr', 'pass789', 'Particulier', '0678945612', 1.25, 'com1'),
('cli_part2', 'Client', 'Moreau', 'Thomas', 'thomas.moreau@clientpart.fr', 'pass321', 'Particulier', '0654321987', 1.25, 'com2'),
('cli_part3', 'Client', 'Noël', 'Hugo', 'hugo.noel@clientpart.fr', 'part111', 'Particulier', '0667891234', 1.25, 'com3'),
('cli_part4', 'Client', 'Lemoine', 'Chloé', 'chloe.lemoine@clientpart.fr', 'part222', 'Particulier', '0678912345', 1.25, 'com4'),
('cli_part5', 'Client', 'Barre', 'Mathieu', 'mathieu.barre@clientpart.fr', 'part333', 'Particulier', '0689123456', 1.25, 'com1');

