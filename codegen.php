<?php
print "Press Ctrl+U to view generated code. Copy and paste\n\n";
$ret='';

for($x=1;$x<=7;$x++){
	$ret .= "\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
                                    <a class=\"lightbox\" href=\"./video/$x.mp4\">
                                        <img src=\"./img/video.png\"
                                            class=\"img-fluid\">
                                        <i class=\"fa fa-solid fa-play play-btn\"></i>
                                    </a>
                                </div>
";
}
print $ret;
                                
