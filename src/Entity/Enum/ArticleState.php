<?php

namespace App\Entity\Enum;

enum ArticleState: string
{
    case ONLINE = 'online';
    case OFFLINE = 'offline';
}