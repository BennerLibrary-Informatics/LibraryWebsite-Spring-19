<?php
   $page_title = "ICLZ Dedication - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>

	@import url(https://fonts.googleapis.com/css?family=Open+Sans:700,300);

$rows: 3;
$columns: 3;
$length: 128;
$space: 4;

.frame {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  height: 400px;
  margin-top: -200px;
  margin-left: -200px;
  border-radius: 2px;
  box-shadow: 1px 2px 10px 0px rgba(0,0,0,0.2);
    overflow: hidden;
  background: #fff;
  color: #fff;
    font-family: 'Open Sans', Helvetica, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.pics {
    padding: 2px;

    .pic {
        position: relative;
        float: left;
        margin: ($space / 2) + px;
        width: ($length) + px;
        height: ($length) + px;
        cursor: pointer;
        background: #000;
        animation: small .5s ease-in-out both;
        transition: transform .5s ease-in-out, z-index 0s linear .5s;

        &.active {
            animation: big .5s ease-in-out both;
        }

        img {
            width: 100%;
            height: auto;
            transition: opacity .5s ease-in-out;
        }

        &.away img {
            opacity: 0;
        }

    }

    $top: 0%;
    $left: 0%;
    $row: 1;
    $column: 1;
    @for $i from 1 through ($rows * $columns) {

        // update row
        @if ($row * $columns) < $i {
            $row: $row + 1;
        }

        // update column
        $column: $i - ( ($row - 1) * $columns );

        // set values for top and left origin
        $top: ($row - 1) / ($rows - 1) * 100%;
        $left: ($column - 1) / ($columns - 1) * 100%;

        .pic-#{$i} {
            transform-origin: $left $top;

        }

    }

}

@keyframes big {
    0%,1% {
        transform: scale(1);
        z-index: 2;
    }
    100% {
        z-index: 2;
        transform: scale(3.0625);
    }
}

@keyframes small {
    0% {
        transform: scale(3.0625);
        z-index: 2;
    }
    99% {
        z-index: 2;
        transform: scale(1);
    }
    100% {
        z-index: 1;
    }
}

<!-- ===== content below here ========================================================== -->
<h1>ICLZ Dedication</h1>

<p>A dedication ceremony was held in the Irene Clerico Learning Zone (ICZL) on Tuesday, October 10, 2017. In attendance was Irene's daughter along with a good family friend.</p>

	<ul>
		<li><a id="pdf" href="/donations/clerico_farley/docs/welcome.pptx">Welcome</a> - powerpoint presentation</li>
		<li><a id="pdf" href="/donations/clerico_farley/docs/iclz_stats.pdf">Poster</a> - usage statistics in the ICLZ</li>
		<li><a href="/donations/clerico_farley/docs/collage.jpg">Collage of Irene Clerico</a> - from Olivet yearbook photos</li>
	</ul>

	<div class="margin15" >

	<?php

		$directory= '../../donations/clerico_farley/img/';
		$imageArray = glob($directory."*.jpg");

		foreach($imageArray as $image){
			$fileName = basename($image, ".jpg");
			print '<img src="'.$image.'"class="margin5" height = 200 border = 2/>';
		}

	?>


.frame
	.pics
		- for i in (1..9)
			<div class="pic pic-#{i}">
				<img src="'.$image.'"class="margin5" height = 200 border = 2/>
			</div>


</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
