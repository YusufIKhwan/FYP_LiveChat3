<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livechat</title>
    <link rel="stylesheet" href="css/bot.css">
</head>
<body>
    <div id="container">
        <div id="dot"></div>
        <div id="dot"></div>
        <div id="screen">
            <div id="header">ONLINE CHATBOT</div>
            <div id="messageDisplaySection">
                <!--bott= messages-->
                <div class="chat botMessages">Hello There</div>

                <!--users messages-->
                <div id="messageContainer">
                <div class="chat usersMessages">General Kenobi</div>
            </div>
        </div>
            <div id="userInput">
                <input type="text" name="messages" id="messages" autocomplete="DFF" placeholder="Type Your Message Here" required>
                <input type="submit" value="Send" id="send" name="send">`
            </div>
            
        </div>
    </div>


    <!--JQuery CDN-->
    <script src=""></script>
    
    <!--JQuery CDN-->
    <script>
        $(document).ready(function(){
            if($("#messages").val()){
                $("send.").css("display","block");
            }else{
                $("send").css("display","none");
            }
        });
    </script>
</body>
</html>