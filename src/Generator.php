<?php
/**
 * File:    Generator.php
 * User:    tayfun
 * Date:    14/05/2017
 * Time:    22:23
 */

namespace Bayt\Random;

use Symfony\Component\Finder\Finder;


class Generator
{
    /**
     * @var Generator
     */
    protected $generator;

    /**
     * @var array|null
     */
    private $languages = [];

    /**
     * @var Generator
     */
    protected $finder;

    /**
     * Generator constructor.
     * @param $generator
     * @param $languages
     */
    public function __construct(Generator $generator, $languages = null)
    {
        $this->generator = $generator;
        $this->languages = $languages ?? $languages;
        $this->finder = $this->readFormatterFiles();
    }

    /**
     * @return $this
     */
    private function readFormatterFiles()
    {
        return (new Finder())->in(__DIR__ . "/Formatters");
    }

}