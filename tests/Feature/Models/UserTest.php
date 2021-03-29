<?php

namespace Tests\Feature\Models;

use App\Models\User;

/**
 * Class UserTest
 *
 * @package Tests\Feature\Models
 */
class UserTest extends ModelTest
{
    /**
     * UserTest set-up.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Create an Album to run tests on
        $this->model = User::factory()->make();
    }

    /**
     * @return void
     */
    public function testAssertNameIsAString(): void
    {
        $this->assertTrue(
            is_string($this->model->name)
        );
    }

    /**
     * @return void
     */
    public function testAssertUsernameIsAString(): void
    {
        $this->assertTrue(
            is_string($this->model->username)
        );
    }

    /**
     * @return void
     */
    public function testAssertEmailIsAString(): void
    {
        $this->assertTrue(
            is_string($this->model->email)
        );
    }

    /**
     * @return void
     */
    public function testAssertEmailIsAValidEmailAddress(): void
    {
        $this->assertTrue(
            filter_var($this->model->email, FILTER_VALIDATE_EMAIL) === $this->model->email
        );
    }

    /**
     * @return void
     */
    public function testAssertAddressIsAnArray(): void
    {
        $this->assertTrue(
            is_array($this->model->address)
        );
    }

    /**
     * @return void
     */
    public function testAssertPhoneIsAString(): void
    {
        $this->assertTrue(
            is_string($this->model->phone)
        );
    }

    /**
     * @return void
     */
    public function testAssertWebsiteIsAString(): void
    {
        $this->assertTrue(
            is_string($this->model->website)
        );
    }

    /**
     * @return void
     */
    public function testAssertWebsiteIsAValidWebsite(): void
    {
        $this->assertTrue(
            filter_var($this->model->website, FILTER_VALIDATE_DOMAIN) === $this->model->website
        );
    }

    /**
     * @return void
     */
    public function testAssertCompanyIsAnArray(): void
    {
        $this->assertTrue(
            is_array($this->model->company)
        );
    }
}
