<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2018 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\DomainModel;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass phpDocumentor\DomainModel\Path
 * @covers ::<private>
 */
final class PathTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::__toString
     */
    public function testItCanContainALocationOnAStorageService()
    {
        $path = new Path('/my/Path');

        $this->assertSame('/my/Path', (string) $path);
    }

    /**
     * @covers ::equals
     */
    public function testItCanCompareItselfToAnotherPath()
    {
        $subject = new Path('a');
        $similar = new Path('a');
        $dissimilar = new Path('b');

        $this->assertTrue($subject->equals($similar));
        $this->assertFalse($subject->equals($dissimilar));
    }
}
