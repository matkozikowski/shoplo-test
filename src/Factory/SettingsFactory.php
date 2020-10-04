<?php

namespace App\Factory;

use App\Model\DTO\SettingDTO;

class SettingsFactory implements FactoryInterface
{
    public function create($data = null): SettingDTO
    {
        $keys = $data[0];
        $valuesData = array_slice($data, 1);
        $settings = new SettingDTO();


        foreach ($keys as $key) {
            $settings->setKey(strtolower($key));
        }

        foreach ($settings->getKeys() as $index => $key) {
            foreach ($valuesData as $values) {
                $value = $this->formatDate($values[$index]);
                $settings->set($key, $value);
            }
        }

        return $settings;
    }

    private function formatDate($value): string
    {
       return (substr_count($value, '/') >= 2) ? str_replace('/', '.', $value) : $value;
    }
}
