# Rocket : faites décoller la fusée !

## Objectifs

La fusée est prête à décoller pour partir à la conquête de l'univers Javascript !

Mais il reste du travail aux ingénieurs : le compte à rebours ne fonctionne pas encore et le processus d'allumage n'est 
pas non plus opérationnel.

### Objectif n°1 : terminer le décor
Il n'y a pas d'étoiles dans le ciel et c'est dommage. Commencez par ajouter dans le ciel 150 étoiles, aléatoirement placées,
et de 3 tailles différentes : petites, moyennes, grandes. Jetez un oeil au fichier de styles, il contient des classes pour les étoiles !

### Objectif n°2 : mise à feu et compte à rebours
Au clic sur le bouton de mise à feu, le compte à rebours s'affiche immédiatement sur le panneau d'affichage 
et démarre à 9. Puis chaque seconde, le compte à rebours diminue de 1. Lorsque "0" est affiché, la fusée devra décoller !

N'oubliez pas de changer l'image de la fusée à chaque étape (mise à feu et décollage) !

/!\ Attention /!\ Une fois le compte à rebours lancé, le bouton de mise à feu devient inopérent. 

### Objectif n°3 : Annulation du décollage
Au clic sur le bouton de mise à feu, le bouton d'annulation devient actif. Au clic sur le bouton d'annulation, le compte à rebours s'arrête et revient à 0.

Le bouton de mise à feu est alors à nouveau opérationnel. 

/!\ Attention /!\ Une fois que la fusée à décollé, on ne peut plus annuler le décollage ! Les deux boutons sont inactifs. 

## Remarques

- Pour faire décoller la fusée, on utilise ici les transitions CSS. Regardez dans le fichier de style, il suffit de donner une certaine classe à la fusée !

## Objectifs pédagogiques

Cet exercice va vous permettre de travailler les compétences suivantes :

1. Gestion de l'événement ***DOMContentLoaded*** pour être certain que le DOM est chargé avant de le manipuler
2. Lancement et arrêt d'un chronomètre
3. Installation et désinstallation d'un gestionnaire d'événement
4. Fonctions anonymes 
5. Portée des variables
6. Modification de la source d'une image
7. Création d'éléments
8. Modification du style d'un élément

## Mockups

![Capture](.resources/img/capture-1.png)

## Ressources

### Evénement DOMContentLoaded

- [DOMContentLoaded [MDN]](https://developer.mozilla.org/fr/docs/Web/Events/DOMContentLoaded)

### Les chronomètres 

- [Window timers [MDN]](https://developer.mozilla.org/fr/docs/Web/API/WindowTimers)

### Création et insertion d'un élément

- [document.createElement [MDN]](https://developer.mozilla.org/fr/docs/Web/API/Document/createElement)
- [element.appendChild [MDN]](https://developer.mozilla.org/fr/docs/Web/API/Node/appendChild)
- [element.insertBefore [MDN]](https://developer.mozilla.org/fr/docs/Web/API/Node/insertBefore)

### Gestion des événements

- [element.addEventListener [MDN]](https://developer.mozilla.org/fr/docs/Web/API/EventTarget/addEventListener)
- [element.removeEventListener [MDN]](https://developer.mozilla.org/fr/docs/Web/API/EventTarget/removeEventListener)

### Attributs src et style
- [Attribut src [MDN]](https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/src)
- [HTMLElement.style [MDN]](https://developer.mozilla.org/fr/docs/Web/API/HTMLElement/style)