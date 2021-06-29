# PTZ [Prêt à Taux Zéro]

## Contexte
L'une des conditions d'obtention d'un prêt à taux zéro pour un projet d'achat immobilier est la suivante : le coût des travaux de rénovation et d'amélioration doit 
être supérieur ou égal à ***25%*** du coût total de l'opération (prix d'achat du bien + travaux). 

## Objectifs
On souahite réaliser une interface permettant de calculer facilement le pourcentage du coût 
des travaux sur une opération immobilière à partir du prix d'achat et du coût des travaux. 

### Interface
L'utilisateur aura la possiblité de modifier :

- Le ***prix d'achat*** grâce à un champ de type **range**. La fourchette ira 0 à 1000000 d'euros avec un pas de 1000.
- Le ***coût des travaux***, également avec un champ de type **range**. La fourchette ira de 0 à 500000 euros avec un pas de 1000.

2 informations seront mises à jour automatiquement dès que le prix d'achat ou le coîut des travaux sera modifié par l'utilisateur :

- Le coût total de l'opération (achat du bien + travaux)
- Le pourcentage que représentent les travaux par rapport au total

## Remarques

- Comme toujours essayer de ne pas répéter de code
- Nommer toutes les variables correctement en anglais et en camel case
- Quel événement JavaScript va être lancé à chaque changement de position des champs ?

## Mockups

![Capture version 1](.resources/img/capture-1.png)
