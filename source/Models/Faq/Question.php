<?php
namespace Source\Models\Faq;
class Question 
{
    private $id;
    private $question;
    private $answer;
    private $type;
    public function __construct(int $id,string $question,string $answer, Type $type)
    {
        $this->id = $id;
        $this->question = $question;
        $this->answer = $answer;
        $this->type = $type;
    }
    public function getId(): int
    {
            return $this->id;
        }
        public function setId(int $id): void
        {
        $this->id = $id;
    }
    public function getQuestion(): string
    {
        return $this->question;
    }
    public function setQuestion(string $question): void
    {
        $this->question = $question;
    }
    public function getAnswer(): string
    {
        return $this->answer;
    }
    public function setAnswer(string $answer): void
    {
        $this->answer = $answer;
    }
    public function getType(): Type
    {
        return $this->type;
    }
    public function setType(Type $type): void
    {
        $this->type = $type;
    }
   public function show(): string
   {
        return "FAQ #{$this->id}<br>" .
               "Categoria: {$this->type->getName()}; <br>" .
               "Pergunta: {$this->question}<br>" .
               "Resposta: {$this->answer}<br><br>";
    }
}