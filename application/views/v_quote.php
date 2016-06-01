 <section>
 	<div class="container">
 		<div class="row">
 			<div class="get-started center wow fadeInDown">
                <h2>Quote of The Day</h2>
                <p class="lead"><h3><?php foreach ($quote as $quote) {
                  echo $quote->quote;
                }?></h3>
                <div class="request">
                    <h4><a href="#">Request a free Quote</a></h4>
                </div>
            </div><!--/.get-started-->
 		</div>
 	</div>
 </section>
 