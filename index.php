<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>TomDoc Generator</title>
	<script type="text/javascript" src="lib/jquery/jquery-1.9.1.js"></script>
	<link rel="stylesheet" id="bootstrap-style-css" href="lib/bootstrap/css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" id="bootstrap-responsive-style-css" href="lib/bootstrap/css/bootstrap-responsive.css" type="text/css" media="all">
	<script type="text/javascript" src="lib/bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" id="tomdoc-gen-css" href="assets/css/style.css" type="text/css" media="all">
	<script type="text/javascript" src="assets/js/implementation.js"></script>
</head>

<body>

<header>
	<h1 class="text-center">Brief Generator to help build <a target="_blank" title="TomDoc specifications" href="http://tomdoc.org/">TomDoc</a> and <a target="_blank" title="Docblock Comment standards" href="http://pear.php.net/manual/en/standards.sample.php">Pear</a> code documentation</h1>
</header>

<section id="type_selection" class="text-center">
	<div class="btn-group">
		<a class="btn btn-info btn-large" id="type-method" href="#">Function/Method</a> 
		<a class="btn btn-info btn-large" id="type-class-module" href="#">Class/Module</a> 
		<a class="btn btn-info btn-large" id="type-constant" href="#">Constant</a>
	</div>
</section>

<section id="constants" class="text-center">
	<fieldset>
		<label>Escape Character: <input type="text" placeholder="#"></label>
		<label>Version: <input type="text" placeholder="1.7.1"></label>
		<label>Language: 
			<select>
				<option value="php">PHP (Perl)</option>
				<option value="javascript">JavaScript</option>
				<option value="ruby">Ruby (TomDoc)</option>
			</select>
		</label>
	</fieldset>
</section>

<section id="components">
	<fieldset id="components">
		<span class="help-block">
			A TomDoc method block consists of five optional sections: <strong>a description section, an arguments section, a yields section, an examples section, a returns section, and a signature section</strong>.
			Lines that contain text MUST be separated from the comment marker by a single space. Lines that do not contain text SHOULD consist of just a comment marker (no trailing spaces).
		</span>
		<section id="method-description" class="php-class php-function ruby-method">
			<div class="help-block row-fluid grid help-standout">
				<div class="span4 help-standout-block"><figure>The description section SHOULD be in plain sentences. Each sentence SHOULD end with a period. Good descriptions explain what the code does at a high level. Make sure to explain any unexpected behavior that the method may have, or any pitfalls that the user may experience.</figure></div> 
				
				<div class="span4 help-standout-block"><figure>Paragraphs SHOULD be separated with blank lines. Code within the description section should be indented three spaces from the starting comment symbol. Lines SHOULD be wrapped at 80 characters.</figure></div>
				
				<div class="span4 help-standout-block"><figure>Examples are visible <a target="_blank" title="TomDoc specifications" href="http://tomdoc.org/">at the specification site</a>.</figure></div>
			</div>
			<div class="clear"><hr /></div>
			<p class="help-block">To describe the status of a method, you SHOULD use one of several prefixes:</p>
			<section class="row-fluid show-grid grid" class="php-class php-function ruby-method">
				<div class="span4 select-figure" id="method-description-public">
					<figure>
						<header>
							<h5 class="text-center">Public:</h5>
						</header>
						<p>Indicates that the method is part of the project's <strong>public API</strong>. This annotation is designed to let developers know which methods are considered stable. You SHOULD use this to document the public API of your project. This information can then be used along with <a target="_blank" title="Semantic Versioning Specifications" href="http://semver.org/">Semantic Versioning</a> to inform decisions on when major, minor, and patch versions should be incremented.</p>
						<footer>
							<div class="text-center"><a class="btn btn-success btn-small" id="method-description-public-select" href="#">Select 'Public'</a></div>
						</footer>
					</figure>
				</div>
				<div class="span4 select-figure" id="method-description-internal">
					<figure>
						<header>
							<h5 class="text-center">Internal:</h5>
						</header>
						<p>Indicates that the method is part of the project's internal API. These are methods that are intended to be called from other classes within the project but <strong>not intended for public consumption</strong>.</p>
						<footer>
							<div class="text-center"><a class="btn btn-success btn-small" id="method-description-internal-select" href="#">Select 'Internal'</a></div>
						</footer>
					</figure>
				</div>
				<div class="span4 select-figure" id="method-description-deprecated">
					<figure>
						<header>
							<h5 class="text-center">Deprecated:</h5>
						</header>
						<p>Indicates that the method is deprecated and will be removed in a future version. You SHOULD use this to document methods that were Public but will be removed at the next major version.</p>
						<footer>
							<div class="text-center"><a class="btn btn-success btn-small" id="method-description-deprecated-select" href="#">Select 'Deprecated'</a></div>
						</footer>
					</figure>
				</div>
			<div class="clear"><hr /></div>
			<div id="method-description-short" class="input-box">
				<label>Summerize your function: 
					<input type="text" placeholder="Short description">
				</label>
			</div>				
			<div id="method-description-long" class="input-box">
				<label>Describe your function: 
					<textarea rows="7" cols="80" placeholder="Long description (if any)...">
					</textarea>
				</label>
			</div>
			</section>
			<section class="php-class php-function input-box">
				<span class="help-block">Designate the Origonal Author of this function.</span>
				<div id="authors-box">
					<label>Author: <input type="text" placeholder="authorname"></label>
				</div>
				<a class="add-more btn offset1" id="more-authors">Add Another Authors</a>
			</section>
			<section class="php-class php-function input-box">
				<span class="help-block">In what version is this in now?</span>
				<label>Version: <input type="text" placeholder="1.7"></label>
			</section>
			<section class="php-class php-function input-box">
				<span class="help-block">Designate a link about or as a source of this function.</span>
				<div id="links-box">
					<label>URL: <input type="text" placeholder="http://aramzs.me"></label>
				</div>
				<a class="add-more btn offset1" id="more-links">Add Another Link</a>
			</section>
			<section class="php-class php-function input-box">
				<span class="help-block">Notify other developers of related or dependent functions. Functions should be comma seperated.</span>
				<div id="other-functions-box">
					<label>Functions: <input type="text" placeholder="NetOther, Net_Sample::Net_Sample()"></label>
				</div>
				<a class="add-more btn offset1" id="more-links">Add Another Link</a>
			</section>
			<section class="php-class php-function input-box">
				<span class="help-block">Since what version has this function existed?</span>
				<label>Version: <input type="text" placeholder="1.3"></label>
			</section>
			<section class="php-class php-function input-box">
				<span class="help-block">When, if ever, was the file depreciated?</span>
				<label>Version: <input type="text" placeholder="1.8"></label>
			</section>					
		</section>
		<section id="method-description">
		</section>
	</fieldset>	
</section>

<section id="builder">

</section>

<section id="output">
	<output>
		<code>
		
		</code>	
	</output>
</section>

<footer>

	<section id="usethis">

	</section>

</footer>

</body>

</html>