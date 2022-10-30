<?php

class Todo {
    private $text;
    private $date;
    private $completed;

    public function __construct($text, $date)
    {
        $this->text = $text;
        $this->date = $date;
        $this->completed = false;
    }

    public function toArray(): array
    {
        return array('text' => $this->text, 'date' => $this->date, 'completed' => $this->completed);
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }


}
