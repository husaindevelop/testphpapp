<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        
        
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtract()
    {
        $calculator = new Calculator();
        $result = $calculator->subtract(5, 3);
        $this->assertEquals(2, $result);
    }
}









        
        echo "You know what is going on".strtoupper ("Hello");
        
        ?>
    
    </body>
</html>
