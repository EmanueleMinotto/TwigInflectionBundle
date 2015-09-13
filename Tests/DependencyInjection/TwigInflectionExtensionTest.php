<?php

namespace EmanueleMinotto\TwigInflectionBundle\Tests\DependencyInjection;

use EmanueleMinotto\TwigInflectionBundle\DependencyInjection\TwigInflectionExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

/**
 * @coversDefaultClass \EmanueleMinotto\TwigInflectionBundle\DependencyInjection\TwigInflectionExtension
 */
class TwigInflectionExtensionTest extends AbstractExtensionTestCase
{
    const SERVICE_ID = 'emanuele_minotto.twig.extension.inflection';

    /**
     * Return an array of container extensions you need to be registered for each test.
     *
     * @return ExtensionInterface[]
     */
    protected function getContainerExtensions()
    {
        return [
            new TwigInflectionExtension(),
        ];
    }

    /**
     * Test bundle core service.
     */
    public function testBundleService()
    {
        $this->load();

        $this->assertContainerBuilderHasService(
            self::SERVICE_ID,
            'DaveDevelopment\TwigInflection\Twig\Extension\Inflection'
        );
        $this->assertContainerBuilderHasServiceDefinitionWithTag(
            self::SERVICE_ID,
            'twig.extension'
        );
    }
}
