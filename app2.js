const express = require('express');
const app = express();
app.get("/",function(req,res){
    res.sendFile(__dirname + "/pages/home.html")
});


app.listen(7070);