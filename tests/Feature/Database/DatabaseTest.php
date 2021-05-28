<?php

namespace Tests\Feature\Database;
 
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Book;
 
class DatabaseTest extends TestCase
{
    use RefreshDatabase;
 
    public function testDatabase()
    {
        print("aaaaa");
        $book = new Book();
        $book->title = 'hoge2';
        $book->author = 'tarou2';
        $saveBook = $book->save();
        
        $book = [
            'title' => 'hoge2',
        ];

        $this->assertDatabaseHas('books', $book);
    }
}