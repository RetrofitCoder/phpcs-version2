<?
/**
 * This sniff prohibits the use of Perl style hash comments.
 *
 * PHP version 5
 *
 * Modified from example given at http://pear.php.net/manual/en/package.php.php-codesniffer.coding-standard-tutorial.php
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Matt Stiner <retrofitcoder@gmail.com>
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   SVN: $Id: coding-standard-tutorial.xml,v 1.9 2008-10-09 15:16:47 cweiske Exp $
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 * @link      http://pear.php.net/manual/en/package.php.php-codesniffer.coding-standard-tutorial.php
 */

/**
 * This sniff prohibits the use of Perl style hash comments.
 *
 * An example of a hash comment is:
 *
 * <code>
 *  # This is a hash comment, which is prohibited.
 *  $hello = 'hello';
 * </code>
 * 
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Your Name <you@domain.net>
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 * @link      http://pear.php.net/manual/en/package.php.php-codesniffer.coding-standard-tutorial.php
 */
class Version2_Sniffs_Commenting_DisallowHashCommentsSniff implements PHP_CodeSniffer_Sniff {
	
	/**
	 * Returns the token types that this sniff is interested in.
	 *
	 * @return array(int)
	 */
	public function register() {
		return array(T_COMMENT);
	}
	
	/**
	 * Processes the tokens that this sniff is interested in.
	 *
	 * @param PHP_CodeSniffer_File $phpcsFile The file where the token was found.
	 * @param int                  $stackPtr  The position in the stack where
	 *                                        the token was found.
	 *
	 * @return void
	 */
	public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr) {
		$tokens = $phpcsFile->getTokens();
		if ( '#' === $tokens[$stackPtr]['content']{0} ) {
			$error = 'Hash comments are prohibited';
			$phpcsFile->addError($error, $stackPtr);
		}
	}
}
?> 
