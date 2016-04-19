<?php
/**
 * The template for displaying all single posts.
 *
 * @package Pinnacle Exhibits
 */

get_header(); ?>

	<div id="primary" class="work-study content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<section class="page-top">
				<div class="page-top-content">
					<h1><?php the_title(); ?></h1>

					<h3><?php the_field('subtitle'); ?></h3>

					<?php the_content(); ?>
				</div>
			</section>

			<?php if( have_rows('work_study_section') ) : ?>

			    <?php while ( have_rows('work_study_section') ) : ?>

			        <?php the_row(); ?>

			        <?php if( get_row_layout() == 'section' ) : ?>

						<?php $mobile = wp_get_attachment_image_src(get_sub_field('image'), 'mobile-work-featured'); ?>
						<?php $tablet = wp_get_attachment_image_src(get_sub_field('image'), 'tablet-work-featured'); ?>
						<?php $desktop = wp_get_attachment_image_src(get_sub_field('image'), 'desktop-work-featured'); ?>
						<?php $retina = wp_get_attachment_image_src(get_sub_field('image'), 'retina-work-featured'); ?>

						<div class="work-section">

							<picture>
								<!--[if IE 9]><video style="display: none;"><![endif]-->
								<source srcset="<?php echo $mobile[0]; ?>" media="(max-width: 400px)">
								<source srcset="<?php echo $tablet[0]; ?>" media="(max-width: 801px)">
								<source srcset="<?php echo $desktop[0]; ?>" media="(max-width: 1024px)">
								<source srcset="<?php echo $retina[0]; ?>" media="(min-device-pixel-ratio: 2)">
								<!--[if IE 9]></video><![endif]-->
								<img srcset="<?php echo $desktop[0]; ?>">
							</picture>

							<?php if( get_sub_field( 'title_and_description_toggle' ) ) : ?>

								<div class="page-content">

									<div class="entry-title">
										<h4><?php the_sub_field('title'); ?></h4>
											<div class="entry-content">
											<p><?php the_sub_field('description'); ?></p>
										</div>
									</div>

								</div>

							<?php endif; ?>

						</div>

			        <?php endif; ?>

					<?php if( get_row_layout() == 'section_no_text' ) : ?>

						<?php $mobile = wp_get_attachment_image_src(get_sub_field('image'), 'mobile-work-featured'); ?>
						<?php $tablet = wp_get_attachment_image_src(get_sub_field('image'), 'tablet-work-featured'); ?>
						<?php $desktop = wp_get_attachment_image_src(get_sub_field('image'), 'desktop-work-featured'); ?>
						<?php $retina = wp_get_attachment_image_src(get_sub_field('image'), 'retina-work-featured'); ?>

						<div class="work-section-no-text">

							<picture>
								<!--[if IE 9]><video style="display: none;"><![endif]-->
								<source srcset="<?php echo $mobile[0]; ?>" media="(max-width: 400px)">
								<source srcset="<?php echo $tablet[0]; ?>" media="(max-width: 801px)">
								<source srcset="<?php echo $desktop[0]; ?>" media="(max-width: 1024px)">
								<source srcset="<?php echo $retina[0]; ?>" media="(min-device-pixel-ratio: 2)">
								<!--[if IE 9]></video><![endif]-->
								<img srcset="<?php echo $desktop[0]; ?>">
							</picture>

						</div>

			        <?php endif; ?>

			    <?php endwhile; ?>

			<?php endif; ?>

			<section class="page-content project-details-container">

				<div class="detail-column">
					<div class="project-detail">
						<?php if( get_field('client') ) : ?>
							<h6>Client:</h6>
							<h5>
								<?php if( get_field('client_link') ) : ?><a href="<?php the_field('client_link'); ?>" target="_blank"><?php endif; ?><?php the_field('client'); ?><?php if( get_field('client_link') ) : ?></a><?php endif; ?>
							</h5>
						<?php endif; ?>
					</div>
					<div class="project-detail">
						<?php if( get_field('project') ) : ?>
							<h6>Project:</h6>
							<h5><?php if( get_field('project_link') ) : ?><a href="<?php the_field('project_link'); ?>" target="_blank"><?php endif; ?><?php the_field('project'); ?><?php if( get_field('project_link') ) : ?></a><?php endif; ?></h5>
						<?php endif; ?>
					</div>
					<div class="project-detail">
						<?php if( get_field('date') ) : ?>
							<h6>Date:</h6>
							<h5><?php the_field('date'); ?></h5>
						<?php endif; ?>
					</div>
				</div>

				<div class="detail-column">
					<div class="project-detail industry-list">
						<h6>Tags:</h6>

						<h5><?php
							$terms_as_text = get_the_term_list( $post->ID, 'work-categories', '', ', ', '' ) ;
							echo strip_tags($terms_as_text);
						?></h5>
						<!-- <h5><?php the_terms($post->ID, 'work-categories'); ?></h5> -->
					</div>
					<div class="project-detail">
						<?php if( get_field('multiple_photographers') ) : ?>

							<?php if( have_rows('photo_credits') ) : ?>

								<h6>Credits:</h6>
							    <?php while ( have_rows('photo_credits') ) : ?>

							        <?php the_row(); ?>

							        <h5><?php if( get_sub_field('photo_credit_link') ) : ?><a href="<?php the_sub_field('photo_credit_link'); ?>" target="_blank"><?php endif; ?><?php the_sub_field('credit'); ?><?php if( get_sub_field('photo_credit_link') ) : ?></a><?php endif; ?></h5>

							    <?php endwhile; ?>

							<?php endif; ?>

						<?php endif; ?>
					</div>
					<div class="project-detail">
						<h6>Share:</h6>
						<?php echo sharing_display(); ?>
					</div>
				</div>

				<?php if( get_field('awards') || get_field('related_projects') ) : ?>
					<div class="detail-column">
				<?php endif; ?>

						<?php if( get_field('awards') ) : ?>
							<div class="project-detail">
								<h6>Award:</h6>

								<?php if( get_field('award_logo') ) : ?>
									<?php $mobile_award = wp_get_attachment_image_src(get_field('award_logo'), 'thumbnail'); ?>
									<?php $tablet_award = wp_get_attachment_image_src(get_field('award_logo'), 'thumbnail'); ?>
									<?php $desktop_award = wp_get_attachment_image_src(get_field('award_logo'), 'thumbnail'); ?>
									<?php $retina_award = wp_get_attachment_image_src(get_field('award_logo'), 'thumbnail'); ?>

									<picture>
										<!--[if IE 9]><video style="display: none;"><![endif]-->
										<source srcset="<?php echo $mobile_award[0]; ?>" media="(max-width: 400px)">
										<source srcset="<?php echo $tablet_award[0]; ?>" media="(max-width: 801px)">
										<source srcset="<?php echo $desktop_award[0]; ?>" media="(max-width: 1024px)">
										<source srcset="<?php echo $retina_award[0]; ?>" media="(min-device-pixel-ratio: 2)">
										<!--[if IE 9]></video><![endif]-->
										<img srcset="<?php echo $desktop_award[0]; ?>">
									</picture>
								<?php endif; ?>

								<h5><?php the_field('award_title'); ?></h5>
							</div>
						<?php endif; ?>

						<?php if( get_field('related_projects') ) : ?>
						<div class="project-detail">
							<h6>Related Projects:</h6>
							<?php if( have_rows('related_projects') ): ?>

					            <ul>

					            <?php while ( have_rows('related_projects') ) : the_row(); ?>

					                <li>

					                    <?php $post_object = get_sub_field('project'); ?>

					                    <?php if( $post_object ): ?>

					                        <?php $post = $post_object; setup_postdata( $post ); ?>

					                        <a href="<?php the_permalink(); ?>">
												<h5><?php the_title(); ?></h5>
												<h6><?php the_field('subtitle'); ?></h6>
											</a>

					                        <?php wp_reset_postdata(); ?>

					                    <?php endif; ?>

					                </li>

					            <?php endwhile; ?>

					            </ul>

						    <?php endif; ?>
						</div>
						<?php endif; ?>

				<?php if( get_field('awards') || get_field('related_projects') ) : ?>
					</div>
				<?php endif; ?>

		</section>

		<?php endwhile; // end of the loop. ?>

		<section class="page-content post-navigation">

			<?php
			?>

			<div class="mobile-navigation">

				<div class="nav-next">
					<?php
					if( get_next_post() ) :

					$next_post = get_next_post();
					$next_id = $next_post->ID ;
					$next_permalink = get_permalink($next_id);

					?>
						<a href="<?php echo $next_permalink; ?>">
							<svg viewBox="0 0 11 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
							    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
							        <path d="M-7.10542736e-15,0 L10.9238434,6.4099227 L-7.10542736e-15,12.8188383 L-7.10542736e-15,0 Z" id="Shape-Copy" fill="#7E7D7E" sketch:type="MSShapeGroup" transform="translate(5.461922, 6.409419) rotate(-180.000000) translate(-5.461922, -6.409419) "></path>
							    </g>
							</svg>
						</a>
					<?php else:  ?>
						&nbsp;
					<?php endif; ?>
				</div>

				<div class="nav-previous">
					<?php
					if( get_previous_post() ) :

					$prev_post = get_previous_post();
					$prev_id = $prev_post->ID ;
					$prev_permalink = get_permalink( $prev_id );

					?>
						<a href="<?php echo $prev_permalink; ?>">
							<svg viewBox="0 0 11 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
							    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
							        <path d="M-7.10542736e-15,0 L10.9238434,6.4099227 L-7.10542736e-15,12.8188383 L-7.10542736e-15,0 Z" id="Shape-Copy" fill="#7E7D7E" sketch:type="MSShapeGroup"></path>
							    </g>
							</svg>
						</a>
					<?php else:  ?>
						&nbsp;
					<?php endif; ?>
				</div>

			</div>

			<div class="desktop-navigation">

				<div class="nav-next">
					<?php
					if( get_next_post() ) :

					$next_post = get_next_post();
					$next_id = $next_post->ID ;
					$next_permalink = get_permalink($next_id);

					?>
						<a href="<?php echo $next_permalink; ?>">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 86 14" enable-background="new 0 0 86 14" xml:space="preserve">
							<g>
								<g>
									<path d="M21.316843,8.1481495v1.8760796h-0.6755123V5.0087595h1.4805355
										c0.3172951,0,0.5932293,0.0368028,0.8277187,0.1102338c0.2345753,0.073606,0.4287548,0.1780567,0.5828018,0.3133521
										c0.1539593,0.1352949,0.2688389,0.2986307,0.3447227,0.4900064c0.0757961,0.1913762,0.113739,0.4048338,0.113739,0.6405487
										c0,0.2332616-0.0408344,0.4467192-0.1225014,0.640286c-0.0816689,0.1938295-0.2011909,0.3604946-0.3587418,0.5005217
										c-0.157465,0.140027-0.3523464,0.2492094-0.5844688,0.3271966c-0.2322102,0.0783386-0.4999962,0.1172447-0.8032703,0.1172447
										H21.316843z M21.316843,7.6092467h0.8050232c0.1936531,0,0.3645248-0.0255866,0.5127888-0.0769358
										c0.1480885-0.0513492,0.2729568-0.1232028,0.3744278-0.2153854c0.1015587-0.0920076,0.177969-0.2024169,0.2293186-0.3306146
										c0.0512619-0.1282849,0.0769348-0.2695384,0.0769348-0.4234104c0-0.3196611-0.0985794-0.569396-0.2957382-0.7490301
										s-0.4964027-0.2695389-0.8977318-0.2695389H21.316843V7.6092467z"/>
									<path d="M25.5202789,7.9311862v2.0930429h-0.6755123V5.0087595h1.417532
										c0.3172951,0,0.5914783,0.0322466,0.8225498,0.0963888c0.2309818,0.0641427,0.4217453,0.1568513,0.5721989,0.2781262
										c0.1505432,0.1214499,0.2619152,0.267786,0.3342953,0.4393587C28.0636349,5.99403,28.099823,6.1861072,28.099823,6.3983383
										c0,0.1773558-0.0280399,0.3429694-0.0840321,0.4970164c-0.055994,0.1539598-0.1370487,0.2920589-0.2432518,0.4145603
										c-0.1062031,0.1225019-0.235714,0.227478-0.3884468,0.3151045c-0.1529083,0.087451-0.3261452,0.1522946-0.5198002,0.19418
										c0.0886784,0.0560808,0.1633358,0.1272335,0.2239723,0.2134581l1.4630108,1.9915714h-0.6019936
										c-0.1236401,0-0.2146854-0.0478439-0.2729568-0.1435318l-1.3020401-1.7919588
										c-0.0396938-0.0560808-0.0821934-0.0962138-0.127758-0.120749c-0.0454788-0.0245357-0.116106-0.0368032-0.2117062-0.0368032
										H25.5202789z M25.5202789,7.4376745h0.7140675c0.1959324,0,0.3691692-0.0238342,0.5197124-0.0716782
										c0.1504536-0.0478444,0.2764606-0.1154919,0.3780193-0.2029428c0.1014709-0.0876265,0.1778812-0.1918139,0.2292309-0.3132644
										c0.0512619-0.1212749,0.0770226-0.2555184,0.0770226-0.4025555c0-0.2986307-0.098053-0.5236549-0.2939854-0.6754241
										c-0.1960201-0.1515932-0.4900074-0.227478-0.8820477-0.227478h-0.7420197V7.4376745z"/>
									<path d="M32.3208733,5.0087595v0.5530977h-2.4115658v1.6658645h1.9530163V7.759789h-1.9530163v1.7115178h2.4149837
										l-0.003418,0.5529222h-3.0905819V5.0087595H32.3208733z"/>
									<path d="M32.6533279,5.0087595h0.5424957c0.0606346,0,0.1096191,0.0152469,0.1469498,0.0455656
										c0.0373268,0.0303187,0.0652809,0.0688744,0.0840302,0.1154914l1.4140282,3.5384402
										c0.0302315,0.0793896,0.0594978,0.1656141,0.0874519,0.2590237c0.028038,0.0932341,0.0548553,0.1901493,0.0805283,0.2903938
										c0.0209427-0.1002445,0.0448647-0.1971598,0.0717659-0.2903938c0.0267258-0.0934095,0.055378-0.1796341,0.0856972-0.2590237
										l1.4105225-3.5384402c0.014019-0.039607,0.0413589-0.0764098,0.082283-0.1102338
										c0.0407448-0.033824,0.0903397-0.0508232,0.1487007-0.0508232h0.5424957l-2.043972,5.0154696H34.6973L32.6533279,5.0087595z"/>
									<path d="M38.6906967,10.024229h-0.6790161V5.0087595h0.6790161V10.024229z"/>
									<path d="M44.6056519,7.5182905c0,0.375567-0.0594978,0.7204638-0.1784973,1.0341663
										c-0.1189957,0.3138781-0.2869759,0.5839424-0.5040245,0.8101931c-0.2169647,0.2264271-0.4777412,0.40203-0.7822418,0.5268097
										c-0.3045006,0.1249552-0.6410751,0.1873455-1.0097198,0.1873455c-0.3687286,0-0.704689-0.0623903-1.0080528-0.1873455
										c-0.3032722-0.1247797-0.5634384-0.3003826-0.7804871-0.5268097c-0.2169647-0.2262506-0.3849411-0.496315-0.5039406-0.8101931
										c-0.1189957-0.3137026-0.1784935-0.6585994-0.1784935-1.0341663c0-0.3757415,0.0594978-0.720376,0.1784935-1.0342536
										c0.1189995-0.3137026,0.2869759-0.5844679,0.5039406-0.8119459c0.2170486-0.227478,0.4772148-0.4043078,0.7804871-0.5303149
										c0.3033638-0.1260066,0.6393242-0.1889224,1.0080528-0.1889224c0.3686447,0,0.7052193,0.0629158,1.0097198,0.1889224
										C43.4453888,5.2677832,43.7061653,5.444613,43.92313,5.672091c0.2170486,0.227478,0.3850288,0.4982433,0.5040245,0.8119459
										C44.546154,6.7979145,44.6056519,7.142549,44.6056519,7.5182905z M43.9091949,7.5182905
										c0-0.308094-0.0420609-0.5845551-0.1260071-0.8295584c-0.0840302-0.2448282-0.2030296-0.4519768-0.356987-0.6210957
										c-0.1540489-0.1692944-0.3407784-0.2993317-0.5600204-0.3902879c-0.2194176-0.0909562-0.4643326-0.1365218-0.7350121-0.1365218
										c-0.2683983,0-0.5121727,0.0455656-0.7315025,0.1365218s-0.4065857,0.2209935-0.5617752,0.3902879
										c-0.1551857,0.1691189-0.2747078,0.3762674-0.3587418,0.6210957c-0.084034,0.2450032-0.1260071,0.5214643-0.1260071,0.8295584
										c0,0.307919,0.0419731,0.5839424,0.1260071,0.8277187s0.2035561,0.4503994,0.3587418,0.6195183
										c0.1551895,0.1691189,0.3424454,0.2986307,0.5617752,0.3885355c0.2193298,0.0897293,0.4631042,0.134594,0.7315025,0.134594
										c0.2706795,0,0.5155945-0.0448647,0.7350121-0.134594c0.2192421-0.0899048,0.4059715-0.2194166,0.5600204-0.3885355
										c0.1539574-0.1691189,0.2729568-0.375742,0.356987-0.6195183C43.8671341,8.1022329,43.9091949,7.8262095,43.9091949,7.5182905z"/>
									<path d="M47.5106392,9.4851522c0.2076759,0,0.3930931-0.0348759,0.556427-0.1049767
										c0.1633377-0.0699253,0.301609-0.1678925,0.4148254-0.2938986c0.1132126-0.1260071,0.1994362-0.2765493,0.2590218-0.4516268
										c0.0594101-0.174902,0.0892029-0.3675051,0.0892029-0.5774574V5.0087595h0.675602v3.0484333
										c0,0.2893419-0.046093,0.5576544-0.1382751,0.8051109c-0.0921822,0.247282-0.2239723,0.4614401-0.395546,0.6421261
										c-0.1715736,0.1808605-0.3810005,0.3226404-0.6282806,0.4253387c-0.2472839,0.1025229-0.5250587,0.154047-0.8329773,0.154047
										s-0.5856934-0.0515242-0.8329773-0.154047c-0.2474556-0.1026983-0.4574089-0.2444782-0.6300316-0.4253387
										c-0.1726227-0.180686-0.3051147-0.3948441-0.3972969-0.6421261c-0.092186-0.2474566-0.1382751-0.515769-0.1382751-0.8051109
										V5.0087595h0.6755981V8.053688c0,0.2101278,0.0297928,0.4025555,0.0892029,0.5774574
										c0.0595856,0.1750774,0.145813,0.3256197,0.2590256,0.4516268c0.1132126,0.1260061,0.2520142,0.2244978,0.4165764,0.2956505
										C47.116848,9.4497509,47.3029671,9.4851522,47.5106392,9.4851522z"/>
									<path d="M53.2890739,5.79284c-0.0210304,0.0350509-0.0438156,0.0611634-0.0683517,0.0786886
										c-0.0243568,0.0175252-0.0541496,0.026288-0.0892029,0.026288c-0.039608,0-0.0863991-0.0198035-0.1400261-0.059586
										c-0.053627-0.039607-0.1207504-0.0832453-0.2011909-0.1310892s-0.1773529-0.0916572-0.2905693-0.1312642
										c-0.1132126-0.0397825-0.2502594-0.059586-0.4111404-0.059586c-0.1517715,0-0.2853127,0.020505-0.4008026,0.0613384
										c-0.1154938,0.040834-0.2124062,0.0962138-0.2905693,0.1661396c-0.0781631,0.0701013-0.1370506,0.1522946-0.1766548,0.2467561
										c-0.0397835,0.094461-0.0595856,0.1966333-0.0595856,0.3063416c0,0.140027,0.034523,0.2560444,0.1033974,0.348227
										c0.0686989,0.0921831,0.1596565,0.1708717,0.2728691,0.2362409s0.241497,0.1219759,0.3850288,0.1695571
										c0.1435318,0.0480189,0.2905693,0.0976157,0.440937,0.1487894c0.1505432,0.0513492,0.2975807,0.1091824,0.4411125,0.1733251
										c0.1435318,0.0641422,0.2718163,0.1452842,0.3850288,0.2432508c0.1130371,0.0979662,0.2041702,0.2181892,0.2728691,0.3604946
										c0.0688744,0.1423049,0.1033974,0.3173823,0.1033974,0.5250573c0,0.2192411-0.0375023,0.4251633-0.1121597,0.6175909
										c-0.0746574,0.1926022-0.1836662,0.3599682-0.327198,0.5022736c-0.1435318,0.1424809-0.3196602,0.254467-0.5283852,0.3361349
										c-0.2089043,0.0814924-0.4463692,0.1225014-0.7124023,0.1225014c-0.3266716,0-0.6228485-0.0590601-0.8888817-0.1768293
										c-0.266037-0.1177702-0.493515-0.2770748-0.6826096-0.4777393l0.196106-0.3219395
										c0.0185776-0.0257616,0.0413589-0.0473175,0.0681725-0.0648432s0.0566063-0.026288,0.0892029-0.026288
										c0.0303192,0,0.064846,0.0122681,0.1034012,0.0368032c0.0383797,0.0245352,0.0821915,0.0553799,0.1312637,0.0927086
										c0.0488968,0.0373287,0.1049767,0.0781631,0.1678925,0.1225014c0.0630913,0.0443392,0.1347694,0.0851736,0.21521,0.1225023
										c0.080616,0.0373287,0.1721001,0.0683479,0.2747955,0.0927086c0.1026993,0.0245352,0.2181892,0.0368032,0.3464775,0.0368032
										c0.1610565,0,0.3045883-0.0220823,0.4305954-0.0664215c0.1260071-0.0443382,0.2327347-0.1067286,0.3201866-0.1873446
										c0.0874481-0.0804415,0.1545715-0.1766548,0.2011871-0.2886419c0.0467949-0.1119862,0.0701027-0.2369413,0.0701027-0.3745146
										c0-0.1517687-0.034523-0.2760229-0.1032219-0.3727627c-0.0688744-0.0969143-0.1593056-0.1778812-0.2712936-0.2432508
										c-0.1119843-0.0653691-0.2404442-0.120749-0.3850288-0.1663146c-0.1447601-0.0453906-0.2916222-0.0921831-0.440937-0.140027
										c-0.1494904-0.0476685-0.2963524-0.1032238-0.4411125-0.1661396c-0.1445808-0.0630908-0.2728653-0.1447587-0.3848534-0.2450032
										c-0.1121597-0.10042-0.2025909-0.2257257-0.2712898-0.3761802c-0.0688744-0.1505418-0.1032257-0.3366604-0.1032257-0.5583549
										c0-0.1771808,0.0343513-0.348753,0.1032257-0.5143666c0.0686989-0.1657891,0.169117-0.3126512,0.3009071-0.4411111
										c0.1317902-0.1282854,0.294075-0.2309833,0.4865036-0.307919c0.1926003-0.0771112,0.4135933-0.1154919,0.6633301-0.1154919
										c0.2798805,0,0.5348701,0.0443392,0.7646294,0.1330171c0.2299309,0.0886779,0.4323463,0.2169628,0.6072502,0.3850303
										L53.2890739,5.79284z"/>
									<path d="M56.9884834,8.1481495v1.8760796h-0.6754265V5.0087595h1.4805374
										c0.3172073,0,0.5932274,0.0368028,0.8277168,0.1102338c0.2344894,0.073606,0.428669,0.1780567,0.5827141,0.3133521
										c0.1540489,0.1352949,0.2688408,0.2986307,0.3447227,0.4900064c0.0758858,0.1913762,0.113739,0.4048338,0.113739,0.6405487
										c0,0.2332616-0.0408325,0.4467192-0.1225014,0.640286c-0.0816689,0.1938295-0.2011909,0.3604946-0.3587418,0.5005217
										s-0.3522568,0.2492094-0.5844688,0.3271966c-0.2322083,0.0783386-0.4999962,0.1172447-0.8031807,0.1172447H56.9884834z
										 M56.9884834,7.6092467h0.8051109c0.1936531,0,0.3645248-0.0255866,0.5126114-0.0769358
										c0.1482658-0.0513492,0.2730446-0.1232028,0.3745155-0.2153854c0.1014709-0.0920076,0.1778831-0.2024169,0.2292328-0.3306146
										c0.0513496-0.1282849,0.0771103-0.2695384,0.0771103-0.4234104c0-0.3196611-0.0986671-0.569396-0.295826-0.7490301
										s-0.4964905-0.2695389-0.897644-0.2695389h-0.8051109V7.6092467z"/>
									<path d="M61.1919174,7.9311862v2.0930429h-0.6754227V5.0087595h1.4174423
										c0.3173828,0,0.5914803,0.0322466,0.822464,0.0963888c0.2309799,0.0641427,0.421833,0.1568513,0.5723724,0.2781262
										c0.1503677,0.1214499,0.2618294,0.267786,0.3342094,0.4393587c0.0722046,0.1713967,0.1084785,0.3634739,0.1084785,0.5757051
										c0,0.1773558-0.028038,0.3429694-0.0839424,0.4970164c-0.0560837,0.1539598-0.1372261,0.2920589-0.2432518,0.4145603
										c-0.106205,0.1225019-0.235714,0.227478-0.3885345,0.3151045c-0.1528206,0.087451-0.3261452,0.1522946-0.5198021,0.19418
										c0.0886803,0.0560808,0.1633377,0.1272335,0.2239723,0.2134581l1.4630127,1.9915714h-0.6019936
										c-0.1237297,0-0.2146835-0.0478439-0.2730446-0.1435318l-1.3019524-1.7919588
										c-0.039608-0.0560808-0.0821953-0.0962138-0.127758-0.120749c-0.0453911-0.0245357-0.1160202-0.0368032-0.2117081-0.0368032
										H61.1919174z M61.1919174,7.4376745h0.7139816c0.196106,0,0.3692551-0.0238342,0.5197983-0.0716782
										c0.1505432-0.0478444,0.2765503-0.1154919,0.3780212-0.2029428c0.1014709-0.0876265,0.1778793-0.1918139,0.229229-0.3132644
										c0.0513496-0.1212749,0.0769386-0.2555184,0.0769386-0.4025555c0-0.2986307-0.0979691-0.5236549-0.2938995-0.6754241
										c-0.1961098-0.1515932-0.4900093-0.227478-0.8820496-0.227478h-0.7420197V7.4376745z"/>
									<path d="M69.4799728,7.5182905c0,0.375567-0.0595856,0.7204638-0.1785889,1.0341663
										c-0.1189957,0.3138781-0.2870636,0.5839424-0.5040207,0.8101931c-0.2169647,0.2264271-0.4777451,0.40203-0.7821579,0.5268097
										c-0.3045883,0.1249552-0.6412506,0.1873455-1.0098038,0.1873455c-0.3687286,0-0.704689-0.0623903-1.0080566-0.1873455
										c-0.30336-0.1247797-0.5634308-0.3003826-0.7803955-0.5268097c-0.2171402-0.2262506-0.3850327-0.496315-0.5040283-0.8101931
										c-0.1189957-0.3137026-0.1785812-0.6585994-0.1785812-1.0341663c0-0.3757415,0.0595856-0.720376,0.1785812-1.0342536
										c0.1189957-0.3137026,0.2868881-0.5844679,0.5040283-0.8119459c0.2169647-0.227478,0.4770355-0.4043078,0.7803955-0.5303149
										c0.3033676-0.1260066,0.639328-0.1889224,1.0080566-0.1889224c0.3685532,0,0.7052155,0.0629158,1.0098038,0.1889224
										c0.3044128,0.1260071,0.5651932,0.3028369,0.7821579,0.5303149c0.2169571,0.227478,0.385025,0.4982433,0.5040207,0.8119459
										C69.4203873,6.7979145,69.4799728,7.142549,69.4799728,7.5182905z M68.7833405,7.5182905
										c0-0.308094-0.0418854-0.5845551-0.1260071-0.8295584c-0.0839462-0.2448282-0.2029419-0.4519768-0.356987-0.6210957
										c-0.1538773-0.1692944-0.3406906-0.2993317-0.5599365-0.3902879c-0.2194138-0.0909562-0.4644165-0.1365218-0.7350082-0.1365218
										c-0.2683105,0-0.5122604,0.0455656-0.7315063,0.1365218c-0.2194138,0.0909562-0.4065857,0.2209935-0.5616837,0.3902879
										c-0.1552734,0.1691189-0.2747955,0.3762674-0.3587418,0.6210957c-0.0841217,0.2450032-0.1260071,0.5214643-0.1260071,0.8295584
										c0,0.307919,0.0418854,0.5839424,0.1260071,0.8277187c0.0839462,0.2437763,0.2034683,0.4503994,0.3587418,0.6195183
										c0.155098,0.1691189,0.3422699,0.2986307,0.5616837,0.3885355c0.2192459,0.0897293,0.4631958,0.134594,0.7315063,0.134594
										c0.2705917,0,0.5155945-0.0448647,0.7350082-0.134594c0.2192459-0.0899048,0.4060593-0.2194166,0.5599365-0.3885355
										c0.1540451-0.1691189,0.2730408-0.375742,0.356987-0.6195183C68.7414551,8.1022329,68.7833405,7.8262095,68.7833405,7.5182905z"/>
									<path d="M71.9263229,8.2916813c0,0.2800531-0.0343475,0.5308399-0.1032257,0.7525349
										c-0.0688705,0.2216949-0.1703415,0.4090395-0.3044128,0.5616846c-0.1342392,0.1529961-0.2993317,0.2702398-0.4952621,0.3519077
										c-0.1959305,0.0814924-0.4211349,0.1225014-0.6755981,0.1225014c-0.2309875,0-0.4666977-0.0327721-0.7069702-0.0981407
										l0.0350494-0.3988752c0.0047302-0.0397825,0.0192795-0.0718536,0.0438156-0.0963898
										c0.0243607-0.0243597,0.0623856-0.0366278,0.113739-0.0366278c0.0418854,0,0.0972595,0.0105152,0.1661377,0.0313702
										c0.0688705,0.0210304,0.1615829,0.0315456,0.2782974,0.0315456c0.1540527,0,0.291626-0.0233088,0.4130707-0.0699253
										c0.1212769-0.0466175,0.2227478-0.1189966,0.3044205-0.2169628c0.081665-0.0981417,0.1440506-0.2234478,0.1873398-0.3762674
										c0.0431137-0.1528206,0.0646667-0.334383,0.0646667-0.5443354V5.0087595h0.6789322V8.2916813z"/>
									<path d="M76.2452545,5.0087595v0.5530977h-2.4114838v1.6658645h1.9530182V7.759789h-1.9530182v1.7115178h2.4149857
										l-0.0035019,0.5529222h-3.0904083V5.0087595H76.2452545z"/>
									<path d="M80.6132507,8.9883108c0.0373306,0,0.0699234,0.0150719,0.0979691,0.0453901l0.2695312,0.2905693
										c-0.2053909,0.2379932-0.4544296,0.4234104-0.7472763,0.556427s-0.6470337,0.1996126-1.0622025,0.1996126
										c-0.3594437,0-0.6861191-0.0625648-0.9800186-0.1873446c-0.2940674-0.1247797-0.5448608-0.2998581-0.752533-0.5250578
										c-0.2076721-0.2250242-0.3687286-0.4952641-0.4829941-0.8101931c-0.1144409-0.314929-0.1715698-0.6614037-0.1715698-1.0394239
										c0-0.3780198,0.0595856-0.7244067,0.1785812-1.0395112c0.1189957-0.314929,0.2863617-0.5856948,0.5022736-0.8119459
										c0.2157364-0.2262511,0.4742355-0.4018545,0.7751389-0.5268097c0.3010864-0.1247797,0.6335373-0.18717,0.9975433-0.18717
										c0.356987,0,0.6720886,0.0571327,0.9449615,0.1713972c0.2730408,0.11444,0.5133133,0.2695389,0.7209854,0.4656467
										l-0.2239685,0.3114238c-0.0140228,0.0233088-0.032074,0.0425863-0.0541534,0.0576582
										c-0.0222549,0.0152469-0.0520477,0.0227828-0.0893784,0.0227828c-0.0418854,0-0.0932388-0.0227828-0.1538773-0.0681734
										c-0.0608063-0.0455656-0.1400223-0.0962133-0.2379913-0.1522942c-0.0981369-0.0559058-0.2206421-0.106729-0.3675003-0.1522946
										c-0.1470413-0.0453906-0.3279037-0.0681734-0.5425873-0.0681734c-0.2590179,0-0.4957886,0.0448647-0.7104721,0.1347694
										c-0.2146835,0.0899043-0.3995743,0.2199421-0.5548477,0.3902874c-0.155098,0.1703458-0.2758484,0.3780203-0.3622513,0.6228485
										c-0.0862198,0.2450032-0.1293335,0.5214643-0.1293335,0.8295584c0,0.3126512,0.0448608,0.5914783,0.1345901,0.8364811
										c0.0899048,0.2450037,0.21241,0.4519768,0.3675079,0.6212711c0.1552734,0.1691189,0.3384094,0.2981052,0.5495911,0.3866072
										c0.2111816,0.0888538,0.4391861,0.1330175,0.6841888,0.1330175c0.1493149,0,0.2840805-0.0087633,0.4043045-0.0261126
										c0.1200485-0.0175257,0.2309875-0.0450401,0.3324585-0.0823689s0.196106-0.0844717,0.2835541-0.1417799
										c0.0874557-0.0571318,0.1743774-0.1253052,0.2607803-0.2046947C80.5338593,9.005661,80.5734711,8.9883108,80.6132507,8.9883108z"
										/>
									<path d="M85.1598282,5.0087595v0.5706229h-1.6240616v4.4448466h-0.6754227V5.5793824h-1.6275787V5.0087595
										H85.1598282z"/>
								</g>
								<polygon points="11.7641687,13.4095001 0.840169,6.999527 11.7641687,0.5905 	"/>
							</g>
							</svg>
						</a>
					<?php else:  ?>
						&nbsp;
					<?php endif; ?>
				</div>

				<div class="nav-previous">
					<?php
					if( get_previous_post() ) :

						$prev_post = get_previous_post();
						$prev_id = $prev_post->ID ;
						$prev_permalink = get_permalink( $prev_id );

					?>
						<a href="<?php echo $prev_permalink; ?>">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 70 14" enable-background="new 0 0 70 14" xml:space="preserve">
							<g>
								<g>
									<path d="M2.0269949,4.6458726c0.021003,0.0035663,0.0396285,0.0094118,0.0559752,0.0175357
										C2.0992672,4.6716309,2.1156633,4.6832223,2.13201,4.69838c0.0162971,0.0152569,0.0337832,0.0344768,0.052458,0.0577583
										l2.9014857,3.7764792C5.0812478,8.4719858,5.0771861,8.4130383,5.0737185,8.355875
										c-0.0035172-0.0571642-0.0052509-0.111455-0.0052509-0.1627731V4.6406217h0.5949697v5.0154576H5.3239713
										c-0.0537457,0-0.0986247-0.0093126-0.1347857-0.0280371C5.1530247,9.609417,5.1174583,9.5779133,5.0824366,9.5336285
										L2.1810005,5.7571492c0.0046563,0.0583529,0.0081239,0.1155167,0.0105016,0.1714916
										c0.0022786,0.055975,0.0034676,0.1072936,0.0034676,0.1539559v3.5734825H1.6V4.6406217h0.3500171
										C1.9802831,4.6406217,2.0059919,4.642405,2.0269949,4.6458726z"/>
									<path d="M10.0348358,4.6406217V5.193635H7.6233544v1.6659741h1.9529824v0.5320101H7.6233544v1.7114472h2.4149985
										l-0.0035172,0.5530128H6.9443731V4.6406217H10.0348358z"/>
									<path d="M12.1417742,7.0801406l-1.6554728-2.4395189h0.6755142
										c0.0489902,0,0.0851517,0.0082231,0.1084824,0.0245695c0.0232821,0.0163469,0.0442848,0.0396285,0.0630093,0.0699439
										l1.3089724,2.0089574c0.0162973-0.0489411,0.0408173-0.1026373,0.0735111-0.1609902l1.2354622-1.8339977
										c0.0186749-0.0325947,0.0408163-0.0588484,0.0665255-0.0786624c0.0256596-0.019814,0.055975-0.0298204,0.0909967-0.0298204
										h0.6474771L13.0937948,7.048636l1.718482,2.6074433h-0.6719971c-0.0513687,0-0.0915909-0.0133743-0.1207676-0.0402222
										c-0.0291767-0.0268488-0.0531015-0.0565691-0.0717268-0.089263l-1.3439941-2.1034708
										c-0.0163469,0.0489411-0.0373497,0.0957026-0.0630093,0.139987l-1.3089724,1.9634838
										c-0.0233812,0.0326939-0.0484457,0.0624142-0.0752449,0.089263c-0.0268478,0.0268478-0.0636034,0.0402222-0.1102657,0.0402222
										h-0.6299906L12.1417742,7.0801406z"/>
									<path d="M18.9210892,4.6406217v0.5705485H17.297121v4.4449091h-0.6754646V5.2111702h-1.6274862V4.6406217
										H18.9210892z"/>
									<path d="M21.9205551,7.7800756v1.8760037h-0.6755142V4.6406217h1.4804649
										c0.3173237,0,0.593235,0.0367556,0.8277359,0.1102657c0.2345009,0.0735106,0.4287777,0.1779313,0.5827827,0.313262
										c0.1539574,0.1353307,0.2688789,0.2986984,0.344717,0.4900041c0.0757904,0.1913056,0.1137333,0.4048033,0.1137333,0.6404924
										c0,0.2333117-0.0408173,0.4468093-0.1224518,0.6404924c-0.0817318,0.1936836-0.2012615,0.3605189-0.3587837,0.5005059
										c-0.1574726,0.139987-0.3523445,0.2490635-0.5844688,0.3272305c-0.2322216,0.078167-0.4999599,0.1172009-0.8032646,0.1172009
										H21.9205551z M21.9205551,7.2411304h0.8049507c0.1936836,0,0.3645802-0.0256591,0.5127392-0.0769777
										c0.1481609-0.0513186,0.2730408-0.1230459,0.3745384-0.215281c0.1014977-0.0921359,0.1778812-0.2024016,0.2292004-0.3307972
										c0.0513172-0.1282969,0.0770264-0.2694726,0.0770264-0.4234285c0-0.3197012-0.0986252-0.5693598-0.2957249-0.7489748
										c-0.1972008-0.1797147-0.4964943-0.2695718-0.8977795-0.2695718h-0.8049507V7.2411304z"/>
									<path d="M26.1239796,7.5631104v2.0929689h-0.6755142V4.6406217h1.4175549
										c0.3172245,0,0.5914516,0.0320992,0.822485,0.0962968c0.230835,0.064198,0.4216461,0.1569281,0.5722332,0.2781906
										c0.1503887,0.1213617,0.2617455,0.2677884,0.3342648,0.43928c0.0721226,0.1714916,0.1083832,0.3634906,0.1083832,0.5757003
										c0,0.1773367-0.0279388,0.3429832-0.084013,0.4970379c-0.0558758,0.1539559-0.1371136,0.2922587-0.2431183,0.4147105
										c-0.106205,0.1225505-0.2357883,0.2275653-0.3885555,0.3150449s-0.3261414,0.1522717-0.5197258,0.1941791
										c0.0885696,0.0560737,0.163269,0.1272068,0.2238998,0.2134972l1.4630775,1.9915204h-0.6019535
										c-0.1238384,0-0.2147865-0.0477514-0.2730408-0.1434536L26.9779701,7.720633
										c-0.039629-0.0560741-0.0822296-0.0962968-0.1278019-0.1207671c-0.0453739-0.0244708-0.1161118-0.0367556-0.211813-0.0367556
										H26.1239796z M26.1239796,7.0696392h0.7139034c0.1959629,0,0.3693371-0.0238762,0.5197258-0.0717273
										c0.1505871-0.0478516,0.2766056-0.1155167,0.3780537-0.2030954c0.1014481-0.0874791,0.1779308-0.1918006,0.22925-0.3131623
										s0.0770779-0.2555037,0.0770779-0.4025249c0-0.2986984-0.0980816-0.523787-0.2940426-0.6754642
										c-0.1959629-0.1516776-0.4900036-0.2275658-0.8819275-0.2275658h-0.7420406V7.0696392z"/>
									<path d="M34.4118423,7.1500845c0,0.3756762-0.0595398,0.7204428-0.178524,1.0342989
										s-0.2870064,0.5839233-0.5039711,0.8102007c-0.2169647,0.2263765-0.4777222,0.4019299-0.7822647,0.5267591
										c-0.3044434,0.1248293-0.6410866,0.1872444-1.0097294,0.1872444s-0.7046909-0.0624151-1.007946-0.1872444
										c-0.3033543-0.1248293-0.5635147-0.3003826-0.7804794-0.5267591c-0.2170639-0.2262774-0.3849888-0.4963446-0.503973-0.8102007
										c-0.1190834-0.3138561-0.1785259-0.6586227-0.1785259-1.0342989c0-0.3755774,0.0594425-0.7203436,0.1785259-1.0341997
										c0.1189842-0.3137574,0.2869091-0.5845175,0.503973-0.8119841c0.2169647-0.2274666,0.4771252-0.4043078,0.7804794-0.5302267
										c0.3032551-0.126018,0.6393032-0.1890273,1.007946-0.1890273s0.705286,0.0630093,1.0097294,0.1890273
										c0.3045425,0.1259189,0.5653,0.3027601,0.7822647,0.5302267s0.3849869,0.4982266,0.5039711,0.8119841
										C34.3523026,6.4297409,34.4118423,6.774507,34.4118423,7.1500845z M33.7153778,7.1500845
										c0-0.3080111-0.0420074-0.5844183-0.1260185-0.8294206c-0.0840111-0.2450018-0.2029953-0.4520597-0.3569527-0.6212726
										c-0.1540565-0.1691141-0.3407059-0.299293-0.5600471-0.3902402c-0.2193413-0.0910459-0.464344-0.1365194-0.7350063-0.1365194
										c-0.2682838,0-0.5121956,0.0454736-0.7314396,0.1365194c-0.2193432,0.0909472-0.4065857,0.2211261-0.5617313,0.3902402
										c-0.1552429,0.1692128-0.2748222,0.3762708-0.3587341,0.6212726c-0.084013,0.2450023-0.1260185,0.5214095-0.1260185,0.8294206
										s0.0420055,0.584022,0.1260185,0.8277364c0.0839119,0.2439122,0.2034912,0.450376,0.3587341,0.6194892
										c0.1551456,0.1692133,0.3423882,0.2986984,0.5617313,0.3885555c0.219244,0.0898571,0.4631557,0.134737,0.7314396,0.134737
										c0.2706623,0,0.5156651-0.0448799,0.7350063-0.134737s0.4059906-0.2193422,0.5600471-0.3885555
										c0.1539574-0.1691132,0.2729416-0.375577,0.3569527-0.6194892C33.6733704,7.7341065,33.7153778,7.4580956,33.7153778,7.1500845z"
										/>
									<path d="M36.8582001,7.9236293c0,0.2799735-0.0344772,0.5308213-0.1032333,0.7524419
										c-0.0688553,0.2217207-0.1704025,0.4089642-0.3045425,0.5617313c-0.1341438,0.1528664-0.2991943,0.2701664-0.4952545,0.3518009
										c-0.1959648,0.0816345-0.4211502,0.1224508-0.6754646,0.1224508c-0.2310333,0-0.4667244-0.0326929-0.7069702-0.0979805
										l0.0349731-0.3989582c0.0046539-0.0397272,0.0192184-0.071826,0.0437889-0.0962963
										c0.0244713-0.0244713,0.0624123-0.0367556,0.1137314-0.0367556c0.0420074,0,0.0973892,0.0105019,0.1662407,0.0315046
										c0.0687561,0.0210028,0.1615868,0.0315046,0.2782898,0.0315046c0.1539574,0,0.2915649-0.0232821,0.4129295-0.0699444
										c0.1213608-0.0466623,0.2228088-0.1190825,0.3045425-0.2170639c0.0816345-0.0979815,0.1440506-0.2234049,0.1872444-0.3761721
										c0.0430946-0.1528664,0.0646935-0.3342648,0.0646935-0.5442944V4.6406217h0.6790314V7.9236293z"/>
									<path d="M41.1769905,4.6406217V5.193635h-2.4113808v1.6659741h1.95298v0.5320101h-1.95298v1.7114472h2.4149475
										l-0.0035667,0.5530128h-3.0904121V4.6406217H41.1769905z"/>
									<path d="M45.5450211,8.6200962c0.0372505,0,0.0699463,0.0151587,0.0979805,0.0454741l0.269474,0.2904758
										c-0.2053757,0.2380667-0.4544373,0.4235268-0.7471924,0.5565796c-0.2928543,0.1329527-0.6469307,0.1994286-1.0622368,0.1994286
										c-0.3593292,0-0.6860657-0.0624142-0.9800072-0.1872435c-0.2940445-0.1247301-0.5448914-0.2997885-0.7525444-0.5249758
										c-0.2076492-0.2251883-0.3686409-0.4952545-0.4829674-0.8102007c-0.1143303-0.3150454-0.1714935-0.6614957-0.1714935-1.0395498
										c0-0.377955,0.0595436-0.7245045,0.1785278-1.0394506c0.1189842-0.3150449,0.2864113-0.5856071,0.5021896-0.8119841
										c0.2158737-0.2262774,0.4742508-0.4019299,0.7753258-0.5267591c0.3009796-0.1248293,0.633461-0.1872439,0.9974442-0.1872439
										c0.3569527,0,0.6719971,0.0571637,0.9449387,0.1714916c0.2730408,0.1143274,0.5133858,0.2694726,0.7210388,0.4655337
										l-0.223999,0.3114781c-0.0139694,0.0233808-0.0321007,0.0426006-0.0542908,0.0577583
										c-0.0221939,0.0151582-0.0519142,0.0226874-0.0891647,0.0226874c-0.0420074,0-0.0934258-0.0226874-0.1540565-0.0682597
										c-0.06073-0.0454736-0.1399879-0.0961981-0.2379684-0.152173c-0.0979805-0.0560737-0.2205315-0.1067982-0.3675499-0.1522717
										c-0.1469231-0.0454736-0.3278275-0.0682597-0.5424156-0.0682597c-0.2590675,0-0.4958458,0.0449781-0.7105331,0.1347365
										c-0.2146873,0.0898571-0.3995514,0.2199368-0.5546989,0.3902397c-0.1552429,0.1704016-0.2760086,0.3780541-0.3623009,0.6230559
										c-0.0862923,0.2450023-0.1294861,0.5214095-0.1294861,0.8294206c0,0.3127666,0.0448799,0.5915518,0.1347351,0.8365536
										c0.089859,0.2450018,0.2123108,0.4520597,0.3675537,0.6211739c0.1551437,0.1692123,0.3382263,0.2981043,0.5494461,0.3867722
										c0.2111206,0.0886688,0.4392815,0.1329527,0.6842842,0.1329527c0.1492996,0,0.2840347-0.0087175,0.4042091-0.0261545
										c0.1201706-0.0175352,0.2310295-0.0449781,0.3324814-0.0823278c0.1015472-0.0372505,0.1960602-0.084507,0.2835388-0.1416712
										c0.0874786-0.0571632,0.174366-0.1254234,0.2607536-0.2047787C45.4656639,8.6376324,45.5052948,8.6200962,45.5450211,8.6200962z"
										/>
									<path d="M50.0914803,4.6406217v0.5705485h-1.62397v4.4449091h-0.6755638V5.2111702h-1.6274338V4.6406217
										H50.0914803z"/>
								</g>
								<polygon points="57.4761581,0.5905808 68.4000015,7.0005035 57.4761581,13.4094191 	"/>
							</g>
							</svg>
						</a>
					<?php else:  ?>
						&nbsp;
					<?php endif; ?>
				</div>

			</div>

		</section>

	</div><!-- #primary -->

<?php get_footer(); ?>
