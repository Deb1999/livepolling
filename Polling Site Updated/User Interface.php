<?php
  session_start();
  if(!isset($_SESSION['login_id'])) {
      header("location:username.php");
  }
?>

<html>
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width,initial-scale=1.0">
       <meta http-eqiv="X-UA-Compatible" content="ie=edge">
       <title>Live Polling Session</title>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
       <style>
        * {
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:century gothic;
        }

        body {
            display:flex;
            align-items:center;
            justify-content:center;
            min-height:100vh;
            background: #f7f7f7;
        }
        .wrapper {
            background:#fff;
            width:450px;
            border-radius: 16px;
            padding:25px 30px;
            box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
                        0 32px 64px -48px rgba(0,0,0,0.5);
        }
        header {
            font-size:25px;
            font-weight:600;
            padding-bottom:10px;
            border-bottom:1px solid #e6e6e6;
        
        }
        input[type="radio"]{
            margin-top:20px;
        }
        label {
            padding-left:5px;
        }
        section p {
            padding:0px;
            margin-left:19px;
            margin-top:5px;
            border-radius:20px;
            text-align:center;
            display:none;

        }
        input[type="submit"] {
            margin-top:13px;
            height:42px;
            border:none;
            font-size:17px;
            font-weight:400;
            background:#333;
            color:#fff;
            border-radius:5px;
            cursor:pointer;
            padding:10px;
        }
        .center {
            text-align:center;
            margin-top:10px;
        }
        
       </style>
    </head>
    <body>
        
        <div class="wrapper">
            <header><?php echo 'Hi '. $_SESSION['fname'].', tell us about widely used programming languages'; ?></header>
            <form action="#">
                <section class="java">
                   <input type="radio" name="language" value="Java"> <label>Java</label>
                   <p class="active" style="width:<?php echo $_SESSION['java']."%"; ?>;background-color:red;color:white;"><?php echo $_SESSION['java']."%"; ?></p>
                </section>
                <section class="python">
                   <input type="radio" name="language" value="Python"> <label>Python</label><br>
                   <p  style="width:<?php echo $_SESSION['python']."%"; ?>;background-color:blue;color:white;"><?php echo $_SESSION['python']."%"; ?></p>
                </section>
                <section class="chash">
                   <input type="radio" name="language" value="C#"><label>C#</label>
                   <p  style="width:<?php echo $_SESSION['csharp']."%"; ?>;background-color:green;color:white;"><?php echo $_SESSION['csharp']."%"; ?></p>
                </section>
                <section class="cplus">
                   <input type="radio" name="language" value="C++"><label>C++</label>
                   <p style="width:<?php echo $_SESSION['cplusplus']."%"; ?>;background-color:orange;color:black;"><?php echo $_SESSION['cplusplus']."%"; ?></p>
                </section>
                <section class="center">
                  <input type="submit" value="Cast Vote" class="button">
                </section>
                
            </form>
          
        </div>
        <script src="javascript/votecast.js"></script>
        
    </body>
</html>