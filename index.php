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
	<h1 class="text-center">Brief Generator to help build <a target="_blank" title="TomDoc specifications" href="http://tomdoc.org/">TomDoc</a> code documentation</h1>
</header>

<section id="type_selection" class="text-center">
	<div class="btn-group">
		<a class="btn btn-info btn-large" id="type-method" href="#">Method</a> 
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
				<option value="php">PHP</option>
				<option value="javascript">JavaScript</option>
				<option value="ruby">Ruby</option>
			</select>
		</label>
	</fieldset>
</section>

<section id="components">
	<fieldset id="method-components">
		<span class="help-block">
			A TomDoc method block consists of five optional sections: a description section, an arguments section, a yields section, an examples section, a returns section, and a signature section.
			Lines that contain text MUST be separated from the comment marker by a single space. Lines that do not contain text SHOULD consist of just a comment marker (no trailing spaces).
		</span>
		<section id="method-description">
			<p class="help-block">The description section SHOULD be in plain sentences. Each sentence SHOULD end with a period. Good descriptions explain what the code does at a high level. Make sure to explain any unexpected behavior that the method may have, or any pitfalls that the user may experience. Paragraphs SHOULD be separated with blank lines. Code within the description section should be indented three spaces from the starting comment symbol. Lines SHOULD be wrapped at 80 characters.</p>
			<p class="help-block">To describe the status of a method, you SHOULD use one of several prefixes:</p>
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