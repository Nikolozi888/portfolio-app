<?php

namespace App\DTOs;

class AboutDTO
{
    public function __construct(
        public string $title,
        public string $experience,
        public string $excerpt,
        public string $description,
    )
    {}

    public static function fromRequest($request): self
    {        
        $data = $request->validated();

        return new self(
            title: $data['title'],
            experience: $data['experience'],
            excerpt: $data['excerpt'],
            description: $data['description'],
        );
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'experience' => $this->experience,
            'excerpt' => $this->excerpt,
            'description' => $this->description,
        ];
    }
}
