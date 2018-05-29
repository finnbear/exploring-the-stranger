<?php
class Scene {
	public $title;
	public $description;
	public $hint;
	public $choices;

	public function __construct($title, $description, $hint, $choices) {
		$this->title = $title;
		$this->description = $description;
		$this->hint = $hint;
		$this->choices = $choices;
	}
}

$scenes = array();

$scenes["beach"] = new Scene("Unbearable glare at the beach", "Go to the beach", "Take a look around in 360&#176;.", array("bullet"));
$scenes["bullet"] = new Scene("Meursault pulls the trigger", "Watch as Meursault pulls the trigger", "As the bullet passes, turn around 180 degrees.", array("bullets"));
$scenes["bullets"] = new Scene("The other 4 shots", "See the other 4 shots", "Look up.", array());

$currentScene = "bullet";

if ($_POST["scene"] && array_key_exists($_POST["scene"], $scenes)) {
	$previousScenes = unserialize(base64_decode($_POST["previousScenes"]));
	$currentScene = $_POST["scene"];

	array_push($previousScenes, $currentScene);
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="texthtml; charset=UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="./bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="./libraries/video-js.css">
		<script src="./libraries/video.js"></script>
		<!--<script src="./three.js/build/three.min.js"></script>-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r76/three.js"></script>
		<link rel="stylesheet" href="./libraries/videojs-panorama.min.css">
		<script src="./libraries/videojs-panorama.min.js"></script>
		<style>
			body {
				background-color: #3D454D;
			}
			.parent {
				padding: 6rem 25%;
				margin: 0 auto;
				text-align: center;
			}
			.player_wrapper {
				position: relative;
				max-width: 960px;
				width: 100%;
			}
			body.vjs-full-window .player_wrapper {
				position: static;
			}
			.player_container {
				padding-top: 56.25%;
			}
			#videojs-panorama-player {
				position: absolute;
				width: 100%;
				height: 100%;
				top: 0;
				left: 0;
			}
			.table {
				margin: 0px;
				background-color: #212529;
				color: #EEEEEE;
			}
			td {
				border-top: 0px solid #212529 !important;
			}
		</style>
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
						<td colspan="2">
							<h1><?php echo($scenes[$currentScene]->title); ?></h1>
						</td>
					<tr>
						<td colspan="2"><?php echo($scenes[$currentScene]->hint); ?></td>
					</tr>
					<?php
					foreach ($scenes[$currentScene]->choices as $choice) {
						echo('<tr><td><form action="." method="post">');
						echo('<input type="hidden" name="scene" value="' . $choice . '">');
						echo('<button type="submit" class="btn btn-primary">' . $scenes[$choice]->description . '</button>');
						echo('</form></td></tr>');
					}

					if (count($previousScenes) > 0) {
						echo('<tr><td><form action="." method="post">');
						echo('<input type="hidden" name="previousScenes" value="' . base64_encode(serialize($previousScenes)) . '">');
						echo('<input type="hidden" name="scene" value="' . array_pop($previousScenes) . '">');
						echo('<button type="submit" class="btn btn-primary">Back</button>');
						echo('</tr></td></form>');
					}
					?>
				</tbody>
			</table>
		</div>
		<script type="text/javascript">
			function isMobile() {
				var check = false;
				(function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
				return check
			}
			(function(window, videojs) {
				var player = window.player = videojs('videojs-panorama-player', {}, function () {
					window.addEventListener("resize", function () {
						var canvas = player.getChild('Canvas');
						if(canvas) canvas.handleResize();
					});
				});
				var videoElement = document.getElementById("videojs-panorama-player");
				var width = videoElement.offsetWidth;
				var height = videoElement.offsetHeight;
				player.width(width), player.height(height);
				player.panorama({
					clickToToggle: false,
					clickAndDrag: true,
					autoMobileOrientation: isMobile(),
					initFov: 100,
					Notice: {
						Enable: false
					}, ready: function () {
						if(!isMobile()) player.play();
					}
				});
			} (window, window.videojs));
		</script>
	</body>
</html>

