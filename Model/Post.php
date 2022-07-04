<?php

Class Post{
    private string $firstName;
    private string $surname;
    private string $title;
    private string $message;
    private string $date;

    public function __construct($firstName,$surname,$title,$message,$image)
    {
        $this->firstName = htmlspecialchars($firstName);
        $this->surname = htmlspecialchars($surname);
        $this->title = htmlspecialchars($title);
        $this->message = htmlspecialchars($message);
        $this->image = $image;
        $this->date = date('m/d/Y - H:i');
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
    public function getTitle(): string
    {
        return $this->title;
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

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }
}