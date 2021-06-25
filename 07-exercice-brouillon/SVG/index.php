<?php

function genRectangle(int $x,int $y, int $width, int $height, string $strokeColor, $strokeWidth, $color, float $opacity){
    
    return genTag('rect',['x' => $x,
                            'y' => $y,
                            'width'  => $width,
                            'height'  => $height,
                            'stroke' => $strokeColor,
                            'stroke-width'  => $strokeWidth,
                            'fill'  => $color,
                            'fill-opacity'  => $opacity
    ]);
}

function genCircle($cx,$cy,$r){

    return genTag('circle',['cx' => $cx,
                            'cy' => $cy,
                            'r'  => $r
    ]); 
}

function genElipse(int $cx, int $cy, int $rx, int $ry){

    return genTag('ellipse',['cx' => $cx,
                            'cy' => $cy,
                            'rx'  => $rx,
                            'ry'  => $ry,
    ]);
}

function genPolygone(array $point,$fillColor,$strokeColor){

    return genTag('polygon',['points' => implode(" ",$point),
                            'fill' => $fillColor,
                            'stroke'  => $strokeColor
                            
    ]);
}
// Fonction qui genere les tag de facon dynamique grace a un tableau associatif
function genTag(string $tag,array $attributes){
    // je concataine pour creer ma balise 
    $result ='<'. $tag .' ';

    foreach($attributes as $key => $value){

        $result .= $key.'="'.$value.'" ' ;
        
    }
    $result.= ' />';
    return $result ;
}



require 'templates/base.phtml';

// '<circle cx="'.$cx.'" cy="'.$cy.'" r="'.$r.'"/>';



