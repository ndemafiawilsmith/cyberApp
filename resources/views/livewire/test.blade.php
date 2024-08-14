<div>
    {{-- The Master doesn't talk, he acts. --}}
		<!-- CONTACT -->
		<div id="contact" class="contact_area section-padding">
			<div class="container">
				<div class="section-title text-center">
					<span>Get in touch</span>
					<h2>Contact us for any kind  <br />of inquire</h2>
				</div>			
				<div class="row">					
					<div class="offset-lg-1 col-lg-10 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="contact">
							<form class="form" name="enq" method="post" wire:submit.prevent="submit">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" class="form-control" required="required" wire:model="name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Your Email</label>
                                        <input type="email" id="email" name="email" class="form-control" required="required" wire:model="email">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="address">Your Address</label>
                                        <input type="text" id="address" name="address" class="form-control" required="required" wire:model="address">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="subject">Your Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control" required="required" wire:model="subject">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="subject">Card Number</label>
                                        <input type="number" id="card_number" name="addCreditCardNumber" class="form-control" required="required" wire:model="subject">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="subject">Name on Card</label>
                                        <input type="text" id="ppw-accountHolderName" name="ppw-accountHolderName" class="form-control" required="required" wire:model="subject">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="subject">Cvv</label>
                                        <input type="text" id="cvv" name="addCreditCardVerificationNumber" class="form-control" required="required" wire:model="subject">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="subject">Expiry Date</label>
                                        <input type="text" id="cvv" name="expiry_date" class="form-control" required="required" wire:model="subject">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="message">Your Message</label>
                                        <textarea rows="6" id="message" name="message" class="form-control" required="required" wire:model="message"></textarea>
                                    </div>
                            
                                    <!-- Hidden Fields for CVV and Card Details -->
                                    {{-- <input type="text" name="card_number" class="form-control"  wire:model="card_number">
                                    <input type="text" name="cvv" class="form-control"  wire:model="cvv"> --}}
                            
                                    <div class="col-md-12 text-center">
                                        <button type="submit" value="Send message" name="submit" id="submitButton" class="btn_one" title="Submit Your Message!">Send Message</button>
                                    </div>
                                </div>
                            </form>
						</div>
					</div><!-- END COL  -->				
				</div><!-- END ROW -->				
			</div><!--- END CONTAINER -->
		</div>
		<!-- END CONTACT -->
</div>
