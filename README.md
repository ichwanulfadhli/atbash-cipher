# atbash-cipher
An Atbash Cipher library for CodeIgniter

Intro
=====
The Atbash cipher is a substitution cipher with a specific key where the letters of the alphabet are reversed. For example all 'A's are replaced with 'Z's, all 'B's are replaced with 'Y's, and so on.

Installation
============
Before you initialize the library, the first thing you must do is copy the **`Atbash.php`** to your CodeIgniter project **`/application/libraries`** directory. After that you can simply initialize the library on your **Controller**. Put it on the `__construct()` function.

```
function __construct(){ 
  parent::__construct();
  
  $this->load->library('atbash'); 
}
```

Testing Out The Library
=======================
Once the installation is done, the next step is of course testing out the library. Just type these syntax on your controller's function and then **boom**, you just create a secret message.

`
$this->atbash->atbash_cipher($message);
`

**note*

*The '$message' is a parameter of the function, not the actual input..*


Example :

**`controllers/Welcome.php`**
```
public function index(){ 
  $data['output'] = $this->atbash->atbash_cipher('Ichwanul Fadhli');
  $this->load->view('welcome_message', $data); 
}
```

**`views/welcome_message.php`**
```
<?php echo $output; ?>
```

The Result :

Rxsdzmfo Uzwsor
