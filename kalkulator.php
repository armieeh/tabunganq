<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>kalkulator</title>
    <link rel="stylesheet" type="text/css" href="kalkulator.css">
</head>
<body>
    <form class="kalkulator" name="calc">
    	<input class="value" type="text" name="txt" readonly="">
        <span class="num" onclick="document.calc.txt.value+= '7'">7</span>
    	<span class="num" onclick="document.calc.txt.value+= '8'">8</span>
    	<span class="num" onclick="document.calc.txt.value+= '9'">9</span>
    	<span class="num" onclick="document.calc.txt.value+= '4'">4</span>
    	<span class="num" onclick="document.calc.txt.value+= '5'">5</span>
    	<span class="num" onclick="document.calc.txt.value+= '6'">6</span>
    	<span class="num" onclick="document.calc.txt.value+= '1'">1</span>
    	<span class="num" onclick="document.calc.txt.value+= '2'">2</span>
    	<span class="num" onclick="document.calc.txt.value+= '3'">3</span>
    	<span class="num" onclick="document.calc.txt.value+= '0'">0</span>
    	<span class="num" onclick="document.calc.txt.value+= '00'">00</span>
    	<span class="num delete" onclick="document.calc.txt.value =''">X</span>
        <div>
        <input type="submit" name="" style="width: 180px;">
        </div>
    </form>
</body>
</html>