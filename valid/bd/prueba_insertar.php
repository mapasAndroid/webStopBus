<?php
//include('../validacionRol.php');
include_once("conexion.php");
$bd = new Conexion();
$link = $bd->conectar();

$tabla="INSERT INTO waypoints VALUES 
(null, 1,7.889959, -72.498821),(null, 1,7.889722,-72.498782),(null, 1,7.889404, -72.49873),(null, 1,7.889146,-72.498691),(null, 1,7.888709,-72.498613),(null, 1,7.888466,-72.498566),(null, 1,7.888325,-72.498536),(null, 1,7.888044,-72.498477),(null, 1,7.887864,-72.498445),(null, 1,7.887668,-72.498421),(null, 1,7.88732,-72.498375),(null, 1,7.886828,-72.498289),(null, 1,7.886641,-72.498261),(null, 1,7.886312,-72.498213),(null, 1,7.886036,-72.498172),(null, 1,7.885558,-72.498103),(null, 1,7.885217,-72.498055),(null, 1,7.88476,-72.497994),(null, 1,7.884557,-72.497965),(null, 1,7.884354,-72.497937),(null, 1,7.883867, -72.497868),(null, 1,7.883836, -72.497891),(null, 1,7.883821, -72.497981),(null, 1,7.883802, -72.498097),(null, 1,7.883783,-72.498205),(null, 1,7.883753, -72.498384),(null, 1,7.883706,-72.498656),(null, 1,7.883609,-72.499199),(null, 1,7.883552,-72.499502),(null, 1,7.883495,-72.499782),(null, 1,7.883393,-72.500309),(null, 1,7.883279,-72.50095),(null, 1,7.883231,-72.501199),(null, 1,7.883173,-72.501478),(null, 1,7.883116,-72.501758),(null, 1,7.88306,-72.502045),(null, 1,7.883012,-72.502309),(null, 1,7.882961,-72.502595),(null, 1,7.88293,-72.502775),(null, 1,7.882869,-72.503127),(null, 1,7.882797, -72.503483),(null, 1,7.882725, -72.503861),(null, 1,7.882672, -72.504154),(null, 1,7.882847, -72.504191),(null, 1,7.883054, -72.504235),(null, 1,7.883468,-72.504322),(null, 1,7.883808, -72.50439),(null, 1,7.88399,-72.504423),(null, 1,7.88417,-72.504456),(null, 1,7.884395,-72.504498),(null, 1,7.884696,-72.504553),(null, 1,7.884989,-72.504603),(null, 1,7.885256,-72.504649),(null, 1,7.885677,-72.504721),(null, 1,7.886376,-72.504856),(null, 1,7.886735,-72.504925),(null, 1,7.88723,-72.505019),(null, 1,7.887575,-72.505084),(null, 1,7.887716,-72.505111),(null, 1,7.887874,-72.505142),(null, 1,7.888323, -72.505233),(null, 1,7.888739, -72.505316),(null, 1,7.888774, -72.505117),(null, 1,7.88881, -72.50492),(null, 1,7.88888, -72.504544),(null, 1,7.888936, -72.50424),(null, 1,7.889011,-72.503823),(null, 1,7.889067, -72.503512),(null, 1,7.889124,-72.503191),(null, 1,7.888906, -72.503156),(null, 1,7.888588, -72.503105),(null, 1,7.88809,-72.503004),(null, 1,7.887879, -72.502959),(null, 1,7.887514,-72.502882),(null, 1,7.887109,-72.502812),(null, 1,7.886642,-72.502729),(null, 1,7.886341,-72.502675),(null, 1,7.885478,-72.502511),(null, 1,7.884304, -72.502277),(null, 1,7.884099, -72.50224),(null, 1,7.884167, -72.501908),(null, 1,7.884223, -72.501638),(null, 1,7.884285,-72.501332),(null, 1,7.884354, -72.500989),(null, 1,7.884427,-72.500623),(null, 1,7.884485, -72.500333),(null, 1,7.884502, -72.500244),(null, 1,7.885067, -72.500351),(null, 1,7.885388, -72.500414),(null, 1,7.886114, -72.500546),(null, 1,7.886448, -72.500607),(null, 1,7.886509, -72.500304),(null, 1,7.886582, -72.499939),(null, 1,7.886615, -72.499774),(null, 1,7.886654, -72.499582),(null, 1,7.886763, -72.499601),(null, 1,7.887047, -72.49965),(null, 1,7.887242,-72.499683),(null, 1,7.887459, -72.49972),(null, 1,7.887662,-72.49976),(null, 1,7.887972,-72.499817),(null, 1,7.889116,-72.500023),(null, 1,7.889532, -72.500097),(null, 1,7.889708, -72.50013),(null, 1,7.889724, -72.500046),(null, 1,7.889782, -72.499739),(null, 1,7.889841,-72.499427),(null, 1,7.889883, -72.499204),(null, 1,7.889934, -72.498936),(null, 1,7.889946, -72.498873),(null, 1,7.889959, -72.498821),(null, 2,7.888936, -72.50424),(null, 2,7.889011, -72.503823),(null, 2,7.889067, -72.503512),(null, 2,7.889124, -72.503191),(null, 2,7.88916, -72.502995),(null, 2,7.889223, -72.502648),(null, 2,7.889295, -72.502246),(null, 2,7.889304, -72.502192),(null, 2,7.889329, -72.502074),(null, 2,7.88935, -72.501976),(null, 2,7.889368, -72.501887),(null, 2,7.889387, -72.501798),(null, 2,7.889441, -72.501537),(null, 2,7.88948, -72.50135),(null, 2,7.889521, -72.501154),(null, 2,7.889744, -72.501195),(null, 2,7.890033, -72.501247),(null, 2,7.890311, -72.501291),(null, 2,7.890405, -72.501305),(null, 2,7.890507, -72.501321),(null, 2,7.890639, -72.501344),(null, 2,7.890816, -72.501376),(null, 2,7.891104, -72.501428),(null, 2,7.891307, -72.501465),(null, 2,7.891423, -72.501485),(null, 2,7.891555, -72.501509),(null, 2,7.891503, -72.501776),(null, 2,7.891462, -72.50199),(null, 2,7.891403, -72.50229),(null, 2,7.891337, -72.502625),(null, 2,7.891288, -72.502875),(null, 2,7.891227, -72.503185),(null, 2,7.89117, -72.50347),(null, 2,7.891087, -72.503906),(null, 2,7.891034, -72.504185),(null, 2,7.890979, -72.504471),(null, 2,7.890929, -72.504742),(null, 2,7.89089, -72.504957),(null, 2,7.890855, -72.505153),(null, 2,7.890801, -72.505452),(null, 2,7.890759, -72.505688),(null, 2,7.890505, -72.50564),(null, 2,7.890405, -72.505621),(null, 2,7.890056, -72.505555),(null, 2,7.889833, -72.505513),(null, 2,7.889573, -72.505466),(null, 2,7.889462, -72.505446),(null, 2,7.889199, -72.505399),(null, 2,7.888934, -72.505351),(null, 2,7.888739, -72.505316),(null, 2,7.888323, -72.505233),(null, 2,7.887874, -72.505142),(null, 2,7.887716, -72.505111),(null, 2,7.887575, -72.505084),(null, 2,7.88723, -72.505019),(null, 2,7.886735, -72.504925),(null, 2,7.886376, -72.504856),(null, 2,7.885719, -72.504728),(null, 2,7.885756, -72.504495),(null, 2,7.885797, -72.504271),(null, 2,7.885849, -72.503993),(null, 2,7.885907, -72.503683),(null, 2,7.886048, -72.503709),(null, 2,7.88634, -72.503763),(null, 2,7.886491, -72.50379),(null, 2,7.886663, -72.503822),(null, 2,7.886786, -72.503845),(null, 2,7.886961, -72.503876),(null, 2,7.887357, -72.503942),(null, 2,7.887636, -72.503988),(null, 2,7.887819, -72.504019),(null, 2,7.88818, -72.504087),(null, 2,7.888367, -72.504125),(null, 2,7.888882, -72.504229),(null, 2,7.888936, -72.50424),(null, 3,7.893472,-72.498188),(null, 3,7.893397, -72.498289),(null, 3,7.893118, -72.49809),(null, 3,7.892962,-72.497979),(null, 3,7.892806, -72.497866),(null, 3,7.892651,-72.49775),(null, 3,7.892489,-72.49763),(null, 3,7.892303,-72.497491),(null, 3,7.89214,-72.497369),(null, 3,7.891921,-72.497204),(null, 3,7.891573,-72.496947),(null, 3,7.891338,-72.496774),(null, 3,7.891044,-72.49655),(null, 3,7.890759,-72.496335),(null, 3,7.890543, -72.496187),(null, 3,7.890228,-72.495939),(null, 3,7.890206,-72.495921),(null, 3,7.890286, -72.495828),(null, 3,7.890413, -72.495681),(null, 3,7.890531, -72.495544),(null, 3,7.890715, -72.495317),(null, 3,7.890836, -72.495167),(null, 3,7.890939, -72.495032),(null, 3,7.891047, -72.494887),(null, 3,7.891282, -72.494569),(null, 3,7.891503, -72.49427),(null, 3,7.891658, -72.494068),(null, 3,7.891965, -72.493669),(null, 3,7.892161, -72.493397),(null, 3,7.892275, -72.493231),(null, 3,7.892562, -72.492816),(null, 3,7.892589,-72.492777),(null, 3,7.892678, -72.492848),(null, 3,7.892807, -72.492947),(null, 3,7.892965, -72.493068),(null, 3,7.893094, -72.493167),(null, 3,7.893217,-72.493258),(null, 3,7.89329, -72.493312),(null, 3,7.893515,-72.493479),(null, 3,7.893602, -72.493544),(null, 3,7.893645, -72.493576),(null, 3,7.89372, -72.493624),(null, 3,7.893864, -72.493717),(null, 3,7.894037, -72.493829),(null, 3,7.894083,-72.493858),(null, 3,7.894059, -72.493892),(null, 3,7.894013,-72.493959),(null, 3,7.893967, -72.494025),(null, 3,7.893905, -72.494115),(null, 3,7.893783, -72.49429),(null, 3,7.893726, -72.494372),(null, 3,7.893659, -72.494469),(null, 3,7.893577, -72.494588),(null, 3,7.893117, -72.495255),(null, 3,7.892952, -72.495491),(null, 3,7.893191, -72.495665),(null, 3,7.893344, -72.495777),(null, 3,7.893679, -72.496022),(null, 3,7.894058, -72.496289),(null, 3,7.894209, -72.496399),(null, 3,7.894417, -72.496559),(null, 3,7.894583, -72.496702),(null, 3,7.894417, -72.496893),(null, 3,7.894285, -72.497064),(null, 3,7.894117, -72.497296),(null, 3,7.893996, -72.497465),(null, 3,7.893678, -72.49791),(null, 3,7.893625, -72.497983),(null, 3,7.893429, -72.498246);";

mysqli_query($link, $tabla);

$bd->desconectar();

?>