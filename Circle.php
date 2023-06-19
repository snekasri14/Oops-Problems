// Problem: Create a class called "Rectangle" that represents a rectangle. The class should have the following attributes and methods:
Attributes:
* length (an integer)
* width (an integer)
Methods:
* init(self, length, width): Initializes the rectangle object with the given length and width.
* get_area(self): Returns the area of the rectangle (length * width).
* get_perimeter(self): Returns the perimeter of the rectangle (2 * (length + width)).
* is_square(self): Returns True if the rectangle is a square (length == width), and False otherwise 

<?php
class Rectangle {
    private $length;
    private $width;
    public function Attribute ($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }
    public function get_area() {
        return $this->length * $this->width;
    }
    public function get_perimeter() {
        return 2 * ($this->length + $this->width);
    }
    public function is_square() {
        return $this->length == $this->width;
    }
}
$rectangle = new Rectangle();
$rectangle->Attribute(4, 4);
$area = $rectangle->get_area();
$perimeter = $rectangle->get_perimeter();
$isSquare = $rectangle->is_square();
echo "Area: " . $area . "\n";
echo "Perimeter: " . $perimeter . "\n";
echo "Is Square? " . ($isSquare ? "Yes" : "No") . "\n";
?>
