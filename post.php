<? 
header('Content-Type: text/html; charset=utf-8');

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$course = $_POST['course'];
$time = $_POST['time'];
$info = $_POST['info'];

echo  'Имя: '.$name.'<br/>';
echo 'Телефон: '.$phone.'<br/>';
echo 'Сообщение: '.$message.'<br/>';
echo 'Выбранные курсы: ';
foreach  ($course as $a) {
    $courseValue.=$a.' ';
    echo $a.' ';
    };
echo'<br>Время звонка: '.$time.'<br/>';

$body=$name.' '.$phone.' '.$message.' '.$courseValue.' '.$time;
$to = 'maryy-15@list.ru';
$from = 'From:morost-ruz@mail.ru';
mail($to, "post", $body, $from);

?>

