<?php
/*
*
* Template Name: home Page 
*
*/

get_header();
?>
<style>

	.swiper-container {
		visibility: visible !important;
	}

    .hidden-letter {
        opacity: 0;
        display: inline-block;
    }
	.rotate-container {
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.rotate-container img {
		animation: rotateAnimation 100s linear infinite;
	}

	.leftrightcard{
		font-weight: 700;
	}

	@keyframes rotateAnimation {
		0% {
			transform: rotate(0deg);
		}
		100% {
			transform: rotate(360deg);
		}
	}

	#animated-paragraph span {
		padding-left: 2.5px;
		padding-right: 2.5px;
	}

</style>

<main id="main" class="overflow-x-hidden">
	<div id="primary">
		<section  class="relative h-[92dvh] lg:h-[100vh] lg:mt-[90px] overflow-hidden">
			
			<!-- Video Background -->
			<video autoplay loop muted playsinline class="absolute top-0 videobanner left-0 w-full h-full object-cover lg:aspect-video z-[-1]">
				<source src="<?php echo esc_url(get_template_directory_uri() . '/assets/churchvideoplayback.mp4'); ?>" type="video/mp4">
				Your browser does not support the video tag.
			</video>

			<!-- Overlay -->
			<div class="absolute top-0 left-0 w-full h-full bg-black opacity-85"></div>

			<div class="container mx-auto px-5 lg:px-24 py-[20px] flex justify-center items-center h-full relative z-50 !flex-col text-center">

				<!-- Heading Animation -->
				<?php $home_banner = get_field('home_banner');

				if ($home_banner): ?>
					<h1 id="animated-heading" class="mb-4 tex-3xl lg:text-6xl text-white lg:w-[70%] opacity-0">
						<?php echo esc_html($home_banner['home_banner_first_heading']); ?>
						<span class="text-xl block mt-2"><?php echo esc_html($home_banner['home_banner_sub_small_heading']); ?></span>
					</h1>
				<?php endif; ?>


				<!-- Paragraph Animation -->
				<p id="animated-paragraph" class="text-white text-base lg:text-xl lg:w-[70%]">
					We pray together thus we serve one another, it is faith, hope and charity that unites us in christ. <br>
					United in christ, serving with faith, hope and charity
				</p>

			</div>
		</section>

		<div class="relative">
			<img class="absolute top-[4%] lg:top-[-10%] scale-[1.9] lg:scale-[1]" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/properring.png'); ?>" alt="ring image">

			<section class="my-[90px] z-10 relative">
				<div class="container mx-auto px-5 lg:px-24">
					<div class="grid lg:grid-cols-2 gap-10 items-start">
						<!-- Left Image -->
						<div id="left-item-1">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/fatheruzhunaloor.jpeg'); ?>"  alt="Nature Image" class="w-full rounded-lg shadow-lg">
						</div>
						<!-- Right Text -->
						<div id="right-item-1" class="text-gray-800">
							<p class="leftrightcard mb-4">
				തെക്കൻ മേഖലയുടെ പ്രകാശ സ്തംഭം

 	കല്ലാമം സെന്റ് മേരീസ് മലങ്കര കത്തോലിക്കാ ദേവാലയം സുവർണ്ണ ജൂബിലിയുടെ നിറവിൽ ആയിരിക്കുമ്പോൾ നമ്മൾ എന്നും ഏറെ കടപ്പെട്ടിരിക്കുന്നത് 1975 ൽ നമ്മുടെ മിഷൻ സ്ഥാപിച്ച ഭാഗ്യ സ്മരണാർഹനായ  റൈറ്റ് റവ. ഫിലിപ്പ് ഉഴനെല്ലൂർ കോർപിസ്കോപ്പയോടാണ്
"ഞാൻ സുവിശേഷം പ്രസംഗിക്കുന്നില്ലെങ്കിൽ എനിക്ക് ദുരിതം "[1 കോറി 9:16] എന്ന വിശുദ്ധ പൗലോസ് അപ്പോസ്തലന്റെ ബോധ്യം അക്ഷരാർത്ഥത്തിൽ ഉൾക്കൊണ്ട വന്ദ്യ ഫിലിപ്പ് അച്ഛൻ 5 പതിറ്റാണ്ടിലധികം നീണ്ടുനിന്ന തെക്കൻ മേഖലയിലെ പ്രേക്ഷിത യാത്രയാണ് ഇന്ന് ജനഹൃദയങ്ങളിൽ ഓർമ്മയായി നിലകൊള്ളുന്നത്. ഭാഗ്യ  സ്മരണാർഹനായ ബെനഡിക്ട് തിരുമേനിയുടെ അനുഗ്രഹാശികളോടെ വന്നിട്ടിലെ പച്ചൻ 60ലേറെ മിഷനുകൾ സ്ഥാപിച്ചതിലൂടെ അവരെ ദൈവത്തോട് അടുപ്പിക്കുക മാത്രമല്ല. അവരെ ഭൗതികമായ സഹായിക്കുന്നതിനായി സ്കൂളുകൾ, തീപ്പെട്ടി കമ്പനി, മെഴുകുതിരി ഫാക്ടറി, പരമ്പരാഗത തൊഴിൽ സൊസൈറ്റുകൾ തുടങ്ങി നിരവധി പ്രസ്ഥാനങ്ങൾക്ക് തുടക്കം കുറിച്ചു. വന്ധ്യ അച്ഛൻ സ്ഥാപിച്ച സ്കൂളുകൾ ആയിരക്കണക്കിന് സഭാ മക്കൾക്കും, അക്രൈസ്തവർക്കും അവരുടെ പാപി കരു പിടിപ്പിക്കുന്ന സങ്കേതങ്ങളായി ഇന്ന് നിലകൊള്ളുന്നു. തെക്കൻ മേഖലയിൽ ഉണ്ടായി വലിയ വളർച്ചയുടെ പുറകിൽ വലിയ ഫിലിപ്പച്ചന്റെ കഠിനാധ്വാനം കൊണ്ട് തന്നെ അദ്ദേഹത്തെ അക്ഷരാർത്ഥത്തിൽ തെക്കൻ മേഖലയുടെ അപ്പോസ്തലൻ എന്നോ തെക്കൻ മേഖലയുടെ പ്രകാശ സ്തംഭം എന്നോ വിശേഷിപ്പികുന്നതാകും ഉചിതം ഇന്ന് അദ്ദേഹം വൈദികർക്ക് സമർപ്പിതർക്ക്, വിശ്വാസികൾക്ക് കുഞ്ഞുങ്ങൾക്ക്  എന്നും പഠിപ്പിച്ചാലും പഠിപ്പിച്ചാലും തീരാത്ത ഒരു പുസ്തകവും  മാതൃകയുമായിരിക്കുമെന്ന് നിസ്സംശയം പറയാം.
 അദ്ദേഹം തുടങ്ങിവച്ച നമ്മുടെ ഇടവക കൂട്ടായ്മയുടെ ആത്മീയവും ഭൗതികവുമായ വളർച്ചയ്ക്ക് അന്നുമുതൽ ഇന്നുവരെ സഹകരിച്ചതും സഹകരിക്കുന്നതും ആയ വൈദികർ, സിസ്റ്റേഴ്സ്,  ശെമ്മാശന്മാർ, ഉപദേശിമാർ,സെക്രട്ടറിമാർ , ട്രസ്റ്റിമാർ കമ്മിറ്റി അംഗങ്ങൾ ഭക്തസംഘടന ഭാരവാഹികൾ ഇടവക കുടുംബാംഗങ്ങൾ എല്ലാവരെയും പുതുതലമുറയ്ക്ക് ഓർമ്മപ്പെടുത്തേണ്ട ഒരു സുവർണ്ണ നിമിഷമായി നമ്മുടെ ഈ സുവർണ്ണ ജൂബിലി ആഘോഷം മാറട്ടെ. " ഞാൻ വഴിയും ജീവനും സത്യവും ആകുന്നു " എന്ന കർത്താവിന്റെ വാക്യം നമ്മുടെ ഇടവകയുടെ സുവർണ്ണ ജൂബിലി നിറവിൽ പ്രതിനിധീകരിക്കട്ടെ അതുവഴി സുവിശേഷത്തിന്റെ ആനന്ദം നിങ്ങൾക്കെല്ലാവർക്കും കരസ്ഥമാകട്ടെ എന്ന് പ്രാർത്ഥിക്കുകയും ആശംസിക്കുകയും ചെയ്യുന്നു...
							</p>

							
						</div>
					</div>
				</div>
			</section>

			<section class="my-[90px] z-10 relative">
				<div class="container mx-auto px-5 lg:px-24">
					<div class="flex flex-col-reverse lg:grid lg:grid-cols-2 gap-10 items-start">
						<!-- Left Text -->
						<div id="left-item-2" class="text-gray-800">
							<p class="mb-4 leftrightcard">
								<strong>THE SYRO-MALANKARA CATHOLIC HIERARCHY</strong>
							</p>
							<p class="mb-4 leftrightcard">
								In the center, there's an emblem or crest, which appears to be the official symbol of the Syro-Malankara Catholic Church.
							</p>
							<p class="mb-4 leftrightcard">
								This church is one of the Eastern Catholic Churches in full communion with the Pope of Rome, with its roots in the Malankara tradition of Indian Christianity. It's based primarily in Kerala, India, and follows the West Syriac liturgical tradition.
							</p>

							
						</div>

						<!-- Right Image -->
						<div id="right-item-2">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/syromlnkara.jpeg'); ?>"  alt="Nature Image" class="w-full rounded-lg shadow-lg">
						</div>
					</div>
				</div>
			</section>

			<section class="mb-28 mt-12 lg:mt-28 z-10 relative h-[550px]">
				<div class="container mx-auto px-5 lg:px-24 text-center h-full">
					<!-- Heading -->
					<div class="mb-8 lg:mb-16 text-left flex justify-start items-start">
						<h2 class="text-3xl lg:text-4xl font-bold text-gray-900 flex justify-center items-center gap-2">Our Gallery <span class="hidden lg:flex"></span></h2>
					</div>

					<div class="swiper-container mySwiper h-[450px]">
						<div class="swiper-wrapper h-full">
							<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
								<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery-image/imageone.jpeg'); ?>"  alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
							</div>
							<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
								<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery-image/imagetwo.jpeg'); ?>"  alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
							</div>
							<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
								<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery-image/imagethree.jpeg'); ?>"  alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
							</div>
							<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
								<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery-image/imagefour.jpeg'); ?>"  alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
							</div>
							<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
								<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery-image/imagefive.jpeg'); ?>"  alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
							</div>
							<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
								<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery-image/imageone.jpeg'); ?>"  alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
							</div>
						</div>
					</div>

				</div>
			</section>

			<section class="bg-white py-16 z-10 relative">
				<div class="container mx-auto px-5 lg:px-24 text-center">

					<div class="flex flex-col lg:flex-row items-center justify-between space-x-10 text-center py-10">
						<!-- <div class="rotate-container">
							<img class="" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/globe.svg'); ?>" alt="ring image">
						</div> -->

						<div class="rotate-container mr-36 opacity-[0.3] lg:opacity-100">
							<img class="w-[291px] h-[291px] sm:w-[330px] sm:h-[330px] lg:w-[370px] lg:h-[370px] xl:h-[414px] xl:w-[414px] 2xl:w-[446.01px] 2xl:h-[446.01px] 3xl:h-[477px] 3xl:w-[477px] absolute left-[-129px] sm:left-[-129px] lg:left-[-149px] xl:left-[-171px] 3xl:left-[-184px]"
								src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/globe.svg'); ?>" 
								alt="globe">
						</div>


						<div class=" flex flex-col z-50" id="stat1">						
							<h2 class="text-7xl font-bold number" data-value="50">0+</h2>
							<p class="text-gray-500 text-2xl">Year's</p>
						</div>

						<div class="" id="stat2">
							<h2 class="text-7xl font-bold number" data-value="10">0+</h2>
							<p class="text-gray-500 text-2xl">Charity's</p>
						</div>

						<div class="" id="stat3">
							<h2 class="text-7xl font-bold number" data-value="70">0+</h2>
							<p class="text-gray-500 text-2xl">People</p>
						</div>

						<div class="" id="stat4">
							<h2 class="text-7xl font-bold number" data-value="150">0+</h2>
							<p class="text-gray-500 text-2xl">Toatal church branches</p>
						</div>
					</div>

				</div>
			</section>

			
			<section>
				<div class="container mx-auto px-5 lg:px-24 text-center lg:pt-34">
					<!-- Heading -->
					<div class="mb-8 lg:mb-16 text-left flex justify-start items-start">
						<h2 class="text-3xl lg:text-4xl font-bold text-gray-900 flex justify-center items-center gap-2">Our Church services <span class="hidden lg:flex">🙏</span></h2>
					</div>
					<table class="w-full border border-[#658161] text-center text-xl">
						<thead class="bg-[#658161] text-white">
						<tr>
							<th class="border border-[#658161] p-3 lg:p-8">Time</th>
							<th class="border border-[#658161] p-3 lg:p-8">Day</th>
							<th class="border border-[#658161] p-3 lg:p-8">am/pm</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td class="border border-[#658161] p-3 lg:p-8">6:00 AM</td>
							<td class="border border-[#658161] p-3 lg:p-8">Sunday</td>
							<td class="border border-[#658161] p-3 lg:p-8">morning</td>
						</tr>
						<tr>
							<td class="border border-[#658161] p-3 lg:p-8">5:00 pm</td>
							<td class="border border-[#658161] p-3 lg:p-8">Thursday</td>
							<td class="border border-[#658161] p-3 lg:p-8">evening</td>
						</tr>
						<tr>
							<td class="border border-[#658161] p-3 lg:p-8">5:00 pm</td>
							<td class="border border-[#658161] p-3 lg:p-8">Friday</td>
							<td class="border border-[#658161] p-3 lg:p-8">evening</td>
						</tr>
						
						</tbody>
					</table>
				</div>
			</section>

			<section class="mb-28 mt-12 lg:mt-28 z-10 relative h-[550px]">
				<div class="container mx-auto px-5 lg:px-24 text-center h-full">
					<!-- Heading -->
					<div class="mb-8 lg:mb-16 text-left flex justify-start items-start">
						<h2 class="text-3xl lg:text-4xl font-bold text-gray-900 flex justify-center items-center gap-2">മുൻ വികാരിമാർ <span class="hidden lg:flex"></span></h2>
					</div>

	
						<div class="swiper-container mySwiper h-[450px]">
							<div class="swiper-wrapper h-full">

									<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/rt.rvsebab.jpg'); ?>" alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
										<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
										<div class="absolute bottom-4 left-4 text-white">
											<h3 class="text-lg font-semibold">Rt Rev.Sebastian </h3>
											<p class="text-sm font-medium">Ambasseril Corepiscopa</p>
											<!-- <p class="text-xs opacity-80"><?php echo esc_html($year); ?> Member</p> -->
										</div>
									</div>

									<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/georrg.jpg'); ?>" alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
										<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
										<div class="absolute bottom-4 left-4 text-white">
											<h3 class="text-lg font-semibold">Rev.Fr.George Mathew</h3>
											<p class="text-sm font-medium">Thekkeputhuvelil</p>
											<!-- <p class="text-xs opacity-80"><?php echo esc_html($year); ?> Member</p> -->
										</div>
									</div>

									<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/abragam.jpg'); ?>" alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
										<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
										<div class="absolute bottom-4 left-4 text-white">
											<h3 class="text-lg font-semibold">Rev.Fr.Abraham Mannil</h3>
											<p class="text-sm font-medium"></p>
											<!-- <p class="text-xs opacity-80"><?php echo esc_html($year); ?> Member</p> -->
										</div>
									</div>

									<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/georgecbhuwdvwd.jpg'); ?>" alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
										<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
										<div class="absolute bottom-4 left-4 text-white">
											<h3 class="text-lg font-semibold">Rev.Fr.Geevarghese</h3>
											<p class="text-sm font-medium">Charuvilayil</p>
										</div>
									</div>

									<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/agustin.jpg'); ?>" alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
										<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
										<div class="absolute bottom-4 left-4 text-white">
											<h3 class="text-lg font-semibold">Rev.Fr. Agustin </h3>
											<p class="text-sm font-medium">Konathuvila</p>
										</div>
									</div>

									<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/vargssee.jpg'); ?>" alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
										<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
										<div class="absolute bottom-4 left-4 text-white">
											<h3 class="text-lg font-semibold">Rev.Fr.Varghese</h3>
											<p class="text-sm font-medium">Kaithon</p>
										</div>
									</div>

									<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/bennedix.jpg'); ?>" alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
										<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
										<div class="absolute bottom-4 left-4 text-white">
											<h3 class="text-lg font-semibold">Rev.Fr.Benedict</h3>
											<p class="text-sm font-medium">Varuvila</p>
										</div>
									</div>

									<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/j3eincwjkvcw.jpg'); ?>" alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
										<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
										<div class="absolute bottom-4 left-4 text-white">
											<h3 class="text-lg font-semibold">Rev.Fr Jerin Jose</h3>
											<p class="text-sm font-medium">Mekkarikattu</p>
										</div>
									</div>

									<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/geevargssee.jpg'); ?>" alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
										<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
										<div class="absolute bottom-4 left-4 text-white">
											<h3 class="text-lg font-semibold">Rev.Fr.Geevarghese</h3>
											<p class="text-sm font-medium">Valiyachangaveetil</p>
										</div>
									</div>

									<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/msgrjose.jpg'); ?>" alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
										<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
										<div class="absolute bottom-4 left-4 text-white">
											<h3 class="text-lg font-semibold">Rt Rev.Msgr Jose </h3>
											<p class="text-sm font-medium">Konathuvila</p>
										</div>
									</div>

									<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Rev.Augustinfbewfbw.jpg'); ?>" alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
										<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
										<div class="absolute bottom-4 left-4 text-white">
											<h3 class="text-lg font-semibold">Rt Rev.Augustin</h3>
											<p class="text-sm font-medium">Pulimuttathu Corepiscopa</p>
										</div>
									</div>

									
									<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Rev.Fr.JohAreekal.jpg'); ?>" alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
										<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
										<div class="absolute bottom-4 left-4 text-white">
											<h3 class="text-lg font-semibold">Rev.Fr.John Areekal</h3>
											<!-- <p class="text-sm font-medium">Pulimuttathu Corepiscopa</p> -->
										</div>
									</div>

									<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Rev.Fr.RoyGeorge.jpg'); ?>" alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
										<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
										<div class="absolute bottom-4 left-4 text-white">
											<h3 class="text-lg font-semibold">Rev.Fr.Roy George</h3>
											<p class="text-sm font-medium">Vayalirakkathu</p>
										</div>
									</div>

									
									<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Rev.Fr.Varghese.efebfekw.jpg'); ?>" alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
										<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
										<div class="absolute bottom-4 left-4 text-white">
											<h3 class="text-lg font-semibold">Rev.Fr.Varghese</h3>
											<p class="text-sm font-medium">Naduthala</p>
										</div>
									</div>
							</div>
						</div>


				</div>
			</section>

			<section class="mb-28 mt-12 lg:mt-28 z-10 relative">
				<div class="container mx-auto px-5 lg:px-24 text-center h-full">
					<!-- Heading -->
					<div class="mb-8 lg:mb-16 text-left flex justify-start items-start">
						<h2 class="text-3xl lg:text-4xl font-bold text-gray-900 flex justify-center items-center gap-2">Our Jubilee Song<span class="hidden lg:flex">🎶</span></h2>
					</div>

					<p class="text-gray-800 font-semibold text-lg mb-4 space-y-1">
						ജൂബിലി തൻ നിറവിൽ <br>
						മാതാവിൻ തിരുനാമത്തിൽ <br>
						ഈ നാടിൻ അനുഗ്രഗമായി <br>
						പൊൻപ്രഭ നിറഞ്ഞ അലയം <br>
						ഇത് കല്ലാമo ദൈവാലയം <br>

							വിശുദ്ധ്യി യോടെ ഇടവകയൊന്നായി<br>
						സ്തുതിച്ചു പാടും മാതാവേ<br>
						ഈ ലോക മാതാവേ<br>
						ഭൂലോക മാതാവേ ജൂബിലി സുവർണ്ണ ജൂബിലി<br>

						കർത്താവിൻ തീരുമാനം പുകഴും<br>
						പരിശുദ്ധമം ഈ അലയം <br>
						ഈ നാടിൻ ആശ്രയമായി <br>
						മലങ്കര ദൈവാലയം <br>
						ഇത് കല്ലാമo ദൈവാലയം <br>
						ജൂബിലി സുവർണ്ണ ജൂബിലി<br>
					</p>
				</div>
			</section>

			<section class="bg-white my-16 z-10 relative">
				<div class="container mx-auto px-5 lg:px-24 text-center">
					<!-- Heading -->
					<h2 class="text-3xl lg:text-4xl font-bold text-gray-900 flex justify-center items-center gap-2">
						Get in Touch 
					</h2>

					<!-- Contact Boxes -->
					<div  class="grid contact-box-container grid-cols-1 md:grid-cols-3 gap-3 lg:p-8 mt-10">
						
						<!-- Office Location -->
						<div class="border contact-card border-gray-300 p-3 lg:p-8 rounded-lg shadow-lg">
							<div class="flex justify-center">
								<!-- Add your SVG icon here -->
								<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/church-logo.png'); ?>"  class="w-12 h-12" alt="Location Icon">
							</div>
							<h3 class="text-xl font-semibold text-gray-800 mt-4">OUR CHURCH</h3>
							<p class="text-blue-950 mt-2">
							St Mary's Malankara Syriac Catholic <br>
							Church Kallamam,<br>
							Veeranakavu, trivandrum Kerala 695572
							</p>
						</div>

						<!-- Email -->
						<div class="border contact-card border-gray-300 p-3 lg:p-8 rounded-lg shadow-lg">
							<div class="flex justify-center">
								<!-- Add your SVG icon here -->
								<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gmail-logo.png'); ?>" class="h-12" alt="Mail Icon">
							</div>
							<h3 class="text-xl font-semibold text-gray-800 mt-4">OUR MAIL</h3>
							<p class="text-blue-950 mt-2" style="line-break: anywhere;">kallamamst.marysmalankaracath@gmail.com</p>
						</div>

						<!-- Phone -->
						<div class="border contact-card border-gray-300 p-3 lg:p-8 rounded-lg shadow-lg">
							<div class="flex justify-center">
								<!-- Add your SVG icon here -->
								<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/phone-logo.png'); ?>" class="w-12 h-12" alt="Phone Icon">
							</div>
							<h3 class="text-xl font-semibold text-gray-800 mt-4">OUR PHONE</h3>
							<p class="text-blue-950 mt-2">0484 485 1114</p>
						</div>

					</div>
				</div>
			</section>
		</div>
	</div>
</main>

<script>
	document.addEventListener("DOMContentLoaded", function () {
		var swiper = new Swiper(".mySwiper", {
			slidesPerView: 1,  // FIXED: Set a number instead of "auto"
			spaceBetween: 20,  // Adjusts spacing
			loop: true,  // Enables infinite loop
			autoplay: {
				delay: 1500,  // 3-second interval
				disableOnInteraction: false,  // Keeps autoplay active
			},
			speed: 1200,  // Smooth scrolling speed
			grabCursor: true,  // Changes cursor to grab
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				pagination: {
					el: ".swiper-pagination",
					clickable: true,
				},
				breakpoints: {
					640: { slidesPerView: 1 },
					768: { slidesPerView: 2 },
					1024: { slidesPerView: 3 },
					1280: { slidesPerView: 4.5}
				}
			});
		});
</script>

<!-- GSAP Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // GSAP Animation for Heading
        gsap.fromTo("#animated-heading", 
            { y: 100, opacity: 0 }, 
            { y: 0, opacity: 1, duration: 1.5, ease: "power3.out" }
        );

        // Get the paragraph
        let paragraph = document.querySelector("#animated-paragraph");

        if (!paragraph) return;

        let words = paragraph.innerText.split(" "); // Split paragraph into words
        paragraph.innerHTML = ""; // Clear paragraph text

        // Reconstruct paragraph with span-wrapped words
        words.forEach(word => {
            let wordSpan = document.createElement("span");
            wordSpan.style.display = "inline-block"; // Ensure inline effect
            wordSpan.style.opacity = "0"; // Hide initially
            wordSpan.textContent = word + " "; // Add space between words
            paragraph.appendChild(wordSpan);
        });

        // Animate each word when scrolled into view
        gsap.to("#animated-paragraph span", {
            scrollTrigger: {
                trigger: paragraph,
                start: "top 80%", // Starts animation when 80% visible
                toggleActions: "play none none none"
            },
            opacity: 1,
            y: 0,
            stagger: 0.1, // Stagger each word by 0.1s
            duration: 0.8,
            ease: "power3.out"
        });

		gsap.registerPlugin(ScrollTrigger);

		// Animate Left Items
		gsap.fromTo("#left-item-1", 
			{ x: -300, opacity: 0 }, 
			{ 
				x: 0, 
				opacity: 1, 
				duration: 2, 
				ease: "power3.out",
				scrollTrigger: {
					trigger: "#left-item-1",
					start: "top 80%",
					toggleActions: "play reverse play reverse" 
				}
			}
		);

		// Animate Left Items
		gsap.fromTo("#left-item-2", 
			{ x: -300, opacity: 0 }, 
			{ 
				x: 0, 
				opacity: 1, 
				duration: 2, 
				ease: "power3.out",
				scrollTrigger: {
					trigger: "#left-item-2",
					start: "top 80%",
					toggleActions: "play reverse play reverse" 
				}
			}
		);

		// Animate Right Items
		gsap.fromTo("#right-item-1", 
			{ x: 100, opacity: 0 }, 
			{ 
				x: 0, 
				opacity: 1, 
				duration: 2, 
				ease: "power3.out",
				scrollTrigger: {
					trigger: "#right-item-1",
					start: "top 80%",
					toggleActions: "play reverse play reverse" 
				}
			}
		);

		// Animate Right Items
		gsap.fromTo("#right-item-2", 
			{ x: 100, opacity: 0 }, 
			{ 
				x: 0, 
				opacity: 1, 
				duration: 2, 
				ease: "power3.out",
				scrollTrigger: {
					trigger: "#right-item-2",
					start: "top 80%",
					toggleActions: "play reverse play reverse" 
				}
			}
		);

		gsap.fromTo(".contact-card",
			{ opacity: 0, y: 50 },
			{
				opacity: 1, 
				y: 0,
				duration: 1,
				ease: "power3.out",
				stagger: 0.2, 
				scrollTrigger: {
					trigger: ".contact-box-container",
					start: "top 80%", 
					toggleActions: "play reverse play reverse"

				}
			}
		);

		const stats = document.querySelectorAll(".number");

		stats.forEach((stat, index) => {
			let targetValue = parseInt(stat.dataset.value, 10); // Convert data-value to integer

			gsap.fromTo(stat, 
				{ textContent: 0 }, 
				{ 
					textContent: targetValue, 
					duration: 2, 
					ease: "power1.out",
					delay: index * 0.3,
					scrollTrigger: {
						trigger: stat,
						start: "top 80%",
						toggleActions: "play reverse play reverse" 
					},
					onUpdate: function () {
						stat.innerText = Math.floor(this.targets()[0].textContent) + "+"; // Update text dynamically
					}
				}
			);
		});

    });
</script>



<?php get_footer(); ?>