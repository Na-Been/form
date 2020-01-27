
function myFunction(){
 var message=document.getElementById('message');
 if(message){
        message.style.display='none';
    };
}

function mySuccess(){
    var data =document.getElementById('adddata');
    if(data){
        data.style.display='none';
    }

}

function deleteData(){
    var removedata= document.getElementById('deletedata');
    if(removedata){
        removedata.style.display='none';
    }
}

function registersuccess(){
    var registerdata= document.getElementById('register');
    if(registerdata){
        registerdata.style.display='none';
    }
}

function errormessage(){
    var sendmessage= document.getElementById('error');
    if(sendmessage){
        sendmessage.style.display='none';
    }
}

function welcome(){
    var takemessage= document.getElementById('welcome');
    if(takemessage){
        takemessage.style.display='none';
    }
}
