<?php
declare(strict_types=1);


namespace Itpin\Fullname;

class FullName
{
    public function getFullName(string $last_name, string $name, string $secondary_name): string
    {
        $fullName = $last_name . " " . $name . " " . $secondary_name;
        $fullName = str_replace("  ", "", trim($fullName));
        return $fullName; //Фамилия Имя Отчество
    }
}