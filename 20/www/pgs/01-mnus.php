<?php 
$mnu_json = '{
    "Inicio": "index.php",
    "Inicio2": {
        "href": "index.php",
        "smnu": {
            "About": {
                "href": "#",
                "smnu": {
                    "Fresh":   "#",
                    "Archive": "#"
                }
            },
            "History": "#",
            "News": "#"
        }
    }
}';
$mnu = json_decode($mnu_json, true);

function Get_a($tit, $href='#'){ return "<a href='$href'>$tit</a>"; }

function Get_li($ctndo, $i, $smnu= False){
    $iclass = [];
    if ( $i == 0 ) { $iclass[] = "active"; }
    if ( $smnu   ) { $iclass[] = "sub-menu"; }
    $txtClass = count($iclass)? " class='" + implode(' ', $iclass) + "'" : '';
    //return "<li$txtClass>$ctndo</li>";
    return "<li>$ctndo</li>";
}

// foreach ($mnu as $k => $v) {
//     echo current($mnu);
// }
?>


<nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
    <ul class="nav sf-menu clearfix">
        <?php  

            echo Get_li( Get_a( 'Inicio 4', 'index.php' ), 0, True );

        //<li class="active"><a href="index.php">Inicio</a></li>
        ?>
        <li class="sub-menu"><a href="index.php">Inicio2</a><span></span>
            <ul class="submenu">
                <li><a href="#">About</a><span></span>
                  <ul class="submenu">
                        <li><a href="#">Fresh</a></li>
                        <li><a href="#">Archive</a></li>
                  </ul>  
                </li>
                <li><a href="#">History</a></li>
                <li><a href="#">News</a></li>
            </ul>
        </li>
        <li class="sub-menu"><a href="index-1.html">about</a><span></span>
            <ul class="submenu">
                <li><a href="#">About</a><span></span>
                  <ul class="submenu">
                        <li><a href="#">Fresh</a></li>
                        <li><a href="#">Archive</a></li>
                  </ul>  
                </li>
                <li><a href="#">History</a></li>
                <li><a href="#">News</a></li>
            </ul>
        </li>
        <li><a href="index-2.html">events</a></li>
        <li><a href="index-3.html">courses</a></li>
        <li><a href="index-4.html">contact</a></li>
    </ul>
</nav>