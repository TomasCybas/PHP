<?php

class Image {
    private $src;
    private $width;
    private $height;
    private $border = "none";
    private $class = [];

    /**
     * Image constructor.
     * @param $src
     * @param $width
     * @param $height
     * @param array $class
     */
    public function __construct($src, $width = '200px', $height = '200px', $class = [])
    {
        $this->src = $src;
        $this->width = $width;
        $this->height = $height;
        $this->class = $class;
    }


    /**
     * @return mixed
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * @param mixed $src
     */
    public function setSrc($src)
    {
        $this->src = $src;
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
     * @return string
     */
    public function getBorder(): string
    {
        return $this->border;
    }

    /**
     * @param string $border
     */
    public function setBorder(string $border)
    {
        $this->border = $border;
    }


    public function __toString()
    {
        return "<img src='$this->src' class='$this->class' style='height: $this->height; width: $this->width; border: $this->border'>";

    }


}
