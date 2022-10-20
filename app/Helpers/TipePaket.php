<?php 
namespace App;

enum TipePaket:int 
{
    case kiloan = 1;
    case selimut = 2;
    case bed_cover = 3;
    case kaos = 4;

    public static function getTypePaket(self $value):String
    {
        return match($value)
        {
            TipePaket::kiloan => 'Kiloan',
            TipePaket::selimut => 'Selimut',
            TipePaket::bed_cover => 'Bed Cover',
            TipePaket::kaos => 'Kaos', 
        };
    }
}