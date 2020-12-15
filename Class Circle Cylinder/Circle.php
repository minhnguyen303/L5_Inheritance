<?php


class Circle
{
    protected $radius;
    protected $color;

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Đây là hình tròn có bán kính $this->radius và có màu $this->color";
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getPerimeter()
    {
        return intval(pi() * $this->radius * 2);
    }

    public function getAcreage()
    {
        return intval(pi() * ($this->radius ** 2));
    }
}