<?php

function genRectangle(int $x,int $y, int $width, int $height, string $strokeColor, $strokeWidth, $color, float $opacity){

    return '<rect x="'.$x."  y=".$y.'" width="'.$width.'" height="'.$height.'" stroke="'.$strokeColor.'" stroke-width="'.$strokeWidth.'" fill="'.$color.'"  fill-opacity="'.$opacity.'/> ';


}

function genCircle($cx,$cy,$r){

    return '<circle cx="'.$cx.'" cy="'.$cy.'" r="'.$r.'"/>';
   
   
}

function genElipse(int $cx, int $cy, int $rx, int $ry){

    return '<ellipse cx='."$cx".' cy="'.$cy.'" rx="'.$rx.'" ry="'.$ry.'" />';
    
   
   
}

function genPolygone($point = [],$fillColor,$strokeColor){

    


    return '<polygon points="'.implode(' ',$point).'"
    fill="'.$fillColor.'" stroke="'.$strokeColor.'" />';
   
   
}

require 'templates/base.phtml';

/*<body>
    <svg height="100" width="100" viewBox="0 0 30 20">
        <circle cx="50" cy="50" r="40" stroke="blue" stroke-width="3" fill="green" />
    </svg> 
    <svg height="100" width="100" viewBox="0 0 30 20">
        
        <?php echo getRectangle(20,30,100,100,'black',6,'red',0.1);?>
    </svg> 
    <svg height="100" width="100"viewBox="0 0 30 20">
        <polyline points="20,20 20,30 30,30 30,100 50,100 50,30 60,30 60,20" stroke="blue" stroke-width="1" fill="black" />
    </svg> 
    
    
    
</body>*/