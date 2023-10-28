<?php
class PostalAddress {
private $country;
private $region;
private $city;
private $street;
private $houseNumber;

public function __construct($country, $region, $city, $street, $houseNumber) {
    $this->country = $country;
    $this->region = $region;
    $this->city = $city;
    $this->street = $street;
    $this->houseNumber = $houseNumber;
}

public function setCountry($country) {
    $this->country = $country;
}

public function setRegion($region) {
    $this->region = $region;
}

public function setCity($city) {
    $this->city = $city;
}

public function setStreet($street) {
    $this->street = $street;
}

public function setHouseNumber($houseNumber) {
    $this->houseNumber = $houseNumber;
}

public function getCountry() {
    return $this->country;
}

public function getRegion() {
    return $this->region;
}

public function getCity() {
    return $this->city;
}

public function getStreet() {
    return $this->street;
}

public function getHouseNumber() {
    return $this->houseNumber;
}

public function getAddress() {
    return  $this->country. ', '. $this->city . ', '.  $this->street . ' '.$this->houseNumber . ', '  . $this->region ;
}


}

class Organisation extends PostalAddress {
private $organisationName;
private $workersNumbers;
private $workArea;

public function __construct($country, $region, $city, $street, $houseNumber, $organisationName, $workersNumbers, $workArea) {
    parent::__construct($country, $region, $city, $street, $houseNumber);
    $this->organisationName = $organisationName;
    $this->workersNumbers = $workersNumbers;
    $this->workArea = $workArea;
}

public function getOrganisationName() {
    return $this->organisationName;
}

public function getWorkersNumbers() {
    return $this->workersNumbers;
}

public function getWorkArea() {
    return $this->workArea;
}

public function setOrganisationName($organisationName) {
    $this->organisationName = $organisationName;
}

public function setWorkersNumbers($workersNumbers) {
    $this->workersNumbers = $workersNumbers;
}

public function setWorkArea($workArea) {
    $this->workArea = $workArea;
}

public function getInfo() {
    return '<br>'. 'Название организации = "' .$this->getOrganisationName() .'"' .'<br>' . 'Количество сотрудников = ' . $this->getWorkersNumbers() 
    .'<br>'. 'Сфера деятельности ' . $this->getWorkArea() .'<br>'. ' Адресс: ' . $this->getAddress();
}
}

$info = new Organisation('Россия', 'Свердлолвская область', 'Екатеринбург', 'Мира', '8а', 'Коллесия', 30, 'Финансы');
echo $info->getInfo(); 
echo '<br>'.'<br>'.'После изменений данных'; 

$info->setCity('Каменск-Уральский');
$info->setStreet('Каменская');
echo $info->getInfo();
