<html>
    <head>
    <style>
        .button-19 {
  appearance: button;
  background-color: #1899D6;
  border: solid transparent;
  border-radius: 16px;
  border-width: 0 0 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: din-round,sans-serif;
  font-size: 15px;
  font-weight: 700;
  letter-spacing: .8px;
  line-height: 20px;
  margin: 0;
  outline: none;
  overflow: visible;
  padding: 13px 16px;
  text-align: center;
  text-transform: uppercase;
  touch-action: manipulation;
  transform: translateZ(0);
  transition: filter .2s;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: middle;
  white-space: nowrap;
  width: 100%;
}

.button-19:after {
  background-clip: padding-box;
  background-color: #1CB0F6;
  border: solid transparent;
  border-radius: 16px;
  border-width: 0 0 4px;
  bottom: -4px;
  content: "";
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
}

.button-19:main,
.button-19:focus {
  user-select: auto;
}

.button-19:hover:not(:disabled) {
  filter: brightness(1.1);
  -webkit-filter: brightness(1.1);
}

.button-19:disabled {
  cursor: auto;
}

.button-19:active {
  border-width: 4px 0 0;
  background: none;
}
          * {
  box-sizing: border-box;
}

:root {
  //--background-size: 50vw;
  --background-size: unquote('min(100vw, 40em)');
}

html {
  font-size: calc(100% + 0.5vw);
}

@media (prefers-reduced-motion: reduce) {
  * {
    animation: none !important;
    transition-duration: 0.001s !important;
  }
}

.container {
  background: linear-gradient(100deg, #402, #006);
  padding: 2em;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #ffffff;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 460 55'%3E%3Cg fill='none' fill-rule='evenodd' stroke='%23fff' stroke-width='7' opacity='.1'%3E%3Cpath d='M-345 34.5s57.5-13.8 115-13.8 115 13.8 115 13.8S-57.5 48.3 0 48.3s115-13.8 115-13.8 57.5-13.8 115-13.8 115 13.8 115 13.8 57.5 13.8 115 13.8 115-13.8 115-13.8'/%3E%3Cpath d='M-345 20.7s57.5-13.8 115-13.8 115 13.8 115 13.8S-57.5 34.5 0 34.5s115-13.8 115-13.8S172.5 6.9 230 6.9s115 13.8 115 13.8 57.5 13.8 115 13.8 115-13.8 115-13.8m-920 27.6s57.5-13.8 115-13.8 115 13.8 115 13.8S-57.5 62.1 0 62.1s115-13.8 115-13.8 57.5-13.8 115-13.8 115 13.8 115 13.8 57.5 13.8 115 13.8 115-13.8 115-13.8'/%3E%3Cpath d='M-345 6.9s57.5-13.8 115-13.8S-115 6.9-115 6.9-57.5 20.7 0 20.7 115 6.9 115 6.9 172.5-6.9 230-6.9 345 6.9 345 6.9s57.5 13.8 115 13.8S575 6.9 575 6.9'/%3E%3Cpath d='M-345-6.9s57.5-13.8 115-13.8S-115-6.9-115-6.9-57.5 6.9 0 6.9 115-6.9 115-6.9s57.5-13.8 115-13.8S345-6.9 345-6.9 402.5 6.9 460 6.9 575-6.9 575-6.9m-920 69s57.5-13.8 115-13.8 115 13.8 115 13.8S-57.5 75.9 0 75.9s115-13.8 115-13.8 57.5-13.8 115-13.8 115 13.8 115 13.8 57.5 13.8 115 13.8 115-13.8 115-13.8'/%3E%3C/g%3E%3C/svg%3E%0A"),
    linear-gradient(80deg, #202, #006);
  background-position: 50% 50%;
  animation: background-move 10s linear infinite;
  background-size: 100vw auto, 100% 100%;
  background-size: unquote('max(100vw, 30em)') auto, 100% 100%;
}

@keyframes background-move {
  0% { background-position: 0 0, 0 0; }
  100% { 
    background-position: 100vw 0, 0 0;
    background-position: unquote('max(100vw, 40em)')  0, 0 0;
  }
}

.input-group {
  width: 100%;
  max-width: 20em;
  display: flex;
  flex-direction: column;
  z-index: 2;

  @supports (mix-blend-mode: darken) {
    position: relative;
    mix-blend-mode: lighten;

    &__label {
      position: absolute;
      left: 3em;
      top: -0.28em;
      background: #000;
    }
  }

  &__label {
    padding: 0 0.5em;
    margin-bottom: 0.5em;
    text-transform: uppercase;
    font-size: 0.875em;
    letter-spacing: 0.1em;
    color: #ccd;
    color: rgba(255, 220, 255, 0.6);
    cursor: pointer;
  }

  &__input {
    color: #fff;
    font-size: 1.25rem;
    line-height: 1;
    border-style: none;
    outline: none;
    // height calc line-height + (vertical-padding * 2) + (vertical-border * 2)
    height: calc(1em + 1.6em + 0.5em);
    width: 100%;
    padding: 0.8em 1em;
    border: 0.25em solid transparent;
    background-image: linear-gradient(#000, #000),
      linear-gradient(120deg, #f09 0%, #0ff 50%, #9f0 100%);
    background-origin: border-box;
    background-clip: padding-box, border-box;
    border-radius: 1.8em;
    background-size: 200% 100%;
    transition: background-position 0.8s ease-out;
    
    &:hover {
      background-position: 100% 0;
    }

    &:focus {
      outline: 2px dashed #ad2b89;
      outline-offset: 0.5em;
    }
  }
}



      </style>
    </head>
    
    <body>
        
        <form method="POST">
            <div class="container">
                <center style="color:white;">Disconnect</center>
  <div class="input-group">
    <label class="input-group__label" for="myInput">CID</label>
    <input type="text" id="myInput" class="input-group__input" value="cid"  name="cno"/>
    <br><br><br>
<center><input type="submit" name="clickv" class="button-19"></center>
  </div>
</div>
        </form>
    </body>
</html>






<?php

include 'connection.php';
if(isset($_POST['clickv'])){
$cno =$_POST['cno'];
$sql = "update psupply set cstatus='NA' where cid='".$cno."';";
echo $cno;
mysqli_query($conn,$sql);
    
}

?>