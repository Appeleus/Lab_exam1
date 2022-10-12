<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
</head>
<body>

    <form action = "calendar.php" method = "POST">
        กรุณากรอกเดือน : <input type = "text" name = "getMonth" ></br>
        กรุณากรอกปี (พ.ศ.)<input type = "text" name = "getYear"></br>
        วันที่ 1 ของเดือนตรงกับวัน <select name = "firstDay">
            <option value = "จันทร์">วันจันทร์</option>
            <option value = "อังคาร">วันอังคาร</option>
            <option value = "พุธ">วันพุธ</option>
            <option value = "พฤหัสบดี">วันพฤหัสบดี</option>
            <option value = "ศุกร์">วันศุกร์</option>
            <option value = "เสาร์">วันเสาร์</option>
            <option value = "อาทิตย์">วันอาทิตย์</option>
        </select>
        </br>
        <input type = "submit" name = "yes" value = "ตกลง">
        <input type = "reset" name = "clear" value = "ล้างข้อมูล">
    </form>

</body>
</html>