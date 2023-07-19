<?php
function georgianToEnglishName($georgianName) {

$georgianToEnglish = array(
    'ა' => 'a',
    'ბ' => 'b',
    'გ' => 'g',
    'დ' => 'd',
    'ე' => 'e',
    'ვ' => 'v',
    'ზ' => 'z',
    'თ' => 't',
    'ი' => 'i',
    'კ' => 'k',
    'ლ' => 'l',
    'მ' => 'm',
    'ნ' => 'n',
    'ო' => 'o',
    'პ' => 'p',
    'ჟ' => 'zh',
    'რ' => 'r',
    'ს' => 's',
    'ტ' => 't',
    'უ' => 'u',
    'ფ' => 'p',
    'ქ' => 'k',
    'ღ' => 'gh',
    'ყ' => 'q',
    'შ' => 'sh',
    'ჩ' => 'ch',
    'ც' => 'ts',
    'ძ' => 'dz',
    'წ' => 'ts',
    'ჭ' => 'tch',
    'ხ' => 'kh',
    'ჯ' => 'j',
    'ჰ' => 'h'
);

    $englishName = '';
    $georgianLetters = preg_split('//u', $georgianName, -1, PREG_SPLIT_NO_EMPTY);

    foreach ($georgianLetters as $georgianLetter) {
        $englishLetter = isset($georgianToEnglish[$georgianLetter]) ? $georgianToEnglish[$georgianLetter] : $georgianLetter;
        $englishName .= $englishLetter;
    }

    return mb_convert_case($englishName, MB_CASE_TITLE, "UTF-8");
}

$name = "მაია დოლიძე";
$split_name=explode(" ", $name);

$georgianFirstName = $split_name[0];
$georgianLastName = $split_name[1]; 

$englishFirstName = georgianToEnglishName($georgianFirstName);
$englishLastName = georgianToEnglishName($georgianLastName);

echo $englishFirstName . " " . $englishLastName;
