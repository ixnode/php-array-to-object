<?php

declare(strict_types=1);

/*
 * This file is part of the ixno/php-array-to-object project.
 *
 * (c) Björn Hempel <https://www.hempel.li/>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Ixnode\PhpArrayToObject\Tests\Unit;

use Ixnode\PhpArrayToObject\ArrayToObject;
use PHPUnit\Framework\TestCase;

/**
 * Class SizeConverterTest
 *
 * @author Björn Hempel <bjoern@hempel.li>
 * @version 0.1.0 (2022-12-31)
 * @since 0.1.0 (2022-12-31) First version.
 * @link ArrayToObject
 */
final class ArrayToObjectTest extends TestCase
{
    private const DATA = [
        'backgroundColor' => '255,255,255,100',
        'printCalendarWeek' => true,
        'printWeekNumber' => true,
        'printQrCodeMonth' => true,
        'printQrCodeTitle' => true,
        'aspectRatio' => 1.414,
        'height' => 4000,
    ];

    /**
     * Test wrapper.
     *
     * @dataProvider dataProvider
     *
     * @test
     * @testdox $number) Test ArrayToObject: $method
     * @param int $number
     * @param string $method
     * @param array<string, bool|float|int|string> $given
     * @param mixed $expected
     */
    public function wrapper(int $number, string $method, array $given, mixed $expected): void
    {
        /* Arrange */

        /* Act */
        $arrayToObject = new ArrayToObject($given);
        $callback = [$arrayToObject, $method];

        /* Assert */
        $this->assertIsNumeric($number); // To avoid phpmd warning.
        $this->assertIsCallable($callback);
        $this->assertSame($expected, $arrayToObject->{$method}());
    }

    /**
     * Data provider.
     *
     * @return array<int, array<int, mixed>>
     */
    public function dataProvider(): array
    {
        $number = 0;

        return [

            /**
             * Test: getBackgroundColor
             */
            [++$number, 'getBackgroundColor', self::DATA, '255,255,255,100', ],
        ];
    }
}
