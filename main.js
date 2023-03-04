let servResponse = document.querySelector('#response');
let userInput = 10;
userInput = encodeURIComponent(userInput);
let xhr = new XMLHttpRequest();
xhr.open('GET', 'rout.php?' + 'ourForm__inp=' + userInput);
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
        servResponse.textContent = xhr.responseText;
    }
}
xhr.send('ourForm__inp=' + userInput);
