## Enoncé

Créer un programme avec un formulaire permettant de traduire des mots français vers de l'anglais et inversement.

## Consignes

### PHTML

Dans l'en-tête du template :

- Ajouter un titre au programme : "Traducteur Anglais - Français".

Dans la partie principale du template :

- On affiche systématiquement le formulaire de traduction.
- Si le formulaire a été soumis, on affiche en dessous le résultat de la traduction

Dans le formulaire de configuration :

- Ajouter un champ de saisie texte pour le mot (*name : word*).
- Ajouter des boutons radio pour le sens de traduction (*name : direction*), avec deux options "français vers anglais" (*value : toEnglish*) et "anglais vers français" (*value : toFrench*).
- Ajouter un bouton de soumission du formulaire pour traduire le mot saisi.
- Le formulaire déclenche une requête *HTTP POST* vers le programme *PHP*.

### PHP

- Créer une fonction *translate()* recevant le mot et le sens de traduction en argument et construire le code de traduction à l'intérieur, le résultat est renvoyé au code appelant (le code principal).
- Dans le code principal il faut récupérer les données du formulaire et appeler correctement la fonction *translate()* puis afficher le template *PHTML*.

## Remarques

- Utiliser systématiquement la syntaxte alternative *PHP* dans les templates *PHTML*, en refermant la balise *PHP* chaque fois en bout de ligne.
- On doit pouvoir saisir le mot en majuscules comme en minuscules.
- Il n'y a qu'une seule variable contenant l'ensemble du dictionnaire, comment le construire ?