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
    
    // Alphabets Lookup Array Variable.
    // This variable contains letter from 'a' to 'z'.
    // The variable using letter as array index. 
    // Example : index 'a' contains letter 'z'.
    private static $alphabets_lookup = array(
        'a' => 'z', 'b' => 'y', 'c' => 'x', 'd' => 'w', 'e' => 'v', 'f' => 'u', 
        'g' => 't', 'h' => 's', 'i' => 'r', 'j' => 'q', 'k' => 'p', 'l' => 'o', 
        'm' => 'n', 'n' => 'm', 'o' => 'l', 'p' => 'k', 'q' => 'j', 'r' => 'i', 
        's' => 'h', 't' => 'g', 'u' => 'f', 'v' => 'e', 'w' => 'd', 'x' => 'c', 
        'y' => 'b', 'z' => 'a'
    );
    
	/** Atbash Cipher Function
     * 
     * This function can act as a cipher and decipher function. 
     * This function can only process a letter, if there's other character 
     * or number, then it will not be processed, the input will just be returned.
     * 
     * @param string $message
     * The message.
     * 
     * @return $output
     */
	public function atbash_cipher($message){
        // Output variable defined as an empty variable.
        $output = '';

        // The message is transformed into lowercase.
        $editedMessage = strtolower($message);

        
        // The purpose of this loop is to check the letter
        // from input, then matching it to $alphabets_lookup variable.
        for($i = 0; $i < strlen($editedMessage); $i++){
            // If the message is a numerical characters or not listed on $alphabets_lookup, then
            // the output will just be returned as the input message.
            if(is_numeric($editedMessage[$i]) || in_array($editedMessage[$i], self::$alphabets_lookup) !== true){
                // Appending the output.
                $output .= $message[$i];
            }
            // Else, just do a normal encryption.
            else{
                // If the message on index $i is an uppercase letter, then the output
                // will also be an uppercase.
                if(ctype_upper($message[$i])){
                    // Appending the output and convert it to uppercase.
                    $output .= strtoupper(self::$alphabets_lookup[$editedMessage[$i]]);
                }
                // Else, it's just a lowercase case letter.
                else{
                    // Appending the output.
                    $output .= self::$alphabets_lookup[$message[$i]];
                }
            }
        }
        
        // Returning the output
		return $output;
	}
}
