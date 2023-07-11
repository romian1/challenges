function checkPalindrome(word) {
    var reverseWord = "";
    var i = word.length - 1;
    for (i; i >= 0; i--) { 
        reverseWord += word[i]; 
    }
    if (reverseWord === word) { return true; } 
    else { return false; }
}

var word = "roman";
var isPalindrome = checkPalindrome(word);
console.log(word);
console.log("Is the word a palindrome? " + isPalindrome);

