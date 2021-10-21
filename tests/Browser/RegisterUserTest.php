<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterUserTest extends DuskTestCase
{
    /**
     * @test
     */
    public function check_if_user_site_is_correct()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Laravel');
        });
    }

    /**
     * @test
     */
    public function check_if_user_can_login()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'test@test.com')
                ->type('password', '12345678')
                ->click('button')
                ->assertPathIs('/dashboard');
        });
    }

    /**
     * @test
     */
    public function check_if_register_feature_is_working()
    {
        $this->browse(function (Browser $browser) {

            $browser
                ->visit('/register')
                ->type('name', 'Neo')
                ->type('email', 'neo@test.com')
                ->type('password', '12345678')
                ->type('password_confirmation', '12345678')
                ->click('button')
                ->assertPathIs('/dashboard')
                ->assertSee('Dashboard');
        });
    }
}
