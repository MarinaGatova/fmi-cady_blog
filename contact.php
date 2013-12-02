<?php include_once('inc/standards.php'); ?>
<?php include_once('inc/head.php'); ?>

				<div id="contents">
				<div class="box">
					<div>
						<div id="contact" class="body">
							<h1>Contact</h1>
							<form action="index.html" method="post">
								<table>
									<tbody>
										<tr>
											<td>Name:</td>
											<td><input type="text" value="" class="txtfield"></td>
										</tr> <tr>
											<td>Email:</td>
											<td><input type="text" value="" class="txtfield"></td>
										</tr> <tr>
											<td>Subject:</td>
											<td><input type="text" value="" class="txtfield"></td>
										</tr> <tr>
											<td class="txtarea">Message:</td>
											<td><textarea></textarea></td>
										</tr> <tr>
											<td></td>
											<td><input type="submit" value="" class="btn"></td>
										</tr>
									</tbody>
								</table>
							</form>
							<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod nibh a porttitor bibendum. t</h2>
                            <p><strong><?php echo $firmenname?></strong><br />
							<?php echo $strasse?><br />
                            <?php echo $ort?></p>
							<p>
								<span>Address:</span> <?php echo $strasse?>
							</p>
							<p>
								<span>Telephone Number:</span> 1-800-999-9999
							</p>
							<p>
								<span>Fax Number:</span> 1-800-111-1111
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
               
                
                
<?php include_once('inc/footer.php'); ?>
