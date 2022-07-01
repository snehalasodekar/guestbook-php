<?php

Class Post{
    private string $firstName;
    private string $surname;
    private string $email;
    private string $message;
    private string $date;

    public function __construct($firstName,$surname,$email,$message)
    {
        $this->firstName = $firstName;
        $this->surname = $surname;
        $this->email = $email;
        $this->message = $message;
        $this->date = date('m/d/Y');
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return Date|false|string
     */
    public function getDate()
    {
        return $this->date;
    }
}