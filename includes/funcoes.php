<?php
    function carregarPagina(){
        (isset($_GET["p"])) ? $pagina = $_GET["p"] : $pagina = "home";
        if(file_exists("pages/$pagina.php")){
            require_once("pages/$pagina.php");
        }
        else{
            require_once("pages/home.php");
        }
    }
    function gerarTitulos(){
        (isset($_GET["p"])) ? $pagina = $_GET["p"] : $pagina = "home";
        switch($pagina){
            case "home":
                $titulo = "JMF-Academy";
                break;
            case "servicos":
                $titulo = "JMF-Academy | Servicos";
                break;
            case "produtos":
                $titulo = "JMF-Academy | Produtos";
                break;
            case "contato":
                $titulo = "JMF-Academy | Contato";
                break;
            default:
                $titulo = "JMF-Academy";
                break;
        }
        return $titulo;
    }
?>