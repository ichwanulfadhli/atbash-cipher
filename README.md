# atbash-cipher
An Atbash Cipher library for CodeIgniter

Intro
=====
The Atbash cipher is a substitution cipher with a specific key where the letters of the alphabet are reversed. For example all 'A's are replaced with 'Z's, all 'B's are replaced with 'Y's, and so on.

Installation
============
Before you initialize the library, the first thing you have to do is copy the **`Atbash.php`** to the **`/application/libraries`** directory. After that you can simply initialize the library on your **Controller**. Put it on the `__construct()` function.

```
function __construct(){ 
  $this->load->library('atbash'); 
}
```
