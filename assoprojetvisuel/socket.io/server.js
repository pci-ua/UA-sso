const app = require('express')();
const http = require('http').createServer(app);
const io = require('socket.io')(http, {
    cors: {
        origin: "*"
    }
});

io.on('connection', (socket) => {
  // Logique de gestion des connexions
});

// Configuration des en-têtes CORS
app.use((req, res, next) => {
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader('Access-Control-Allow-Methods', 'GET, POST');
  res.setHeader('Access-Control-Allow-Headers', 'Content-Type');
  res.setHeader('Access-Control-Allow-Credentials', true);
  next();
});

 
app.get("/", function(req, res){
    res.sendFile(__dirname + '/index.html');
})

io.on('connection', function(socket){
    console.log('a user is connected');

    socket.on('disconnect', function(){
        console.log('disconnect');
    })

    socket.on('chatmessage', function(msg){
        console.log('message de '+ msg.nom + ' dans '+ msg.asso);
        io.emit('chatmessage', msg);
    })
    
    socket.on('chatevent', function(msg){
        console.log('message de '+ msg.nom + ' dans '+ msg.id);
        io.emit('chatevent', msg);
    })
    
    socket.on('stockmodification', function(evenement){
        console.log('event '+ evenement.id + ' à eu une modification ');
        io.emit('stockmodification', evenement);
    })

    socket.on('notifiactionevent', function(evenement){
    console.log('event '+ evenement.id + ' à eu une modification ');
    io.emit('stockmodification', evenement);
    })

})



http.listen(3000, () => {
  console.log('Serveur Socket.io en cours d\'écoute sur le port 3000');
});
