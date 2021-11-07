<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        
        <script type="text/javascript">
 
            $(function(){
 
                var saniye = 5;
                var timerLocation = $("div.timer span");
 
                $.startTimer = function(){
                    if(saniye > 1){
                        saniye--;
                        timerLocation.text(saniye);
                    } else {
                        $("div.timer").text("Yönlendiriliyorsunuz...");
                    }
                }
 
                timerLocation.text(saniye);
                setInterval("$.startTimer()", 1000);
 
            });
 
        </script>
</head>
<body>
<label>Kalan Süre : </label><div class="timer"><span></span></div>
</body>
</html>