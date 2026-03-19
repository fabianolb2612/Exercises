<?php
namespace Source\Models\Hospital;
require_once __DIR__ . "/../User.php";
Use User;
class Doctor extends User
{
    private string $crm;
    private string $specialty;

    public function __construct(
        int $id,
        int $idType,
        string $name,
        string $email,
        string $password,
        string $photo,
        string $crm,
        string $specialty
    )
    {
        parent::__construct($id, $idType, $name, $email, $password, $photo);

        $this->crm = $crm;
        $this->specialty = $specialty;
    }

    public function getCrm(): string
    {
        return $this->crm;
    }

    public function setCrm(string $crm): void
    {
        $this->crm = $crm;
    }

    public function getSpecialty(): string
    {
        return $this->specialty;
    }

    public function setSpecialty(string $specialty): void
    {
        $this->specialty = $specialty;
    }

    public function show(): string
    {
        return "Médico: #" . $this->getId() . " - Nome: " . $this->getName() . "<br>" .
               "Email: " . $this->getEmail() . "<br>" .
               "CRM: " . $this->crm . "<br>" .
               "Especialidade: " . $this->specialty . "<br><br>";
    }
}