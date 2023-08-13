<!DOCTYPE html>
<html>
<head>
    <title>Membuat Jam</title>
</head>
<body>
    <h1>Membuat Jam</h1>
    <div id="clock"></div>
    <script>
        setInterval(() => {
            let date = new Date()
            let clock = document.getElementById('clock')
            clock.innerHTML =
            date.getHours()+":"+
            date.getMinutes()+":"+
            date.getSeconds()
        }, 1000);
    </script>
</body>
</html>
