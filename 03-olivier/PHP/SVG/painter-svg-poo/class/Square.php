<?php
 
class Square extends Rectangle {



    public function setSize(int $size,$useless = null)
    {
        $this->width = $size;
        $this->height = $size;
    }

    

}