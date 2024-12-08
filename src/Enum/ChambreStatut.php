<?php

namespace App\Enum;

enum ChambreStatut: string
{
    case DISPONIBLE = 'Disponible';
    case OCCUPEE = 'Occupée';
    case EN_MAINTENANCE = 'En maintenance';

    public function getValue(): string
    {
        return $this->value;
    }
}
