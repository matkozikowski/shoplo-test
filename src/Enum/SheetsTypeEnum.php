<?php

namespace App\Enum;

class SheetsTypeEnum
{
    public const SETTINGS_SHEET = 'Settings';
    public const PRODUCT_SHEET = 'Products';
    public const PERFORMANCE_SHEET = 'Performance';
    public const DIAGRAM_SHEET = 'Diagram';
    public const IMAGE_SHEET = 'Image';

    public static function getSheets(): array
    {
        return [
            SheetsTypeEnum::SETTINGS_SHEET,
            SheetsTypeEnum::PRODUCT_SHEET,
            SheetsTypeEnum::PERFORMANCE_SHEET,
            SheetsTypeEnum::DIAGRAM_SHEET,
            SheetsTypeEnum::IMAGE_SHEET,
        ];
    }
}
