<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
</head>
<body>

    <?php


    $Month = $_POST["getMonth"];
    $Year = $_POST["getYear"];
    $FDofWeek = $_POST["firstDay"];
    $Day;



    switch ($Month)
    {
        case "มกราคม" : $Day = 31; break;
        case "กุมภาพันธ์" : $Day = 28; break;
        case "มีนาคม" : $Day = 31; break;
        case "เมษายน": $Day = 30; break;
        case "พฤษภาคม": $Day = 31; break;
        case "มิถุนายน": $Day = 30; break;
        case "กรกฏาคม": $Day = 31; break;
        case "สิงหาคม": $Day = 31; break;
        case "กันยายน": $Day = 30; break;
        case "ตุลาคม": $Day = 31; break;
        case "พฤศจิกายน": $Day = 30; break;
        case "ธันวาคม": $Day = 31; break;
        default: $Day = 0;
    }




echo "เดือน $Month ปี พ.ศ. $Year มี $Day วัน <BR>";
echo "วันที่ 1 ของเดือนตรงกับวัน $FDofWeek";
    ?>


    
</body>
</html>