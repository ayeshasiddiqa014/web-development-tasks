function sumNumbers() {
    var sum = 0;
    var num;
    do {
        num = parseInt(prompt("Please enter a number or zero to end", 0));
        if(num != 0) {
            sum += num;
        }
    } while(num != 0);
    document.write("The sum of the numbers you entered is: ", sum);
}