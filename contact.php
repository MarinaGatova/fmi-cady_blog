<?php include_once('inc/standards.php'); ?>
<?php include_once('inc/head.php'); ?>

				<div id="contents">
				<div class="box">
					<div>
						<div id="contact" class="body">
							<h1>Contact</h1>
							<form class="default formmail clear" data-validate="true" data-ajax="true" id="Kontaktformular1" method="post" action="<?php echo SITE_ROOT; ?>/_essentials/formmail.php" enctype="multipart/form-data">
            <fieldset class="col thr-5">
                <label for="Name">Name <small>(required)</small></label>
                <input type="text" id="Name" name="Name" required placeholder="Name" data-msg-required="Bitte Vor- und Zuname angeben"><br />
        
                <label for="Address" class="notReq">Address</label>
                <input type="text" id="Address" name="Address" placeholder="Address" data-msg-required="Write yous address, please"><br />
                
                <label for="Telefon">Telefon <small>(required)</small></label>
                <input type="tel" id="Telefon" name="Telefon" required placeholder="Telefon" data-rule-number="true" data-msg-number="Es sind nur Ziffern erlaubt" data-msg-required="Bitte Telefonnummer angeben"><br />
        
                <label for="Email">E-Mail <small>(required)</small></label>
                <input type="email" id="Email" name="Email" required placeholder="E-Mail Adresse" data-msg-email="Die E-Mail-Adresse ist ungültig" data-msg-required="Bitte E-Mail-Adresse angeben" data-rule-email="true"><br />
            </fieldset>
            <fieldset class="col two-5 end">
                <label for="Nachricht">Message <small>(required)</small></label>
                <textarea id="Nachricht" name="Nachricht" rows="10" cols="20" required placeholder="Message" data-msg-required="Bitte hinterlassen Sie eine Nachricht"></textarea><br /><br />
                
                <button name="submit" type="submit" class="submit" id="submit">Send</button>
            </fieldset>
            <fieldset class="hidden">
                <?php echo $form[0]; ?>
                <input type="hidden" name="required" value="Name:Ihr Name, Telefon: Ihre Telefonnummer, Email:Ihre E-Mail-Adresse, Nachricht: Ihre Nachricht">
                <input type="hidden" name="subject" value="Kontaktformular von <?php echo $text['client'];?>">
                <input type="hidden" name="mail_options" value="CharSet=UTF-8,HTMLTemplate=formmail.form1.php,TemplateMissing=N/A">
                <input type="hidden" name="good_url" value="../kontakt/formularbestaetigung.php">
                <input type="hidden" name="bad_url" value="../kontakt/formularfehler.php">
                <input type="hidden" name="derive_fields" value="email = Email">
            </fieldset>
        </form>
							<h2>Bhaccasyoniztas Beach Resort</h2>
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
