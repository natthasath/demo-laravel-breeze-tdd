<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use App\Mail\WelcomeEmail;

class SendmailTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_sendmail_sends_email()
    {
        // Fake the Mail facade to prevent actual email sending
        Mail::fake();

        // Call the sendmail route (assuming you have a route set up for it)
        $response = $this->get('/sendmail');

        // Assert that the response is true
        $response->assertStatus(200);
    }
}
