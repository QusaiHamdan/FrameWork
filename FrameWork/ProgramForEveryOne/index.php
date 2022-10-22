<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <title>Home</title>
    <style>
        *{
            margin: 0;
            
            box-sizing: border-box;
        }
        body{
            background-color: aqua;
            font-family: arial;
            overflow: hidden;
        }
        header{
            display: flex;
            justify-content: space-between;
            align-items:center;

            background-color: #fff;
        }
        nav ul{
            list-style-type: none;
        }
        nav ul li{
            float: left;
        }
        nav ul li a{
            margin: 0 10px;
            padding: 8px;
            font-size: 18px;
            text-decoration: none;
            color: #000;
        }
        #login{
            color: blue;
            border: #000 0.05px solid;
            border-radius: 5px;
        }
        #login:hover{
            background-color: blue;
            color: orange;
        }
        li a:hover{
            border: #000 0.05px solid;
            border-radius: 5px;
            background-color: #000;
            color: #fff;
        }
        h1{
            text-shadow: skyblue 0 0 15px;
            padding: 10px;
        }
        section{
            background-image: url(program.jpg);
            background-size: cover;
            height: 100vh;
        }
        .defintion{
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 20px;
            padding-top: 40px;
            height: fit-content;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.219);
            height: 100%;
        }
        .defintion h2{
            color: #fff;
            padding: 10px;
            font-size: 26px;
            text-shadow: silver 0 0 15px;
        }
        .defintion p{
            color: #fff;
            padding: 10px;
            margin-left: 10px;
            font-size: 18px;
        }
        .defintion a{
            position: relative;
            top: 30px;
           color: #fff;
           background-color: blue;
           margin: 30px;
           padding: 16px;
            font-size: 18px;
           border-radius: 5px;
           text-decoration: none;
        }
        .defintion a:hover{
            box-shadow: deepskyblue 0 0 10px;
            text-shadow: #fff 0 0 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>ProgramForEveryOne</h1>
        <nav>
            <ul>
                <li><a href="#">Program Language</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#" id="login">LogIn</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="defintion">
            <h2>What Is Programing ?</h2>
            <p>Programming is a way to “instruct the computer to perform various tasks”.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem molestiae provident distinctio repellendus maxime incidunt nisi nam suscipit dolorem. Mollitia repellat tenetur, similique autem recusandae ut possimus atque iste impedit.
            Eos iure assumenda rem veritatis! Ab saepe nisi, dicta eveniet neque quia autem commodi, consectetur sed dolores iure obcaecati vel! Beatae eos expedita amet ab doloremque eum fugit odit maiores.
            Quidem hic ea assumenda recusandae illum placeat ipsum, delectus quam perferendis dolore, unde voluptatibus adipisci incidunt libero aspernatur vitae. Iste voluptas, quasi totam sequi vel facilis consectetur at excepturi unde.</p>
            <a href="#">Learn More...</a>
        </div>
    </section>
</body>
</html>