<?php
// tests/Unit/MailCustomEmailTest.php

namespace Tests\Unit;

use Tests\TestCase;
use App\Mail\CustomEmail;
use Illuminate\Support\Facades\Mail;

class MailCustomEmailTest extends TestCase
{
    /** @test */
    public function it_sends_an_email()
    {
        // Fake the Mail facade to prevent emails from being sent
        Mail::fake();

        // Create data to be sent in the email
        $data = ['name' => 'John Doe', 'email' => 'john@example.com'];

        // Send the email
        Mail::to('sureshkushmi@gmail.com')->send(new CustomEmail($data));

        // Assert that the email was sent
        Mail::assertSent(CustomEmail::class, function ($mail) use ($data) {
            return $mail->data['name'] === $data['name'] &&
                   $mail->data['email'] === $data['email'];
        });
    }
}
