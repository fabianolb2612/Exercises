<?php
namespace Source\Models\Hospital;
require_once __DIR__ . "/../User.php";
Use User;
class Patient extends User
{
    private string $birthDate;
    private string $medicalRecord;

    public function __construct(int $id,int $idType,string $name,string $email,string $password,string $photo,string $birthDate,string $medicalRecord)
    {
        parent::__construct($id, $idType, $name, $email, $password, $photo);

        $this->birthDate = $birthDate;
        $this->medicalRecord = $medicalRecord;
    }

    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    public function setBirthDate(string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    public function getMedicalRecord(): string
    {
        return $this->medicalRecord;
    }

    public function setMedicalRecord(string $medicalRecord): void
    {
        $this->medicalRecord = $medicalRecord;
    }

    public function show(): string
    {
        return "Paciente: #" . $this->getId() . " - Nome: " . $this->getName() . "<br>" .
               "Email: " . $this->getEmail() . "<br>" .
               "Data de Nascimento: " . $this->birthDate . "<br>" .
               "Prontuário: " . $this->medicalRecord . "<br><br>";
    }
}