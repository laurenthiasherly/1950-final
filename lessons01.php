
<?php include("nav.php") ?>

	<main> 
		<div id="lessonsBanner" class="banner">
			<div class="banner-overlay">
				<h1>Lessons</h1>
			</div>
		</div>

		<article class="lessons">

			<section class="lesson-header" id="lesson-top">
				<div>
					<h2>Lesson 01</h2>
					<p><a href="lessons.php" class="link-previous" title="previous section"><</a></p>
					<p><a href="lessons02.php" class="link-next" title="next section">></a></p>
				</div>
			</section>

			<section class="lesson-agenda">
				<h3>Agenda</h3>
				<ul>
					<li><a href="#intro">Introductions</a></li>
					<li><a href="#orientation">Orientation</a></li>
					<li><a href="#tools">Web development tools</a></li>
					<li><a href="#standards">Standards based development</a></li>
					<li><a href="#to-do">To Do</a></li>
				</ul>
			</section>

			<section class="content" id="intro">
				<div>
					<h3>Introductions</h3>
					<p class="mini-nav">
						<a href="#orientation" title="next">&#x2193;</a>
						<a href="#lesson-top" title="previous">&#x2191;</a>
					</p>
				</div>
				<p><strong>Instructors:</strong> Jeff Parker (<a href="mailto:jeffrey_parker@bcit.ca">jeffrey_parker@bcit.ca</a>), Michael Whyte (<a href="michael_whyte@bcit.ca">michael_whyte@bcit.ca</a>)</p>
				<p><strong>Web site:</strong> This is it</p>
				<p><strong>All about you:</strong>
				<ul>
					<li>your name</li>
					<li>your background</li>
					<li>what do you hope to achieve in this course? Be specific!</li>
				</ul>
				<p><strong>Course Overview:</strong> Learn more <a href="about.php">about the course</a> to help you determine if this is the right class for you.</p>
			</section>

			<section class="content" id="orientation">
				<div>
					<h3>Orientation</h3>
					<p class="mini-nav">
						<a href="#tools" title="next">&#x2193;</a>
						<a href="#intro" title="previous">&#x2191;</a>
					</p>
				</div>
				<h4>Sharefile</h4>
				<p>BCIT lab computers are re-imaged each day. Files you save on the local C: drive of a lab computer will be erased after the computer power is cycled.</p>
				<h5>Options For Saving Files:</h5>
				<ul>
					<li>Use <a href="http://kb.bcit.ca/sr/sharefile/2052.shtml">BCIT Sharefile</a> to save your work</li>
					<li>Save your work to your personal USB or cloud storage account</li>
					<li>Use your own laptop in class, and dont use the BCIT lab computers</li>
				</ul>

				<h4>Course Materials</h4>
				<p>COMP 1950 homework assignments, quizzes, in class exercises and example code can be accessed via <a href="https://learn.bcit.ca/">Desire 2 Learn</a> (D2L). Use your BCIT student number and password to access D2L. Course materials will become avilable as the course progresses. It is your responsibility to log in and download files as they become available.</p>
				<p>If you have difficulty gaining access, consult the <a href="https://www.bcit.ca/distance/learnersupport/d2lhelp.shtml">D2L help documentation</a>, or contact BCIT Tech help desk at 604-412-7444 (Toll free: 1-800-351-5533).</p>

				<h4>Web space</h4>
				<p>Each student will get a personal webspace where you will publish your homework assignments. This is not a continuation of your COMP1850 site (if you had one). This site is primarily for you to house your exercises, assignments and group work. Make it a site that is usable and functional.</p>
				<ul>
					<li>Your instructor will create webspaces for each of you.</li>
					<li>Email your instructor this information:
						<ul>
							<li>your myBCIT email - eg: yourname123@my.BCIT.ca</li>
							<li>your student number - eg: A00123456</li>
							<li>a case sensitive password you will remember - ???</li>
						</ul>
					</li>
					<li>Take the name portion of your <strong>my.bcit.ca</strong> email address and use it at the end of the URL described below (eg: if your email address is '<em>yourname123@my.bcit.ca</em>', your email name is '<em>yourname123</em>', so your url would be '<em>http://bcitcomp.ca/students/yourname123</em>'</li>
					<li>For example: <strong>http://bcitcomp.ca/students/your_bcit_email_name</strong></li>
				</ul>

				<h4>Connect to your bcitcomp.ca account via FTP</h4>
				<p>Use Filezilla, or any FTP client to connect to bcitcomp.ca. The bcitcomp.ca server provides you with a space on the internet where you can publish your homework and assignments.</p>
				<ol>
					<li>Choose: <strong>File->SiteManager->New Site</strong>, then describe the FTP server, eg "bcitcomp.ca"</li>
					<li>Host: <strong>bcitcomp.ca</strong></li>
					<li>Port: <strong>21</strong></li>
					<li>User: <strong>{yourBCITStudentNumber}@bcitcomp.ca</strong> (use an uppercase <strong>A</strong> when typing your BCIT student number)</li>
					<li>Password: <strong>???</strong></li>
					<li>Servertype: <strong>FTP</strong> File Transfer Protocol</li>
					<li>LogonType: <strong>Normal</strong></li>
					<li>Click: <strong>Connect</strong></li>
					<li>If you experience connectivity problems, re-check your input, or ask your instructor for assistance.</li>
				</ol>
				<img src="images/lesson01_filezilla_screenshot.png" alt="The 'new site' form in Filezilla.">
			</section>

			<section class="content" id="tools">
				<div>
					<h3>Web development tools</h3>
					<p class="mini-nav">
						<a href="#standards" title="next">&#x2193;</a>
						<a href="#orientation" title="previous">&#x2191;</a>
					</p>
				</div>
				<h4>Visual Studio Code</h4>
				<p>There are several development tools to choose from. In COMP 1950 we will use the open source Integrated Devlopment Environment (IDE) from Microsoft called <a href="https://code.visualstudio.com/">Visual Studio Code</a> (VS Code). This is more than a simple text editor, it provides robust code editing, maintenance and testing features, as well as supporting plugins to further increase it's capabilities.</p>
				<p><strong>Lab Computers:</strong> VS Code should already be installed on COMP1950 lab computers. The executable is found at <strong>C:/Program Files/Microsoft VS Code/Code.exe</strong></p>
				<p><strong>Laptop / Home Desktop:</strong> <a href="#alt-downloads">Download VS Code</a> for Windows, Mac or Linux.</p>
				<p><strong>Exploring VS Code:</strong> Your instructor will demonstrate some of it's capabilities in class. On your own time, you may wish to review the <a href="https://code.visualstudio.com/docs">help documentation</a> 'Get Started' section to give yourself a better understanding of some of the basic features and functions provided by VS Code.</p>
				<ul>
					<li><a href="https://code.visualstudio.com/docs/introvideos/basics">Setup and basics of VS Code</a></li>
					<li><a href="https://code.visualstudio.com/docs">VS Code help documentation</a></li>
				</ul>

				<h4>Browser-based development</h4>
				<p>There are three major web browser platforms to consider:</p>
				<ul>
					<li>
						<a href="https://www.mozilla.org/en-US/">Mozilla</a>
						<ul>
							<li>This is the platform that <a href="https://www.mozilla.org/en-US/firefox/">Firefox</a> runs on</li>
							<li>Mozilla Foundation's web platform created by web developers</li>
							<li>Gecko rendering engine: fast and progressive</li>
							<li>Excellent level of standards compliance</li>
							<li>Corporate independence</li>
							<li>No built-in development tools</li>
							<li>Plethora of add-ons that make web development easy</li>
							<li>Add-ons have a downside: bloat</li>
						</ul>
					</li>
					<li>
						<a href="http://www.webkit.org/">WebKit</a>
						<ul>
							<li>This is the platform that gives us <a href="http://www.google.com/chrome">Chrome</a>, <a href="http://www.apple.com/safari/">Safari</a> and <a href="http://www.opera.com/">Opera</a>, with a few other smaller browsers out there as well.</li>
							<li>Excellent platform that is very fast and standards compliant</li>
							<li>Third parties can download the source, make local adjustments and release their own version, as Google and Apple have both done</li>
							<li>Standalone version can be downloaded at any time for the latest release</li>
							<li>Development is done via the built-in Developer Tools</li>
							<li>Initially a thin environment, recent releases have made Webkit-based browsers excellent for developers</li>
							<li>Macintosh based developers may need to <a href="http://www.jonhartmann.com/index.cfm/2011/4/28/Enabling-Safari-Developer-Tools">enable web developer options</a> in Safari before accessing the developer tools</li>
						</ul>
					</li>
					<li>
						<a href="https://www.microsoft.com/en-ca/">Microsoft</a>
						<ul>
							<li>The vendor for <a href="https://www.microsoft.com/en-ca/windows/microsoft-edge">Edge</a> and <a href="https://www.microsoft.com/en-ca/download/internet-explorer.aspx">Internet Explorer</a></li>
							<li>Microsoft's Edge is a major improvement on it's previous browser offerings.</li>
							<li>Edge offers very good standards compliance and browser tools.</li>
							<li>Do <strong>NOT</strong> use Internet Explorer as your development browser. It is one the least standards compliant of the browsers. It is also no longer supported with updates.</li>
						</ul>
					</li>
				</ul>
				<p>Remember to test your work in as many browsers as you can! <a href="http://browsershots.org/">BrowserShots</a> allows you to do basic testing for earlier versions of Chrome, Firefox, Safari, and Opera. If you need to test for early iterations of IE, try: <a href="http://netrenderer.com/">Netrenderer</a></p>

				<h4>Extensions</h4>
				<p>Extensions can add more functionality and features to your development browser.<p>
				<p>The <a href="http://chrispederick.com/work/web-developer/">Web Developer Toolbar</a> is available for Chrome, Firefox and Opera. Some useful features include:</p>
				<ul>
					<li>Disable styles - by embedded/linked/inline as well as all styles, or just a single sheet</li>
					<li>Edit CSS & HTML - Make live changes to your CSS or HTML!</li>
					<li>Images - outlining, file sizes, alt information... lots more</li>
					<li>Form detail - useful for working with form elements</li>
					<li>Cookie examination and manipulation</li>
					<li>Built in validators</li>
					<li>Line Guides & Rulers</li>
					<li>Element inspector</li>
				</ul>
				<p>Search online to see what is available for your development browser:</p>
				<ul>
					<li>Ad blockers</li>
					<li>Password managers</li>
					<li>Drawing on HTML pages</li>
					<li>Text to speech</li>
					<li>Etc, etc!</li>
				</ul>

				<h4>Browser Based Diagnostic Tools</h4>
				<p>As web pages get more complex, it can become difficult figuring out what is going on. For example, CSS rules that override other CSS rules, if spread across several files, can be challenge to make sense of. Having a diagnostic tool to assist in developing will make it easier to examine every detail of web pages.</p>
				<p>Most modern browsers have some kind of development environment that can be turned on or triggered via extensions and/or plug-ins.</p>
				<h5>Web Browser Tools:</h5>
				<ul>
					<li><a href="https://developer.mozilla.org/son/docs/Tools">Firefox</a></li>
					<li><a href="https://developers.google.com/chrome-developer-tools/">Chrome</a></li>
					<li><a href="https://developer.apple.com/safari/tools/">Safari</a></li>
					<li><a href="https://docs.microsoft.com/en-us/microsoft-edge/f12-devtools-guide">Edge</a></li>
				</ul>
				<p>Get familiar with using one of these tools. They are invaluable for understanding code and for finding, diagnosing, and fixing problems with code. You will be required to use them in the classes ahead. Practice adding/editing/removing both HTML and CSS using your development browser's built in tools.</p>
				<h5>Typical Features:</h5>
				<ul>
					<li>F12 key will toggle open/close the tools in most browsers</li>
					<li>The Elements/Inspector tab provides an overview of the HTML and CSS</li>
					<li>The Select tool can be used to analyze the structure of the page and understand he status of box models</li>
					<li>The Console will display Javascript behaviours and error messages</li>
				</ul>
				<p><strong>NOTE:</strong> changes you make with the tool are <strong>client based</strong>, and do not affect the server side HTML/CSS files. Client side changes made with this tool are temporary (they will be lost upon page refresh).</p>
				<p>The capabilities of these browser tools go well beyond outlining, examining and editing. They provide deep troubleshooting capabilities of the HTTP network, javascript and even XHR (XMLHttpRequest).</p>
			</section>

			<section class="content" id="standards">
				<div>
					<h3>Standards based development</h3>
					<p class="mini-nav">
						<a href="#to-do" title="next">&#x2193;</a>
						<a href="#tools" title="previous">&#x2191;</a>
					</p>
				</div>
				<h4>Standards: W3C</h4>
				<p>Just as those who manufacture physical goods are expected to follow the <a href="http://www.iso.org/">International Organization for Standards (ISO)</a>, web developers are expected to adhere to the standards described by the <a href="http://www.w3.org/">World Wide Web Consortium (W3C)</a>.</p>
				<h5>W3C: World Wide Web Consortium</h5>
				<ul>
					<li>Web standards have gone through the same process that the ISO went through</li>
					<li>Many companies see the benefits of interoperability - a few are still "forging their own"</li>
					<li>Many companies have standards: Adobe, Microsoft, Apple, Ford, GM</li>
					<li>Many are proprietary standards, and are not supported by other companies</li>
					<li>W3C - World Wide Web Consortium: founded by Tim Berners-Lee to try and uniformly put forward standards through a single communication vehicle</li>
					<li>Leading browser makers did not follow, initially</li>
					<li>Designers were 'taking sides' in the browser wars: users were losers</li>
					<li>Most modern browsers are fairly standards compliant</li>
				</ul>
				<h5>W3C Goals</h5>
				<ol>
					<li><strong>Universal Access:</strong> To make the Web accessible to all by promoting technologies that take into account the vast differences in culture, languages, education, ability, material resources, access devices, and physical limitations of users on all continents;</li>
					<li><strong>Semantic Web:</strong> To develop a software environment that permits each user to make the best use of the resources available on the Web;</li>
					<li><strong>Web of Trust:</strong> To guide the Web's development with careful consideration for the novel legal, commercial, and social issues raised by this technology.</li>
				</ol>
				<p>Why web developers should follow W3C standards:</p>
				<ul>
					<li>Your pages will be viewable in the largest number of browsers</li>
					<li>Increase interoperability with other clients (search engines, screen readers)</li>
					<li>Web sites will gracefully degrade as support for CSS or other presentation layers are absent.</li>
					<li>Code that doesn't follow standards cannot be expected to behave predictably in the various web browsers</li>
					<li>Non standard code is hard to support</li>
					<li>Re-engineering and/or maintaining poorly coded websites can be very difficult, costly and time consuming</li>
				</ul>
				<h5>Discussion:</h5>
				<ul>
					<li>What is the current W3C recommended version for HTML?</li>
					<li>What is the current W3C recommended version for CSS?</li>
					<li>What are the consequences of using a non-standard version?</li>
				</ul>
				<p>Learn more abou the W3C and standards based devlopment from the <a href="http://www.webstandards.org/learn/faq/">Web Standards Project</a>.</p>

				<h4>Standards: Web Development</h4>
				<h5>Three goals of standards-driven web development:</h5>
				<ol>
					<li>Compatibility (creating web pages that work well in all browsers)</li>
					<li>Portability (writing code that works well in any computing environment/operating system)</li>
					<li>Accessibility (produce web pages that are optimized for search engines, screen readers, etc)</li>
				</ol>
				<h5>Requirements</h5>
				<ul>
					<li>HTML + CSS + DOM = Agile Web Sites</li>
					<li>Structurally valid HTML code (eg: tags that open are closed. parent-child tag relationships are valid, etc)</li>
					<li>Logically valid HTML code (eg: ids are not applied more than once per page)</li>
					<li>Syntactically valid CSS code</li>
					<li>Use external CSS to develop sites that separate content (HTML) from presentation (CSS)</li>
					<li>Using Semantic Markup to establish content relationships and logical deployment of content</li>
					<li>Use a single codebase (no browser sniffing, forked code)</li>
					<li>Consider special needs users with screen readers. A common browser used with screen reader software is <a href="http://www.webbie.org.uk/">Webbie</a></li>
				</ul>

				<h4>Standards: File and Folder Naming</h4>
				<p>HTTP urls cannot contain certain characters, and certain characters will cause unwanted effects and behaviours when used in a url. Follow best practices for all file and folder names:</p>
				<ul>
					<li>File and folder names should NOT contain:
						<ul>
							<li>Capital letters</li>
							<li>Spaces</li>
							<li>Special characters: <strong>! @ # $ % ^ & * ( ) + { } [ ] : ; " < > ? |</strong> etc...</li>
						</ul>
					</li>
					<li>Acceptable non-alphanumeric characters: <strong>. _ - ~</strong></li>
					<li>Filenames should either be descriptive of the file contents, or use the default page name: <strong>index.htm</strong>, <strong>index.html</strong> or <strong>index.shtml</strong> (or whatever your server default is)</li>
					<li>Folder names should always be descriptive. Folder structure should be logical (eg: <strong>/hockey/nhl/canucks</strong>).</li>
				</ul>

				<h4>Standards: File Management</h4>
				<ul>
					<li>Including an index.html file in every folder on your server will ensure users cannot go snooping around your filesystem. the index.html file can be a blank HTML page if you like, as long as the user does not see a list of files when they request a folder</li>
					<li>Browser caching can reduce excessive request/response transactions between client and server. however, some browsers may cache things like the CSS, so if the styles have changed since caching the client may not get the latest styles.
						<ul>
							<li><strong>Ctrl + F5</strong> (<strong>Cmd + F5</strong> for Mac) will force a page reload. Very useful when developing on a localhost http server.</li>
							<li>If a file name has changed, the browser will have to make a new request from the server. versioning your file names will ensure users always have the latest version of any file (for example <strong>styles_1.0.css</strong>, <strong>styles_1.1.css</strong>, <strong>styles_1.2.css</strong>, <strong>styles_2.0.css</strong> etc)</li>
						</ul>
					</li>
					<li>If there are files/pages on your server no longer being used, be sure to either remove them or locate them in a place where users are not going to accidentally find them</li>
				</ul>

				<h4>Standards: Code Style and Organization</h4>
				<p>In COMP1950 students are expected to present a readable, well organized code style</p>
				<ul>
					<li>
						Comment <strong>all code</strong> with your name (or nickname if you prefer). Do this for all text based files (<strong>.html</strong>, <strong>.css</strong>, <strong>.js</strong>, <strong>.php</strong>, etc)
						<img src="images/lesson01_css_commenting.png" alt="An example of code with a comment.">
					</li>
					<li>In HTML, use carriage return and tabs to indicate parent-child tag relationships. Likewise, code your CSS to make it easy to see which rules are applied to each selector.</li>
					<li>
						Separate different file types into folders. At minimum, keep all non-html files in their own folder. If you like you can make a dedicated 'html' folder for your .html files as well.
						<img src="images/lesson01_folder_structure.png" alt="Example folder structure, with folders for 'css', 'images', and 'scripts'.">
					</li>
					<li>Use the .html extension for all HTML files (not .htm). Use the typical extension for all other text based files.</li>
					<li>Write structurally valid HTML code: <a href="http://validator.w3.org/">W3C HTML validator</a></li>
					<li>Write syntactically valid CSS code: <a href="http://jigsaw.w3.org/css-validator/">W3C CSS validator</a></li>
					<li>Include a <a href="http://validator.w3.org/check?uri=referer">referer link</a> on all your HTML pages: <strong>&lt;a href=&quot;http://validator.w3.org/check?uri=referer&quot;&gt;validate&lt;/a&gt;</strong></li>
				</ul>
				<h5>Semantic Markup</h5>
				<p>Highly <a href="https://html.com/semantic-markup/">semantic HTML content</a> is crucial for usability, accessibilty and search engine optimization.</p>
				<h5>What is Semantic Markup?</h5>
				<ul>
					<li>The practice of organizing your content into a structured hierarchy</li>
					<li>Using appropriate tags to explain and describe the content</li>
					<li>H1 ... 6 tags for summary headings</li>
					<li>UL tags for unsorted, unranked, related points</li>
					<li>OL tags for sorted, ranked, related points</li>
					<li>Paragraph tags instead of double BR tags</li>
					<li>HTML tables used for semantic value (tabular data), not for layouts</li>
					<li><strong>IMPORTANT:</strong> Separate Content (HTML) from Presentation (CSS)</li>
				</ul>
				<h5>Building Content Relationships</h5>
				<ul>
					<li>Use appropriate tags for headings, content, sub-content, lists</li>
					<li>This builds a relationship that descends from the title of the page</li>
					<li>Each section is a discrete piece of information</li>
					<li>Headings summarize the following content</li>
					<li>Citations, quotes, code samples can be contextualized by nearest heading</li>
				</ul>
				<h5>Logical vs. Physical Styles</h5>
				<ul>
					<li>Tend to display identically in browsers, but are fundamentally different</li>
					<li>Physical styles define what content looks like</li>
					<li>Logical styles define what content is</li>
					<li>Logical styles are important for screen readers, physical styles are not</li>
					<li>Given a choice, logical styles are usually preferred</li>
					<li>Some physical styles:
						<ul>
							<li><strong>b</strong> - Bold</li>
							<li><strong>i</strong> - Italic</li>
							<li><strong>s</strong> - Strikethrough</li>
							<li><strong>u</strong> - Underline</li>
						</ul>
					</li>
				</ul>
				<h5>Logical Styling</h5>
				<ul>
					<li>Best way to markup content for long-term usage</li>
					<li>Use CSS to change style (and some behaviour)</li>
					<li>Use DOM to change behaviour (via scripting)</li>
					<li>Requires thinking ahead</li>
					<li>Examples of logical styles:
						<ul>
							<li><strong>strong</strong> - <strong>Increase importance</strong></li>
							<li><strong>em</strong> - <em>Add Emphasis</em></li>
							<li><strong>code</strong> - <code>Code sample</code></li>
							<li><strong>kbd</strong> - <kbd>Keyboard entry</kbd></li>
							<li><strong>samp</strong> - <samp>Programming sample</samp></li>
							<li><strong>var</strong> - <var>Variable</var></li>
							<li><strong>cite</strong> - <cite>Citation</cite></li>
							<li><strong>dfn</strong> - <dfn>Definition</dfn></li>
							<li><strong>abbr</strong> - <abbr>Abbreviation</abbr></li>
							<li><strong>acronym</strong> - <acronym>Acronym</acronym></li>
							<li><strong>del</strong> - <del>Deleted text</del></li>
							<li><strong>ins</strong> - <ins>Inserted text</ins></li>
						</ul>
					</li>
				</ul>
				<h5>Key Advantages Of Semantic Content</h5>
				<ul>
					<li>Content is relational - context can be determined easily</li>
					<li>Extracting important pieces of information is simple (CITE or CODE tags for example)</li>
					<li>Search engine optimization (SEO)</li>
					<li>Syndication</li>
					<li>Big win for frameworks such as jQuery</li>
					<li>Screen reader friendly</li>
					<li>Increased Accessibility</li>
					<li>Separating style (CSS) from structure (HTML), makes it easier to maintain</li>
				</ul>
			</section>

			<section class="content" id="to-do">
				<div>
					<h3>To Do</h3>
					<p class="mini-nav">
						<a href="#standards" title="previous">&#x2191;</a>
						<a href="#lesson-top" title="previous">&#x2912;</a>
					</p>
				</div>
				<ul>
					<li>Download, review, and complete the homework assignment from D2L</li>
					<li>Confirm you have access to your online webspace and that your FTP credentials are valid</li>
					<li>Be sure you know how to add/edit/remove HTML and CSS using a browser tool</li>
					<li>Install VS Code on your home computer or laptop. Explore some of the accompanying help documentation to familiarize yourself with how to code your HTML and CSS using this tool.
						<ul>
							<li><a href="#alt-downloads">Download VS Code</a></li>
							<li><a href="https://code.visualstudio.com/docs/introvideos/basics">Setup and basics of VS Code</a></li>
							<li><a href="https://code.visualstudio.com/docs">VS Code help documentation</a></li>
						</ul>
					</li>
				</ul>
				<p>...and yes, there will be a practical, open book quiz at the start of session #2! (hint: practice using a browser based diagnostic tool)</p>
			</section>

		</article>
	</main>

<?php include("footer.php") ?>