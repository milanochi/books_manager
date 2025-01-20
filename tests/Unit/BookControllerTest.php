<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_returns_books()
    {
        $books = Book::factory()->count(3)->create(); 
        $response = $this->get('/'); 
        $response->assertStatus(200); 
        $response->assertViewHas('books', $books); 
    }

    public function test_store_book()
    {
        $data = [
            'title' => 'Guides to Web development',
            'author' => 'Ochi Daniel',
            'published_year' => 2025,
            'genre' => 'Tech',
        ];

        $response = $this->post('/books', $data); 
        $response->assertStatus(201); 
        $this->assertDatabaseHas('books', $data); 
    }

   
    public function test_update_book()
    {
        $book = Book::factory()->create();

        $data = [
            'title' => 'Updated Title',
            'author' => 'Updated Author', 
            'published_year' => 2024,
            'genre' => 'Updated Genre', 
        ];

        $response = $this->put("/books/{$book->id}", $data);

        $response->assertStatus(200); 
        $this->assertDatabaseHas('books', [
            'id' => $book->id,
            'title' => 'Updated Title',
            'author' => 'Updated Author',
            'published_year' => 2024,
            'genre' => 'Updated Genre',
        ]); 
    }

    public function test_delete_book()
    {
        $book = Book::factory()->create();

        $response = $this->delete("/books/{$book->id}");

        $response->assertStatus(204); 
        $this->assertDatabaseMissing('books', ['id' => $book->id]); 
    }
}

test('book', function () {
    expect(true)->toBeTrue();
});
