<?php

$listeCouleur = ["rouge","marron","vert","violet","bleu","jaune","orange"];



function listeCouleurTrier($listeCouleur)
{

    $Index ;
    $IndexFinal ;
    $ElementCourant ;
    $ElementTrie ;
    $tableauTrie ;
    
    $indexFinal = count($tableauDeCouleur);
    for ($index=0 ; $index<$indexFinal; $index ++)
    {
        $ElementCourant = $listeCouleur[$index];
        $tableauTrie[] = CouleurAnalyser($ElementCourant);
    }
    return $TableauTrie ;
}

function CouleurAnalyser($Couleur)
{
    $tableauResultat = array();
    $tableauResultat[] = $couleur;
    $tableauResultat[] = ContientCouleur($couleur,"rouge");
    $tableauResultat[] = ContientCouleur($couleur,"jaune");
    $tableauResultat[] = ContientCouleur($couleur,"bleu");
    return $TableauResultat ;
}

function ContientCouleur()
{
    $listeRouge ;
    $listeVert ;
    $listeJaune ;
    $listeBleu ;
    $listeMarron ;
    $ltistOrange ;
    $listViolet ;

}

function contientCouleur($couleur ,$primaire)
{
    $ListeRouge = ["Amarante", "Bordeaux", "Brique", "Capucine",
    "Carmin", "Cerise", "Cinabre", "Coquelicot", "Corail", "Cramoisi",
    "Ecarlate", "Ecrevisse", "Fraise", "Framboise", "Fushia",
    "Grenadine", "Grenat", "Groseille", "Magenta", "Mauve", "Nacarat",
    "Ocre rouge", "Pourpre", "Rouge", "Rouille", "Sang", "Tomate",
    "Vermeil", "Vermillon"];
    $ListeJaune = ["Aurore", "Banane", "Beurre", "Blé", "Boutton
    d'or", "Canari", "Champagne", "Citron", "Fauve", "Fleur de soufre",
    "Jaune", "Maïs", "Miel", "Mimosa", "Moutarde", "Naples", "Ocre
    jaune", "Or", "Orpiment", "Paille", "Poussin", "Sable", "Safran",
    "Soufre", "Vénitien"];
    $ListeBleu = ["Aigue-marine", "Ardoise", "Azur", "Bleu",
    "Céleste", "Ciel", "Cyan", "Denim", "Klein", "Lapis-lazuli",
    "Lavande", "Marine", "Outremer", "Pervenche", "Prusse", "Saphir",
    "Turquoise"];
    $ListeVert = ["Absinthe", "Aigue-marine", "Anis", "Asperge",
    "Avocat", "Bouteille", "Canard", "Céladon", "Chartreuse",
    "Emeraude", "Epinard", "Gazon", "Impérial", "Jade", "Lichen",
    "Malachite", "Menthe", "Mousse", "Olive", "Opaline", "Perroquet",
    "Pin", "Pistache", "Pomme", "Prairie", "Printemps", "Sapin",
    "Sauge", "Tilleul", "Véronèse", "Vert"]];
    $ListeViolet = ["Améthyste", "Aubergine", "Byzantin",
    "Cerise", "Glycine", "Lavande", "Lie de vin", "Lilas", "Mauve",
    "Orchidée", "Prune", "Rose bonbon", "Rose vif", "Violet"];
    $ListeOrange = ["Abricot", "Aurore", "Bisque", "Carotte",
    "Citrouille", "Corail", "Cuivre", "Mandarine", "Melon", "Orange",
    "Roux", "Safran", "Saumon", "Tangerine"];
    $ListeMarron = ["Auburn", "Beige", "Brun", "Bronze", "Brou de
    noix", "Cacao", "Café", "Cannelle", "Caramel", "Châtaigne",
    "Châtain", "Chocolat", "Feuille-morte", "Marron", "Mordoré",
    "Noisette", "Sépia", "Tabac", "Terre d'ombre", "Terre de Sienne"];

    if($primaire ="Rouge")
    {
        return in_array($couleur , $listeRouge) ||
                in_array($couleur , $listeViolet) ||
                in_array($couleur , $listeOrange) ||
                in_array($couleur , $listeMarron) ;
    }
    if($primaire ="Jaune")
    {
        return in_array($couleur , $listeJaune) ||
                in_array($couleur , $listeOrange) ||
                in_array($couleur , $listeVert) ||
                in_array($couleur , $listeMarron) ;
    }
    if($primaire ="Bleu")
    {
        return in_array($couleur , $listeRouge) ||
                in_array($couleur , $listeViolet) ||
                in_array($couleur , $listeOrange) ||
                in_array($couleur , $listeMarron) ;
    }
            
}

function listeCouleurExtraire($listeCouleur , $primaire)
{
    $index ;
    $indexFinal = count($listeCouleur) -1 ;
    $elementCourant ;
    $tableauExtrait

    if ($primaire = "rouge")
    {
        $indexCouleur = 1;
    }
    if ($primaire = "bleu")
    {
        $indexCouleur = 2;
    }
    if ($primaire = "jaune")
    {
        $indexCouleur = 3;
    }

    for($index = 0 ; $index<$indexFinal ; $index ++)
    {
        $elementCoourant = $listeCouleur[$index];
        if($elementCourant[$indexCouleur = true ;])
        {
            $tableauExtrait[] = $elementCourant[0] ;
        }
    }
    return $tableauExtrait;
}
