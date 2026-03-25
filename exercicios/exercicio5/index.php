<?php
use source\Models\Hospital\Patient;
use source\Models\Hospital\Doctor;
require __DIR__ . "/../../source/autoload.php";

$patients = [
new Patient(
    1,
    1,
    "Fabiano Braga",
    "fabianobraga@gmail.com",
    "asdf1234",
    "foto1.jpg",
    "26/12/2007",
    "Paciente com fortes dores no joelho."
),

new Patient(
    2,
    1,
    "Vinícius Oliveira",
    "vinioliveira@gmail.com",
    "1234asdf",
    "foto2.jpg",
    "25/02/2008",
    "Paciente com dores no ombro."
)
];

$doctors = [
    new Doctor(
    3,
    2,
    "Dr. Fabio",
    "fabio@gmail.com",
    "4321fdsa",
    "foto3.jpg",
    "123456",
    "Ortopedista"
),

new Doctor(
    4,
    2,
    "Dr. Felipe",
    "felipe@gmail.com",
    "fdsa4321",
    "foto4.jpg",
    "654321",
    "Clínico Geral"
)
];

$patients[0]->setMedicalRecord("Paciente com histórico de asma controlada.");

foreach ($patients as $patient) {
    echo $patient->show();
    
}
foreach ($doctors as $doctor) {
    echo $doctor->show();
    
}