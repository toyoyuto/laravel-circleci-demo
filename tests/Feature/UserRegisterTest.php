<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRegisterTest extends TestCase
{
    // 追加
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    // /**
    //  * @test
    //  */
    // public function ユーザー登録できる()
    // {
    //     $email = 'email@example.com';
    //     $this->post(route('register'), [
    //         'name' => 'user',
    //         'email' => $email,
    //         'password' => 'password',
    //         'password_confirmation' => 'password'
    //     ])->assertStatus(302);
    //     $this->assertDatabaseHas('users', ['email' => $email]);
    // }
}
