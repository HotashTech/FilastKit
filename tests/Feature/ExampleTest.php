<?php

declare(strict_types=1);

use Tests\TestCase;

test('the application returns a successful response', function (): void {
    /** @var TestCase $this */
    $testResponse = $this->get('/');

    $testResponse->assertStatus(200);
});
