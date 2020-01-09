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
            'conteudoParaPostar'
        ]);
        $response->assertStatus(config('constants.HTTP.CREATED'));
    }

    /**
     * @test
     */
    public function obtem_uma_letra_de_musica()
    {
        $this->withoutMiddleware();
        $idDaMusica = 1;

        $response = $this->json('GET', 'api/letras/obter/' . $idDaMusica, [
            /* @todo TROCAR AQUI POR UM FAKER */
            'filtroDoGet'
        ]);
        $response->assertStatus(config('constants.HTTP.OK'));
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
