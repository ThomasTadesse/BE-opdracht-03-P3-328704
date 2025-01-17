<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Leverancier;

class LeverancierTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */

    
    public function test_leverancier_index()
    {
        // Act: Make a GET request to the leverancier index route
        $response = $this->get(route('leverancier.index'));

        // Assert: Check if the response is successful
        $response->assertViewIs('leverancier.index');
        $response->assertViewHas('leveranciers');
    }

    public function test_leverancier_show()
    {

        // Act: Make a GET request to the leverancier show route
        $response = $this->get(route('leverancier.show', $leverancier->id));

        // Assert: Check if the response is successful and the correct view is returned
        $response->assertViewIs('leverancier.show');
        $response->assertViewHas('leverancier', $leverancier);
    }
}