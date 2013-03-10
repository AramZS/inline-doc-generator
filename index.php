<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Inline Documentation Generator</title>
	<script type="text/javascript" src="lib/jquery/jquery-1.9.1.js"></script>
	<link rel="stylesheet" id="bootstrap-style-css" href="lib/bootstrap/css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" id="bootstrap-responsive-style-css" href="lib/bootstrap/css/bootstrap-responsive.css" type="text/css" media="all">
	<script type="text/javascript" src="lib/bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" id="doc-gen-css" href="assets/css/style.css" type="text/css" media="all">
	<script type="text/javascript" src="assets/js/implementation.js"></script>
</head>

<body>

<header>
	<h1 class="text-center">Brief Generator to help build <a target="_blank" title="TomDoc specifications" href="http://tomdoc.org/">TomDoc</a> and <a target="_blank" title="Docblock Comment standards" href="http://pear.php.net/manual/en/standards.sample.php">Pear</a> code documentation</h1>
</header>

<section id="type_selection" class="text-center">
	<div class="btn-group">
		<a class="btn btn-info btn-large active type-btn" id="type-method" href="#">Function/Method</a> 
		<a class="btn btn-large type-btn" id="type-class-module" href="#">Class/Module</a> 
		<a class="btn btn-large type-btn" id="type-constant" href="#">Constant</a>
		<a class="btn btn-large type-btn" id="type-constant" href="#">Block Comment</a>
	</div>
</section>

<section id="constants" class="text-center">
	<fieldset>
		<label>Escape Character: <input type="text" placeholder="#"></label>
		<label>Project Version: <input type="text" placeholder="1.7.1"></label>
		<label>Language: 
			<select>
				<option value="php">PHP (Perl)</option>
<!--			<option value="javascript">JavaScript</option>
				<option value="ruby">Ruby (TomDoc)</option>         -->
			</select>
		</label>
	</fieldset>
</section>

<section id="components">
	<fieldset id="method-components function-components class-components">
		<span class="help-block">
			<span class="ruby-method">A TomDoc method block consists of five optional sections: <strong>a description section, an arguments section, a yields section, an examples section, a returns section, and a signature section</strong>.</span>
			Lines that contain text MUST be separated from the comment marker by a single space. Lines that do not contain text SHOULD consist of just a comment marker (no trailing spaces).
			Summaries for methods should use 3rd person declarative rather than 2nd person imperative, beginning with a verb phrase.
		</span>
		<section id="method-description" class="php ruby php-class php-function ruby-method">
			<div class="help-block row-fluid grid help-standout">
				<div class="span4 help-standout-block"><figure>The description section SHOULD be in plain sentences. Each sentence SHOULD end with a period. Good descriptions explain what the code does at a high level. Make sure to explain any unexpected behavior that the method may have, or any pitfalls that the user may experience.</figure></div> 
				
				<div class="span4 help-standout-block"><figure>Paragraphs SHOULD be separated with blank lines. Code within the description section should be indented three spaces from the starting comment symbol. Lines SHOULD be wrapped at 80 characters.</figure></div>
				
				<div class="span4 help-standout-block"><figure>Examples are visible <a target="_blank" title="TomDoc specifications" href="http://tomdoc.org/">at the specification site</a>.</figure></div>
			</div>
			<div class="clear"><hr /></div>
			<p class="help-block">To describe the status of a method, you SHOULD use one of several prefixes:</p>
			<section class="row-fluid show-grid grid" class="php ruby php-class php-function ruby-method">
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
			<section class="php php-class php-function input-box">
				<span class="help-block">Designate the Origonal Author of this function.</span>
				<div id="authors-box">
					<label class="authors">Author: <input type="text" placeholder="authorname"></label>
				</div>
				<a class="add-more btn offset1" id="more-authors">Add Another Authors</a>
			</section>
			<section class="php php-class php-function input-box">
				<span class="help-block">In what version is this in now?</span>
				<label>Version: <input type="text" placeholder="1.7"></label>
			</section>
			<section class="php php-class php-function input-box">
				<span class="help-block">Designate a link about or as a source of this function.</span>
				<div id="links-box">
					<label class="links">URL: <input type="text" placeholder="http://aramzs.me"></label>
				</div>
				<a class="add-more btn offset1" id="more-links">Add Another Link</a>
			</section>
			<section class="php php-class php-function input-box">
				<span class="help-block">Notify other developers of related or dependent functions. Functions should be comma seperated.</span>
				<div id="other-functions-box">
					<label>Functions: <input type="text" placeholder="NetOther, Net_Sample::Net_Sample()"></label>
				</div>
			</section>
			<section class="php php-class php-function input-box">
				<span class="help-block">Since what version has this function existed?</span>
				<label>Version: <input type="text" placeholder="1.3"></label>
			</section>
			<section class="php php-class php-function input-box">
				<span class="help-block">When, if ever, was the file depreciated?</span>
				<label>Version: <input type="text" placeholder="1.8"></label>
			</section>
			<section class="php php-class php-function input-box">
				<span class="help-block">What is still left to do?</span>
				<div id="todo-box">
					<label>To do: <input type="text" placeholder="Build some stuff"></label>
				</div>
				<a class="add-more btn offset1" id="more-todo">Add Another To Do</a>
			</section>					
		</section>
		<section id="method-arguments" class="php ruby php-function ruby-method">
			<span class="help-block">The arguments section consists of a list of arguments. The expected type (or types) of each argument SHOULD be clearly indicated in the explanation. When you specify a type, use the proper classname of the type. If the argument has other constraints, simply state those requirements. Say object rather than mixed.</span> 
			<section id="parameters" class="input-box">
				<section class="parameter">
					<section class="input-box">
						<span class="help-block">Select Paramater Type.</span>
						<div id="other-functions-box">
							<label>Param:
								<select>
									<option value="int">Integer</option>
									<option value="string">String</option>
									<option value="array">Array</option>
									<option value="object">Object</option>
									<option value="bool">Boolean</option>
									<option value="float">Float</option>
									<option value="resource">Resource</option>
									<option value="mixed">Mixed</option>
								</select>
							</label>
						</div>
					</section>
					<section class="input-box">
						<span class="help-block">Enter paramater name as it appears in the function.</span>
						<label>$<input type="text" placeholder="arg1"></label>
					</section>	
					<section class="input-box">
						<label>Describe your paramater, the name of the paramater or argument type should be included in this description: 
							<textarea rows="7" cols="80" placeholder="Description">
							</textarea>
						</label>
					</section>					
				</section>
				<a class="add-more btn offset1" id="more-parameters">Add Another Parameter</a>
			</section>			
		</section>
		<section id="method-returns" class="php ruby php-function ruby-method">
			<section id="returns" class="php ruby">
				<span class="help-block php">Return tags should contain the data type then a description of the data returned.  The data type should contain the type primarily returned.  For example, if a method returns an object when things work correctly but false when an error happens, say 'object' rather than 'mixed.'  Use 'void' if nothing is returned.</span>
				<section class="input-box">
							<span class="help-block">Select Paramater Type.</span>
							<div id="other-functions-box">
								<label>Param:
									<select>
										<option value="int">Integer</option>
										<option value="string">String</option>
										<option value="array">Array</option>
										<option value="object">Object</option>
										<option value="bool">Boolean</option>
										<option value="float">Float</option>
										<option value="resource">Resource</option>
										<option value="mixed">Mixed</option>
										<option value="void">Void</option>
									</select>
								</label>
							</div>
				</section>
				<section class="input-box">
							<label>Describe the returned paramater, the name of the paramater or argument type should be included in this description. If it returns something different on failure, include that here:<br /> 
								<textarea rows="7" cols="80" placeholder="Description">
								</textarea>
							</label>
				</section>
			</section>
			<section id="exceptions" class="php">
				<span class="help-block php">The throws tag states your exception class and describes it. The @throws tag is required if the method uses exceptions.</span>
				<section class="input-box">
							<label>Exception class: 
								<textarea rows="7" cols="80" placeholder="exceptionclass">
								</textarea>
							</label>
				</section>
			</section>
			<section id="static" class="php">
				<span class="help-block">Tell users if your function is static.</span>
				<section class="input-box">
					<label>Can the function be called statically? <br />
					<input type="checkbox" name="static" value="static">Yes
					</label>
				</section>
			</section>
		</section>
	</fieldset>	
</section>

<section id="block-comment" style="display:none;">
	<section class="input-box">
		<label>Enter your plaintext comment here.<br /> 
			<textarea rows="7" cols="80" placeholder="Long comment">
			</textarea>
		</label>
	</section>	
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

	<section id="usethis" style="display:none;">

				<section source-spawn="more-parameters" class="parameter input-box">
					<section class="input-box">
						<span class="help-block">Select Return Type.</span>
						<div id="other-functions-box">
							<label>Returns:
								<select>
									<option value="int">Integer</option>
									<option value="string">String</option>
									<option value="array">Array</option>
									<option value="object">Object</option>
									<option value="bool">Boolean</option>
									<option value="float">Float</option>
								</select>
							</label>
						</div>
					</section>
					<section class="input-box">
						<span class="help-block">Enter paramater name as it appears in the function.</span>
						<label>$<input type="text" placeholder="arg1"></label>
					</section>	
					<section class="input-box">
						<label>Describe your paramater, the name of the paramater or argument type should be included in this description: 
							<textarea rows="7" cols="80" placeholder="Long description (if any)...">
							</textarea>
						</label>
					</section>					
				</section>	
	
				<label class="links" source-spawn="more-links">URL: <input type="text" placeholder="http://aramzs.me"></label>
				
				<label class="authors" source-spawn="more-authors">Author: <input type="text" placeholder="authorname"></label>

				<label class="todos" source-spawn="more-todos">To do: <input type="text" placeholder="Build some stuff"></label>
				
	</section>

</footer>

</body>

</html>