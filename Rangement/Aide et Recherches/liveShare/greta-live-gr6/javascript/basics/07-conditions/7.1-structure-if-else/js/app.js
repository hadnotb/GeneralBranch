let age = 12;

if (age >= 18) {

    // Les instructions de ce bloc de code sont exécutées si la condition est vraie (true)
    console.log('Vous êtes majeur');
}
else {

    // Les instructions de ce bloc de code sont exécutées si la condition est fausse (false)
    console.log('Vous êtes mineur');
}

// On peut toujours inverser la condition avec l'opérateur de négation : ! (not)
if (! age < 18) {

    // Les instructions de ce bloc de code sont exécutées si la condition est vraie (true)
    console.log('Vous êtes majeur');
}
else {

    // Les instructions de ce bloc de code sont exécutées si la condition est fausse (false)
    console.log('Vous êtes mineur');
}

// Initialisation des variables.
const age       = 30;
const firstName = 'Tom';


// Structure de contrôle conditionnelle if simple.
if(age > 18)
{
    // Si la comparaison vaut le booléen true alors ce code s'exécute.
    document.write('<p>Vous êtes majeur.</p>');
}


// Structure de contrôle conditionnelle if / else.
if(age < 20)
{
    // Si la comparaison vaut le booléen true alors ce code s'exécute.
    document.write('<p>Vous avez moins de 20 ans.</p>');
}
else
{
    // Si la comparaison vaut le booléen false alors ce code s'exécute.
    document.write('<p>Vous avez plus de 20 ans.</p>');
}


if(firstName == 'Elsa')
{
    // Si la comparaison vaut le booléen true alors ce code s'exécute.
    document.write("<p>Vous vous appelez Elsa.</p>");
}
else if(firstName == 'Charlotte')
{
    // Si la comparaison vaut le booléen true alors ce code s'exécute.
    document.write("<p>Vous vous appelez Charlotte.</p>");
}
else
{
    // Si les DEUX comparaisons précédentes valent le booléen false alors ce code s'exécute.
    document.write("<p>Vous ne vous appelez ni Elsa ni Charlotte.</p>");
}


/*
 * Structure de contrôle conditionnelle if simple avec deux comparaisons.
 *
 * Les parenthèses autour de chaque comparaison ne sont pas obligatoires
 * mais améliorent la lisibilité du code.
 */
if((firstName == 'Tom') && (age != 40))
{
    // Si la comparaison vaut le booléen true alors ce code s'exécute.
    document.write("<p>Vous vous appelez Tom et vous n'êtes pas quadra.</p>");
}

/*
 * Le code ci-dessus peut également s'écrire comme ceci :
 *
 * if(firstName == 'Tom')
 * {
 *     if(age != 40)
 *     {
 *          document.write("<p>Vous vous appelez Tom et vous n'êtes pas quadra.</p>");
 *     }
 * }
 *
 * Cette deuxième version permet de construire plus facilement les else.
 *
 * Si les données à comparer sont proches alors la première version est plus lisible.
 * Sinon la deuxième est meilleure.
 */