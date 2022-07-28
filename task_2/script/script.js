$('#equals').on('click', function func() {
    event.preventDefault();
    var op = $('#functions option:selected').text();
    var result;
    var num1 = Number($('#num1').val());
    var num2 = Number($('#num2').val());

    switch (op) {
        case '+':
            result = num1 + num2;
            break;
        case '-':
            result = num1 - num2;
            break;
        case '*':
            result = num1 * num2;
            break;
        case '/':
            if (num2 === 0) {
                $('#result').text("");
                alert("На 0 делить нельзя!");
                break;
            } else {
                result = num1 / num2;
                break;
            }
    }
    //console.log(result);
    $('#result').text(result);
})
