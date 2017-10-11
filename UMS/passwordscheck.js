$(document).ready(function() {
$('#password').keyup(function() {
$('#result').html(checkStrength($('#password').val()))
})

function checkStrength(password) {
var strength = 0
if (password.length < 8) {
$('#result').removeClass()
$('#result').addClass('short')
var str="Short";
str=str.fontcolor("#FF0000");
return str
}
if (password.length > 7) strength += 1
// If password contains both lower and uppercase characters, increase strength value.
if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
// If it has numbers and characters, increase strength value.
if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
// If it has one special character, increase strength value.
if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// If it has two special characters, increase strength value.
if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// Calculated strength value, we can return messages
// If value is less than 2
if (strength < 2) {
$('#result').removeClass()
$('#result').addClass('weak')

var str="Weak";
str=str.fontcolor("orange");
return str

} 
else if (strength == 2) {
$('#result').removeClass()
$('#result').addClass('good')
var str="Good";
str=str.fontcolor("#2D98F3");
return str
} 
else {
$('#result').removeClass()
$('#result').addClass('strong')
var str="Strong";
str=str.fontcolor("limegreen");
return str
}
}
});