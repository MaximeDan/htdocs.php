<?php

class Tweet
{

    private string $message;
    public User $user;
    public int $like;
    public bool $isDeleted;

    public function __construct(
        string $message,
        User $user,
        int $like,
        bool $isDeleted
    ) {

        $this->message = $message;
        $this->user = $user;
        $this->like = $like;
        $this->isDeleted = $isDeleted;
    }



    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = substr($message, 0, 250);
    }


    public function isValidTweet(): bool
    {
        return !$this->isDeleted;
    }
}
