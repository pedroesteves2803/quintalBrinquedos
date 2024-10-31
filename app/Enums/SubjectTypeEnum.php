<?php

declare(strict_types=1);

namespace App\Enums;

enum SubjectTypeEnum: int
{
    case Budget         = 1;
    case Information       = 2;
    case Message = 3;

    public static function toArray(): array
    {
        return [
            self::Budget->value         => 'Orçamento',
            self::Information->value       => 'Informações',
            self::Message->value => 'Mensagem',
        ];
    }
}
