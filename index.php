<?php
class Scene {
	public $title;
	public $description;
	public $hint;
	public $quote;
	public $credits;
	public $choices;

	public function __construct($title, $description, $hint, $quote, $credits, $choices) {
		$this->title = $title;
		$this->description = $description;
		$this->hint = $hint;
		$this->quote = $quote;
		$this->credits = $credits;
		$this->choices = $choices;
	}
}

$scenes = array();

$scenes["beach"] = new Scene("The beach", "Go to the beach", "Take a look around in 360&#176;.", "\"glare on the water was unbearable\" (Camus 52)", array("https://www.youtube.com/watch?v=7F-F8-qHmq0", "3DArtist", "Allshevski", "Andrin61", "APSRenderingandAnimation", "Arev", "Argumentator", "attila16", "beefbayonet", "Belmont", "BIgGoga", "blender4ever", "blenderesa", "BlenderRookie", "Bringidon", "CactusCubesMatt", "CaptainSweet", "Cdanimation", "danp", "DensePixel", "divingpixel", "edmondwu1022", "EricFelbs", "formation", "gerotex", "goldengel", "Gruemilk", "hand_solo", "hetsumani", "holoJero", "howkj1", "Idk_yara", "isaacsmith", "jimmywong", "jimoniak", "jk1swt", "JonathanTab", "kikr4140", "kira96c", "kissgyula", "kouta602", "koves", "lachoneus", "LK84", "LucasPMagno", "lxne", "MC0", "MrBlack1772", "mrgoog", "Mr_Lamppost", "nezumi", "Nibbler19", "ObelX", "obliviousfre", "olivion", "Pastel", "paulchop", "peppenova", "Perfect_Pint", "peter_kolm", "pilly33", "qcgeneral29", "Raimund58", "RenderFun", "ridunc", "Runouw", "Rwthegamer", "savvov", "Saxeen", "Simmer65", "SneakyMrRed", "somasimple", "Struffel", "TomPoulot", "tomwe1", "tongjie", "VA-Vision", "valsevent", "voidNK", "Volodey", "vrumfondel", "wesseb", "zbx"), array("bullet"));
$scenes["bullet"] = new Scene("Meursault pulls the trigger", "Watch as Meursault pulls the trigger", "As the bullet passes, turn around 180 degrees.", "", array("https://www.youtube.com/watch?v=DJrBNW7FL9Q", "3DArtist", "21nds", "aeonsparx", "ailime", "al18267", "animation91", "AnkhM", "Arev", "B-BAV", "badjano", "BBB", "blackbelt352", "blender4ever", "blenderesa", "bonnet", "Borys96", "boustalahit", "calimanoliveira", "carre44", "cendurar", "chesshirr", "ChriGall", "clione", "ComiG", "DaCool", "dak34384", "DanielCrane", "Darkane001", "DeadScrypt", "delanop", "divingpixel", "edmondwu1022", "einball", "EmpireProperties", "Empizz", "Erathien", "estajxo", "Fadge", "FidoDidoVN", "Fpsiegel", "FuzzyWuzzie", "gerotex", "Ghreen", "gronlokke", "Gruemilk", "GustavByC", "hand_solo", "Harry_Hegel", "Hellboj", "herrie", "highbeamstudios", "highsinnc", "HMU", "holoJero", "howkj1", "IAMTHETHORN", "iccha", "IcedClementi", "imreviljoen", "inbetween", "IncredibleSheep", "indiemax", "isaacsmith", "iwoj", "jccbasel", "jeanrosa", "jimmywong", "jimoniak", "jk1swt", "jonatanhedborg", "JonathanTab", "Justoch", "kanomon", "KevGamesUltimate", "kira96c", "kissgyula", "kusius", "lachoneus", "Liberty009", "Lithen", "lorislibero", "LunarPenguin", "manujarvinen", "MarcHumphreys", "marco1960", "martyfinkle", "MasterBen", "MatteCrystalV2", "Matthijz98", "Maximon", "mblackburn", "MC0", "Metallord", "misscore", "montykutyi", "MrBlack1772", "mrgoog", "N3BB3Z4R", "najeb", "Nibbler19", "nigelat", "nightshaade", "ObelX", "paulchop", "Per22", "Perfect_Pint", "Phenax", "Phyveon", "pilly33", "pitvandyck", "pixby", "Poesie_Render", "qcgeneral29", "Raimund58", "RandomRenderings", "romasso", "RPBCACUEAIIBH", "sakuukuli", "Saxeen", "Scbenoit", "scribblemaniac", "Sealund", "sjijoseph", "somasimple", "stefanV", "stom", "stuartc", "Swag", "tate", "TomPoulot", "tomwe1", "tonyf69", "turtleRender", "TylerPin", "unreal", "UnRealCloud", "uwepost", "vitorboschi", "voidNK", "Volkereigen", "werauchimmer", "WestPotomacTSA", "Whippie", "winapple", "wuls", "zerdnog", "Zersal"), array("bullets"));
$scenes["bullets"] = new Scene("The other 4 shots", "See the other 4 shots", "Look up.", "", array("-Samino-", "albaner", "alexbo", "AnkhM", "ANTIS111", "apple1728", "Arev", "Arthur_Weiss", "AshiroConanVS", "AwVwARage", "blender4ever", "blenderesa", "BroBpony", "CG-Kuba", "chesshirr", "ChriGall", "cloudyruin", "ComiG", "crotte-bidou", "curiosity91", "danp", "Darknoodles", "dfield", "divingpixel", "drawdecs", "Edward", "el71Gato", "EmpireProperties", "Empizz", "EricFelbs", "FelipeSevero", "fhecrewdavid", "flyke", "formation", "frosta95", "fstadin", "greatwhite", "grooveboy", "Gruemilk", "GustavByC", "hand_solo", "Harry_Hegel", "heinzelnisse", "highbeamstudios", "IcedClementi", "inakiblender", "Jagdoe", "jbene", "jimoniak", "JMcAllister", "jonatanhedborg", "kaptaink_cg", "KevGamesUltimate", "kingvlad", "kira96c", "kornpcgamer", "kostirez1", "kurlak", "lachoneus", "Leumeister", "Liberty009", "littleright", "LucasPMagno", "lukaa", "Mad_Axell", "Mario_Verkerk", "markos", "MC0", "MMaire", "MrBlack1772", "mrgoog", "mydigitalwalk", "myperduk", "MZiemys", "Nibbler19", "ObelX", "Paraklletoss", "paulchop", "Phyveon", "pitvandyck", "Poesie_Render", "polyboy_3D", "qcgeneral29", "Raimund58", "RandomRenderings", "rochbenritter", "RollCONTAiNER", "RPBCACUEAIIBH", "Rubyjunk", "Rwthegamer", "sakuukuli", "scribblemaniac", "ShadowSheep", "shallrender", "sillywilly", "sirflankalot", "somasimple", "stom", "Swag", "tate", "thunder_cg", "Tiinea", "TomPoulot", "tomwe1", "turtleRender", "ulissesn", "warnotte", "weredwarf", "wesseb", "winapple", "xddsniper", "xyz", "zerdnog"), array());

$currentScene = "beach";

$previousScenes = array();

if ($_POST["scene"] && array_key_exists($_POST["scene"], $scenes)) {
	$previousScenes = unserialize(base64_decode($_POST["previousScenes"]));
	$currentScene = $_POST["scene"];
}

array_push($previousScenes, $currentScene);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="texthtml; charset=UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<link rel="stylesheet" type="text/css" href="./bootstrap/dist/css/bootstrap.min.css">
		<script src="./bootstrap/dist/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="./libraries/video-js.css">
		<script src="./libraries/video.js"></script>
		<!--<script src="./three.js/build/three.min.js"></script>-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r76/three.js"></script>
		<link rel="stylesheet" href="./libraries/videojs-panorama.min.css">
		<script src="./libraries/videojs-panorama.min.js"></script>
		<link rel="stylesheet" href="./style.css">
		<title>Exploring The Stranger</title>
	</head>
	<body>
		<div class="parent">
			<div class="player_wrapper">
				<div class="player_container">
					<video id="videojs-panorama-player" class="video-js vjs-default-skin" crossorigin="anonymous" controls>
						<source src="https://interlakeinklings.com/exploring-the-stranger/scenes/<?php echo($currentScene); ?>.mp4" type="video/mp4">
					</video>
				</div>
			</div>
			<br>
			<table class="table table-dark">
				<tbody>
					<tr>
						<td>
							<h1><?php echo($scenes[$currentScene]->title); ?></h1>
						</td>
					<tr>
						<td><?php echo($scenes[$currentScene]->hint); ?></td>
					</tr>
					<?php
					foreach ($scenes[$currentScene]->choices as $choice) {
						echo('<tr><td><form action="." method="post">');
						echo('<input type="hidden" name="scene" value="' . $choice . '">');
						echo('<input type="hidden" name="previousScenes" value="' . base64_encode(serialize($previousScenes)) . '">');
						echo('<button type="submit" class="btn btn-primary">' . $scenes[$choice]->description . '</button>');
						echo('</form></td></tr>');
					}

					if (count($previousScenes) > 1) {
						echo('<tr><td><form action="." method="post">');
						echo('<input type="hidden" name="scene" value="' . $previousScenes[count($previousScenes) - 2] . '">');
						echo('<input type="hidden" name="previousScenes" value="' . base64_encode(serialize(array_slice($previousScenes, 0, -2))) . '">');
						echo('<button type="submit" class="btn btn-primary">Back</button>');
						echo('</tr></td></form>');
					}

					if (count($scenes[$currentScene]->credits) > 0) {
						echo('<tr><td>');
						echo('<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#sources" aria-expanded="false" aria-controls="sources" onclick="setTimeout(function() { window.scrollBy(0, 1000); }, 250);">Show quote and credits</button>');
						echo('</td></tr>');
					}
					?>
				</tbody>
			</table>
		</div>
		<div class="collapse" id="sources">
			<div class="card card-body">
				<h3>Quote</h3>
				<p><?php echo($scenes[$currentScene]->quote); ?></p>
				<h3>Credits and people whose computers helped to render</h3>
				<p>
				<?php
					$numCredits = count($scenes[$currentScene]->credits);
					$i = 0;
					foreach ($scenes[$currentScene]->credits as $credit) {
						if ($numCredits == 1) {
							echo($credit);
						} else if (++$i == $numCredits) {
							echo('and ' . $credit);
						} else {
							echo($credit . ', ');
						}
					}
				?>
				</p>
			</div>
		</div>
		<script src="./script.js"></script>
	</body>
</html>

