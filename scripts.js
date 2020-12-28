$("#calculate").validate({
    rules: {
        number1: {
            required: true,
            number: true,
            minlength : 2,
            maxlength : 4
        },
        number2: {
            required: true,
            number: true
        }
    },
    messages: {
        number1: {
            required: "Please enter a Number 1",
            number: "Oi!!! number likh...",
            maxlength : "bhai 4tar beshi na..."
        },
        number2: {
            required: "Please enter a Number 2",
            number: "Oi!!! number likh..."
        }
    },
    errorElement: "em"
});