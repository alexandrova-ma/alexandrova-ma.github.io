<? header('Content-Type: text/html; charset=utf-8'); ?>
<html>
<head>
    <meta charset="utf-8">
    <style>
    input, textarea {
        margin-bottom:10px;
    }
    </style>
</head>
<body>
    <h2>Эта форма отправляет данные методом POST</h2>
    <form method="POST" action="post.php">
        <input name="name" placeholder="Имя"> <br/>
        <input name="phone" placeholder="+7 (---) --- --"> <br/>
        <textarea name="message" placeholder="Сообщение"></textarea> <br/>
        <label>Подписаться
            <input type="checkbox" name="consent" value="true"> <br/>
        </label>
        Выберите время звонка: </br>
        <label>Утро
            <input type="radio" name="time" value="morning"> <br/>
        </label>
        <label>День
            <input type="radio" name="time" value="day"> <br/>
        </label>Вечер
            <input type="radio" name="time" value="evening"> <br/>
        </label>
        <input type="hidden" name="info"> <br/>
        <input type="submit">
    </form>
</body>
</html>
