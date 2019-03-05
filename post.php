<? 
header('Content-Type: text/html; charset=utf-8');

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$consent = $_POST['consent'];
$time = $_POST['time'];
$info = $_POST['info'];
echo  'Имя: '.$name.'<br/>'.'Телефон: '.$phone.'<br/>'.'Сообщение: '.$message.'<br/>'.'Согласие на обработку: '.$consent.'<br/>'.'Время звонка: '.$time.'<br/>'.'Скрытая информация: '.$info;
mail("maryy-15@list.ru", "post", $name.' '.  $phone.' '. $message.' '. $consent.' '.$time.' '.$info, "From:morost-ruz@mail.ru");
?>