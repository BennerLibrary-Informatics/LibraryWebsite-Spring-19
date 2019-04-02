

				<div class="cf"></div>
				<?php
					$message = "";
					if ((isset($reviewerID) && strlen($reviewerID)>0) ||
					    (isset($reviewedDate) && strlen($reviewedDate)>0)) {
							$message = "This web page was reviewed";
							if (isset($reviewerID) && strlen($reviewerID)>0){
									$message .= " by ";
									$getEmail = sprintf("SELECT *
														FROM help_email
														WHERE ID =" .$reviewerID);
									$emailResults = $db->query($getEmail) or ($db->error);
									while ($results = $emailResults->fetch_array()) {
										$message .= '<a href="/forms/email/index.php?id=' .$reviewerID . '">' .$results['name'] . '</a>';
										if (isset($results['title']) && strlen($results['title'])) {
											$message .= ', ' . $results['title'];
										}
									}
								}
								if (isset($reviewedDate) && strlen($reviewedDate)>0) {
									$message .= " on ".$reviewedDate;
								}
								$message.= ". ";
					}
					if (isset($creatorID) && strlen($creatorID)>0) {
						$message .= "This web page was created by ";
						$getEmail = sprintf("SELECT *
											FROM help_email
											WHERE ID =" .$creatorID);
						$emailResults = $db->query($getEmail) or die($db->error);
						while ($results = $emailResults->fetch_array()) {
							$message .= '<a href="/forms/email/index.php?id=' .$creatorID . '">' .$results['name'] . '</a>';
							if (isset($results['title']) && strlen($results['title'])) {
								$message .= ', ' . $results['title'];
							}
						}
						if (isset($creatorNotes) && strlen($creatorNotes)>0) {
							$message .= " ".$creatorNotes;
						}
						if (isset($createdDate) && strlen($createdDate)>0) {
							$message .= ", on ".$createdDate;
						}
						$message.= ". ";
					}
					elseif (isset($createdDate) && strlen($createdDate)>0) {
						$message .= "This web page was created ";
						if (isset($creatorNotes) && strlen($creatorNotes)>0) {
							$message .= $creatorNotes;
						}
						$message .= " on ".$createdDate .". ";
					}
					elseif (isset($creatorNotes) && strlen($creatorNotes)>0) {
						$message = "This web page was created ".$creatorNotes.". ";
					}

					if (isset($updaterID) && strlen($updaterID)>0) {
						$message .= "The content of the page was updated by ";
						$getEmail = sprintf("SELECT *
											FROM help_email
											WHERE ID =" .$updaterID);
						$emailResults = $db->query($getEmail) or die($db->error);
						while ($results = $emailResults->fetch_array()) {
							$message .= '<a href="/forms/email/index.php?id=' .$updaterID . '">' .$results['name'] . '</a>';
							if (isset($results['title']) && strlen($results['title'])) {
								$message .= ', ' . $results['title'];
							}
						}
						if (isset($updaterNotes) && strlen($updaterNotes)>0) {
							$message .= " ".$updaterNotes;
						}
						if (isset($updatedDate) && strlen($updatedDate)>0) {
							$message .= ", on ".$updatedDate;
						}
						$message.= ".";
					}
					elseif (isset($updatedDate) && strlen($updatedDate)>0) {
						$message .= "The content of the page was updated ";
						if (isset($updaterNotes) && strlen($updaterNotes)>0) {
							$message .= $updaterNotes;
						}
						$message .= " on ".$updatedDate .".";
					}
					elseif (isset($updaterNotes) && strlen($updaterNotes)>0) {
						$message .= "The content of the page was updated ".$updaterNotes.".";
					}

					if (isset($codeDate) && strlen($codeDate)>0) {
						$message .= "Code was updated on ".$codeDate.".";
					}

					if(isset($message) && strlen($message)>0) {
						echo"<p>" .$message ."</p>";
						$message ="";
					}

					$message = "";

					if(isset($videoProducer) && strlen($videoProducer)>0) {
						$message .= "Producer: ";
						if (is_numeric($videoProducer)) {
							$getEmail = sprintf("SELECT *
												FROM help_email
												WHERE ID =" .$videoProducer);
							$emailResults = $db->query($getEmail) or die($db->error);
							while ($results = $emailResults->fetch_array()) {
								$message .= $results['name'];
							}
						} else {
								$message .= $videoProducer;
						}
						$message .= "<br />";
					}

					if(isset($videoDirector) && strlen($videoDirector)>0) {
						$message .= "Director: ";
						if (is_numeric($videoDirector)) {
							$getEmail = sprintf("SELECT *
												FROM help_email
												WHERE ID =" .$videoDirector);
							$emailResults = $db->query($getEmail) or die($db->error);
							while ($results = $emailResults->fetch_array()) {
								$message .= $results['name'];
							}
						} else {
								$message .= $videoDirector;
						}
						$message .= "<br />";
					}

					if(isset($videoEditor) && strlen($videoEditor)>0) {
						$message .= "Video-Editor: ";
						if (is_numeric($videoEditor)) {
							$getEmail = sprintf("SELECT *
												FROM help_email
												WHERE ID =" .$videoEditor);
							$emailResults = $db->query($getEmail) or die($db->error);
							while ($results = $emailResults->fetch_array()) {
								$message .= $results['name'];
							}
						} else {
								$message .= $videoEditor;
						}
						$message .= "<br />";
					}

					if(isset($voiceOver) && strlen($voiceOver)>0) {
						$message .= "Voice-Over: ";
						if (is_numeric($voiceOver)) {
							$getEmail = sprintf("SELECT *
												FROM help_email
												WHERE ID =" .$voiceOver);
							$emailResults = $db->query($getEmail) or die($db->error);
							while ($results = $emailResults->fetch_array()) {
								$message .= $results['name'];
							}
						} else {
								$message .= $voiceOver;
						}
						$message .= "<br />";
					}

					if (isset($videoDate) && strlen($voiceOver)>0) {
						$message .= "Video Date: ";
						$message .= $videoDate . "<br />";
					}

					if(isset($message) && strlen($message)>0) {
						echo"<p>" .$message ."</p>";
						$message ="";
					}

					if(isset($dateAdded) && strlen($dateAdded)>0) {
						$message .= "Added on, ".$dateAdded;
					}

					if(isset($dateRemoved) && strlen($dateRemoved)>0) {
						$message .= " Removed on, ".$dateRemoved;
					}
					if(isset($message) && strlen($message)>0) {
						echo"<p>" .$message ."</p>";
						$message ="";
					}

					if(isset($additionalMessage) && strlen($additionalMessage)>0) {
						echo"<p>" .$additionalMessage ."</p>";
					}


				?>
				<!-- end #content --></div>
			<!-- end #mid --></div>

	        <div id="footer" class="cf">
	        	<ul>

	        		<li><a href="/donations/index.php">Donations</a></li>
	        		<li><a href="/forms/student-job-application/index.php">Student Job Application</a></li>
					<li><a href="https://apps.bennerlibrary.com/sa" target="_blank">Staff Access</a> &#183; <a href="https://agile.bennerlibrary.com/info-apps/sta/#/status" target="_blank">Status</a> &#183 <a href="/bin/imus/login.php" target="_blank">IMUS</a></li>
					<li><a class="do-link" href="/forms/email/index.php?id=105">Webmaster</a></li>
	        	</ul>
	        	<ul class="right">
	        		<li><a href="/">Benner Library &amp; Resource Center</a></li>
	        		<li><a href="http://www.olivet.edu" target="_blank">Olivet Nazarene University</a></li>
	        		<li>One University Ave &#183; Bourbonnais, IL 60914</li>
	        		<li>Phone: 815-939-5354 &#183; Fax: 815-939-5170</li>
	        	</ul>

	        	<div class="cf"></div>
			<!-- end #footer--></div>

		<!-- end #inner-container --></div>
	<!-- end #outer-container--></div>

	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-15188682-1', 'olivet.edu');
		  ga('send', 'pageview');

	</script>

</body>



</html>
