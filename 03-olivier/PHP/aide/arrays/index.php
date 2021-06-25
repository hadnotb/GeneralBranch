<?php require 'vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Manipulation des tableaux en PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800&display=swap" rel="stylesheet">
    <link href="css/lib/normalize.css" rel="stylesheet">
    <link href="css/lib/all.min.css" rel="stylesheet">
    <link href="css/lib/layout-3wa.css" rel="stylesheet">
    <link href="css/lib/theme-cafeine.css" rel="stylesheet">

    <link rel="stylesheet" href="css/highlightjs/darkula.css">
    <script src="js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <link href="css/style.css" rel="stylesheet">

</head>
<body>
  <header class="banner">
    <a class="banner-link" href="">
      <strong class="banner-title">Manipulation des tableaux en PHP</strong>
      <small>PHP - Module 1</small>
    </a>
  </header>
  <main class="container">

    <article class="project-section">
        <h1>Manipulation des tableaux en PHP</h1>
        <h2>Concept</h2>
        <p>Les tableaux sont une structure de données permettant de stocker plusieurs valeurs. Chaque valeur contenue dans le tableau est associée :</p>
        <ul>
            <li>Soit à un indice numérique (0, 1, 2, etc)</li>
            <li>Soit à une clé (chaîne de caractères). On parle alors de tableau associatif.</li>
        </ul>


        <h2>Opérations courantes</h2>
        <h3>Créer un tableau</h3>
        <p>Il existe 2 syntaxes différentes pour créer un tableau en PHP. La première utilise la fonction <code>array()</code>, la seconde utilise les crochets <code>[ ]</code>.</p>
        <p>Chacune des 2 syntaxes permettent de créer des tableaux vides ou déjà remplis.</p>

        <h4>Créer un tableau vide</h4>
<pre><code class="php">
    // Syntaxe avec la fonction array()
    $emptyArray = array();

    // Syntaxe raccourcie avec les crochets
    $emptyArray = [];

</code></pre>

        <p>Contenu du tableau <b>$emptyArray</b>:</p>
        <?php
            $emptyArray = array();
            $emptyArray = [];
            dump($emptyArray);
        ?>

        <hr>

        <h4>Créer un tableau simple avec des valeurs dès le départ</h4>
<pre><code class="php">
    // Syntaxe avec la fonction array()
    $fruits = array('apple', 'pear', 'banana');

    // Syntaxe raccourcie avec les crochets
    $vegetables = ['tomato', 'celery', 'broccoli'];

</code></pre>

        <p>Contenu du tableau <b>$fruits</b>:</p>
        <?php
        $fruits = array('apple', 'pear', 'banana');
        $vegetables = ['tomato', 'celery', 'broccoli'];
        dump($fruits);
        ?>

        <p>Contenu du tableau <b>$vegetables</b>:</p>
        <?php
        $fruits = array('apple', 'pear', 'banana');
        $vegetables = ['tomato', 'celery', 'broccoli'];
        dump($vegetables);
        ?>

        <hr>

        <h4>Créer un tableau associatif avec des valeurs dès le départ</h4>
<pre><code class="php">
    // Syntaxe avec la fonction array() pour un tableau associatif
    $glucides = array('apple' => 20, 'pear' => 13, 'banana' => 35);

    // Syntaxe raccourcie avec les crochets pour un tableau associatif
    $glucides = ['apple' => 20, 'pear' => 13, 'banana' => 35];

</code></pre>

        <p>Contenu du tableau <b>$glucides</b>:</p>
        <?php
        $glucides = array('apple' => 20, 'pear' => 13, 'banana' => 35);
        dump($glucides);
        ?>

        <hr>

        <h3>Ajouter une valeur à un tableau</h3>
        <h4>Ajouter une valeur à la fin d'un tableau</h4>
<pre><code class="php">
    // En utilisant la fonction array_push(), on peut ajouter plusieurs valeurs d'un coup à un tableau simple
    array_push($fruits, 'cherry', 'raspberry');

    // Syntaxe raccourcie (ajout d'un seul élément) avec un tableau simple
    $vegetables[] = 'leeks';

    // Syntaxe raccourcie (ajout d'un seul élément) avec un tableau associatif
    $glucides['leeks'] = 12;

</code></pre>

        <p>Contenu du tableau <b>$fruits</b>:</p>
        <?php
        array_push($fruits, 'cherry', 'raspberry');
        $vegetables[] = 'leeks';
        $glucides['leeks'] = 12;
        dump($fruits);
        ?>

        <p>Contenu du tableau <b>$vegetables</b>:</p>
        <?php dump($vegetables); ?>

        <p>Contenu du tableau <b>$glucides</b>:</p>
        <?php dump($glucides); ?>

        <hr>

        <h4>Ajouter une valeur au début d'un tableau</h4>
<pre><code class="php">
    // En utilisant la fonction array_unshift()
    array_unshift($fruits, 'cherry');

</code></pre>

        <p>Contenu du tableau <b>$fruits</b>:</p>
        <?php
        array_unshift($fruits, 'cherry');
        dump($fruits);
        ?>

        <hr>

        <h3>Remplacer une valeur dans un tableau</h3>
        <p>Pour modifier la valeur de n'importe quelle case d'un tableau, on utilise l'indice ou la clé de la case que l'on souhaite modifier.
        La valeur précédente est écrasée.</p>
<pre><code class="php">
    // Avec un tableau simple
    $vegetables[2] = 'asparagus';

    // Avec un tableau associatif
    $glucides['leeks'] = 11;

</code></pre>

        <p>Contenu du tableau <b>$vegetables</b>:</p>
        <?php
        $vegetables[2] = 'asparagus';
        $glucides['leeks'] = 11;
        dump($vegetables);
        ?>

        <p>Contenu du tableau <b>$glucides</b>:</p>
        <?php dump($glucides); ?>

        <hr>

        <h3>Supprimer une valeur dans un tableau</h3>
    <h4>Supprimer une valeur au début d'un tableau</h4>
<pre><code class="php">
    // En utilisant la fonction array_shift()
    array_shift($fruits);

</code></pre>

        <p>Contenu du tableau <b>$fruits</b>:</p>
        <?php
        array_shift($fruits);
        dump($fruits);
        ?>

        <hr>

        <h4>Supprimer une valeur à la fin d'un tableau</h4>
<pre><code class="php">
    // En utilisant la fonction array_pop()
    array_pop($vegetables);

</code></pre>

        <p>Contenu du tableau <b>$vegetables</b>:</p>
        <?php
        array_pop($vegetables);
        dump($vegetables);
        ?>

        <h4>Supprimer n'importe quelle case d'un tableau</h4>
        <p>On peut utiliser la fonction <code>unset()</code> qui permet de détruire une variable. Attention : dans le cas d'un tableau indicé, cela créera
        un "trou" dans la suite des indices du tableau.</p>
<pre><code class="php">
    // En utilisant la fonction array_pop()
    unset($glucides['leeks']);

</code></pre>

        <p>Contenu du tableau <b>$glucides</b>:</p>
        <?php
        unset($glucides['leeks']);
        dump($glucides);
        ?>

        <h3>Rechercher un élément dans un tableau</h3>

        <h4>Rechercher une valeur</h4>
        <p>La fonction <code>in_array()</code> permet de savoir si oui ou non une valeur est présente dans un tableau</p>
<pre><code class="php">
    // La variable $valueIsPresent vaudra false, la valeur 'cherry' n'est pas présente dans le tableau
    $valueIsPresent = in_array('cherry', $vegetables);

</code></pre>

        <p>La fonction <code>array_search()</code> permet de connaître l'indice ou la clé de la première occurrence d'une valeur</p>
<pre><code class="php">
    // La variable $index vaudra 0 car la valeur 'apple' se trouve dans la première case du tableau $fruits
    $index = array_search('apple', $fruits);

</code></pre>

        <h4>Rechercher une clé</h4>
        <p>La fonction <code>array_key_exists()</code> permet de savoir si une clé (ou un indice) existe dans les clés d'un tableau.</p>
<pre><code class="php">
    // La variable $keyIsPresent vaudra true car la clé 'leeks' dans le tableau $glucides
    $keyIsPresent = array_key_exists('leeks', $glucides);

</code></pre>

        <h3>Parcourir un tableau</h3>
        <p>Parcourir un tableau est une opération courante que tout développeur sera amené à accomplir très souvent. Parcourir un tableau consiste
        à passer en revue chacun de ses éléments. Cela permet d'effectuer un traitement relatif à chaque élément du tableau.</p>

        <h4>Parcourir un tableau avec une boucle for()</h4>

<pre><code class="php">
    for($index = 0; $index < count($fruits); $index++){
        echo '<?=htmlspecialchars('<li>');?>' . $fruits[$index] . '<?=htmlspecialchars('</li>');?>';
    }

</code></pre>

        <p>Résultat : </p>
        <ul>
        <?php
            for($index = 0; $index < count($fruits); $index++){
                echo '<li>' . $fruits[$index] . '</li>';
            }
        ?>
        </ul>

        <h4>Parcourir un tableau avec une boucle foreach()</h4>

<pre><code class="php">
    // Syntaxe simple de la boucle foreach() : on ne récupère que les valeurs
    foreach($fruits as $fruit){
        echo '<?=htmlspecialchars('<span>');?>' . $fruit . '<?=htmlspecialchars('</span>');?>';
    }

</code></pre>

        <p>Résultat : </p>
        <ul>
            <?php
            foreach($fruits as $fruit){
                echo '<li>' . $fruit . '</li>';
            }
            ?>
        </ul>

<pre><code class="php">
    // Syntaxe complète de la boucle foreach() : on récupère à la fois les clés (ou indices) et les valeurs
    foreach($glucides as $fruit => $quantity){
        echo '<?=htmlspecialchars('<li>');?>' . $fruit . ' : ' . $quantity . 'g <?=htmlspecialchars('</li>');?>';
    }

</code></pre>

        <p>Résultat : </p>
        <ul>
            <?php
            foreach($glucides as $fruit => $quantity){
                echo '<li>' . $fruit . ' : ' . $quantity . 'g </li>';
            }
            ?>
        </ul>

        <h2>Tableaux à plusieurs dimensions</h2>

        <section>
            <h2 id="reception">Manipulation des tableaux en PHP</h2>
            <ul>
                <li>
                    <a href="https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/tableau-associatif/">
                        [pierre-giraud.com] Les tableaux associatifs
                    </a>
                </li>
                <li>
                    <a href="https://www.php.net/manual/fr/language.types.array.php">
                        [php.net] Les tableaux
                    </a>
                </li>
                <li>
                    <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/4238931-les-tableaux">
                        [openclassrooms.com] Les tableaux
                    </a>
                </li>
            </ul>
        </section>
    </article>
    </main>
    <footer id="mentions" class="mentions">
      <p><strong> &copy; Olivier Meunier - Tous&nbsp;droits&nbsp;réservés</strong></p>
    </footer>

</body>
</html>
