<?php 

/**
 * Génère une balise SVG à partir du nom de la balise et d'une liste d'attributs transmis dans un tableau associatif
 */
function genTag(string $tag, array $attributes)
{
    $result = '<' . $tag . ' '; // Le début de la balise : '<rect '
    // Ou bien : $result = "<$tag ";

    foreach ($attributes as $attrName => $attrValue) {
        $result .= $attrName . '="' . $attrValue . '" '; // on ajoute chaque attribut : '<rect x="10" y="50" width="100" height="80" fill="green" opacity="1" '
        // Ou bien : $result .= "$attrName=\"$attrValue\"";
     }

    $result .= ' />'; // on termine par le chevron fermant // '<rect x="10" y="50" width="100" height="80" fill="green" opacity="1" />'

    return $result;
}