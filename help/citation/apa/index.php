<?php
    $page_title = "APA - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
  $reviewerID = "";
  $reviewedDate = "";
  $creatorID ="";		//This ID is from the help_email ie 10
	$updaterID ="5";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="8/2/2018";	//The date entered here shows up ie 3/2/2015
	$dateAdded ="";		//The date entered here shows up ie 3/2/2015
	$dateRemoved ="";	//The date entered here shows up ie 3/2/2015
  $videoProducer = ""; //This can either be ID or typed name(for 1 time shot)
  $videoDirector = "";//This can either be ID or typed name(for 1 time shot)
  $videoEditor = "";//This can either be ID or typed name(for 1 time shot)
  $voiceOver = "";//This can either be ID or typed name(for 1 time shot)
  $videoDate = "";
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->


<h2 class="header-line">APA 6th Edition</h2>

	<p>APA stands for American Psychological Association. It is commonly used to cite sources within the social sciences.</p>

    <h4>APA Publications</h4>
    <div class="padding45-left">
      The print version of the Publication Manual of the American Psychological Association is available to use (in-library only) in the first-floor Reference Collection, R 808.02 Am35, 2010</p>

      <a id="pdf" class="title-font" href="https://my.olivet.edu/depts/librdept/eResources/apa_electronic.pdf" target="_blank">APA Style Guide to Electronic Resources</a> <br />
          <div class="padding55-left">
              When prompted for a password, use your My Olivet credentials. Note from publisher about use: This pdf must only be accessible to authorized users of Olivet Nazarene University. Users may print copies for their personal use only. In addition to the authorized users’ personal copies, the institution may print hard copies of the APA Style Guide to Electronic References, Sixth Edition, as needed for internal use (but not for distribution). It must be stored in a secure network.
          </div>

      <a class="title-font" href="http://blog.apastyle.org/" target="_blank">APA Style Blog</a> - Use this blog to review more-detailed discussions of how to apply APA style and format to your writing.<br /><br />
      <a class="title-font" href="http://flash1r.apa.org/apastyle/basics/index.htm" target="_blank">APA 6th edition tutorial</a> Note: the reference list is discussed on slides 17-25<br /><br />
    </div>

    <h4>Examples from Purdue Owl</h4>
        <div class="padding45-left">
          <a class="title-font" href="https://owl.purdue.edu/owl/research_and_citation/apa_style/apa_formatting_and_style_guide/reference_list_basic_rules.html" target="_blank">Reference List</a> - The Purdue Online Writing Lab.<br />
          <a class="title-font" href="https://owl.purdue.edu/owl/general_writing/common_writing_assignments/annotated_bibliographies/index.html" target="_blank">Definition of Annotated Bibliography</a><br />
          <a class="title-font" href="https://owl.purdue.edu/owl/general_writing/common_writing_assignments/annotated_bibliographies/annotated_bibliography_samples.html" target="_blank">Annotated Bibliography Examples (MLA, APA, Chicago)</a><br /><br />
        </div>

    <h4>ONU Global (SGCS)</h4>
        <div class="padding45-left">
            <a id="pdf" href="/help/citation/apa/doc/apa_template.doc" target="_blank">APA Template/SGCS</a> - includes MSN/FNP<br />
            <a id="pdf" href="/help/citation/apa/doc/apa_template_revised.doc" target="_blank">APA Template for ESL 604 - Dr. Louis</a> - It removes the running head and page number from the first page. It also single spaces the reference list with double spacing in between each citation.<br /><br />
        </div>

    <h4>DOIs</h4>
  		<div class="padding45-left">
          <a class="title-font" href="http://blog.apastyle.org/apastyle/2014/07/how-to-use-the-new-doi-format-in-apa-style.html" target="_blank">DOI Formatting in APA</a> - How to use the New DOI Format in APA<br /><br />
          <a class="title-font" href="http://dx.doi.org/ " target="_blank">DOI Resolver</a> - Use when you have a DOI, and need to get the rest of the citation<br /><br />
          <a class="title-font" href=" https://www.crossref.org/" target="_blank">Find a doi</a> - Enter your article title in the Metadata Search.<br /><br />
      </div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
