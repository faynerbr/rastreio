<?php

require 'vendor/autoload.php';
require_once 'dompdf/autoload.inc.php';

    $sucesso = 0;
    $codigoderastreio = "OA016913717BR";

    $obj = "$codigoderastreio";
    //$url = "http://localhost/rastreio/api/obj.php?obj={$obj}";
    $json = json_decode(file_get_contents("http://hosthase.com.br/rastreio/api/obj.php?obj={$obj}"));
    //$rastreio = json_decode(file_get_contents($json));

    $array = get_object_vars($json);
    //var_dump($array[0]->action);

    //==========================================
    //  COMEÇO DAS VARIAVEIS SEPARANDO EM ARRAYS
    //==========================================
    //==========================================
    //  ACTION
    //==========================================
    $status0 = $array[0]->action;
    $status1 = $array[1]->action;
    $status2 = $array[2]->action;
    $status3 = $array[3]->action;
    $status4 = $array[4]->action;
    $status5 = $array[5]->action;
    //==========================================
    //  MESSAGEM
    //==========================================
    $message0= $array[0]->message;
    $message1= $array[1]->message;
    $message2= $array[2]->message;
    $message3= $array[3]->message;
    $message4= $array[4]->message;
    $message5= $array[5]->message;
    //==========================================
    //  DATA
    //==========================================
    $data0 = $array[0]->date;
    $data1 = $array[1]->date;
    $data2 = $array[2]->date;
    $data3 = $array[3]->date;
    $data4 = $array[4]->date;
    $data5 = $array[5]->date;
    //==========================================
    //  HORA
    //==========================================
    $hora0 = $array[0]->hour;
    $hora1 = $array[1]->hour;
    $hora2 = $array[2]->hour;
    $hora3 = $array[3]->hour;
    $hora4 = $array[4]->hour;
    $hora5 = $array[5]->hour;
    //==========================================
    //  CIDADE
    //==========================================
    $local0 = $array[0]->location;
    $local1 = $array[1]->location;
    $local2 = $array[2]->location;
    $local3 = $array[3]->location;
    $local4 = $array[4]->location;
    $local5 = $array[5]->location;
    //==========================================
    //  FIM DAS VARIAVEIS SEPARANDO EM ARRAYS
    //==========================================

    $estrutura = "
<html>
    <head>

        <style>
            p{
            margin-left: 3%;
            margin-right: 10%;
            font-size: 12px;
            font-weight: 0;
            }
            b{
            color: black;
            }
            .divisoria{
                width: 548px;
                margin-bottom: 1%;
                border-bottom: 1px solid #808080;
            }
            .header{  
            display: inline;
            width: 250px;
            height: 20px;
            margin-left: 5%;
            }
            h3{ 
            font-size: 18px;
            }
            .status td{
            margin-left: 100px;
            width: 550px; 
            height: auto;
            }
        </style>
        
    </head>

    <body style='width: 550px; height: auto;'>

        <img src='http://e-lastic.scprojetista.com/logo-color-small.png' width='150' height='30' alt='logo' style='margin-bottom: 1.5%;'/>

        <div class='divisoria'></div>

        <table>
        <tr>
        <td><img src='http://e-lastic.scprojetista.com/icone.jpg' width='20' height='20' alt='ícone' style='margin-top: 4%;margin-left: 3%;' /></td>
        
        <td><h3 style='color:#5396B6;margin-left:5px;'> Encomenda Entregue <h3></td>
        
        </tr>
        </table>
       
        
        <p><b>Você pode acompanhar o envio com o código de rastreamento:</b> <b style='Color: blue;'>$codigoderastreio</b></p>
        
        <div class='divisoria'></div>

        <table>
        <tr>
        <td style='left:-10%;display:block;'>$data0</td>
        <td style='left:-10%;display:block;'>$hora0</td>
        <td style='left:-10%;display:block;'>$local0</td>
        <div class='status'>
        <td><b>$status0</b></td>
        </div>
        </tr>
        </table>

        <div class='divisoria'></div>
    
        <table>
        <tr>
        <td style='left:-10%;display:block;'>$data1</td>
        <td style='left:-10%;display:block;'>$hora1</td>
        <td style='left:-10%;display:block;'>$local1</td>
        <div class='status'>
        <td><b>$status1</b></td>
        </div>
        </tr>
        </table>

        <div class='divisoria'></div>
    
        <table>
        <tr>
        <td style='left:-10%;display:block;'>$data2</td>
        <td style='left:-10%;display:block;'>$hora2</td>
        <td style='left:-10%;display:block;'>$local2</td>
        <div class='status'>
        <td style=''><b>$status2</b><br>$message2</td>
        
        </div>
        </tr>
        </table>
        
        <div class='divisoria'></div>
    
        <table>
        <tr>
        <td style='left:-10%;display:block;'>$data3</td>
        <td style='left:-10%;display:block;'>$hora3</td>
        <td style='left:-10%;display:block;'>$local3</td>
        <div class='status'>
        <td style=''><b>$status3</b><br>$message3</td>
        
        </div>
        </tr>
        </table>

        <div class='divisoria'></div>
    
        <table>
        <tr>
        <td style='left:-10%;display:block;'>$data4</td>
        <td style='left:-10%;display:block;'>$hora4</td>
        <td style='left:-10%;display:block;'>$local4</td>
        <div class='status'>
        <td style=''><b>$status4</b><br>$message4</td>
        
        </div>
        </tr>
        </table>

        <div class='divisoria'></div>
    
        <table>
        <tr>
        <td style='left:-10%;display:block;'>$data5</td>
        <td style='left:-10%;display:block;'>$hora5</td>
        <td style='left:-10%;display:block;'>$local5</td>
        <div class='status'>
        <td><b>$status5</b></td>
        </div>
        </tr>
        </table>

        <h3>Dados do Envio</h3><br>
        <h5>FÁBIO ALVES DA SILVA JÚNIOR</h5>
        <h5>Tel.: 61 9 8309-7008 / 24 9 9200-3015</h5>
        <h5>Rua Paineira 152 </h5>
        <h5>Renascer Macapá/AP</h5><br>

        <h4>Falta Pouco!</h4>
        <h4>Equipe da E-lastic Brasil</h4>

        <div class='divisoria'></div>

        <p> Não responda este e-mail!</p>
    </body>
</html>
";

    echo $estrutura;

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $dompdf->loadHtml($estrutura);
    
    $dompdf->setPaper("A4","landscape");
    
    $dompdf->render();
    $dompdf->stream("rastreio.pdf");








?>
