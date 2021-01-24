PHP Random String
=================

Author: **[Afaan Bilal](https://afaan.dev)**  

## Introduction
**PHP Random String** is a composer package to generate random strings of variable length from a given charset.

# Installation
````
composer require afaanbilal/php-random-string
````

# Usage
````php
// Default length is 12 characters
// Default charset is ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789
(new \AfaanBilal\RandomString\RandomString())->generate();                                  
// -> Kfx70JiRotb4

// Generate a random string of 20 characters
(new \AfaanBilal\RandomString\RandomString(20))->generate();                                
// -> 92CYbvtEMXynllOZmNWK

// Generate a random string of 25 characters from capital alphabets only
(new \AfaanBilal\RandomString\RandomString(25, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'))->generate();  
// -> ZEIXAISRXEHFOADNXNHOIWKSF
````

## Contributing
All contributions are welcome. Please create an issue first for any feature request
or bug. Then fork the repository, create a branch and make any changes to fix the bug 
or add the feature and create a pull request. That's it!
Thanks!

## License
**PHP Random String** is released under the MIT License.
Check out the full license [here](LICENSE).
