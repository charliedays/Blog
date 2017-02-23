<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <meta charset="utf-8">
    <body>
      <header>
          <img id="idLogo" src="images/logo.png">
          <input type="text" class="headerinput"  placeholder="Usuario...">
          <input type="password" class="headerinput"  placeholder="Contraseña...">
          <button id="sesionbutton" class="headerbutton">Iniciar sesion</button>
          <button id="recoverbutton" class="headerbutton">Recuperar</button>
        </header>

        <div class="container">
          <div class="inner-container">
            qw
          </div>


        </div>
    </body>
</html>

<style lang="css">
body {
background-color: rgb(238,238,238);
    padding:0;
    margin:0;

}
.container{
  width: 50%;
  height: 50%;
  background-color: rgba(0,37,37,0.50);
  float: left;
  margin-top: 8%;
  margin-left: 1.5%;

}

.inner-container{

}

header{
width:100%;
height:80px;
background-color: rgb(0,37,37);

}
    .headerinput[type="text"] {
        margin-left: 33%;
    }

img#idLogo{
height: 65px;
margin-top: Calc(15px/2);
float:left;
margin-left: 1.5%;
}

.headerinput{
width: 15%;
height: 40px;
border: 0;
padding: 0;
margin-top: 20px;
float: left;
margin-right: 1.5%;
text-indent: 5%;
border-radius: 3px;
outline: none;
  background:rgba(0,0,0,0.45);
  color:rgb(222,222,222);
  border:1px solid rgba(222,222,222,0.4);
}


.headerbutton{
width: 10%;
height: 40px;
border-radius: 3px;
border: 0;
outline: none;
padding: 0;
float: left;
margin-top: 20px;
margin-right: 1.5%;
text-align: center;
  background-color:rgba(200,200,200,0.05);
  color:rgb(222,222,222);
  border:1px solid rgba(222,222,222,0.4);
}
    button.headerbutton:hover {
        cursor: pointer;
        opacity:0.9;
    }

    @media (max-width:1000px) {
        header {
              width: 100% ;
              height: 100% ;
              display: inline-block ;
              padding-bottom:30px
        }
        img#idLogo {
              height: auto ;
              margin-top: 35% ;
              margin-left: 32.5% ;
              width: 35% ;
              margin-right: 32.5% ;
              margin-bottom: 20px ;
        }
        #sesionbutton {
            margin-right:5%;
            margin-left: 20%;
        }
        #recoverbutton {

        }
        .headerbutton {
            height: 80px;
            margin:20px;
            width:27.5%;
            margin-left:0;
            font-size:30px;
        }
        .headerinput {
                float:right;
                width: 60%;
                height: 100px;
                margin:20px 20%;
                margin-top:0;
                font-size:30px;
        }
    }
</style>
