<?php
function findUniqueWords($text) {
    $words = explode(" ", $text);
    $count = array_count_values($words);
    $result = [];
    
    foreach ($words as $word) {
        if ($count[$word] === 1) {
            $result[] = $word;
        }
    }
    return $result;
}

$text = "The quick brown fox jumps over the lazy dog";
$uniqueWords = findUniqueWords($text);

echo "Unique words: ";
foreach ($uniqueWords as $word) {
    echo $word . " ";
}

?>