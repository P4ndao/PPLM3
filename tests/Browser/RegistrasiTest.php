<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')//melihat teks modul 3
                    ->clickLink('Register') //Mengeklik register
                    ->assertPathIs('/register') //pindah path register
                    ->type('email', 'admin@gmail.com') //melihat ada email
                    ->type('name', 'Danis')//tipe name
                    ->type('password', 'password') //mengecheck ada password
                    ->press('REGISTER'); //klik button register
        });
    }
}
