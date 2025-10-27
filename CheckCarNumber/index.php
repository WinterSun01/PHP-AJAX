<?php
namespace base;

class CarNumberChecker
{
    private $string;
    private $matches = [];

    public function __construct($string)
    {
        $this->string = $string;

        $pattern = '/[А-ЯЁ]\d{3}[А-ЯЁ]{2}\d{0,3}/u';

        if (preg_match_all($pattern, $this->string, $this->matches)) 
            {
            echo "<h3>Найдены гос. номера:</h3><ul>";
            foreach ($this->matches[0] as $number) 
                {
                    echo "<li>" . htmlspecialchars($number) . "</li>";
                }
            echo "</ul>";
        } else 
            {
                echo "<p style='color:red;'>Гос. номера не найдены.</p>";
            }
    }
}

use base\CarNumberChecker;

$string = 'автомобиль с госномером В695СХ допустил столкновение с автомобилем марки Toyota corolla c госномером Т495СХ22';
$checker = new CarNumberChecker($string);
