let selection = document.querySelector("#selection");
let result = document.querySelector("#result");
let calculate = document.querySelector("#calculate");

calculate.addEventListener('click', function () {
    let selectedOption = selection.options[selection.selectedIndex].text;
    let input = document.querySelector("#input").value;
    if (selectedOption === "Factorial") {
        var i, f;
        f = 1;
        for (i = 1; i <= input; i++) {
            f = f * i;
        }
        i = i - 1;
        result.value = `${f}`;
    } else if (selectedOption === "Fibonacci") {
        var sequence = '';
        function fibonacci(num) {
            var num1 = 0;
            var num2 = 1;
            var sum;
            var i = 0;
            for (i = 0; i < num; i++) {
                sum = num1 + num2;
                if (i === num - 1) {
                    sequence += sum
                }
                else {
                    sequence += sum + ','
                }
                num1 = num2;
                num2 = sum;
            }
            return num2;
        }
        var fibo = fibonacci(input);
        result.value = `${sequence}`;
    } else if (selectedOption === "Leap Year") {
        if ((0 == input % 4) && (0 != input % 100) || (0 == input % 400)) {
            result.value = "it’s a leap year";
        } else {
            result.value = "it’s not a leap year";
        }
    } else if (selectedOption === "Alphabetically order") {
        const str = input;
        function alphabet_order(str) {
            return str.split('').sort().join('');
        }
        result.value = (alphabet_order(str));
    }
})