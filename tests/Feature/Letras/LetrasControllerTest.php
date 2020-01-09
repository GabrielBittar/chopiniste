<?php

namespace Tests\Feature\Letras;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class LetrasControllerTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function cria_uma_letra_de_musica()
    {

        $this->withoutMiddleware();

        $response = $this->json('POST', 'api/letras/criar', [
            /* @todo TROCAR AQUI POR UM FAKER */
            'changeThisForaFaker'
        ]);
        $response->assertStatus(config('constants.HTTP.CREATED'));
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
