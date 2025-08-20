<?php

namespace App\Enums;

enum DomainStatus: string
{
    case ACTIVE = 'active';
    case SUSPENDED = 'suspended';
    case TO_BE_DISMISSED = 'to_be_dismissed';
    case DISMISSED = 'dismissed';
    case DELETED = 'deleted';
    case ARCHIVED = 'archived';
    case IN_DEVELOPMENT = 'in_development';
    case TO_BE_RELEASED = 'to_be_released';
}
