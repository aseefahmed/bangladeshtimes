
<!-- double ad -->
<div class="section-margin">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="double-ad" id="sticker">
					<div class="single-long-ad-left">
						<a href="" class="ad-close-btn-left"><i class="fa fa-close"></i></a>
						<img src="https://placehold.it/160x600" alt="">
					</div>
					<div class="single-long-ad-right">
						<a href="" class="ad-close-btn-right"><i class="fa fa-close"></i></a>
						<img src="https://placehold.it/160x600" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- breaking news slider -->{{all_news}}
<div class="section-padding breaking-news-slider padding-top-zero">
	<div class="container-fluid">
		<div class="col-sm-12">
			<div class="aside-advertise-3 scrollToShow">
				<div class="ad">
					<img src="http://placehold.it/1000x100" alt="">
					<a href="" class="ad-close-btn"><i class="fa fa-close"></i></a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-7 col-sm-offset-2 col-xs-12">
					<div class="cta-bar">
						<h2>ব্রেকিং নিউজ</h2>
					</div>
					<div class="breakingnews-carousel">
						<div class="single-breakingnews-item">
							<div class="breakingnews-bg" style="background-image: url(admin/public/images/news/featured/{{ breaking_news[0].featured_image }})">
								<a href="" class="slider-headline">
									<h3>{{ breaking_news[0].title }}</h3>
								</a>
							</div>
						</div>
						<div class="single-breakingnews-item">
							<div class="breakingnews-bg" style="background-image: url(admin/public/images/news/featured/{{ breaking_news[1].featured_image }})">
								<a href="" class="slider-headline">
									<h3>{{ breaking_news[1].title }}</h3>
								</a>
							</div>
						</div>
						<div class="single-breakingnews-item">
							<div class="breakingnews-bg" style="background-image: url(admin/public/images/news/featured/{{ breaking_news[2].featured_image }})">
								<a href="" class="slider-headline">
									<h3>{{ breaking_news[2].title }}</h3>
								</a>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-sm-3 pdt-10 col-xs-12">
					<!-- ad here -->
					<div class="advertise-1">
						<a href=""><img src="http://placehold.it/270x290" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- service section here -->
<div class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<h3 class="section-heading"><a href="">বাংলাদেশ সংবাদ</a></h3>
				<div class="single-thumbnail-item-2" ng-repeat="news in latest_news" ng-if="news.category_id == 1">
					<div class="thumbnail-bg" style="background-image: url(admin/public/images/news/featured/{{news.featured_image}})"></div>
					<div class="news-content">
						<a href="">
							<h3>{{ news.title }}</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে </p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<h3 class="section-heading"><a href="">আন্তর্জাতিক সংবাদ</a></h3>
				<div class="single-thumbnail-item-2" ng-repeat="news in latest_news" ng-if="news.category_id == 2">
					<div class="thumbnail-bg" style="background-image: url(admin/public/images/news/featured/{{news.featured_image}})"></div>
					<div class="news-content">
						<a href="">
							<h3>{{ news.title }}</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে </p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<h3 class="section-heading"><a href="">অর্থনীতি</a></h3>
				<div class="single-thumbnail-item-2" ng-repeat="news in latest_news" ng-if="news.category_id == 3">
					<div class="thumbnail-bg" style="background-image: url(admin/public/images/news/featured/{{news.featured_image}})"></div>
					<div class="news-content">
						<a href="">
							<h3>{{ news.title }}</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে </p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<h3 class="section-heading"><a href="">চাকুরি</a></h3>
				<div class="single-thumbnail-item-2" ng-repeat="news in latest_news" ng-if="news.category_id == 4">
					<div class="thumbnail-bg" style="background-image: url(admin/public/images/news/featured/{{news.featured_image}})"></div>
					<div class="news-content">
						<a href="">
							<h3>{{ news.title }}</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে </p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Video reporting & entertainment -->
<div class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<div class="video-reporting-section">
					<h3 class="section-heading"><a href="">ভিডিও/রিপোর্টিং</a></h3>
					<a href="https://www.youtube.com/watch?v=ctvlUvN6wSE" class="video-play-btn reporting-video-bg mfp-iframe">
						<div class="video-icon-table">
							<div class="video-icon-tablecell">
								<i class="fa fa-play"></i>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-7 pdt-10">
				<div class="entertainment">
					<h3 class="section-heading"><a href="">বিনোদন</a></h3>
					<div class="entertainment-carousel">
						<div class="single-entertainment-item">
							<div class="entertainment-bg" style="background-image: url(admin/public/images/news/featured/{{latest_news[10].featured_image}})">
								<a href="" class="slider-headline">
									<h3>{{latest_news[10].title}}</h3>
								</a>
							</div>
						</div>
						<div class="single-entertainment-item">
							<div class="entertainment-bg" style="background-image: url(admin/public/images/news/featured/{{latest_news[11].featured_image}})">
								<a href="" class="slider-headline">
									<h3>{{latest_news[11].title}}</h3>
								</a>
							</div>
						</div>
						<div class="single-entertainment-item">
							<div class="entertainment-bg" style="background-image: url(admin/public/images/news/featured/{{latest_news[12].featured_image}})">
								<a href="" class="slider-headline">
									<h3>{{latest_news[12].title}}</h3>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Full width ad -->
<!--single advertise area-->
<div class="section-padding advertise-252">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<a href=""><img src="http://placehold.it/1085x252" alt=""></a>
			</div>
		</div>
	</div>
</div>
<!--single advertise area end-->

<!-- politics & sports -->
<div class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="politics">
					<h3 class="section-heading"><a href="">রাজনীতি</a></h3>
					<div class="entertainment-carousel">
						<div class="single-entertainment-item">
							<div class="entertainment-bg" style="background-image: url(admin/public/images/news/featured/{{latest_news[13].featured_image}})">
								<a href="" class="slider-headline">
									<h3>{{latest_news[13].title}}</h3>
								</a>
							</div>
						</div>
						<div class="single-entertainment-item">
							<div class="entertainment-bg" style="background-image: url(admin/public/images/news/featured/{{latest_news[14].featured_image}})">
								<a href="" class="slider-headline">
									<h3>{{latest_news[14].title}}</h3>
								</a>
							</div>
						</div>
						<div class="single-entertainment-item">
							<div class="entertainment-bg" style="background-image: url(admin/public/images/news/featured/{{latest_news[15].featured_image}})">
								<a href="" class="slider-headline">
									<h3>{{latest_news[15].title}}</h3>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 pdt-10">
				<div class="politics">
					<h3 class="section-heading"><a href="">খেলাধুলা</a></h3>
					<div class="entertainment-carousel">
						<div class="single-entertainment-item">
							<div class="entertainment-bg" style="background-image: url(admin/public/images/news/featured/{{latest_news[16].featured_image}})">
								<a href="" class="slider-headline">
									<h3>{{latest_news[16].title}}</h3>
								</a>
							</div>
						</div>
						<div class="single-entertainment-item">
							<div class="entertainment-bg" style="background-image: url(admin/public/images/news/featured/{{latest_news[17].featured_image}})">
								<a href="" class="slider-headline">
									<h3>{{latest_news[17].title}}</h3>
								</a>
							</div>
						</div>
						<div class="single-entertainment-item">
							<div class="entertainment-bg" style="background-image: url(admin/public/images/news/featured/{{latest_news[18].featured_image}})">
								<a href="" class="slider-headline">
									<h3>{{latest_news[18].title}}</h3>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 3 service-section goes here -->
<div class="section-padding news-section-im75">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<h3 class="section-heading"><a href="">শিক্ষা</a></h3>
				<div class="single-thumbnail-item-2" ng-repeat="news in latest_news" ng-if="news.category_id == 8">
					<div class="thumbnail-bg" style="background-image: url(admin/public/images/news/featured/{{news.featured_image}})"></div>
					<div class="news-content">
						<a href="">
							<h3>{{ news.title }}</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে </p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<h3 class="section-heading"><a href="">বিজ্ঞান ও প্রযুক্তি</a></h3>
				<div class="single-thumbnail-item-2" ng-repeat="news in latest_news" ng-if="news.category_id == 9">
					<div class="thumbnail-bg" style="background-image: url(admin/public/images/news/featured/{{news.featured_image}})"></div>
					<div class="news-content">
						<a href="">
							<h3>{{ news.title }}</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে </p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 pdt-10">
				<h3 class="section-heading"><a href="">রাশি</a></h3>
				<div class="single-thumbnail-item-2" ng-repeat="news in latest_news" ng-if="news.category_id == 10">
					<div class="thumbnail-bg" style="background-image: url(admin/public/images/news/featured/{{news.featured_image}})"></div>
					<div class="news-content">
						<a href="">
							<h3>{{ news.title }}</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে </p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 4 service-section goes here -->
<div class="section-padding news-section-im85">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<h3 class="section-heading"><a href="">ক্রাইম</a></h3>
				<div class="single-thumbnail-item-2" ng-repeat="news in latest_news" ng-if="news.category_id == 11">
					<div class="thumbnail-bg" style="background-image: url(admin/public/images/news/featured/{{news.featured_image}})"></div>
					<div class="news-content">
						<a href="">
							<h3>{{ news.title }}</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে </p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<h3 class="section-heading"><a href="">জীবনধারা/লাইফ স্টাইল</a></h3>
				<div class="single-thumbnail-item-2" ng-repeat="news in latest_news" ng-if="news.category_id == 12">
					<div class="thumbnail-bg" style="background-image: url(admin/public/images/news/featured/{{news.featured_image}})"></div>
					<div class="news-content">
						<a href="">
							<h3>{{ news.title }}</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে </p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<h3 class="section-heading"><a href="">ভ্রামন</a></h3>
				<div class="single-thumbnail-item-2" ng-repeat="news in latest_news" ng-if="news.category_id == 20">
					<div class="thumbnail-bg" style="background-image: url(admin/public/images/news/featured/{{news.featured_image}})"></div>
					<div class="news-content">
						<a href="">
							<h3>{{ news.title }}</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে </p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<h3 class="section-heading"><a href="">রম্য/কার্টুন</a></h3>
				<div class="single-thumbnail-item-2" ng-repeat="news in latest_news" ng-if="news.category_id == 21">
					<div class="thumbnail-bg" style="background-image: url(admin/public/images/news/featured/{{news.featured_image}})"></div>
					<div class="news-content">
						<a href="">
							<h3>{{ news.title }}</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে </p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!--2 ads area-->
<div class="section-padding advertise-252">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 text-center">
				<a href=""><img src="http://placehold.it/535x250" alt=""></a>
			</div>
			<div class="col-sm-6 text-center pdt-10">
				<a href=""><img src="http://placehold.it/535x250" alt=""></a>
			</div>
		</div>
	</div>
</div>

<!-- big featured section -->
<div class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-sm-offset-2">
				<div class="cta-bar">
					<h2>আপনি লিখুন/ <br>আপনার লেখা</h2>
				</div>
				<div class="single-featured-item">
					<h3>অননুমোদিত পাহাড় কাটা বন্ধ</h3>
					<img src="assets/img/featured-img-1.jpg" alt="">
					<p>দুর্যোগ ব্যবস্থাপনা ও ত্রাণ মন্ত্রণালয়ে অনুষ্ঠিত এই সভায় ১৮টি মন্ত্রণালয় ও সংস্থার প্রতিনিধিরা উপস্থিত ছিলেন। সভা শেষে দুর্যোগ ব্যবস্থাপনা ও ত্রাণমন্ত্রী মোফাজ্জল হোসেন চৌধুরী সংবাদ ব্রিফিংয়ে সভার সিদ্ধান্ত ও প্রস্তাবের কথা জানান। দুর্যোগ ব্যবস্থাপনা ও ত্রাণ মন্ত্রণালয়ে অনুষ্ঠিত এই সভায় ১৮টি মন্ত্রণালয় ও সংস্থার প্রতিনিধিরা উপস্থিত ছিলেন। <a href="#" class="news-readmore-btn">বিস্তারিত<i class="fa fa-arrow-right"></i></a></p>

				</div>
			</div>
			<div class="col-sm-5 pdt-10">
				<div class="single-featured-item">
					<h3>অননুমোদিত পাহাড় কাটা বন্ধ</h3>
					<img src="assets/img/featured-img-2.jpg" alt="">
					<p>দুর্যোগ ব্যবস্থাপনা ও ত্রাণ মন্ত্রণালয়ে অনুষ্ঠিত এই সভায় ১৮টি মন্ত্রণালয় ও সংস্থার প্রতিনিধিরা উপস্থিত ছিলেন। সভা শেষে দুর্যোগ ব্যবস্থাপনা ও ত্রাণমন্ত্রী মোফাজ্জল হোসেন চৌধুরী সংবাদ ব্রিফিংয়ে সভার সিদ্ধান্ত ও প্রস্তাবের কথা জানান। দুর্যোগ ব্যবস্থাপনা ও ত্রাণ মন্ত্রণালয়ে অনুষ্ঠিত এই সভায় ১৮টি মন্ত্রণালয় ও সংস্থার প্রতিনিধিরা উপস্থিত ছিলেন। <a href="#" class="news-readmore-btn">বিস্তারিত<i class="fa fa-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- big slider -->
<div class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-2">
				<div class="cta-bar">
					<h2>ক্রয় বিক্রয়</h2>
				</div>
				<div class="big-section-slider">
					<div class="single-big-slider big-bg-1">
						<a href="" class="slider-headline">
							<h3>অননুমোদিত পাহাড় কাটা বন্</h3>
						</a>
					</div>
					<div class="single-big-slider big-bg-2">
						<a href="" class="slider-headline">
							<h3>অননুমোদিত পাহাড় কাটা বন্</h3>
						</a>
					</div>
					<div class="single-big-slider big-bg-3">
						<a href="" class="slider-headline">
							<h3>অননুমোদিত পাহাড় কাটা বন</h3>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- big featured section -->
<div class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-sm-offset-2">
				<div class="cta-bar">
					<h2>আয়না</h2>
				</div>
				<div class="single-featured-item">
					<h3>অননুমোদিত পাহাড় কাটা বন্ধ</h3>
					<img src="assets/img/featured-img-1.jpg" alt="">
					<p>দুর্যোগ ব্যবস্থাপনা ও ত্রাণ মন্ত্রণালয়ে অনুষ্ঠিত এই সভায় ১৮টি মন্ত্রণালয় ও সংস্থার প্রতিনিধিরা উপস্থিত ছিলেন। সভা শেষে দুর্যোগ ব্যবস্থাপনা ও ত্রাণমন্ত্রী মোফাজ্জল হোসেন চৌধুরী সংবাদ ব্রিফিংয়ে সভার সিদ্ধান্ত ও প্রস্তাবের কথা জানান। দুর্যোগ ব্যবস্থাপনা ও ত্রাণ মন্ত্রণালয়ে অনুষ্ঠিত এই সভায় ১৮টি মন্ত্রণালয় ও সংস্থার প্রতিনিধিরা উপস্থিত ছিলেন। <a href="#" class="news-readmore-btn">আরও<i class="fa fa-arrow-right"></i></a></p>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="single-featured-item">
					<h3>অননুমোদিত পাহাড় কাটা বন্ধ</h3>
					<img src="assets/img/featured-img-2.jpg" alt="">
					<p>দুর্যোগ ব্যবস্থাপনা ও ত্রাণ মন্ত্রণালয়ে অনুষ্ঠিত এই সভায় ১৮টি মন্ত্রণালয় ও সংস্থার প্রতিনিধিরা উপস্থিত ছিলেন। সভা শেষে দুর্যোগ ব্যবস্থাপনা ও ত্রাণমন্ত্রী মোফাজ্জল হোসেন চৌধুরী সংবাদ ব্রিফিংয়ে সভার সিদ্ধান্ত ও প্রস্তাবের কথা জানান। দুর্যোগ ব্যবস্থাপনা ও ত্রাণ মন্ত্রণালয়ে অনুষ্ঠিত এই সভায় ১৮টি মন্ত্রণালয় ও সংস্থার প্রতিনিধিরা উপস্থিত ছিলেন। <a href="#" class="news-readmore-btn">আরও<i class="fa fa-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- two ads and one facebook plug in section goes here -->
<!-- advertise area-->
<div class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12 text-center">
				<a href=""><img src="http://placehold.it/355x290" alt=""></a>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 text-center pdt-10">
				<a href=""><img src="http://placehold.it/355x290" alt=""></a>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12 text-center pdt-10">
				<h3 class="section-heading"><a href="">ফেসবুক পেইজ</a></h3>
				<div class="fb-container">
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs&width=340&height=214&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- advertise area end-->

<!-- section-padding -->
<div class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-2">
				<div class="cta-bar">
					<h2>মতামত/ <br>উপ-সম্পাদকীয়</h2>
				</div>
				<div class="single-featured-item-big">
					<h3>অননুমোদিত পাহাড় কাটা বন্ধসহ একগুচ্ছ প্রস্তাব</h3>
					<img src="assets/img/featured-img-1.jpg" alt="">
					<p>মন্ত্রী বলেন, তাৎক্ষণিকভাবে ক্ষতিগ্রস্ত ব্যক্তিদের পাশে দাঁড়ানো, সব ধরনের সাহায্য করাসহ কতগুলো প্রস্তাব দেওয়া হয়েছে। এসব প্রস্তাবের মধ্যে রয়েছে বালু উত্তোলন বন্ধ করা, চলমান সব হাউজিং প্রকল্পের কাজ আপাতত বন্ধ রাখা, পার্শ্ববর্তী এলাকার মানুষ ক্ষতিগ্রস্ত হওয়ার আশঙ্কা থাকলে কৌশলগত ও প্রয়োজনীয় ব্যবস্থা নেওয়া, ঝুঁকিপূর্ণ পাহাড়ি এলাকা জরিপের মাধ্যমে চিহ্নিত করে মানচিত্রে প্রদর্শন করা, শক্তিশালী তদারকি (ভিজিলেন্স) দল গঠন করা, যারা ঝুঁকিপূর্ণ পাহাড়ি এলাকার মানুষের নিরাপদ স্থানে স্থানান্তরের সুপারিশ করবে। এ ছাড়া আরও কিছু সুপারিশ করা হয়েছে।মন্ত্রী বলেন, তাৎক্ষণিকভাবে ক্ষতিগ্রস্ত ব্যক্তিদের পাশে দাঁড়ানো, সব ধরনের সাহায্য করাসহ কতগুলো প্রস্তাব দেওয়া হয়েছে। এসব প্রস্তাবের মধ্যে রয়েছে বালু উত্তোলন বন্ধ করা, চলমান সব হাউজিং প্রকল্পের কাজ আপাতত বন্ধ রাখা, পার্শ্ববর্তী এলাকার মানুষ ক্ষতিগ্রস্ত হওয়ার আশঙ্কা থাকলে কৌশলগত ও প্রয়োজনীয় ব্যবস্থা নেওয়া, ঝুঁকিপূর্ণ পাহাড়ি এলাকা জরিপের মাধ্যমে চিহ্নিত করে মানচিত্রে প্রদর্শন করা, শক্তিশালী তদারকি (ভিজিলেন্স) দল গঠন করা, যারা ঝুঁকিপূর্ণ পাহাড়ি এলাকার মানুষের নিরাপদ স্থানে স্থানান্তরের সুপারিশ করবে। এ ছাড়া আরও কিছু সুপারিশ করা হয়েছে।মন্ত্রী বলেন, তাৎক্ষণিকভাবে ক্ষতিগ্রস্ত ব্যক্তিদের পাশে দাঁড়ানো, সব ধরনের সাহায্য করাসহ কতগুলো প্রস্তাব দেওয়া হয়েছে। এসব প্রস্তাবের মধ্যে রয়েছে বালু উত্তোলন বন্ধ করা, চলমান সব হাউজিং প্রকল্পের কাজ আপাতত বন্ধ রাখা, পার্শ্ববর্তী এলাকার মানুষ ক্ষতিগ্রস্ত হওয়ার আশঙ্কা থাকলে কৌশলগত ও প্রয়োজনীয় ব্যবস্থা নেওয়া, ঝুঁকিপূর্ণ পাহাড়ি এলাকা জরিপের মাধ্যমে চিহ্নিত করে মানচিত্রে প্রদর্শন করা, শক্তিশালী তদারকি (ভিজিলেন্স) দল গঠন করা, যারা ঝুঁকিপূর্ণ পাহাড়ি এলাকার মানুষের নিরাপদ স্থানে স্থানান্তরের সুপারিশ করবে।<a href="#" class="news-readmore-btn">আরও<i class="fa fa-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 3 service items goes here -->
<div class="section-padding news-section-im75">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<h3 class="section-heading"><a href="">নারী</a></h3>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<h3 class="section-heading"><a href="">তরুন প্রজন্ম</a></h3>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 pdt-15">
				<h3 class="section-heading"><a href="">শিশু-কিশোর</a></h3>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- video & photo gallary -->
<div class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<h3 class="section-heading"><a href="">আপনার ভিডিও</a></h3>
				<div class="video-slides">
					<div class="single-video-slide">
						<a href="https://www.youtube.com/watch?v=ctvlUvN6wSE" class="video-play-btn play-bg-1 mfp-iframe">
							<div class="video-icon-table">
								<div class="video-icon-tablecell">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<a href="" class="slider-headline">
								<h3>অননুমোদিত পাহাড় কাটা বন</h3>
							</a>
						</a>
					</div>
					<div class="single-video-slide">
						<a href="https://www.youtube.com/watch?v=ctvlUvN6wSE" class="video-play-btn play-bg-2 mfp-iframe">
							<div class="video-icon-table">
								<div class="video-icon-tablecell">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<a href="" class="slider-headline">
								<h3>অননুমোদিত পাহাড় কাটা বন</h3>
							</a>
						</a>
					</div>
					<div class="single-video-slide">
						<a href="https://www.youtube.com/watch?v=ctvlUvN6wSE" class="video-play-btn play-bg-3 mfp-iframe">
							<div class="video-icon-table">
								<div class="video-icon-tablecell">
									<i class="fa fa-play"></i>
								</div>
							</div>
							<a href="" class="slider-headline">
								<h3>অননুমোদিত পাহাড় কাটা বন</h3>
							</a>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-7 pdt-10">
				<h3 class="section-heading"><a href="">ফটো গ্যালারী</a></h3>
				<div class="photo-gallary-slides">
					<div class="single-gallary-photo">
						<div class="gallary-photo-bg gallary-bg-1">
							<a href="" class="slider-headline">
								<h3>অননুমোদিত পাহাড় কাটা বন</h3>
							</a>
						</div>
					</div>
					<div class="single-gallary-photo">
						<div class="gallary-photo-bg gallary-bg-2">
							<a href="" class="slider-headline">
								<h3>অননুমোদিত পাহাড় কাটা বন</h3>
							</a>
						</div>
					</div>
					<div class="single-gallary-photo">
						<div class="gallary-photo-bg gallary-bg-3">
							<a href="" class="slider-headline">
								<h3>অননুমোদিত পাহাড় কাটা বন</h3>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Readers questions tab, opinion , viral goes here -->
<div class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<h3 class="section-heading"><a href="">পাঠকের জিজ্ঞাসা</a></h3>
				<div class="custom-tab readers-qs">
					<ul class="tab-list text-center">
						<li class="active"><a data-toggle="tab" href="#custom-tab-1">বাংলা</a></li>
						<li><a data-toggle="tab" href="#custom-tab-2">আইন</a></li>
					</ul>
					<div class="tab-content">
						<div id="custom-tab-1" class="tab-pane fade in active">
							<div class="single-news-item gray-bg">
								<div class="single-thumbnail-item-2">
									<div class="thumbnail-bg single-thumbnail-1"></div>
									<div class="news-content">
										<a href="">
											<h3>৫০ দিনে একটি গান!</h3>
											<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
										</a>
										<a href="#" class="news-readmore-btn">বিস্তারিত</a>
									</div>
								</div>
								<div class="single-thumbnail-item-2">
									<div class="thumbnail-bg single-thumbnail-1"></div>
									<div class="news-content">
										<a href="">
											<h3>৫০ দিনে একটি গান!</h3>
											<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
										</a>
										<a href="#" class="news-readmore-btn">বিস্তারিত</a>
									</div>
								</div>
								<div class="single-thumbnail-item-2">
									<div class="thumbnail-bg single-thumbnail-1"></div>
									<div class="news-content">
										<a href="">
											<h3>৫০ দিনে একটি গান!</h3>
											<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
										</a>
										<a href="#" class="news-readmore-btn">বিস্তারিত</a>
									</div>
								</div>
								<div class="single-thumbnail-item-2">
									<div class="thumbnail-bg single-thumbnail-1"></div>
									<div class="news-content">
										<a href="">
											<h3>৫০ দিনে একটি গান!</h3>
											<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
										</a>
										<a href="#" class="news-readmore-btn">বিস্তারিত</a>
									</div>
								</div>
							</div>
						</div>
						<div id="custom-tab-2" class="tab-pane fade">
							<div class="single-news-item gray-bg">
								<div class="single-thumbnail-item-2">
									<div class="thumbnail-bg single-thumbnail-1"></div>
									<div class="news-content">
										<a href="">
											<h3>৫০ দিনে একটি গান!</h3>
											<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
										</a>
										<a href="#" class="news-readmore-btn">বিস্তারিত</a>
									</div>
								</div>
								<div class="single-thumbnail-item-2">
									<div class="thumbnail-bg single-thumbnail-1"></div>
									<div class="news-content">
										<a href="">
											<h3>৫০ দিনে একটি গান!</h3>
											<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
										</a>
										<a href="#" class="news-readmore-btn">বিস্তারিত</a>
									</div>
								</div>
								<div class="single-thumbnail-item-2">
									<div class="thumbnail-bg single-thumbnail-1"></div>
									<div class="news-content">
										<a href="">
											<h3>৫০ দিনে একটি গান!</h3>
											<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
										</a>
										<a href="#" class="news-readmore-btn">বিস্তারিত</a>
									</div>
								</div>
								<div class="single-thumbnail-item-2">
									<div class="thumbnail-bg single-thumbnail-1"></div>
									<div class="news-content">
										<a href="">
											<h3>৫০ দিনে একটি গান!</h3>
											<p>সাধারণত কোনো শিল্পীর একটি গানের ভিডিও তৈরি করতে শুটিং</p>
										</a>
										<a href="#" class="news-readmore-btn">বিস্তারিত</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<h3 class="section-heading"><a href="">জনমত জরিপ</a></h3>
				<div class="people-opinion">
					<img src="assets/img/single-news-item-imgs/section-img-2.jpg" alt="">
					<p>মন্ত্রী বলেন, তাৎক্ষণিকভাবে ক্ষতিগ্রস্ত ব্যক্তিদের পাশে দাঁড়ানো, সব ধরনের সাহায্য করাসহ কতগুলো প্রস্তাব দেওয়া হয়েছে। এসব প্রস্তাবের মধ্যে রয়েছে বালু উত্তোলন বন্ধ করা, চলমান সব হাউজিং প্রকল্পের কাজ আপাতত বন্ধ রাখা, পার্শ্ববর্তী এলাকার মানুষ ক্ষতিগ্রস্ত হওয়ার আশঙ্কা</p>
				</div>

			</div>
			<div class="col-md-4 col-sm-12">
				<h3 class="section-heading"><a href="">ভাইরাল</a></h3>
				<div class="viral">
					<div class="viral-carousel">
						<div class="single-viral-item">
							<div class="viral-bg viral-bg-1">
								<a href="" class="slider-headline">
									<h3>আন্তমন্ত্রণালয়ের সভা</h3>
								</a>
							</div>
						</div>
						<div class="single-viral-item">
							<div class="viral-bg viral-bg-2">
								<a href="" class="slider-headline">
									<h3>আর যেন পাহাড়ধসে ক্ষতি না হয়</h3>
								</a>
							</div>
						</div>
						<div class="single-viral-item">
							<div class="viral-bg viral-bg-3">
								<a href="" class="slider-headline">
									<h3>চালের শুল্ক কমিয়ে ১০% করা হলো</h3>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- art & culture , archive goes here -->
<div class="section-padding news-section-im120">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<h3 class="section-heading"><a href="">শিল্প ও সাহিত্য</a></h3>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>রমজানের শুরুতে এক দফা বেড়েছিল দেশি ও ব্রয়লার মুরগির দাম। এখন ঈদের আগে আরেক দফা বেড়েছে। ক্রেতাদের অভিযোগ, ঈদ সামনে রেখে বিক্রেতারা দাম বাড়িয়েছেন। আর ব্যবসায়ীরা দাম বাড়ার কারণ হিসেবে সরবরাহ এখন ঈদের আগে আরেক দফা বেড়েছে</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত<i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>রমজানের শুরুতে এক দফা বেড়েছিল দেশি ও ব্রয়লার মুরগির দাম। এখন ঈদের আগে আরেক দফা বেড়েছে। ক্রেতাদের অভিযোগ, ঈদ সামনে রেখে বিক্রেতারা দাম বাড়িয়েছেন। আর ব্যবসায়ীরা দাম বাড়ার কারণ হিসেবে সরবরাহ এখন ঈদের আগে আরেক দফা বেড়েছে</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত<i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>রমজানের শুরুতে এক দফা বেড়েছিল দেশি ও ব্রয়লার মুরগির দাম। এখন ঈদের আগে আরেক দফা বেড়েছে। ক্রেতাদের অভিযোগ, ঈদ সামনে রেখে বিক্রেতারা দাম বাড়িয়েছেন। আর ব্যবসায়ীরা দাম বাড়ার কারণ হিসেবে সরবরাহ এখন ঈদের আগে আরেক দফা বেড়েছে</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত<i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="single-thumbnail-item-2">
					<div class="thumbnail-bg single-thumbnail-1"></div>
					<div class="news-content">
						<a href="">
							<h3>৫০ দিনে একটি গান!</h3>
							<p>রমজানের শুরুতে এক দফা বেড়েছিল দেশি ও ব্রয়লার মুরগির দাম। এখন ঈদের আগে আরেক দফা বেড়েছে। ক্রেতাদের অভিযোগ, ঈদ সামনে রেখে বিক্রেতারা দাম বাড়িয়েছেন। আর ব্যবসায়ীরা দাম বাড়ার কারণ হিসেবে সরবরাহ এখন ঈদের আগে আরেক দফা বেড়েছে</p>
						</a>
						<a href="#" class="news-readmore-btn">বিস্তারিত<i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-sm-5">
				<h3 class="section-heading"><a href="">আর্কাইভ</a></h3>
				<div class="archive-calender">
					<div class="some-class">
						<div id="calender" class="dycalnder-container"></div>
					</div>
				</div>
				<!--Single add 460x180-->
				<img src="https://placehold.it/460x180" alt="">
			</div>
		</div>
	</div>
</div>


<!-- picture of the day -->
<div class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="picture-day-bg">
					<a href="" class="slider-headline">
						<h3>আজকের ছবি</h3>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- full width ad goes here -->
<!--single advertise area-->
<div class="section-padding advertise-252">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<a href=""><img src="http://placehold.it/1085x252" alt=""></a>
			</div>
		</div>
	</div>
</div>
<!--single advertise area end-->


<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/main.js"></script>