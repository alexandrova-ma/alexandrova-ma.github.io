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
        <p>Выберите курсы</p>
        <label>CSS
            <input type="checkbox" name="course[]" value="css"> <br/>
        </label>
        <label>Java Script
            <input type="checkbox" name="course[]" value="js"> <br/>
        </label>
        <label>PHP
            <input type="checkbox" name="course[]" value="php"> <br/>
        </label>
        Выберите время звонка: </br>
        <label>8:00-12:00
            <input type="radio" name="time" value="morning"> <br/>
        </label>
        <label>12:00-17:00
            <input type="radio" name="time" value="day"> <br/>
        </label>17:00-21:00
            <input type="radio" name="time" value="evening"> <br/>
        </label>
        <input type="hidden" name="info"> <br/>
        <input type="submit">
    </form>
</body>
</html>
