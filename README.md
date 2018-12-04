
## Goal
When passed an integer or numeric string, convert it into the appropriate roman numeral.

## Approach
PHP was my language of choice for this kata, as I am currently using it everyday and am also familiar with the testing framework [PHPspec](http://www.phpspec.net/en/stable/), which will be used to drive a TDD approach.

I started by writing a basic failing test to kick off the process. Next I created the interface and class that would implement it, containing the simplest code possible to pass the previously failing test. Now I could focus on writing the algorithm that would convert the numbers in an effective way, testing against edge cases and other scenarios as the algorithm was developed. This TDD approach allowed me to refactor the code quality and readability whilst ensuring the underlying tests were passing, resulting in a clean and efficient solution.

## Caveats
* Only support numbers between 1 and 3999.
* Number can be an integer, numeric string, binary or hexadecimal.

## Assumptions
* You are familiar with executing commands from the terminal.
* PHP and Composer must be installed on the machine to install required dependencies and run tests.

## Testing
Run the following command from the project directory

`composer install`
  
Once dependencies are installed you may then execute the following command
  
`phpspec run`

*Note: If this is your first time running PHPspec you may need to alter the command to `vendor/bin/phpspec run`*</br>
This will run all tests located in the /spec directory, outputting the results into your terminal window.

## Possible improvements
* Integrate a continuous testing platform to ensure any future builds successfully pass testing.
* Allow the user to input a number through the terminal window.
