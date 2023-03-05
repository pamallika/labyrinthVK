<?php

namespace src;

class Main implements MainInterface
{
    /**
     * @var int
     */
    public $width;
    /**
     * @var array
     */
    public $structure;
    /**
     * @var int
     */
    public $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
        $this->structure = [];
    }

    public function structureInit(): array
    {
        for ($i = 0; $i < $this->height; $i++) {
            $structure[] = $this->getRandomWidthValues();
        }
        /** @var array $structure */
        return $structure;
    }

    public function getRandomWidthValues(): array
    {
        for ($i = 0; $i < $this->width; $i++) {
            $width[] = rand(0, 9);
        }
        /** @var array $width */
        return $width;
    }
}