<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_page_loads()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }

    public function test_contact_form_submission()
    {
        $response = $this->post('/contact', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'subject' => 'Test Subject',
            'message' => 'This is a test message'
        ]);
        
        $response->assertRedirect();
        $this->assertDatabaseHas('contacts', [
            'email' => 'test@example.com'
        ]);
    }

    public function test_admin_can_view_contacts()
    {
        $user = User::factory()->create();
        
        \App\Models\Contact::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'subject' => 'Hello',
            'message' => 'Test message'
        ]);
        
        $response = $this->actingAs($user)->get('/admin/contacts');
        $response->assertStatus(200);
        $response->assertSee('John Doe');
    }
}