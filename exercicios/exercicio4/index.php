<?php
use source\Models\Faq\Type;
use source\Models\Faq\Question;

require __DIR__ . "/../../source/autoload.php";


$types = [
    new Type(1, "Inscrições"),
    new Type(2, "Sobre o Evento")
];
$faqs = [
    new Question(
    1,
    "Como faço para me inscrever na MOCITEC?",
    "As inscrições podem ser realizadas pelo site oficial durante o período de inscrição.",
    $types[0]),
    new Question(
    2,
    "Onde ocorre o evento da MOCITEC?",
    "O evento ocorre no IFSUL Câmpus Charqueadas.",
    $types[1])
];

echo $types[0]->show() . "<br><br>";
$types[1]->setName("Informações do Evento");
echo $types[1]->show() . "<br><br>";


foreach ($faqs as $faq) {
echo $faq->show();
}