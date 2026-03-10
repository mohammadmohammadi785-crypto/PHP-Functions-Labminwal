<?php
date_default_timezone_set("Asia/Kabul");
$now = new DateTime();
$now = $now->format('Y:m:d:w:H:i:s');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>

<body>
    <div class="h-screen w-full flex justify-center items-center">
        <div class="text-7xl flex justify-center items-center w-[50%] h-[50%] border rounded-md" id="clock"></div>
    </div>
    <script>
        let now = "<?php echo $now ?>".split(":");
        let hour = parseInt(now[4]);
        let minute = parseInt(now[5]);
        let seconds = parseInt(now[6]);
        let yeare = now[0];
        let month = now[1];
        let day = now[2];
        let dayNumber = now[3];
        let dayName = "";
        switch (dayNumber) {
            case "1":
                dayName = "دوشنبه";
                break;
            case "2":
                dayName = "سه شنبه";
                break;
            case "3":
                dayName = "چهارشنبه";
                break;
            case "4":
                dayName = "پنج شنبه";
                break;
            case "5":
                dayName = "جمعه";
                break;
            case "6":
                dayName = "شنبه";
                break;
            default:
                dayName = "یکشنبه";
        }

        function showClock() {
            seconds++;
            if (seconds === 60) {
                seconds = 0;
                minute++;
            }
            if (minute === 60) {
                minute = 0;
                hour++;
            }
            if (hour === 24) {
                hour = 0;
            }
            document.getElementById("clock").innerHTML =
                String(hour).padStart(2, "0") + ":" + String(minute).padStart(2, "0") + ":" + String(seconds).padStart(2, "0")
        }
        setInterval(showClock, 1000);
        showClock();
    </script>

</body>

</html>