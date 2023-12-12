<?php

declare(strict_types=1);

namespace App\Tests\Beer\Functional;

use App\Tests\WebTestCaseBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class HealtCheckControllerTest extends WebTestCaseBase
{
    private const ENDPOINT = '/api/beer/healt-check';

    public function testIndex(): void
    {
        self::$baseClient->request(Request::METHOD_GET, self::ENDPOINT);
        $response = self::$baseClient->getResponse();
        self::assertEquals(JsonResponse::HTTP_OK, $response->getStatusCode());
        $responseData = \json_decode($response->getContent(), true);
        self::assertArrayHasKey('status', $responseData);
        self::assertEquals('OK Beer', $responseData['status']);
    }
}