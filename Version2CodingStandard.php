<?
if ( false === class_exists('PHP_CodeSniffer_Standards_CodingStandard', true) ) {
	throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_CodingStandard not found');
}

class PHP_CodeSniffer_Standards_Version2_Version2CodingStandard extends PHP_CodeSniffer_Standards_CodingStandard {
	public function getIncludedSniffs() {   
		return array(
			'Generic/Sniffs/Files/LineEndingsSniff.php',
			'Generic/Sniffs/Functions/OpeningFunctionBraceKernighanRitchieSniff.php',
			'Generic/Sniffs/NamingConventions/UpperCaseConstantNameSniff.php',
			'Generic/Sniffs/NamingConventions/ConstructorNameSniff.php',
			'Generic/Sniffs/Metrics/NestingLevelSniff.php',
//			'Generic/Sniffs/PHP/DisallowShortOpenTagSniff.php',
			'Generic/Sniffs/PHP/ForbiddenFunctionsSniff.php',
			'Generic/Sniffs/PHP/LowerCaseConstantSniff.php',
//			'Generic/Sniffs/WhiteSpace/DisallowTabIndentSniff.php',
			'Generic/Sniffs/Formatting/DisallowMultipleStatementsSniff.php',
			'Generic/Sniffs/Formatting/SpaceAfterCastSniff.php',
			'PEAR/Sniffs/Files/IncludingFileSniff.php',
			'PEAR/Sniffs/Functions/FunctionCallArgumentSpacingSniff.php',
			'PEAR/Sniffs/Functions/FunctionCallSignatureSniff.php',
			'PEAR/Sniffs/ControlStructures/ControlSignatureSniff.php',
			'Squiz/Sniff/PHP/CommentedOutCodeSniff.php',
			'Squiz/Sniff/PHP/DisallowComparisonAssignmentSniff.php',
			'Squiz/Sniff/PHP/DisallowInlineIfSniff.php',
			'Squiz/Sniff/PHP/DisallowMultipleAssignmentsSniff.php',
			'Squiz/Sniff/PHP/DisallowObEndFlushSniff.php',
			'Squiz/Sniff/PHP/DisallowSizeFunctionsInLoopsSniff.php',
			'Squiz/Sniff/PHP/DiscouragedFunctionsSniff.php',
			'Squiz/Sniff/PHP/EmbeddedPhpSniff.php',
			'Squiz/Sniff/PHP/EvalSniff.php',
			'Squiz/Sniff/PHP/ForbiddenFunctionsSniff.php',
			'Squiz/Sniff/PHP/GlobalKeywordSniff.php',
			'Squiz/Sniff/PHP/HeredocSniff.php',
			'Squiz/Sniff/PHP/InnerFunctionsSniff.php',
			'Squiz/Sniff/PHP/LowercasePHPFunctionsSniff.php',
			'Squiz/Sniffs/Scope/StaticThisUsageSniff.php',
			'Version2/Sniffs/Commenting/DisallowHashCommentsSniff.php',
		);
	}
}

