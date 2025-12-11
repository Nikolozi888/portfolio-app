<?php

namespace App\DTOs;

class BlogDTO
{
    public function __construct(
        public string $title,
        public string $excerpt,
        public string $description,
        public int $categoryId,
        public int $tagId,
        public string $author,
        public ?string $image,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            title: $data['title'],
            excerpt: $data['excerpt'],
            description: $data['description'],
            categoryId: $data['category_id'],
            tagId: $data['tag_id'],
            author: $data['author'],
            image: $data['image'] ?? null,
        );
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'description' => $this->description,
            'category_id' => $this->categoryId,
            'tag_id' => $this->tagId,
            'author' => $this->author,
            'image' => $this->image,
        ];
    }
}
