var http = require('http');
var fs = require('fs');
var url = require('url');
const { response } = require('express');



function requestHandler (req, res) {
    let urlDetails = url.parse(req.url,true);
    //console.log(urlDetails) //my URL
    if(urlDetails.pathname == "/"){
        res.writeHead(200, {'Content-Type': 'text/html'});
        fs.readFile("pages/home.html",function(error,data){
            console.log(error);
            res.end(data);
        })
    }
    else if(urlDetails.pathname == "/about"){
        res.writeHead(200, {'Content-Type': 'text/html'});
        fs.readFile("pages/about.html",function(error,data){
            console.log(error);
            res.end(data);
        })
    }else if(urlDetails.pathname == "/account"){
            res.writeHead(200, {'Content-Type': 'text/html'});
            fs.readFile("pages/account.html",function(error,data){
                console.log(error);
                res.end(data);
            })   
     }else if(urlDetails.pathname =="/addemp"&& req.method=="GET"){
        res.writeHead(200,{'Content-Type': 'text/html'});
        fs.readFile("pages/addemp.html",function(error,data){
            console.log(error);
            res.end(data);
        })
     }else if(urlDetails.pathname =="/addemp"&& req.method=="POST"){
        req.on("data",(data)=> {
            let check = url.parse("/?" +data.toString(),true).query;
            if(check.Pass.length <8){
                res.end("password shouhd be more than 8 char");
            }else{
                res.end("successfully");
            }
        })
     }

        else{
            res.writeHead(404, {'Content-Type': 'text/html'});
            fs.readFile("pages/notfound.html",function(error,data){
                console.log(error);
                res.end(data);
            })
        }

}




http.createServer(requestHandler).listen(7070);
