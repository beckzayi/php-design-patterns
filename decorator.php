<?php
interface CarService {
    public function getCost();
    public function getDescription();
}

class BasicInspection implements CarService {
    public function getCost() {
        return 25;
    }

    public function getDescription() {
        return 'Basic Inspection';
    }
}

class OilChange implements CarService {
    protected $carService;

    function __construct(CarService $carService) {
        $this->carService = $carService;
    }

    public function getCost() {
        return 29 + $this->carService->getCost();
    }

    public function getDescription() {
        return $this->carService->getDescription() . ' and Oil Change';
    }
}

$cost = (new BasicInspection())->getCost();

$cost = (new OilChange(new BasicInspection()))->getCost();

$description = (new OilChange(new BasicInspection()))->getDescription();

echo $cost . '<br />';

echo $description;

?>