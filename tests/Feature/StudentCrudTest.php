<?php

namespace Tests\Feature;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_mvc_pages_are_available(): void
    {
        $this->get('/hello/Abijith%20vs')
            ->assertOk()
            ->assertSeeText('Hello, Abijith vs');

        $this->get('/about')
            ->assertOk()
            ->assertSeeText('About');
    }

    public function test_student_can_be_created_with_all_required_fields(): void
    {
        $response = $this->post('/students', [
            'roll_no' => 'CS24-01',
            'name' => 'Aarav Nair',
            'email' => 'aarav@example.com',
            'department' => 'CSE',
            'semester' => 7,
            'cgpa' => 8.75,
        ]);

        $response->assertRedirect(route('students.index'))
            ->assertSessionHas('status', 'Student saved!');
        $this->assertDatabaseHas('students', [
            'roll_no' => 'CS24-01',
            'email' => 'aarav@example.com',
        ]);
    }

    public function test_create_form_includes_required_student_fields(): void
    {
        $response = $this->get('/students/create');

        $response->assertOk();
        $response->assertSee('name="_token"', false);
        $response->assertSee('name="email"', false);
        $response->assertSee('name="department"', false);
        $response->assertSee('name="semester"', false);
        $response->assertSee('name="cgpa"', false);
    }

    public function test_missing_student_returns_not_found(): void
    {
        $this->get('/students/999999')->assertNotFound();
    }

    public function test_students_api_returns_a_json_array(): void
    {
        $this->getJson('/api/students')
            ->assertOk()
            ->assertJsonIsArray();
    }

    public function test_database_seeder_includes_the_submitting_student(): void
    {
        $this->seed(DatabaseSeeder::class);

        $this->get('/students')
            ->assertOk()
            ->assertSeeText('Abijith vs')
            ->assertSeeText('1');
    }
}
