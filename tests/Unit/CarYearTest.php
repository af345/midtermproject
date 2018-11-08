<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarYearTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearTest()
    {
        $car= Car::all()->first();
        $this->assertInternalType("integer", $car->year);
    }
}
