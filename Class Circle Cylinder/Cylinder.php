<?php

class Cylinder extends Circle
{
    protected $height;

    public function __toString()
    {
        return "Đây là hình trụ có bán kính $this->radius, chiều cao là $this->height và có màu $this->color";
    }

    public function getAcreage()
    {
        return intval((2 * parent::getAcreage() * $this->height) + (parent::getPerimeter() * $this->height));
    }

    public function getVolume()
    {
        return intval(parent::getAcreage() * $this->height);
    }
}