# Image de fond Arc-en-Ciel 

## Objectifs
On souhaite mettre en place une interface personnalisable par l'internaute : il va pouvoir choisir l'image de fond de la page
en fonction d'une couleur de l'arc-en-ciel : rouge, orange, jaune, vert, bleu ciel, bleu, rose.

## Principe général
Un champ de type ***range*** possédant l'id **image-colo** est présent dans le code HTML  de la page. Ses valeurs
vont de **0 à 6**. 

A chaque valeur correspond une couleur. Lorsque l'internaute va modifier la position 
du curseur, l'image correspondant à la couleur sélectionnée doit apparaître en fond. 

Le nom des images seront stockés dans un tableau dont les indices correspondront aux valeur du curseur.

Pour faire apparaître une image on lui ajoutera la classe **visible**, déjà définie dans le fichier *style.css*.

Pour faire disparaître une image, on lui enlèvera la classe **visible**.

## Remarque importante
Le code HTML et CSS est déjà prêt, il ne reste plus qu'à écrire le ***JavaScript*** !

## Etapes du travail à faire en JavaScript
### Stocker le nom des images dans un tableau (1 point)
Dans la partie "Données globales" **créer un tableau** dans une variable nommée **images**.
Ce tableau doit contenir le *nom des fichiers images* de sorte à ce que les indices correspondent 
aux valeurs du champ de type range. 

*Par exemple* :
- La valeur **0** correspond à la couleur **rouge** et doit correspondre à l'image nommée ***red.jpg***.
- La valeur **1** correspond à la couleur **orange** et doit correspondre à l'image nommée ***orange.jpg***.
- etc

***Remarque*** : les images sont stockées dans le dossier `images` 

### Ecouter le changement de couleur (1 point)
Dans la partie "Code principal", **sélectionner le champ de type range** et le ranger dans une variable nommée **colorRangeInput**.

**Installer un gestionnaire d'événement** sur l'événement adéquat pour réagir au ***changement de valeur*** sur le champ de type range. La fonction de callback, le gestionnaire d'événement sera nommé **onInputColorRange**.

La fonction ***onInputColorRange()*** sera définie au dessus dans la partie "Fonctions" et dans un premier temps on affichera dans la console le message "*Nouvelle couleur sélectionnée !*";

### Initialisation des images (5 points)
Nous allons maintenant créer des balises `\<img\>` et les ajouter dans la page à l'intérieur de la section possédant la classe **images**. Elles seront par défaut masquées (opacité à 0). Seule l'image possédant la classe ***visible*** sera visible.

- Créer une fonction ***init()*** dans la partie "Fonctions". 
- A l'intérieur de cette fonction, parcourir le tableau d'images **images**.
- Pour chaque image : créer un nouvel élément **img** et remplir son attribut **src** avec le nom du fichier correspondant à l'indice de la boucle.
Ajouter un attribut **alt** vide. Ajouter la classe **color-image**. Ajouter un attribut **id** contenant la chaîne ***image-*** suivie de l'indice de l'image. Par exemple la première image (rouge) aura pour id "**image-0**". Le seconde aura pour id "**image-1**"
- Chaque élément **img** sera inséré dans la balise ayant pour classe **images**. 
- La première image (rouge) aura la classe **visible** 
- Appeler la fonction ***init()*** dans la partie "Code principal"

### Changement de l'image de fond (2 points) 
Dans le fonction **onInputColorRange()** : 

- récupérer dans une variable **index** la valeur du champ de type range (elle correspond à l'indice de l'image correspondant)
- sélectionner l'élément possédant la classe **visible** et lui  retirer.
- ajouter la classe **visible** à l'élément correspondant à l'indice récupéré dans la variable **index** grâce à son attribut **id**. 

### Déclenchement de l'événement (1 point)
Déclencher enfin artificiellement dans la partie "Code principal" l'événement adéquat afin que l'image correspondant à la valeur par défaut (cf code HTML) soit affichée au départ (image verte) 

## Démo
<a href="https://youtu.be/Tu1cuoxGZXU" target="_blank">Voir la démo</a>

## Mockups

![Capture 1](.resources/img/capture-1.png)
![Capture 2](.resources/img/capture-2.png)
![Capture 3](.resources/img/capture-3.png)