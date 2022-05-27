<?php
declare(strict_types=1);


namespace Itpin\Fullname;

class FullName
{
    public function getFullName($l, $n, $s): string
    {
        $fullName = $l . " " . $n . " " . $s;
        $fullName = str_replace("  ", "", trim($fullName));
        return $fullName;
    }

}