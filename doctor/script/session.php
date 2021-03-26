<?php

function message(){
    if(isset($_SESSION["emsg"])){
            $error="<div class=\"alert alert-danger\">";
            $error.= $_SESSION["emsg"];
            $error.="</div>";
            $_SESSION["emsg"]=null;
            return $error;
            
    }
}

function smessage(){
    if(isset($_SESSION["suc"])){
            $error="<div class=\"alert alert-success\">";
            $error.= htmlentities($_SESSION["suc"]);
            $error.="</div>";
            $_SESSION["suc"]=null;
            return $error;
            
    }
}
