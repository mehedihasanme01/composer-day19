<?php
//error_reporting(0);
require_once 'vendor/autoload.php';
//require_once 'app/classes/Demo.php';
use App\classes\Demo;
use App\classes\Student;
use App\classes\BreakTime;

$result='';
$given_string='';
if(isset($_POST['btn'])){

    $result= Demo::word($_POST);
    $result= BreakTime::murikha($_POST);
    $result= Student::addition($_POST);
}


?>

<form action="" method="post">
    <table>

    <tr>
        <th>Enter your String</th>
        <td><input type="text" name="given_string" size="50"></td>
    </tr>

    <tr>
        <th>Total number of Word</th>
        <td><input type="text" value="<?php echo $result['char_string']; ?>"></td>
    </tr>

    <tr>
        <th>Total number of Character</th>
        <td><input type="text" value="<?php echo $result['word_length']; ?>"></td>
    </tr>

    <tr>
        <th></th>
        <td><input type="submit" name="btn" value="submit"></td>
    </tr>

    </table>
</form>
