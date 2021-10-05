var username = document.getElementById('username');
const question = prompt ("what's your username? ");
if (question) {
    username.innerText = "Welcome: " + question;
} else {
    username.innerText = "Welcome: Guess";
}