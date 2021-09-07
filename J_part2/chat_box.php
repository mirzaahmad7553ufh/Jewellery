<!DOCTYPE html>
<html>

<head>
    <style>
*{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
   
}
        #chat_icon_box {

            height: 60px;
            width: 60px;
            display: none;
            position: fixed;
            bottom: 33px;
            right: 10px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            color: white;
            cursor: pointer;
            padding: 0px;
            box-sizing: border-box;
            border-radius: 50px;
            background: linear-gradient(135deg, rgb(255, 78, 111), rgb(251, 145, 104));
            box-shadow: rgb(255 78 111 / 50%) 0px 4px 24px;
            display: table;
        }


        #send_message {
            height: 60px;
            width: 60px;
            display: none;
            position: fixed;
            bottom: 38px;
            right: 13px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            color: white;
            cursor: pointer;
            padding: 0px;
            box-sizing: border-box;
            border-radius: 50px;
            background: linear-gradient(135deg, rgb(255, 78, 111), rgb(251, 145, 104));
            box-shadow: rgb(255 78 111 / 50%) 0px 4px 24px;
            display: table;
        }

        #chat_text_box {
            height: 40px;
            width: 115px;
            display: table;
            /* display: none; */
            position: fixed;
            bottom: 40px;
            padding-top: 8px;
            right: 73px;
            z-index: 99;
            font-size: 11px;
            text-decoration: none;
            border: none;
            outline: none;
            color: black;
            display: table-cell;
            text-align: center;
            cursor: pointer;
            box-sizing: border-box;
            border-radius: 44px;
            background: white;
            box-shadow: rgb(255 78 111 / 50%) 0px 4px 24px;
        }

        #chat_message_box {
            height: 270px;
            width: 300px;
            display: table;
            /* display: none; */
            position: fixed;
            bottom: 40px;

            right: 15px;
            z-index: 99;
            font-size: 11px;
            text-decoration: none;
            border: none;
            outline: none;
            color: black;
            display: table-cell;
            text-align: center;
            cursor: pointer;
            box-sizing: border-box;
            border-radius: 15px;
            background: white;
            box-shadow: rgb(255 78 111 / 50%) 0px 4px 24px;

        }

        .color_white {
            color: bisque;
        }

        #angle_down {
            font-size: 20px;
            text-align: left;
            justify-content: end;
            /* margin-left:20px;    */
        }

        .card-p1 h1 {
            font-size: 30px;
            text-align: left;
            margin-left: 10px;
        }

        .card-p1 #hand_emoji {
            font-size: 23px;
            text-align: left;
            /* margin-left:20px; */
        }

        .card-p1 .last {
            font-size: 14.5px;
            /* margin-left:20px; */
        }

        .card-p1 .user {
            font-size: 65px;
            /* margin-left:20px; */
        }

        .card-p1 {
            text-justify: auto;
            padding: 20px;
            clip-path: polygon(0% 15%, 0 0, 15% 0%, 85% 0%, 100% 0, 100% 15%, 100% 85%, 100% 86%, -25% 98%, -116% 72%, -23% 125%, 0 92%);
            height: 230px;
            width: 100%;
            background: linear-gradient(135deg, rgb(255, 78, 111) 0%, rgb(251, 145, 104) 100%);
            border-radius: 15px;
            border-end-end-radius: 14px;
        }

        ul li {
            list-style: none;
        }

        .card-p1 p,
        .card-p1 .welcome {
            text-align: left;
            font-style: justify;
        }

        .card-p1 .welcome {
            padding-left: 10px;
        }

        .card-p2 .row form input#queries {
            margin: 0 auto;
            height: 30px;
            width: 95%;
            font-size: 13.9px;
            border-color: rgb(255 78 111);
            font-style: italic;
            /* background-color: red !important; */
        }
        /* .row form input#queries:focus{} */
        /* .row form input#queries:active{} */
        #chat_icon_box:hover {
            opacity: 0.8;
        }

        #hand_emoji {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: medium;
        }

        @media screen and (max-width: 600px) {
            #chat_icon_box {
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
            #chat_message_box {
    height: 246px;
    width: 262px;}
    .card-p1 {
    text-justify: auto;
    padding: 7px;
    clip-path: polygon(0% 15%, 0 0, 15% 0%, 85% 0%, 100% 0, 100% 15%, 100% 85%, 100% 86%, -25% 98%, -116% 72%, -23% 125%, 0 92%);
    height: 213px;
    width: 100%;
    background: linear-gradient(
135deg
, rgb(255, 78, 111) 0%, rgb(251, 145, 104) 100%);
    border-radius: 15px;
    border-end-end-radius: 14px;
}
.card-p2 .row form input#queries {
    margin: 0 auto;
    height: 25px;
    width: 95%;
    font-size: 13.9px;
    border-color: rgb(255 78 111);
    font-style: italic;
    /* background-color: red !important; */
}
        }
    </style>
</head>

<body>
    <ul>

        <li>
            <button onclick="open_chatbox()" id="chat_icon_box" title="Need any help?">

                <i class="fas fa-comment-alt"></i>
            </button>
        </li>
        <li><a id="chat_text_box" title="Have any qeestion?" onclick="open_chatbox()">Chat with us <span id="hand_emoji">&#9995;</span></a></li>
    </ul>


    <div id="chat_message_box" class=" text-dark" style="display: none;">

        <div class="card-p1 color_white">
            <div class="row">
                <div class="col-md-10 col-10">
                    <h1>Hi There<span id="hand_emoji">👋</span> </h1>
                </div>
                <div class="col-md-2 col-2" title="Minimise"><i id="angle_down" onclick="close_chatbox()" class="fas ml-1  fa-times"></i></div>
            </div>
            <div class="row">
                <div class="col-md-9 col-9">
                    <p class="welcome">Welcome to <span style="text-transform: capitalize;">As Jewellery Collection.</span> Please let us know if you need any assistance!</p>
                </div>
                <div class="col-md-3 col-3" title="Ayesha"> <i class="user fas fa-user-circle"></i></div>
            </div>
            <div class="row ">
                <p class="last">We typically reply within 24-48 hours!</p>
            </div>
        </div>
        <div class="card-p2">
            <div class="row ">
                <form action=""><input type="text" id="queries" class=" form-control" placeholder="type your queries here!"></form>
            </div>
        </div>
        <button onclick="send()" id="send_message" title="Send message">
            <i class="fas fa-paper-plane"></i>
        </button>
    </div>


    <script>
        //Get the button
        var send_message = document.getElementById("send_message");
        console.log(send_message);
        var chat_message_box = document.getElementById("chat_message_box");
        console.log(chat_message_box);
        var mybutton = document.getElementById("chat_icon_box");
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