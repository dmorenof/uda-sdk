<?php
declare(strict_types=1);

namespace SdkTests;

use PHPUnit\Framework\TestCase;

/** Every file of `src/` declares the type its path says (PSR-4), and it loads. The SDK is generated: this guards the generation. */
final class AutoloadTest extends TestCase
{
    public function testEveryFileDeclaresTheTypeItsPathSays(): void
    {
        $composer = json_decode((string) file_get_contents(__DIR__ . '/../composer.json'), true, 512, JSON_THROW_ON_ERROR);
        $namespace = (string) array_key_first($composer['autoload']['psr-4']);
        $root = realpath(__DIR__ . '/../src');
        self::assertIsString($root);
        $checked = 0;
        $missing = [];
        foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($root, \FilesystemIterator::SKIP_DOTS)) as $file) {
            if (!$file instanceof \SplFileInfo || $file->getExtension() !== 'php') {
                continue;
            }
            $relative = substr($file->getPathname(), strlen($root) + 1, -4);
            $type = $namespace . str_replace(['/', '\\'], '\\', $relative);
            if (!class_exists($type) && !interface_exists($type) && !enum_exists($type) && !trait_exists($type)) {
                $missing[] = $type;
            }
            ++$checked;
        }
        self::assertGreaterThan(0, $checked);
        self::assertSame([], array_slice($missing, 0, 10), count($missing) . ' of ' . $checked . ' files do not declare the type their path says.');
    }
}
