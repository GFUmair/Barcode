<?php

class Dimensions
{

    private $height;
    private $width;

    public function __construct(int $height, int $width)
    {
        $this->$height = 100;//$height;
        $this->$width = 100;//$width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }


}