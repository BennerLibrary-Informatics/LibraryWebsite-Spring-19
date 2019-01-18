<?php
   $page_title = "Template Documentation - Benner Library";
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
<!-- ===== content below here ========================================================== -->


<h1>Template Documentation</h1>

<h2>Template Variables</h2>

   <h5>$page_title</h5>
   <p>Changes the title of the page. The title can be seen as the text on open tabs and in search results.</p>

   <h5>$body_class</h5> 
   <p>Adds a css class or classes to the body tag of the document. Multiple classes should be separated by a comma and space. Example: “class1, calss2”.</p>

   <h5>$body_id</h5> 
   <p>Adds a css id to the body tag of the document.</p>

   <h5>$css</h5> 
   <p>Can be uses other css files into the document using standard html.</p>
   <p>Example: &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;/css/main.css&quot;&gt;</p>

   <h5>$js</h5> 
   <p>Can be uses other javascript files into the document using standard html.</p>
   <p>Example: &lt;script type=&quot;text/javascript&quot; src=&quot;/js/main.js&quot;&gt;&lt;/script&gt;</p>

<h2>Auxiliary Classes</h2>
   <h5>.no-margin-top</h5>
   <p>Sets the top margin to 0.</p>

<h2>Building Blocks</h2>
   <h4>Page Split</h4>
   <p>Page split allows the page to split into two columns. The markup is as follows:</p>
   <code><pre>
&lt;div class=&quot;split&quot;&gt;
   &lt;div class=&quot;left&quot;&gt;
      &lt;!-- left column content --&gt;
   &lt;/div&gt;
   &lt;div class=&quot;right&quot;&gt;
      &lt;!-- right column content --&gt;
   &lt;/div&gt;
   &lt;div class=&quot;cf&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</pre></code>
   <p>By default the columns are split 50%-50%. This can be changed by adding the class l60-r40 or l40-r60 to the main div.</p>
   <p>If there is strange spacing at the top of the spit, you may have to use the auxiliary classes of no-margin-top on the first element within the left and right divs. If there is strange spacing at the bottom of the spit, you may have to use the auxiliary classes of no-margin-bottom on the last element within the left and right divs.</p>


   <h4>Float-Box</h4>
   <p>Float-Box is a div that floats to the left or right of normal content. This achieved by adding the css class float-box-right or float-box-left to a div. The contents of the div can be any normal html.</p>
   <h5>example</h5>
   <div class="float-box-right">
      <h3>This is a float box right</h2>
      <hr>
      <p>empowered markets via plug-and-play networks. Dynamically.</p>
   </div>
   <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Dramatically maintain clicks-and-mortar solutions without functional solutions.Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value.</p>
   <h5>code</h5>
   <code><pre>
&lt;div class=&quot;float-box-right&quot;&gt;
   &lt;h3&gt;This is a float box&lt;/h2&gt;
   &lt;hr&gt;
   &lt;p&gt;empowered markets via plug-and-play networks. Dynamically.&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;Collaboratively administrate empowered markets via plug-and-play networks...&lt;/p&gt;</pre></code>


<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>