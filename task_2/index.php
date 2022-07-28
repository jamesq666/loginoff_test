<?php

?>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="/task_2/script/script.js" defer=""></script>
<link rel="stylesheet" href="/task_2/css/style.css">

<form action="">
    <input class="number_input" id="num1" pattern="(\d*\.?\d*)"/>
    <select id="functions">
        <option selected>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input class="number_input" id="num2" pattern="(\d*\.?\d*)"/>
    <button id="equals" type="submit" value="=">=</button>
    <label id="result">
</form>
