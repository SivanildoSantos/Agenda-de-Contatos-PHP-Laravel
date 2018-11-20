@extends('layouts.app')

@section('content')
<div class="container">

            <?php

            $xml = simplexml_load_file('http://tecnologia.uol.com.br/ultnot/index.xml');
             
             if(!$xml) {
                echo("Desculpe, não foi possivel acessar o link");
             } else {

            foreach($xml->channel->item as $item) {
      
            $show = "$item->category <a href=".$item->link.">   $item->title<br /> </a>
            $item->pubDate<br /> 
            $item->url 
            $item->copyright<br />";  
            echo ("$show"); 
        }
    }
            ?>
    
</div>
@endsection
