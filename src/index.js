const express = require("express");
const app = express()

const { createServer } = require("http");
const path = require("path");
const { Server } = require("socket.io");
const httpServer = createServer(app);
const io = new Server(httpServer, {
    cors: {
      origin: "http://localhost",
      allowedHeaders: ["my-custom-header"],
      credentials: true
    }
  });

  // const cors = require('cors');

app.use(express.static(path.join(__dirname, "view")))

app.get('/', (req, res) => {
    res.sendFile( __dirname + "/view/index.html" )
});

io.on("connection", (socket) => {
  console.log("clientes conectados:", io.engine.clientsCount);
// console.log("ID de los clientes:",socket.id);

    

socket.on("chat message", (msg) => {
    console.log(msg);
    socket.broadcast.emit("chat message",msg);
    })

  socket.emit("hello", "world");

  socket.on("disconnect", () => {

       console.log(`El socket ${socket.id} se ha desconectado`);

   })


});



httpServer.listen(3000);