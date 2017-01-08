<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Hadithbio;

class HadithbioTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $newRow =   [
                        'date_of_birth' => "0600-01-01",
                        'date_of_death' => "0650-01-01",
                        'lat' => 24.5246542,
                        'lon' => 39.56918410000003,
                    ];
        $realRow = Hadithbio::createSahaba()->toArray();

        $this->assertTrue( $newRow == $realRow );
    }
}
