<?php

namespace Tests\Unit;

use App\Models\Book;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    public function test_title_is_required()
    {
        $book = new Book(['title' => null, 'author' => 'Ochi Daniel', 'published_year' => 2025, 'genre' => 'Tech']);
        $this->assertFalse($book->save());
        $this->assertArrayHasKey('title', $book->getErrors()->get('title'));
    }

     public function test_author_is_required()
    {
        $book = new Book(['title' => 'Guide to Full Stack Development', 'author' => null, 'published_year' => 2025, 'genre' => 'Tech']);
        $this->assertFalse($book->save()); 
        $this->assertArrayHasKey('author', $book->getErrors()->get('author')); 
    }

    public function test_published_year_is_required()
    {
        $book = new Book(['title' => 'Guide to Full Stack Development', 'author' => 'Ochi Daniel', 'published_year' => null, 'genre' => 'Tech']);
        $this->assertFalse($book->save()); 
        $this->assertArrayHasKey('published_year', $book->getErrors()->get('published_year')); 
    }

    public function test_genre_is_required()
    {
        $book = new Book(['title' => 'Guide to Full Stack Development', 'author' => 'Ochi Daniel', 'published_year' => 2025, 'genre' => null]);
        $this->assertFalse($book->save()); 
        $this->assertArrayHasKey('genre', $book->getErrors()->get('genre')); 
    }
}
test('book', function () {
    expect(true)->toBeTrue();
});


