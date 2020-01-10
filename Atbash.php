<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/** Atbash Cipher
 * 
 * A monoalphabetic cipher formed by taking the alphabet and
 * mapping it to its reverse, so that the first letter becomes
 * the last letter, the second letter becomes the second to last letter,
 * and so on.
 * 
 * @author Ichwanul Fadhli
 * @copyright Copyright (c) 2020, Ichwanul Fadhli
 */
class Atbash {
    
    /** Alphabets Lookup Array Variable.
     * 
     * This variable contains letter from 'a' to 'z'.
     * The variable using letter as array index. 
     * Example : index 'a' contains letter 'z'.
     */
    private static $alphabets_lookup = array(
		'a' => 'z', 'b' => 'y', 'c' => 'x', 'd' => 'w', 'e' => 'v', 
		'f' => 'u', 'g' => 't', 'h' => 's', 'i' => 'r', 'j' => 'q', 
		'k' => 'p', 'l' => 'o', 'm' => 'n', 'n' => 'm', 'o' => 'l', 
		'p' => 'k', 'q' => 'j', 'r' => 'i', 's' => 'h', 't' => 'g', 
		'u' => 'f', 'v' => 'e', 'w' => 'd', 'x' => 'c', 'y' => 'b', 'z' => 'a',
		'A' => 'Z', 'B' => 'Y', 'C' => 'X', 'D' => 'W', 'E' => 'V', 
		'F' => 'U', 'G' => 'T', 'H' => 'S', 'I' => 'R', 'J' => 'Q', 
		'K' => 'P', 'L' => 'O', 'M' => 'N', 'N' => 'M', 'O' => 'L', 
		'P' => 'K', 'Q' => 'J', 'R' => 'I', 'S' => 'H', 'T' => 'G', 
		'U' => 'F', 'V' => 'E', 'W' => 'D', 'X' => 'C', 'Y' => 'B', 'Z' => 'A'
    );
    
	/** Atbash Cipher Function
     * 
     * This function can act as a cipher function 
     * and also decipher function. This function can
     * only process a letter, if there's other character 
     * or number, then it will not be processed, the 
     * input will just be returned.
     * 
     * @param string $message
     * The message which will be ciphered.
     * 
     * @return $output
     */
	public function atbash_cipher($message){
        // Output variable defined as an empty variable.
        $output = '';

        // The purpose of this loop is to check the letter
        // from the $input variable, then matching it to
        // the $alphabets_lookup variable.
        foreach(str_split($message) as $letter){
            // If the input is a numeric or the letter is not
            // listed on the lookup variable, then the output
            // will returned as the input
            if(is_numeric($letter) || in_array($letter, self::$alphabets_lookup) !== true){
                // The previous value appended with the parameter value.
                $output .= $letter;
            }
            else{
                // The previous value appended with the new value
                // from the lookup variable.
                $output .= self::$alphabets_lookup[$letter];
            }
        }
        
        // Returning the output
		return $output;
	}
}
