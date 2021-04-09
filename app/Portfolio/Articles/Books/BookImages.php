<?php

namespace App\Portfolio\Articles\Books;

use Exception;

class BookImages
{
    /**
     * @return array
     * @throws Exception
     */
    public function getAllImages()
    {
        $directory = $this->getImageFullDirectory();

        if (file_exists($directory)) {
            return scandir($directory);
        }

        throw new Exception("Book image folder does not exist: " . $directory);
    }

    public function getImagePath($image)
    {
        return $this->getImageFullDirectory() . '/' . $image;
    }

    public function doesImageExist($image)
    {
        if (is_file($this->getImagePath($image))) {
            return true;
        }

        return false;
    }

    public function displayImage($image)
    {
        return '/images/books/' . $this->getDirectory() . '/'. $image;
    }
}
