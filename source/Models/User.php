<?php
<<<<<<< HEAD
namespace source\Models;
=======

>>>>>>> 348ded57c989eeedc3a03f9dcbe61f5c20836a27
class User
{
    private $id;
    private $idType;
    private $name;
    private $email;
    private $password;
    private $photo;
    public function __construct(
        int $id,
        int $idType,
        string $name,
        string $email,
        string $password,
        string $photo
        )
    {
        $this->id = $id;
        $this->idType = $idType;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->photo = $photo;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getIdType(): int
    {
        return $this->idType;
    }
    public function setIdType(int $idType): void
    {
        $this->idType = $idType;
    }
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function getPassword(): ?string
    {
        return $this->password;
    }
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
    public function getPhoto(): ?string
    {
        return $this->photo;
    }
    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }
}
