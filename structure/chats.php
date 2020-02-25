<section class="proyectos lila" id="chats">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-md-3 col-xs-offset-1 text-center">
                    <img class="img-responsive" src="img/charlas_divulgacion_seccion.png" alt="">
                </div>
                <div class="col-xs-12 col-md-8 text-justify">
			        <p>
                    La f&iacute;sica est&aacute; en todo, desde la medicina hasta la formaci&oacute;n del universo; y desde lo m&aacute;s grande hasta lo diminuto. En estas charlas, dirigidas a p&uacute;blico no especializado, te contamos la forma en la que la f&iacute;sica impacta en nuestras vidas. 
                    </p>
                    <div class="col-xs-12 col-md-6 text-center">
                            <img class="img-responsive img-center small" src="img/icon_lugar_aqua.png" alt="">
			                <p>Distintas fechas</br>12:00 a 13:00 horas</br>Auditorio Alejandra J&aacute;idar</br>Instituto de F&iacute;sica</p>
                        </div>
                        <div class="col-xs-12 col-md-6 text-center">
                            <img class="img-responsive img-center small" src="img/icon_user_aqua.png" alt="">
			                <p>P&uacute;blico no especializado y, especialmente, j&oacute;venes de zonas marginadas o alejadas de centros culturales o cient&iacute;ficos</p>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
                <?php
                // Get the contents of the JSON file 
                $strJsonFileContents = file_get_contents("structure/data.json");
                // Convert to array 
                $array = json_decode($strJsonFileContents, true);
                //var_dump($array); // print array
                foreach ($array as $i) {
                    if($i['active']!="true"){
                        $image_style = "opacity";
                        $i_comment = "<!--";
                        $f_comment = "-->";
                    }
                    else{
                        $image_style = "";
                        $i_comment = "";
                        $f_comment = "";
                    }
                    echo "<div class=\"col-xs-6 col-md-4 col-md-offset-0 text-center\">";
                        echo "<img class=\"img-responsive charlas {$image_style}\" src=\"img/charla_divulgacion_{$i['id']}.png\" alt=\"\">";
                        echo "<div class=\"col-xs-6\">";
                            echo "{$i_comment}<a href=\"{$i['youtube']}\" data-toggle=\"lightbox\" data-gallery=\"youtubevideos\">{$f_comment}";
                                echo "<img class=\"img-responsive img-center small {$image_style}\" src=\"img/icon_video_aqua.png\" alt=\"\">";
                            echo "{$i_comment}</a>{$f_comment}";
                        echo "</div>";
                        echo "<div class=\"col-xs-6\">";
                            echo "{$i_comment}<a href=\"img/charla_{$i['id']}/charla_{$i['id']}_01.jpg\" data-toggle=\"lightbox\" data-gallery=\"hidden-images-{$i['id']}\" class=\"col-4\">{$f_comment}";
                                echo "<img class=\"img-responsive img-center small {$image_style}\" src=\"img/icon_galeria_aqua.png\" alt=\"\">";
                            echo "{$i_comment}</a>{$f_comment}";
                            for($x=2;$x<=$i['images']; $x++){
                                $num = ($x<10) ? '0' : '';
                                echo "<div data-toggle=\"lightbox\" data-gallery=\"hidden-images-{$i['id']}\" data-remote=\"img/charla_{$i['id']}/charla_{$i['id']}_$num$x.jpg\" data-title=\"\"></div>";
                            }
                        echo "</div>";
                        echo "<p class=\"small\">{$i['date']}</br>{$i['name']}:</br> {$i['work']} </p>";		
                    echo "</div>";
                  }
                    ?>
                </div>
        </div>
   </section>