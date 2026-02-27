<?php
declare(strict_types=1);

class Ticket
{
    public function __construct(
        public ?int $id,
        public string $title,
        public string $description,
        public string $priority,
        public string $status,
        public int $authorId,
        public ?string $createdAt = null,
        public ?string $updatedAt = null
    ) {}
}