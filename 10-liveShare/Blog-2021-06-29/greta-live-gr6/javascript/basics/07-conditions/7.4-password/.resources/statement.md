# Mot de passe
## Objectifs pédagogiques

- Se familiariser avec les structures conditionnelles: ***if...else*** et ***switch***
- Apprendre à manipuler les chaînes de caractères en découvrant les nombreuses méthodes de la classe ***String***

## Mission
L'objectif est de demander à l'utilisateur d'entrer un mot de passe. Une fois ce mot de passe récupéré,
vous devez faire plusieurs tests et afficher le résultat de ces tests : 

### Test #1
Si l'internaute n'a rien écrit, ou s'il n'y a que des espaces, un message lui indique qu'il n'a rien écrit. Aucun autre test ne sera effectué.
Si au contraire l'internaute a bien écrit quelque chose, un message affiche sur la page le mot de passe et les tests suivants sont effectués. 

### Test #2
Tests sur la longueur du mot de passe : 

- Si le mot de passe fait moins de 8 caractères, il est trop court, un message en avertit l'internaute
- Si le mot de passe fait plus de 12 caractères, il est trop long, un message en avertit l'internaute
- Si le mot de passe fait entre 8 et 12 caractères, un message indique à l'internaute que la longueur du mot de passe est correcte

### Test #3
Est-ce que le mot de passe commence un chiffre ? Si oui, un message l'indique à l'internaute, et on s'arrête là.
Sinon, si ce n'est pas un chiffre, un message l'indique également à l'internaute, et on continue avec les autres tests. 

### Test #4
Le premier caractère du mot de passe est-il une voyelle ou une consomne ? Un message l'indique à l'internaute. 

***Attention*** : il peut aussi s'agir d'un caractère spécial, qui n'est ni une voyelle, ni une consomne. 

### Test #5
Le mot de passe commence-t-il par la chaîne 'aze' ? Si oui un message avertit l'internaute que c'est un peu dangereux. 

### Test #6

- Si le mot de passe commence par la lettre m, un message lui dit que son mot de passe commence par "M comme Mireille"
- Si le mot de passe commence par la lettre m, un message lui dit que son mot de passe commence par "P comme Patrick"
- Si le mot de passe commence par la lettre m, un message lui dit que son mot de passe commence par "B comme Bastien"