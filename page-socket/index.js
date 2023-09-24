
const socket = io('http://localhost:3000/');

const containerMessage = document.querySelector('.container-messages');
const input = document.querySelector('.input-message');
const buttonSendMessage = document.querySelector('.button-send-message');
const alert = document.querySelector('.alert')

buttonSendMessage.addEventListener('click', () => {
    if (input.value) {
        const li = document.createElement('li');
        li.className = "emisor";
        li.textContent = input.value;
        containerMessage.appendChild(li)
        socket.emit('chat message', input.value);
        input.value = '';
    }else{
        alert.style.visibility = 'visible';
        setTimeout(() => {
            alert.style.visibility = 'hidden';
        }, 1000)
    }
})

socket.on("chat message", (msg) => {
   const li = document.createElement('li');
   li.className = "receptor";
   li.textContent = msg;
   containerMessage.appendChild(li)
})

socket.on("connect", () => {
    console.log("el socket se ha connectado");

    
})

socket.io.on("reconnect_attempt", () => {
    console.log("estoy intentano reconectarme");
})