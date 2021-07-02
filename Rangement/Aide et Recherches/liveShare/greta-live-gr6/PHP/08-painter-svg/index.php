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


// Définir des fonctions PHP pour générer des formes géométriques en SVG
function genRectangle($x, $y, $width, $height, $color, $opacity)
{
    // return '<rect x="'.$x.'" y="'.$y.'" width="'.$width.'" height="'.$height.'" fill="'.$color.'" opacity="'.$opacity.'" />';
    return genTag('rect', [
        'x' => $x,
        'y' => $y,
        'width' => $width,
        'height' => $height,
        'fill' => $color,
        'opacity' => $opacity
    ]);
}

function genSquare($x, $y, $size, $color, $opacity)
{
    // return '<rect x="'.$x.'" y="'.$y.'" width="'.$size.'" height="'.$size.'" fill="'.$color.'" opacity="'.$opacity.'" />';
    return genTag('rect', [
        'x' => $x,
        'y' => $y,
        'width' => $size,
        'height' => $size,
        'fill' => $color,
        'opacity' => $opacity
    ]);
}

function genEllipse($cx, $cy, $rx, $ry, $color, $opacity)
{
    // return '<ellipse cx="'.$cx.'" cy="'.$cy.'" rx="'.$rx.'" ry="'.$ry.'" fill="'.$color.'" opacity="'.$opacity.'" />';
    return genTag('ellipse', [
        'cx' => $cx,
        'cy' => $cy,
        'rx' => $rx,
        'ry' => $ry,
        'fill' => $color,
        'opacity' => $opacity
    ]);
}

function genCircle($cx, $cy, $radius, $color, $opacity)
{
    // return '<circle cx="'.$cx.'" cy="'.$cy.'" r="'.$radius.'" fill="'.$color.'" opacity="'.$opacity.'" />';
    return genTag('circle', [
        'cx' => $cx,
        'cy' => $cy,
        'r' => $radius,
        'fill' => $color,
        'opacity' => $opacity
    ]);
}

function genTriangle($x1, $y1, $x2, $y2, $x3, $y3, $color, $opacity)
{
    // return '<polygon points="'.$x1.' '.$y1.' '.$x2.' '.$y2.' '.$x3.' '.$y3.'" fill="'.$color.'" opacity="'.$opacity.'" />';
    return genTag('polygon', [
        'points' => $x1.' '.$y1.' '.$x2.' '.$y2.' '.$x3.' '.$y3,
        'fill' => $color,
        'opacity' => $opacity
    ]);
}

function genPolygon(array $points, $color, $opacity)
{
    // return '<polygon points="'.implode(' ', $points).'" fill="'.$color.'" opacity="'.$opacity.'" />';
    return genTag('polygon', [
        'points' => implode(' ', $points),
        'fill' => $color,
        'opacity' => $opacity
    ]);
}

// Inclusion du template
include 'index.phtml';