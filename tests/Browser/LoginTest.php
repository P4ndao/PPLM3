<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Modul 3')
                    ->clickLink('Log in') //Mengeklik log in
                    ->assertPathIs('/login') //pindah path login
                    ->type('email', 'admin@gmail.com') //melihat ada email
                    ->type('password', 'password') //mengecheck ada password
                    ->press('LOG IN'); //klik button login
        });
    }
}
