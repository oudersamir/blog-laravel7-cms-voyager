<!DOCTYPE html>
<html lang="en" class="route-index">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">

  <title>Documentation</title>

  <link rel="canonical" href="/">


  <link href="{{asset('css/bulma-carousel.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">

  <!-- Load Font Awesome 5 -->
  <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js"></script>

  <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
</head>

<body>
  <div class="mobile-burger burger is-hidden-desktop" data-target="#doc-menu">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="columns is-gapless">
    <div id="doc-menu" class="column is-2 has-background-grey-lighter menu is-mobile">
      <section class="section">
        <h1 class="title is-4 has-text-weight-semibold has-text-centered">bulma-carousel <span class="is-size-5 has-text-primary has-text-weight-light">documentation</span></h1>
        <div class="has-text-centered">
          <span>
            <img src="https://badgen.net/badge/Version/4.0.1/green" alt="v4.0.1">
          </span>
        </div>
      </section>
      
<ul class="menu-list">

  
  <li>
    <a class="menu-item" href="/demonstration">Demonstrations</a>
  </li>
  

  
  <li class="menu-item has-dropdown">
    <a class="menu-title">
      Quick Start
      <span class="menu-caret"></span>
    </a>
    <ul class="menu-dropdown">
      
        <li><a class="menu-item" href="/#features">Features</a></li>
      
        <li><a class="menu-item" href="/#installation">Installation</a></li>
      
        <li><a class="menu-item" href="/#content">Content</a></li>
      
        <li><a class="menu-item" href="/#html-structure">HTML Structure</a></li>
      
        <li><a class="menu-item" href="/#integration">Integration</a></li>
      
        <li><a class="menu-item" href="/#options">Options</a></li>
      
        <li><a class="menu-item" href="/#methods">Methods</a></li>
      
        <li><a class="menu-item" href="/#getters">Getters</a></li>
      
        <li><a class="menu-item" href="/#setters">Setters</a></li>
      
        <li><a class="menu-item" href="/#events">Events</a></li>
      
    </ul>
  </li>
  

  
  <li>
    <a class="menu-item" href="/customization">Customization</a>
  </li>
  

  
  <li>
    <a class="menu-item" href="/changelog">Changelog</a>
  </li>
  

</ul>

    </div>
    <div class="column">
      <div class="hero is-light">
        <div class="hero-body">
          <div class="container has-text-centered">
            <h1 class="title is-2 is-spaced has-text-weight-semibold">Quick-Start</h1>
            
            <h2 class="subtitle is-6 has-text-weight-light">bulma.io Carousel/Slider component</h1>
              
          </div>
        </div>
      </div>
      <section class="section">
        <div class="container is-fluid">
          


















<a href="#features" id="features" class="title is-4 has-text-weight-normal is-spaced anchor">
  <span class="anchor-name">Features</span>
</a>

<div class="columns is-multiline is-variable is-6">
	<div class="column is-one-third">
		<article class="media">
			<figure class="media-left">
				<span class="icon has-text-info">
					<i class="fas fa-2x fa-desktop"></i>
				</span>
			</figure>
			<div class="media-content">
				<div class="content">
					<h1 class="title is-6 heading has-text-grey-dark">Responsive</h1>
					<p>Carousel works fine on any device: desktop, tablet or mobile an adapt number of items visible (configurable).</p>
				</div>
			</div>
		</article>
	</div>
	<div class="column is-one-third">
		<article class="media">
			<figure class="media-left">
				<span class="icon has-text-info">
					<i class="fas fa-2x fa-paint-brush"></i>
				</span>
			</figure>
			<div class="media-content">
				<div class="content">
					<h1 class="title is-6 heading has-text-grey-dark">Customization</h1>
					<p>Many options to customize behavior. Use of sass variables to easily customize design.</p>
				</div>
			</div>
		</article>
	</div>
	<div class="column is-one-third">
		<article class="media">
			<figure class="media-left">
				<span class="icon has-text-info">
					<i class="fab fa-2x fa-js"></i>
				</span>
			</figure>
			<div class="media-content">
				<div class="content">
					<h1 class="title is-6 heading has-text-grey-dark">Javascript</h1>
					<p>Pure JavaScript to manage user interaction.</p>
				</div>
			</div>
		</article>
	</div>
</div>

<a href="#installation" id="installation" class="title is-4 has-text-weight-normal is-spaced anchor">
  <span class="anchor-name">Installation</span>
</a>

<article class="message is-warning">
	<div class="message-body">
		This component requires bulma.io to work. See <a href="https://bulma.io/documentation/overview/start/" target="_blank">bulma.io
			documentation</a> first to know how to include it into your project.
	</div>
</article>
<p>There are several ways to get started with Bulma-extensions. You can either:</p>

<section class="section is-paddingless">
	<div class="tabs">
		<ul>
			<li class="is-active"><a href="#install-npm">Npm</a></li>
			<li><a href="#install-github">Github</a> </li>
		</ul>
	</div>

	<div class="tab-contents">
		<div id="install-npm" class="tab-content is-active">
			<p>Use npm to install and stay up to date in the future</p>
			<figure class="highlight"><pre><code class="language-shell" data-lang="shell">npm install bulma-carousel</code></pre></figure>
		</div>

		<div id="install-github" class="tab-content">
			<p>Use the GitHub repository to get the latest development version</p>
			<p class="help">This method requires git installed on your computer.</p>
			<figure class="highlight"><pre><code class="language-shell" data-lang="shell">git clone git://github.com/Wikiki/bulma-carousel.git</code></pre></figure>
		</div>
	</div>
</section>

<a href="#content" id="content" class="title is-4 has-text-weight-normal is-spaced anchor">
  <span class="anchor-name">Content</span>
</a>

<section class="section is-paddingless">
	<p>The component comes with various files:</p>
	<div class="file-tree">

	</div>
	<p>Depending on your need your can use either pre-compiled files from <code>dist</code> directory or sources from
		<code>src</code> directory.</p>
</section>

<a href="#html-structure" id="html-structure" class="title is-4 has-text-weight-normal is-spaced anchor">
  <span class="anchor-name">HTML Structure</span>
</a>

<section class="section is-paddingless">
	<p>The best way to start with carousel is to use a simple div to encaspulate your items. All child will then be used as Carousel Item. date input:</p>
	<div class="tabs">
		<ul>
			<li class="is-active"><a href="#classic-carousel">Classic Carousel</a></li>
			<li><a href="#hero-carousel">Hero Carousel</a></li>
		</ul>
	</div>

	<div class="tab-contents">
		<div id="classic-carousel" class="tab-content is-active">
			<p><figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"carousel"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item-1"</span><span class="nt">&gt;&lt;/div&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item-2"</span><span class="nt">&gt;&lt;/div&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item-3"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure></p>
		</div>
		<div id="hero-carousel" class="tab-content">
			<p><figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;section</span> <span class="na">class=</span><span class="s">"hero is-medium has-carousel"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"hero-carousel"</span><span class="nt">&gt;</span>
		<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item-1"</span><span class="nt">&gt;&lt;/div&gt;</span>
		<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item-2"</span><span class="nt">&gt;&lt;/div&gt;</span>
		<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item-3"</span><span class="nt">&gt;&lt;/div&gt;</span>
	<span class="nt">&lt;/div&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"hero-head"</span><span class="nt">&gt;&lt;/div&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"hero-body"</span><span class="nt">&gt;&lt;/div&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"hero-foot"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/section&gt;</span></code></pre></figure></p>
		</div>
	</div>
</section>

<a href="#integration" id="integration" class="title is-4 has-text-weight-normal is-spaced anchor">
  <span class="anchor-name">Integration</span>
</a>

<section class="section is-paddingless">
	<article class="message is-warning">
		<div class="message-body">
			This component requires bulma.io to work. See <a href="https://bulma.io/documentation" target="_blank">bulma.io
				documentation</a> first to know how to install it.
		</div>
	</article>
	<p>You are only at 3 simple steps to work with bulmaCarousel.</p>
	<ul class="step-text">
		<li>
			<h6 class="title is-6">Include Stylesheet</h6>
			<p>The first step is to include the stylesheet into your project. You can use either the minified CSS version or
				the Sass source to integrate it into a more global project.</p>
			<div class="tabs">
				<ul>
					<li class="is-active"><a href="#include-css">Css</a></li>
					<li><a href="#include-sass">Sass</a></li>
				</ul>
			</div>

			<div class="tab-contents">
				<div id="include-css" class="tab-content is-active">
					<p><figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;link</span> <span class="na">href=</span><span class="s">"~bulma-carousel/dist/css/bulma-carousel.min.css"</span> <span class="na">rel=</span><span class="s">"stylesheet"</span><span class="nt">&gt;</span></code></pre></figure></p>
				</div>
				<div id="include-sass" class="tab-content">
					<p><figure class="highlight"><pre><code class="language-html" data-lang="html">@charset "utf-8"

// Import Bulma core
@import 'bulma.sass'

// Import component
@import "bulmaCarousel.sass"</code></pre></figure></p>
				</div>
			</div>
		</li>
		<li>
			<h6 class="title is-6">Include JavaScript</h6>
			<p>Second step is to include the JavaScript part of the component.</p>
			<div class="tabs">
				<ul>
					<li class="is-active"><a href="#import-es5">ES5</a></li>
					<li><a href="#import-es6">ES6</a></li>
				</ul>
			</div>

			<div class="tab-contents">
				<div id="import-es5" class="tab-content is-active">
					<p><figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"~bulma-carousel/dist/js/bulma-carousel.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span></code></pre></figure></p>
				</div>
				<div id="import-es6" class="tab-content">
					<p><figure class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="kr">import</span> <span class="nx">bulmaCarousel</span> <span class="nx">from</span> <span class="s1">'~bulma-carousel/dist/js/bulma-carousel.min.js'</span><span class="p">;</span></code></pre></figure></p>
				</div>
			</div>
		</li>
		<li>
			<h6 class="title is-6">Initiate component</h6>
			<p>Now all that remains is to intiate the component to all elements you want to transform into a Carousel</p>
			<article class="message is-warning">
				<div class="message-body">
					The <code>attach()</code> method <strong>always</strong> return an array of Carousel instances (even if it
					targets only one element).
				</div>
			</article>
			<article class="message is-warning">
				<div class="message-body">
					Instantiation method is the same for classic & hero carousel.
				</div>
			</article>
			<div class="tabs">
				<ul>
					<li class="is-active"><a href="#init-es5">ES5</a></li>
					<li><a href="#init-es6">ES6</a></li>
				</ul>
			</div>

			<div class="tab-contents">
				<div id="init-es5" class="tab-content is-active">
					<p><figure class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="c1">// Initialize all div with carousel class</span>
<span class="kd">var</span> <span class="nx">carousels</span> <span class="o">=</span> <span class="nx">bulmaCarousel</span><span class="p">.</span><span class="nx">attach</span><span class="p">(</span><span class="s1">'.carousel'</span><span class="p">,</span> <span class="nx">options</span><span class="p">);</span>

<span class="c1">// Loop on each carousel initialized</span>
<span class="k">for</span><span class="p">(</span><span class="kd">var</span> <span class="nx">i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nx">i</span> <span class="o">&lt;</span> <span class="nx">carousels</span><span class="p">.</span><span class="nx">length</span><span class="p">;</span> <span class="nx">i</span><span class="o">++</span><span class="p">)</span> <span class="p">{</span>
	<span class="c1">// Add listener to  event</span>
	<span class="nx">carousels</span><span class="p">[</span><span class="nx">i</span><span class="p">].</span><span class="nx">on</span><span class="p">(</span><span class="s1">'before:show'</span><span class="p">,</span> <span class="nx">state</span> <span class="o">=&gt;</span> <span class="p">{</span>
		<span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span><span class="nx">state</span><span class="p">);</span>
	<span class="p">});</span>
<span class="p">}</span>

<span class="c1">// To access to bulmaCarousel instance of an element</span>
<span class="kd">var</span> <span class="nx">element</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'#my-element'</span><span class="p">);</span>
<span class="k">if</span> <span class="p">(</span><span class="nx">element</span><span class="p">)</span> <span class="p">{</span>
	<span class="c1">// bulmaCarousel instance is available as element.bulmaCarousel</span>
	<span class="nx">element</span><span class="p">.</span><span class="nx">bulmaCarousel</span><span class="p">.</span><span class="nx">on</span><span class="p">(</span><span class="s1">'before-show'</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span><span class="nx">state</span><span class="p">)</span> <span class="p">{</span>
		<span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span><span class="nx">state</span><span class="p">);</span>
	<span class="p">});</span>
<span class="p">}</span></code></pre></figure></p>
				</div>
				<div id="init-es6" class="tab-content">
					<p><figure class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="c1">// Initialize all input of date type.</span>
<span class="kr">const</span> <span class="nx">carousels</span> <span class="o">=</span> <span class="nx">bulmaCarousel</span><span class="p">.</span><span class="nx">attach</span><span class="p">(</span><span class="s1">'.carousel'</span><span class="p">,</span> <span class="nx">options</span><span class="p">);</span>

<span class="c1">// To access to bulmaCarousel instance of an element</span>
<span class="kr">const</span> <span class="nx">element</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">'#my-element'</span><span class="p">);</span>
<span class="k">if</span> <span class="p">(</span><span class="nx">element</span><span class="p">)</span> <span class="p">{</span>
	<span class="c1">// bulmaCarousel instance is available as element.bulmaCarousel</span>
<span class="p">}</span></code></pre></figure></p>
				</div>
			</div>
		</li>
	</ul>
</section>

<a href="#options" id="options" class="title is-4 has-text-weight-normal is-spaced anchor">
  <span class="anchor-name">Options</span>
</a>

<div class="table-container">
  <table class="table is-bordered ">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Default value</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Default value</th>
      </tr>
    </tfoot>
    <tbody>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">initialSlide</code>
          </td>
          <td >
            Initial item index
          </td>
          <td>
            <code>0</code>
          </td>
        </tr>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">slidesToScroll</code>
          </td>
          <td >
            Slide to scroll on each step
          </td>
          <td>
            <code>1</code>
          </td>
        </tr>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">slidesToShow</code>
          </td>
          <td >
            Slides to show at a time
          </td>
          <td>
            <code>1</code>
          </td>
        </tr>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">navigation</code>
          </td>
          <td >
            Display navigation buttons
          </td>
          <td>
            <code>true</code>
          </td>
        </tr>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">navigationKeys</code>
          </td>
          <td >
            Enable navigation with arrow keys
          </td>
          <td>
            <code>true</code>
          </td>
        </tr>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">navigationSwipe</code>
          </td>
          <td >
            Enable swipe navigation
          </td>
          <td>
            <code>true</code>
          </td>
        </tr>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">pagination</code>
          </td>
          <td >
            Display pagination bullets
          </td>
          <td>
            <code>true</code>
          </td>
        </tr>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">loop</code>
          </td>
          <td >
            Activate loop display mode
          </td>
          <td>
            <code>false</code>
          </td>
        </tr>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">infinite</code>
          </td>
          <td >
            Activate infinite display mode
          </td>
          <td>
            <code>false</code>
          </td>
        </tr>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">effect</code>
          </td>
          <td >
            Animation effect for item transition (translate|fade)
          </td>
          <td>
            <code>translate</code>
          </td>
        </tr>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">duration</code>
          </td>
          <td >
            Transition animation duration (in ms)
          </td>
          <td>
            <code>300</code>
          </td>
        </tr>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">timing</code>
          </td>
          <td >
            Transiation animation type
          </td>
          <td>
            <code>ease</code>
          </td>
        </tr>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">autoplay</code>
          </td>
          <td >
            Autoplay carousel
          </td>
          <td>
            <code>false</code>
          </td>
        </tr>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">autoplaySpeed</code>
          </td>
          <td >
            Time between each transition when autoplay is active (ms)
          </td>
          <td>
            <code>3000</code>
          </td>
        </tr>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">pauseOnHover</code>
          </td>
          <td >
            Stop autoplay when cursor hover carousel
          </td>
          <td>
            <code>true</code>
          </td>
        </tr>
      
        <tr>
          <td >
            <code style="white-space: nowrap;">breakpoints</code>
          </td>
          <td >
            List all breakpoints for responsiveness
          </td>
          <td>
            <code>[{ changePoint: 480, slidesToShow: 1, slidesToScroll: 1 }, { changePoint: 640, slidesToShow: 2, slidesToScroll: 2 }, { changePoint: 768, slidesToShow: 3, slidesToScroll: 3 } ]</code>
          </td>
        </tr>
      
    </tbody>
  </table>
</div>


<article class="message is-info">
	<div class="message-body">
		Options can be set using input data attributes. Just convert option name to dashes.<br />
		<i>For example if you want to init a deta picker using inline display style with range capability and a validate
			button:</i>
		<figure class="highlight"><pre><code class="language-html" data-lang="html">BLOP</code></pre></figure>
	</div>
</article>

<a href="#methods" id="methods" class="title is-4 has-text-weight-normal is-spaced anchor">
  <span class="anchor-name">Methods</span>
</a>

<section class="section is-paddingless">
	<p>Carousel component provides some public methods to manually work with it.</p>
	
<div class="table-container">
  <table class="table is-bordered is-fullwidth ">
    <thead>
      <tr>
        <th colspan="3">next()</th>
      </tr>
      <tr>
        <th colspan="3"><span class="has-text-weight-light">Slide to next item</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="3">
          <span class="title is-7">Parameters</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">none</code>
        </td>
        <td>
          <span></span>
        </td>
        <td>
          <span></span>
        </td>
      </tr>
      
      <tr>
        <td colspan="3">
          <span class="title is-7">Return values</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">none</code>
        </td>
        <td colspan="2">
          <span></span>
        </td>
      </tr>
      
    </tbody>
  </table>
</div>

<div class="table-container">
  <table class="table is-bordered is-fullwidth ">
    <thead>
      <tr>
        <th colspan="3">previous()</th>
      </tr>
      <tr>
        <th colspan="3"><span class="has-text-weight-light">Slide to previous item</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="3">
          <span class="title is-7">Parameters</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">none</code>
        </td>
        <td>
          <span></span>
        </td>
        <td>
          <span></span>
        </td>
      </tr>
      
      <tr>
        <td colspan="3">
          <span class="title is-7">Return values</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">none</code>
        </td>
        <td colspan="2">
          <span></span>
        </td>
      </tr>
      
    </tbody>
  </table>
</div>

<div class="table-container">
  <table class="table is-bordered is-fullwidth ">
    <thead>
      <tr>
        <th colspan="3">start()</th>
      </tr>
      <tr>
        <th colspan="3"><span class="has-text-weight-light">Start autoplay</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="3">
          <span class="title is-7">Parameters</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">none</code>
        </td>
        <td>
          <span></span>
        </td>
        <td>
          <span></span>
        </td>
      </tr>
      
      <tr>
        <td colspan="3">
          <span class="title is-7">Return values</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">none</code>
        </td>
        <td colspan="2">
          <span></span>
        </td>
      </tr>
      
    </tbody>
  </table>
</div>

<div class="table-container">
  <table class="table is-bordered is-fullwidth ">
    <thead>
      <tr>
        <th colspan="3">stop()</th>
      </tr>
      <tr>
        <th colspan="3"><span class="has-text-weight-light">Stop autoplay</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="3">
          <span class="title is-7">Parameters</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">none</code>
        </td>
        <td>
          <span></span>
        </td>
        <td>
          <span></span>
        </td>
      </tr>
      
      <tr>
        <td colspan="3">
          <span class="title is-7">Return values</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">none</code>
        </td>
        <td colspan="2">
          <span></span>
        </td>
      </tr>
      
    </tbody>
  </table>
</div>

<div class="table-container">
  <table class="table is-bordered is-fullwidth ">
    <thead>
      <tr>
        <th colspan="3">show(index, force)</th>
      </tr>
      <tr>
        <th colspan="3"><span class="has-text-weight-light">Show item at "index" a</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="3">
          <span class="title is-7">Parameters</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">index</code>
        </td>
        <td>
          <span>Integer|null</span>
        </td>
        <td>
          <span>Index of item to show</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">force</code>
        </td>
        <td>
          <span>Boolean</span>
        </td>
        <td>
          <span>Animate transition if true (default) or not if false</span>
        </td>
      </tr>
      
      <tr>
        <td colspan="3">
          <span class="title is-7">Return values</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">none</code>
        </td>
        <td colspan="2">
          <span></span>
        </td>
      </tr>
      
    </tbody>
  </table>
</div>

<div class="table-container">
  <table class="table is-bordered is-fullwidth ">
    <thead>
      <tr>
        <th colspan="3">reset()</th>
      </tr>
      <tr>
        <th colspan="3"><span class="has-text-weight-light">Reset Carousel to initial values</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="3">
          <span class="title is-7">Parameters</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">none</code>
        </td>
        <td>
          <span></span>
        </td>
        <td>
          <span></span>
        </td>
      </tr>
      
      <tr>
        <td colspan="3">
          <span class="title is-7">Return values</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">none</code>
        </td>
        <td colspan="2">
          <span></span>
        </td>
      </tr>
      
    </tbody>
  </table>
</div>

</section>

<a href="#getters" id="getters" class="title is-4 has-text-weight-normal is-spaced anchor">
  <span class="anchor-name">Getters</span>
</a>

<section class="section is-paddingless">
	<p>Carousel component provides some public Getters to manually access properties.</p>
	<div class="table-container">
  <table class="table is-bordered ">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>Name</th>
        <th>Description</th>
      </tr>
    </tfoot>
    <tbody>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">id</code>
        </td>
        <td>
          <span>Get component instance ID</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">index</code>
        </td>
        <td>
          <span>Get active item index</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">length</code>
        </td>
        <td>
          <span>Get number of items</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">slides</code>
        </td>
        <td>
          <span>Get all items as array</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">slidesToScroll</code>
        </td>
        <td>
          <span>Get current slidesToScroll</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">slidesToShow</code>
        </td>
        <td>
          <span>Get current slidesToShow</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">direction</code>
        </td>
        <td>
          <span>Get direction (rtl or ltr)</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">wrapper</code>
        </td>
        <td>
          <span>Get Carousel wrapper</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">wrapperWidth</code>
        </td>
        <td>
          <span>Get Carousel wrapper width</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">container</code>
        </td>
        <td>
          <span>Get Carousel container</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">containerWidth</code>
        </td>
        <td>
          <span>Get Carousel container width</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">slideWidth</code>
        </td>
        <td>
          <span>Get slide with</span>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">transitioner</code>
        </td>
        <td>
          <span>Get transitioner</span>
        </td>
      </tr>
      
    </tbody>
  </table>
</div>
</section>

<a href="#events" id="events" class="title is-4 has-text-weight-normal is-spaced anchor">
  <span class="anchor-name">Events</span>
</a>

<section class="section is-paddingless">
	<p>Carousel component comes with Events Management API so you can easily react to its behavior.</p>
	<div class="table-container">
  <table class="table is-bordered ">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Values</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Values</th>
      </tr>
    </tfoot>
    <tbody>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">ready</code>
        </td>
        <td>
          <span>Triggered when carousel is intialized (DO NOT USE IT but pass callback into the onReady option)</span>
        </td>
        <td>
          <code>bulmaCarousel State object instance</code>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">before:show</code>
        </td>
        <td>
          <span>Triggered before showing item</span>
        </td>
        <td>
          <code>bulmaCarousel State object instance</code>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">show</code>
        </td>
        <td>
          <span>Triggered when item is displayed</span>
        </td>
        <td>
          <code>bulmaCarousel State object instance</code>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">after:show</code>
        </td>
        <td>
          <span>Triggered once item has been displayed</span>
        </td>
        <td>
          <code>bulmaCarousel State object instance</code>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">start</code>
        </td>
        <td>
          <span>Triggered when autoplay start</span>
        </td>
        <td>
          <code>bulmaCarousel State object instance</code>
        </td>
      </tr>
      
      <tr>
        <td>
          <code style="white-space: nowrap;">stop</code>
        </td>
        <td>
          <span>Triggered when autoplay stop</span>
        </td>
        <td>
          <code>bulmaCarousel State object instance</code>
        </td>
      </tr>
      
    </tbody>
  </table>
</div>
</section>
        </div>
      </section>
    </div>
  </div>

  <script src="{{asset('js/bulma-carousel.min.js')}}"></script>
</body>

</html>