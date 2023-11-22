<?php 

namespace Data; // boleh pake kurung kurawal boleh tidak

class Shape
{   
    public function getCorner(): int
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public function getCorner(): int
    {
      return 4;   
    }

    public function getParentCorner()
    {
        // mengambil data dari parent dengan ::
        return parent::getCorner();
    }
}