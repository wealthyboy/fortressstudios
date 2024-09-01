<title>{{$pageTitle}}</title>
    

<!-- These are useful for search engines when crawling the internet for your website -->
<meta name="description" content="{{$pageMetaDescription}}" />
<meta name="keywords" content="{{$pageKeywords}}" />
<meta name="author" content="Salitas Technology Solutions">
<link rel="canonical" href="{{url('/')}}" />

<!-- This tells the search engines whether to follow all of the links on your site. If you only want them to track your homepage, replace content="all,follow" with content="index,follow" -->
<meta name="robots" content="all, follow" />


<!-- These are the little icons that show up next to the title of the URL in the browser tab. For these to work, you must include a favicon.png file in the root of your website directory. This can also be favicon.jpg if you prefer, you just need to change the link in the href to favicon.jpg for it to work --> 
<link rel="shortcut icon" href="favicon.png">
<link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon" />

<!-- Social Media stuff. This all makes your links look much nicer and more shareable on Facebook and Twitter -->
<!-- Facebook meta links - OG stands for OpenGraph by the way! -->
<meta property="og:locale" content="en_GB" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$pageTitle}}" />
<meta property="og:description" content="{{$pageMetaDescription}}" />
<meta property="og:url" content="{{url('/')}}" />
<meta property="og:site_name" content="{{$websiteInfo->name}}" />
<meta property="og:image" content="{{url('/images/og_image.jpg')}}" />
<!-- Twitter meta links -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="{{$pageMetaDescription}}" />
<meta name="twitter:title" content="{{$websiteInfo->name}}" />
<meta name="twitter:image" content="{{url('/images/og_image.jpg')}}" />