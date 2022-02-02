<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="title">Online Chatbox</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>hello I am bot how can i help you</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input type="text" id="dataentered" placeholder="type something here.." required>
                <button id="send-btn" type="submit">Send</button>
            </div>
        </div>
    </div>




    <script>



$("#dataentered").keypress(function(e){
if(e.which==13){
    $("#send-btn").trigger('click');
}
});
        $(document).ready(function() {
            $("#send-btn").click(function() {
                var data = $("#dataentered").val();  
                if(data != ""){
                    $msg = ' <div class="user-inbox inbox"><div class="msg-header"><p> ' + data + '</p> </div></div>';               
                var datastring = "msg=" + data;
                $(".form").append($msg);
                $("#dataentered").val('');
                $.ajax({
                    type: "post",
                    url: "fetchmsg.php",
                    data: datastring,
                    success: function(result) {
                      
                     $reply='<div class="bot-inbox inbox"><div class="icon"> <i class="fa fa-user"></i></div><div class="msg-header"><p>'+result+'</p> </div></div>';  
                        $(".form").append($reply);

                    },
                    Error: function(s) {
                        alert("error");
                    }
                });
                }            
           
            })
        });
    </script>

</body>

</html>