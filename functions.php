<?php
function students(){                                      // inicio de la funcion
    $array = [                                           // esto es la array principal
        array(                                                  // aqui empiezan las sub array
            "name"=>"Mateo",
            "E-mail"=>"mateo@ies.com",
            "age"=>"44",
            "course"=>" IAW,SAD,SXI",
            "photo"=> "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Carlos_Cabezas_cropped.jpg/200px-Carlos_Cabezas_cropped.jpg"
        ),
        array(
            "name"=>"Dani",
            "E-mail"=>"Dani@ies.com",
            "age"=>"22",
            "course"=>" IAW,SAD,SXI",
            "photo"=>"http://as01.epimg.net/chile/imagenes/2016/01/12/masdeporte/1452631576_054300_1452631826_noticia_normal.jpg"
        ),
        array(
            "name"=>"Rafa",
            "E-mail"=>"Rafa@ies.com",
            "age"=>"33 ",
            "course"=>" IAW,SAD,SXI",
            "photo"=>"http://www.merchanendirecto.es/media_noticias/img_notiaunErHoHNW.jpg"
        ),
        array(
            "name"=>"Marti",
            "E-mail"=>"Marti@ies.com",
            "age"=>"21",
            "course"=>" IAW,SAD,SXI",
            "photo"=>"https://www.humonegro.com/wp-content/ROGER-WATERS-02.png"
        ),
        
    ];
  /*  if(!empy($pre)){
    //    echo "cercar" .$query;
   //     $trobat = [] ;
        foreach($rest as $key=> $value){
            if(strpos(strtoupper($value),strtoupper($query))!==FALSE){
                $trobat[] = $value;
            }
        }
        sort ($trobat);
    }
    else{
        sort($array);
        return $array;
      }*/
        return $array;                                   // salida de la funcion
}
 
?> 