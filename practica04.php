<?php
$paises= array();
$paises ["Mexico"]=array("Guadalajara","Monterrey","D.F","Vallarta","Nayarit");
$paises["Japon"]=array("Tokyio","Osaka","Fukuoka","Hiroshima","Nagasaki");
$paises["E.U.A"]=array("Los Angeles","Sacramento","Las Vegas","Miami","Atlanta");
$paises["Brasil"]=array("Amaraji","Belagua","Bituruna","Assu","Adustina");
$paises["Alemania"]=array("Munich","Berlin","Nuremberg","","Abenberg");
$paises["Australia"]=array("Sidney","Melbourne","Canberra","Brisbane","Adelaida");
$paises["España"]=array("Barcelona","Madrid","Valencia","Zaragoza");
$paises["Argentina"]=array("Buenos Aires","Cordoba","La Plata","Mendoza","Salta");
$paises["China"]=array("Pekin","Shanghai","Hong Kong","Harbin","Macao");
$paises["Canada"]=array("brooks","Edmonton","Leduc","Cold Lake","Red Deer");
echo "<ul>";
foreach($paises as $pais=>$ciudades){
echo "<li>".$pais."<ul>";
foreach($ciudades as $ciudad){
echo "<li>". $ciudad."</il>";
}
 echo "</ul></li>";
}
 
?>
