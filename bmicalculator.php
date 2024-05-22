<?php

class BMICalculator {
    private $weight;
    private $height;
    private $bmi;
    private $categories;

    public function __construct($weight, $height) {
        $this->weight = $weight;
        $this->height = $height;
        $this->categories = [
            ["max" => 18.5, "message" => "Under Weight"],
            ["max" => 25, "message" => "Normal Weight"],
            ["max" => 30, "message" => "Over Weight"],
            ["max" => 40, "message" => "OBESE"],
            ["max" => PHP_INT_MAX, "message" => "Invalid"]
        ];
    }

    public function calculateBMI() {
        $this->bmi = $this->weight / ($this->height * $this->height);
        return round($this->bmi, 2);
    }

    public function getBMICategory() {
        foreach ($this->categories as $category) {
            if ($this->bmi <= $category['max']) {
                return $category['message'];
            }
        }
        return "Unknown";
    }
}

?>
