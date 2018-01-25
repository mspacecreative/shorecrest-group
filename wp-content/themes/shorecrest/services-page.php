<?php
/* Template Name: Services Page */
get_header();
?>

	<div class="page-header-image">
		<div class="inner">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
	</div>
	
	<div class="inner side">
			<div class="content clearfix">
				<main>
					<div class="grid">
						<div class="grid-sizer"></div>
						<div class="gutter-sizer"></div>
						
						<div class="grid-item" style="background: #ffd8dd;">
							<div class="grid-inner">
							<span data-icon="&#xe0f5;" class="services-icon"></span>
							<h3>Contested Board Elections</h3>
							<p>Concerned that an activist has taken an interest in your company? Are you an investor considering launching an activist campaign? We work on the premise of delivering a multi-layered campaign roadmap that leads to voter turnout, persuading voters, and ultimately winning elections.</p>
							<p>We know that there is a continuous evolution in how security holders are identified, targeted and persuaded in contested elections. It’s with this understanding that we specialize in providing the most innovative tools, resources, and strategies to our clients. Every campaign we run is unique; we don’t ever rely on the same stale templates and strategies.</p>
							<p>One of the most unique aspects of this service is the cultivation of valuable and engaging discussions with security holders. Rather than the ineffective traditional “call centre” communication model, our team of experts look at security holder engagement in a modern framework. This means it’s based on continual discussions with your most influential security holders and these discussions become integral in your path to victory.</p>
							
							</div>
						</div>
						
						<div class="grid-item" style="background: #b9ebfc;">
							<div class="grid-inner">
							<span data-icon="&#x6c;" class="services-icon"></span>
							<h3>Vote Campaigns</h3>
							<p>We know what it takes to provide you with the highest possible positive vote return from Shareholders. We’ve worked on campaigns for some of the largest companies in Canada. Our approach is rooted in knowledge: we’re focused on working quickly to understand every aspect of your business in order to engage with, and motivate, your shareholders.</p>
							
							</div>
						</div>
						<div class="grid-item" style="background: #def7ff;">
							<div class="grid-inner">
							<span data-icon="&#xe02c;" class="services-icon"></span>
							<h3>Mergers &amp; Acquisitions</h3>
							<p>Whether they’re friendly or unsolicited, corporate reorganizations, regardless of size, represent significant transformational events. Collectively our founders have been involved in over a thousand M&amp;A transactions, all of which have resulted in a smooth post transaction transition.</p>
							
							</div>
						</div>
						<div class="grid-item" style="background: #ffd8dd;">
							<div class="grid-inner">
							<span data-icon="&#xe109;" class="services-icon"></span>
							<h3>Disbursement Services</h3>
							<p>Although we offer two main Disbursement Services, Depositary and Escrow, our versatility allows us to take care of all of your Disbursement requirements. We specialize in transactions that require an independent third party to hold funds, documents or assets until a transaction can be successfully completed. We offer a broad range of escrow capabilities to help in the efficient execution of transactions and can act as a neutral third party for individuals or issuers.</p>
							
							</div>
						</div>
						<div class="grid-item" style="background: #e2eff1;">
							<div class="grid-inner">
							<span data-icon="&#x2b;" class="services-icon"></span>
							<h3>Transfer Agency</h3>
							<p>We are the only shareholder communications firm in the country to also offer transfer agency services to Private Companies. We have streamlined protocols for transfer processing, including issuance of securities in electronic or certificate format. As a Transfer Agency, we also offer:</p>
							<ul>
								<li>Processing security Issuances and Cancellations from treasury.</li>
								<li>Maintain register of security holders.</li>
								<li>Security holder report and circular distribution.</li>
								<li>Security holder meeting services.</li>
								<li>Distribution disbursement.</li>
								<li>Agency services for subscription receipts, rights Issues and warrant issues.</li>
								<li>Security holder lists and analytical reports.</li>
								<li>Personalized certificate printing.</li>
							</ul>
							
							</div>
						</div>
						<div class="grid-item" style="background: #e2eff1;">
							<div class="grid-inner">
							<span data-icon="&#xe101;" class="services-icon"></span>
							<h3>Governance Advisory</h3>
							<p>Balancing the interests of the many stakeholders in an organization is the core of good corporate governance. We offer practical corporate governance review that leads to favourable voting results. Our expertise is informed by our extensive knowledge of the proxy advisory firms and institutional guidelines, and our services are customized to suit your organization and its shareholders.</p>
							
							</div>
						</div>
						<div class="grid-item" style="background: #def7ff;">
							<div class="grid-inner">
							<span data-icon="&#xe01b;" class="services-icon"></span>
							<h3>Speaking Engagements</h3>
							<p>The shareholder record keeping system in North America is complex. As the most experienced team in the industry, we believe that sharing our knowledge with professionals in the Canadian financial markets is important. During the span of a short presentation, we offer everything from the basics of shareholder record keeping to the complexities of contested transactions, and allow you to tailor the presentation according to the level of expertise in your organization. This is a complementary presentation and bookings are limited.</p>
							
							</div>
						</div>
					</div>
					
					<?php 
						if ( have_posts() ) {
						while ( have_posts() ) {the_post(); 
						the_content();
						} 
						}
					?>
				</main>
				<?php get_sidebar(); ?>
			</div>
		</div><!--END INNER-->
	
	<?php get_footer(); ?>