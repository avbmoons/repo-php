<?php

class Task
{
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority = 1;
    private bool $isDone = false;
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->setDateCreated(new DateTime());
    }

    public function markAsDone(): void
    {
        $this->setDateUpdated(new DateTime);
        $this->setDateDone(new DateTime);
        $this->setIsDone(true);
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }

    public function getDateDone(): DateTime
    {
        return $this->dateDone;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setDescription(string $description): void
    {
        $this->setDateUpdated(new DateTime);
        $this->description = $description;
    }

    public function setDateCreated(DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    public function setDateUpdated(DateTime $dateUpdated): void
    {
        $this->dateUpdated = $dateUpdated;
    }

    public function setDateDone(DateTime $dateDone): void
    {
        $this->dateDone = $dateDone;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }
}
