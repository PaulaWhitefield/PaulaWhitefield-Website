<?php

/*
	Welcome to the StaticPHP Launcher!
	
	Most of this file is to remain unchanged to allow for the successful
	operation and usage of StaticPHP, but there are some configurable options.
*/

//	CONFIGURABLE OPTIONS


//	Set this to the path where you have put your source files.

$configurable_options[ 'source_dir_path' ] = __DIR__ . DIRECTORY_SEPARATOR . "src";


//	Set this to the path where you wish your generated output files.

$configurable_options[ 'output_dir_path' ] = __DIR__ . DIRECTORY_SEPARATOR . "public";


//	Modify this array to include elements that will form parts of paths you wish to ignore.
//	Any path that matches any of the elements of this array will not be processed at all.
//	Such as PHP includes will still be converted as part of where they are included, but ignored as individual files.

$configurable_options[ 'items_to_ignore' ] = array( "_includes" );


/*
	Setting friendly URLs to false will turn PHP files into their respective HTML files.
	e.g. index.php will produce index.html and about.php will produce about.html
	About page URL example: https://website.tld/about.html
	
	Setting friendly URLs to true will turn PHP files into their respective directories with an index.html file inside.
	e.g. index.php will produce index.html, but about.php will produce about/index.html
	About page URL example: https://website.tld/about/
*/

$configurable_options[ 'friendly_urls' ] = true;


/*
	MetaData Delimiter
	
	This is what defines the start and end lines of metadata.
*/

$configurable_options[ 'metadata_delimiter' ] = "---";


/*
	Minify HTML

	Removes whitespace between HTML tags, comments, and extra spaces.

	Set to true to enable, or false to disable. Default is false.
*/

$configurable_options[ 'minify_html' ] = true;


/*
	Minify CSS

	Removes comments, extra spaces, and newline characters.

	Set to true to enable, or false to disable. Default is false.
*/

$configurable_options[ 'minify_css' ] = true;


/*
	Minify JavaScript

	Removes comments, unnecessary whitespace, and newlines.

	Set to true to enable, or false to disable. Default is false.
*/

$configurable_options[ 'minify_js' ] = true;


/*
	Minify HTML Tags to Preserve

	Preserves the following tags as-is during the Minify HTML process, resulting in them not being minified like the rest of the code.

	Set to an array of tag names (e.g. "pre") to enable, set to an empty array, or remove the option entirely to disable.
*/

$configurable_options[ 'minify_html_tags_to_preserve' ] = array();


/*
	Bulk Redirects Filename

	Your preferred filename to use as the file where your bulk redirection rules are defined.
	
	Set to a string (e.g. "_my_bulk_redirects"). Defaults to "_bulk_redirects" if not specified.
*/

$configurable_options[ 'bulk_redirects_filename' ] = "_bulk_redirects";


/*
	Redirection Template Filename

	Your preferred filename to use as the redirection template generated for all redirections.

	Set to a string (e.g. "_my_redirection_template.html"). Defaults to "_redirection_template.html" if not specified.
*/

$configurable_options[ 'redirection_template_filename' ] = "_redirection_template.html";


/*
	Minify CSS In-Place

	Whether to output CSS files in minified form only, or to output both original and minified versions (minified ending in .min.css).

	Set to true to just minify CSS files, or false to output both versions. Defaults to true.
*/

$configurable_options[ 'minify_css_inplace' ] = true;


/*
	Items To Passthrough

	Sometimes you may wish a PHP script or file that StaticPHP would normally process, remain in the output as-is.

	Set items_to_passthrough to an array of path parts you wish to match against, where StaticPHP will simply copy them over to output.

	Defaults to an empty array.
*/

$configurable_options[ 'items_to_passthrough' ] = array();


/*
	Test Mode

	Set to true to perform tests instead of normal processing.

	Defaults to false.
*/

$configurable_options[ 'test_mode' ] = false;


/*
	Test Mode Input Directory Path

	Directory path containing test input files.

	Defaults to "tests/input".
*/

$configurable_options[ 'test_mode_input_dir_path' ] = __DIR__ . DIRECTORY_SEPARATOR . "tests" . DIRECTORY_SEPARATOR . "input";


/*
	Test Mode Expected Directory Path

	Directory path containing test expected output files.

	Defaults to "tests/expected".
*/

$configurable_options[ 'test_mode_expected_dir_path' ] = __DIR__ . DIRECTORY_SEPARATOR . "tests" . DIRECTORY_SEPARATOR . "expected";


/*
	Test Mode Output Directory Path

	Directory path for where to output test results.

	Defaults to "tests/output".
*/

$configurable_options[ 'test_mode_output_dir_path' ] = __DIR__ . DIRECTORY_SEPARATOR . "tests" . DIRECTORY_SEPARATOR . "output";


/*
	Test Mode Output Results File

	If set to true, a file containing the test results will be generated.

	Defaults to true. Set to false to disable.
*/

$configurable_options[ 'test_mode_output_results_file' ] = true;


/*
	Test Mode Results File Path

	If test_mode_output_results_file is set to true, an HTML file will be generated containing the test results at the specified path.

	Defaults to "tests/output/results.html".
*/

$configurable_options[ 'test_mode_results_file_path' ] = __DIR__ . DIRECTORY_SEPARATOR . "tests" . DIRECTORY_SEPARATOR . "output" . DIRECTORY_SEPARATOR . "results.html";


/*
	Auto Update

	Downloads the latest version of StaticPHP upon every run to ensure you always run the latest version.

	If you wish to use a specific version of StaticPHP, or if your connection to the internet is weak or limited,
	you should disable this feature by setting it to false.
*/
$configurable_options[ 'auto_update' ] = true;


//	END OF CONFIGURABLE OPTIONS


/*
	PLEASE DO NOT EDIT BELOW THIS LINE!
*/


$project_name = "StaticPHP";
$project_author_username = "DAH5";
$project_branch = "master";

$path_to_latest_code_on_github = "https://raw.githubusercontent.com/" . $project_author_username . "/" . $project_name . "/" . $project_branch . "/" . $project_name . ".php";
$path_to_latest_code_on_gitlab = "https://gitlab.com/" . $project_author_username . "/" . $project_name . "/-/raw/" . $project_branch . "/" . $project_name . ".php";

$path_to_local_file = __DIR__ . DIRECTORY_SEPARATOR . $project_name . ".php";

echo "Welcome to the " . $project_name . " Launcher!" . PHP_EOL . PHP_EOL;

if( isset( $configurable_options[ 'source_dir_path' ] ) && is_string( $configurable_options[ 'source_dir_path' ] ) && trim( $configurable_options[ 'source_dir_path' ] ) != "" )
	echo "Setting source directory path to: " . $configurable_options[ 'source_dir_path' ] . PHP_EOL;

if( isset( $configurable_options[ 'output_dir_path' ] ) && is_string( $configurable_options[ 'output_dir_path' ] ) && trim( $configurable_options[ 'output_dir_path' ] ) != "" )
	echo "Setting output directory path to: " . $configurable_options[ 'output_dir_path' ] . PHP_EOL;

if( isset( $configurable_options[ 'paths_to_ignore' ] ) && is_array( $configurable_options[ 'paths_to_ignore' ] ) && count( $configurable_options[ 'paths_to_ignore'] ) > 0 )
	echo "Setting paths to ignore to: " . join( ", ", $configurable_options[ 'paths_to_ignore' ] ) . PHP_EOL;

if( isset( $configurable_options[ 'friendly_urls' ] ) && is_bool( $configurable_options[ 'friendly_urls' ] ) )
	echo "Setting Friendly URLs to: " . ( $configurable_options[ 'friendly_urls' ] ? "Enabled" : "Disabled" ) . PHP_EOL;

if( isset( $configurable_options[ 'metadata_delimiter' ] ) && is_string( $configurable_options[ 'metadata_delimiter' ] ) && trim( $configurable_options[ 'metadata_delimiter' ] ) )
	echo "Setting MetaData Delimiter to: " . $configurable_options[ 'metadata_delimiter' ];

if( ( isset( $configurable_options[ 'auto_update' ] ) && is_bool( $configurable_options[ 'auto_update' ] ) && $configurable_options[ 'auto_update' ] === true ) || ! is_file( $path_to_local_file ) )
{
	echo PHP_EOL . "Attempting to fetch latest " . $project_name . " code from GitHub: " . $path_to_latest_code_on_github . PHP_EOL;

	$latest_code = "";

	$github_headers = @get_headers( $path_to_latest_code_on_github );
	
	if( $github_headers && strpos( $github_headers[ 0 ], '200' ) )
		$latest_code = file_get_contents( $path_to_latest_code_on_github );
	else
	{
		echo PHP_EOL . "Attempting to fetch latest " . $project_name . " code from GitLab: " . $path_to_latest_code_on_gitlab . PHP_EOL;
		$gitlab_headers = @get_headers( $path_to_latest_code_on_gitlab );

		if( $gitlab_headers && strpos( $gitlab_headers[ 0 ], '200' ) )
			$latest_code = file_get_contents( $path_to_latest_code_on_gitlab );
	}

	if( $latest_code == "" )
	{
		echo PHP_EOL . "Unable to access latest code on GitHub or GitLab. Please check your network connection." . PHP_EOL . PHP_EOL;

		echo PHP_EOL . "Thank you for using the " . $project_name . " Launcher!" . PHP_EOL . PHP_EOL;

		exit;
	}

	echo "Saving to local path " . $path_to_local_file . PHP_EOL;
	file_put_contents( $path_to_local_file, $latest_code );

	echo "Verifying local file...\n";
	if( ! is_file( $path_to_local_file ) && file_get_contents( $path_to_local_file ) != $latest_code )
	{
		echo "Local file check failed!" . PHP_EOL . PHP_EOL;

		echo PHP_EOL . "Thank you for using the " . $project_name . " Launcher!" . PHP_EOL . PHP_EOL;

		exit;
	}
}

echo "Loading " . $project_name . "..." . PHP_EOL;
include $path_to_local_file;

if( class_exists( $project_name ) )
{
	echo "Running " . $project_name . "..." . PHP_EOL . PHP_EOL;

	if( isset( $configurable_options ) && is_array( $configurable_options ) )
		$project = new $project_name( $configurable_options );
	else
		$project = new $project_name();
}

if( isset( $configurable_options[ 'auto_update' ] ) && is_bool( $configurable_options[ 'auto_update' ] ) && $configurable_options[ 'auto_update' ] === true )
{
	echo PHP_EOL . PHP_EOL . "Removing local " . $project_name . " file..." . PHP_EOL;
	unlink( $path_to_local_file );
}
	
echo PHP_EOL . "Thank you for using the " . $project_name . " Launcher!" . PHP_EOL . PHP_EOL;
