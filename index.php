<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title> 
</head>
<body>

    
    <h1>Hello, my name is Yasir</h1>

    <!-- variable -->
    <?php 
    $y1 = "pizza";
    echo "Hello my name is " . $y1 . "<br>"; 
    ?>

    <?php 
    $y1 = "tea";
    echo "I love " . $y1; 
    ?>

    <!-- data types -->
    <?php 
    $var1 = 30;
    $var2 = 30.2;
    $var3 = array('Apple', 'Banana', 'Orange');
    var_dump($var1);
    var_dump($var3);

    // Class and object -->
    class Phone {
        var $model;

        function phoneModel($number) {
            global $model;
            $model = $number;
            echo "This is $model <br>";
        }
    }

    $apple = new Phone;
    $apple->phoneModel('Iphone 16');

    $samsung = new Phone;
    $samsung->phoneModel('S24 Ultra');

    $lg = new Phone;
    $lg->phoneModel('Upcoming');

    // String -->
    echo strlen("Hello my name is pizza") . "<br>";
    echo strrev("Hello my name is pizza") . "<br>";
    echo strpos('Hello my name is pizza', 'my') . "<br>";
    echo str_replace('pizza', 'burger', 'Hello my name is pizza') . "<br>";

    // Math functions -->
    echo pi() . "<br>";
    echo min(10, 20, 30, 40, 50) . "<br>";
    echo abs(-10) . "<br>";
    echo sqrt(16) . "<br>";
    echo round(pi()) . "<br>";
    echo rand() . "<br>";
    echo rand(10, 50) . "<br>";

    // constants variable -->
    $v1 = 5; 
    $v1 = 15; 
    define('A', 20);
    echo $v1 . "<br>";
    echo A . "<br>";

    // operators -->
    $v3 = 15; 
    $v4 = '15';
    var_dump($v3 == $v4);
    var_dump($v3 === $v4);
    var_dump($v3 != $v4);

    // if-else -->
    $date = date('H'); 
    if (6 < 5) {
        echo 'Good Morning';
    } elseif (6 > 2) {
        echo 'Nice day<br>';
    } else {
        echo 'Have a nice day';
    }

    // Switch-case -->
    switch ('blue') {
        case 'red':
            echo 'Apple is red';
            break;
        case 'green':
            echo 'Apple is green';
            break;
        default:
            echo 'I love to eat fruits';
    }

    // While loop -->
    $x = 0;
    while ($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }

    // Do-while loop -->
    $y = 0;
    do {
        echo "Example: $y <br>";
        $y++;
    } while ($y <= 10);

    // For loop -->
    for ($z = 0; $z <= 10; $z += 10) {
        echo "Example: $z <br>";
    }

    // Function -->
    function test_name($name, $age) {
        echo "Basic PHP is captured by $name and his age is $age <br>"; 
    }

    test_name("Yasir", "24");
    test_name("Ali", "40");

    // date and time -->
    date_default_timezone_set("Asia/Dhaka"); 
    echo "Today is " . date("Y/d/m") . "<br>";
    echo "Current time: " . date("h:i:sa"); 
    ?>

</body>
</html>