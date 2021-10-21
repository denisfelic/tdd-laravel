<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function check_if_user_column_is_correct()
    {
        $user = new User();

        $expected = [
            'name',
            'email',
            'password',
        ];

        $userProps = $user->getFillable();
        $arrayCompared = array_diff($expected, $userProps);
        $numberOfProps = count($expected) - count($userProps);

        $this->assertEquals(0, count($arrayCompared), 'some properties are not equals');
        $this->assertEquals(0, $numberOfProps, 'the number of properties are not equals');
    }
}
