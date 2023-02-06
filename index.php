<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main {
            scroll-behavior: smooth;
        }

        ::-webkit-scrollbar {
            width: 0;
        }

        .main {
            width: 100vw;
            height: 100vh;
            background-color: blue;
            overflow: hidden;
        }

        .header {
            width: 100%;
            height: 10%;
            background-color: rgba(99, 99, 99, 0.479);
            color: white;
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 0;
        }

        .login,
        .nav {
            height: 100%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        a {
            text-decoration: none;
            color: pink;
        }

        a:hover {
            color: rgb(212, 199, 210);
        }

        .login {
            width: 20%;
        }

        .nav {
            width: 50%;
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: 1px;
            font-weight: bold;
        }

        #home,
        #gallary,
        #about,
        #yourProfile,
        #login,
        #signup {
            padding: 5%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #home .quote {
            width: 100%;
            padding: 10%;
        }

        #home {
            width: 100%;
            height: 100vh;

        }

        #gallary {
            width: 100%;
            height: 100vh;
            background-color: rgb(124, 124, 124);

        }

        #gallary .images {
            width: 100%;
            height: 90%;
            padding: 2%;
            text-align: center;
            overflow-x: scroll;
        }

        .images img {
            width: 350px;
        }

        #about {
            width: 100%;
            height: 100%;

        }

        #yourProfile {
            width: 100%;
            height: 100vh;

        }

        #yourProfile .profile {
            width: 100%;
            height: 90%;
            padding: 10%;
        }

        #login {
            width: 100%;
            height: 100vh;
        }

        #signup {
            width: 100%;
            height: 100vh;
        }

        #login form {
            border-radius: 10px;
            width: 100%;
            height: 90%;
            padding: 2%;
            box-shadow: 0 0 15px white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
        }

        #login form div {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        input {
            width: 80%;
            padding: 1% 0 1% 2%;
            outline: none;
            border: none;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 1% 5% 1% 5%;
            outline: none;
            border: none;
            border-radius: 4px;
            background-color: black;
            color: white;
        }

        #signup form {
            border-radius: 10px;
            width: 100%;
            height: 90%;
            padding: 2%;
            box-shadow: 0 0 15px white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
        }

        #signup form div {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header2 {
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }

        .header2 .nav2 {
            width: 100%;
            height: 90%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
        }

        .header2 .login2 {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .menu {
            position: absolute;
            top: 3%;
            left: 5%;
            display: none;
        }

        h1 {
            font-size: 100px;
            color: pink;
        }

        @media all and (min-width:800px) {
            .header2 {
                display: none;
            }
        }

        @media all and (max-width:800px) {
            .menu {
                display: block;
            }

            .header {
                display: none;
            }

            a:active .header2 {
                display: none;
            }

            #login form {
                height: 50%;
                width: 70%;
                padding: 0 3%;
            }

            #signup form {
                height: 50%;
                width: 70%;
                padding: 0 3%;
            }

            input {
                width: 50%;
            }

            form p {
                font-size: 1%;
            }

            h1 {
                font-size: 80px;
            }

        }
        .mode{
            position: absolute;
            top: 90%;
            width: 5%;
            height: 6%;
            background-color: black;
            border-top-right-radius: 45%;
            border-bottom-right-radius: 45%;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="menu">
            <span class="material-symbols-outlined">menu</span>
        </div>
        <div class="header">
            <div class="nav">
                <a href="#home">Home</a>
                <a href="#gallary">Gallary</a>
                <a href="#about">About</a>
                <a href="#yourProfile">Profile</a>
                <a style="user-select: none;">Current Users - 00</a>
            </div>
            <div class="login">
                <a href="#login">Log in</a>
                <a href="#signup">Sign up</a>
            </div>
        </div>
        <div class="header2">
            <div class="nav2">
                <a href="#home">Home</a>
                <a href="#gallary">Gallary</a>
                <a href="#about">About</a>
                <a href="#yourProfile">Profile</a>
                <a style="user-select: none;">Current Users - 00 </a>
            </div>
            <div class="login2">
                <a href="#login">Log in</a>
                <a href="#signup">Sign up</a>
            </div>
        </div>
        <div id="home">
            <div class="quote">
                <h1>Let`s Start!</h1>
                <h3 style="font-size: 50px;">This is the Time</h3>
                <p style="font-size: 20px;margin-left: 7px;line-height: 50px;">Let`s make your <code style="color: pink;">Dream</code> to <code style="color: pink;">Visible</code> to everyone.</p>
            </div>
        </div>
        <div id="gallary">
            <div class="images">
                <img src="./gallary/image-1.jpg" alt="" id="">
                <img src="./gallary/image-2.jpg" alt="" id="">
                <img src="./gallary/image-3.jpg" alt="" id="">
                <img src="./gallary/image-4.jpg" alt="" id="">
                <img src="./gallary/image-5.jpg" alt="" id="">
                <img src="./gallary/image-6.jpg" alt="" id="">
                <img src="./gallary/image-7.jpg" alt="" id="">
                <img src="./gallary/image-8.jpg" alt="" id="">
                <img src="./gallary/image-9.jpg" alt="" id="">
            </div>
        </div>
        <div id="about">
            <div class="about">
                <h1>Music Hub</h1>
                <h3 style="font-size: 50px;">Voice without Noice</h3>
                <p style="font-size: 20px;margin-left: 7px;line-height: 50px;">Music is the best
                    <code style="color: pink;">Medicine</code> for <code style="color: pink;">Life</code>
                </p>
            </div>
        </div>
        <div id="yourProfile">
            <div class="profile">
                <h1>Log in First</h1>
            </div>
        </div>
        <div id="login">
            <form action="./login.php" method="post">
                <div>Email<input type="email" name="email" placeholder="Enter email..." required title="Enter valid info"></div>
                <div>Password<input type="password" name="pass" placeholder="Enter password..." required title="Enter valid info"></div>
                <button type="submit">Log in</button>
                <p>Don`t have an account? <a href="#signup">Sign up</a></p>
            </form>
        </div>
        <div id="signup">
            <form action="./newUser.php" method="post">
                <div>Name<input type="text" name="name" placeholder="Enter full name..." required title="Enter valid info"></div>
                <div>Address<input type="text" name="add" placeholder="Enter city..." required title="Enter valid info"></div>
                <div>Phone<input type="number" name="mob" placeholder="Enter phone number..." required title="Enter valid info"></div>
                <div>Email<input type="email" name="email" placeholder="Enter email..." required title="Enter valid info"></div>
                <div>Password<input type="password" name="pass" placeholder="Enter password..." required title="Enter valid info"></div>
                <button type="submit">Sign up</button>
                <p>Have an account? <a href="#login">Log in</a></p>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $("h1").hide()
        $("p").hide()
        $("body").hide()
        $(".header2").hide()
        $(document).ready(() => {
            setTimeout(() => {
                $("h1").show(1000)
                $("p").fadeIn(1500)
            }, 100)
            $("body").show(1000)
        })
        $(".menu").click(() => {
            $(".header2").fadeToggle(250)
        })
        $(".header2 a").click(() => {
            $(".header2").fadeOut(250)
            $(".menu").fadeIn(250)
        })
        $(window).resize(() => {
            let s = window.innerWidth
            if (s == 800 || s == 500) {
                window.location.reload()
            }
        })
    </script>
</body>

</html>
