<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<head>
    <style>
*{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
   
}
        #total_bill {

            height: 60px;
            width: 100%;
            display: none;
            position: fixed;
            bottom: 0;
           
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            color: white;
            cursor: pointer;
            padding: 0px;
            box-sizing: border-box;
            
            background: linear-gradient(135deg, rgb(255, 78, 111), rgb(251, 145, 104));
            box-shadow: rgb(255 78 111 / 50%) 0px 4px 24px;
            display: table;
        }


        .checkout_btn{
            position: fixed;
            z-index: 99;bottom: 0;
        }
     

      

        #total_bill:hover {
            opacity: 0.8;
        }

      

        @media screen and (max-width: 600px) {
            #total_bill {
                right: 15px;
                font-size: 17px;
                height: 50px;
                width: 50px;
            }

            #chat_text_box {
                right: 68px;
                padding-top: 7px;
                font-size: 10.9px;
            }
        }
    </style>
</head>

<body>
    <!-- <ul>

        <li>
            
        </li>
        <li><a id="chat_text_box" title="Have any qeestion?" onclick="open_chatbox()">Chat with us <span id="hand_emoji">&#9995;</span></a></li>
    </ul> -->

    <button onclick="open_chatbox()" id="total_bill" title="Need any help?">

<div class="row bg-dark mx-2">
    <div class="col-md-4 d-flex justify-content-start "><input type="radio" name="all" value=""><span>ALL</span></div>
    <div class="col-md-4"><div class="row">Shipping 1</div><div class="row">Shipping</div></div>
    <div class="col-md-4 d-flex justify-content-end"><div class="row btn_checkout">Check Out</div></div>
</div>
</button>



    <script>
        //Get the button
        var send_message = document.getElementById("send_message");
        console.log(send_message);
        var chat_message_box = document.getElementById("chat_message_box");
        console.log(chat_message_box);
        var mybutton = document.getElementById("total_bill");
        var chat_text_box = document.getElementById("chat_text_box");
        // When the user scrolls down 20px from the top of the document, show the button
        // window.onscroll = function() {
        //     scrollFunction()
        // };

        // function scrollFunction() {
        //     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        //         mybutton.style.display = "block";
        //         chat_text_box.style.display = "block";
        //     } else {
        //         mybutton.style.display = "none";
        //         chat_text_box.style.display = "none";
        //     }
        // }
        function close_chatbox() {
            // alert("HI Pressed");
            send_message.style.display = "none";
            chat_message_box.style.display = "none";

            mybutton.style.display = "block";
            chat_text_box.style.display = "block";
        }

        function open_chatbox() {
            // alert("HI Pressed");
            send_message.style.display = "block";
            chat_message_box.style.display = "block";

            mybutton.style.display = "none";
            chat_text_box.style.display = "none";
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            //   document.body.scrollTop = 0;
            //   document.documentElement.scrollTop = 0;
        }
    </script>

</body>

</html>