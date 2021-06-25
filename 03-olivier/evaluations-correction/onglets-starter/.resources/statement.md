# Onglets interactifs

## Objectifs
La page présente une liste de définition (balise HTML `<dl>`). Pour le moment, seuls les titres sont visibles (balises HTML `<dt>`).

L'objectif principal est d'afficher dans la cadre de droite la définition correspondant au titre sélectionné à gauche.

Par ailleurs le titre sélectionné doit avoir un fond gris pour montrer qu'il est sélectionnée. 

Par défaut, lorsque l'utilisateur arrive sur la page, la définition (balise HTML `<dd>`) correspondant au premier élément ("*Beast of Bodwin*") est sélectionnée. 

## Indications

- Le fichier de styles définit une classe **visible** qui, appliquée aux éléments `<dd>`, permettra d'afficher la définition voulue. ***Attention*** : pensez à masquer la définition précédemment sélectionnée en supprimant cette fois la classe **visible**.
- Le fichier de style définit une classe **selected** qui, appliquée aux élément `<dt>`, permettra d'afficher le titre sélectionné avec un fond de couleur grise. ***Attention*** : pensez à désélectionner le titre précédemment sélectionné en supprimant cette fois la classe **selected**
- Au clic sur un titre, il sera nécessaire de ***récupérer le titre cliqué*** (grâce à l'un des super pouvoirs des gestionnaires d'événements)
- Au clic sur un titre, il sera nécessaire d'afficher la définition correspondante (balise `<dd>`). Pour cela comment faire le lien entre un titre `<dt>` et la définition correspondante `<dd>` ? Souvenez-vous qu'il est 
facile en JavaScript de récupérer l'élément qui suit directement un autre élément. On peut aussi utiliser les attributs **id** et les attributs-data **data-something**.

## Démonstration
https://youtu.be/FBZyiO49OkM

## Barême

- la première définition est sélectionnée lorsque l'on arrive sur la page : **2 points**
- au clic sur un titre, il se passe quelque chose, `au moins un console.log()` : **1 point**
- au clic sur un titre, celui-ci est dans l'état sélectionné (uniquement lui) : **2 points**
- au clic sur un titre, la définition associée à celui-ci est affichée (uniquement elle) : **2 points**
- propreté du code : **3 points**

## Mockups

![Capture version 1](.resources/img/capture-1.png)
![Capture version 2](.resources/img/capture-2.png)
