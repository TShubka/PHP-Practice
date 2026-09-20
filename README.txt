PHP BASICS - LEARNING PROJECT
==============================

A collection of small, well-commented PHP scripts covering the fundamentals
of PHP programming. Each file focuses on a single concept, written and
tested in VS Code, and is ready to run with the PHP CLI or a local server
(XAMPP/WAMP/MAMP).


TOPICS COVERED
--------------
1. 01-introduction.php              - Introduction to PHP Programming
2. 02-syntax-and-statements.php     - PHP Syntax and Statements
3. 03-output-echo-print.php         - PHP Output: echo and print
4. 04-comments-and-coding-style.php - Comments and Coding Style
5. 05-variables.php                 - Variables and Variable Naming Rules
6. 06-data-types.php                - PHP Data Types
7. 07-constants.php                 - Constants
8. 08-operators.php                 - PHP Operators
9. 09-conditional-statements.php    - Conditional Statements


TOOLS USED
----------
- Editor: Visual Studio Code
- Language: PHP 8.x
- Extensions recommended: PHP Intelephense, PHP Debug


HOW TO RUN
----------
Make sure PHP is installed (run "php -v" to check), then run any file from
the terminal, for example:

    php 01-introduction.php

Or open the folder in VS Code and run each file with the Code Runner
extension / built-in terminal.


CONCEPT NOTES AND SCREENSHOTS
==============================

1. Introduction to PHP Programming
-----------------------------------
PHP (Hypertext Preprocessor) is an open-source, server-side scripting
language used to build dynamic, interactive websites. PHP code is embedded
inside <?php ... ?> tags and executed on the server before the result
(usually HTML) is sent to the browser.

Output:
    Hello, World! This is my first PHP program.
    PHP is a server-side scripting language used to build dynamic websites.
    I am learning PHP version 8.x.

Screenshot: screenshots/01-introduction.png


2. PHP Syntax and Statements
-----------------------------
Every PHP statement ends with a semicolon (;). Code runs sequentially from
top to bottom, keywords are case-insensitive, but variable names are
case-sensitive.

Output:
    Welcome, Shuaib!
    The sum of 5 and 10 is 15
    Keywords like ECHO are not case-sensitive.
    $name is 'Shuaib' while $Name is 'Different Variable'

Screenshot: screenshots/02-syntax-and-statements.png


3. PHP Output: echo and print
-------------------------------
Both echo and print display output. echo can take multiple comma-separated
values and has no return value; print accepts only one argument and always
returns 1.

Output:
    Using echo to display text.
    Multiple values with echo
    Using print to display text.
    Print returns 1 after output.
    The return value of print was: 1
    Hello Shuaib, welcome to PHP!
    Formatted output: Shuaib is 24 years old.

Screenshot: screenshots/03-output-echo-print.png


4. Comments and Coding Style
-------------------------------
PHP supports single-line comments (// or #) and multi-line comments
(/* ... */). Clean coding style - meaningful names, consistent indentation,
and helpful comments - makes code easier to read and maintain.

Output:
    Shuaib is an adult.
    Final score: 90

Screenshot: screenshots/04-comments-and-coding-style.png


5. Variables and Variable Naming Rules
-----------------------------------------
Variables in PHP start with a $ sign and are loosely typed. Naming rules:
must start with a letter or underscore (never a number), and can only
contain letters, numbers, and underscores. Variable names are
case-sensitive.

Output:
    Age: 24
    Name: Shuaib
    Status: Enrolled
    First name: Shuaib, Last name: Enow
    City: Mogadishu | Year: 2026 | Price: 19.99 | Active: yes
    This variable is local to the function.
    I am a global variable

Screenshot: screenshots/05-variables.png


6. PHP Data Types
--------------------
PHP supports String, Integer, Float/Double, Boolean, Array, Object, and
NULL. The gettype() and var_dump() functions help inspect a variable's
type and value.

Output:
    String: Hello, PHP! (string)
    Integer: 42 (integer)
    Float: 3.14 (double)
    Boolean: true (boolean)
    Array: PHP, HTML, CSS, JavaScript (array)
    Person name: Shuaib (array)
    Object property: Shuaib (object)
    Null variable type: NULL

Screenshot: screenshots/06-data-types.png


7. Constants
--------------
Constants hold values that cannot change once defined, using define() or
the const keyword. By convention constant names are UPPERCASE, and they
are accessible globally throughout the script.

Output:
    Site name: My PHP Learning Site
    Max users allowed: 100
    Value of PI: 3.14159
    Company: Zuma Market
    App: PHP Basics Demo v1.0.0
    SITE_NAME constant is defined.

Screenshot: screenshots/07-constants.png


8. PHP Operators
-------------------
PHP includes Arithmetic (+ - * / % **), Assignment (= += -= *=), Comparison
(== === != !==), Logical (&& || !), Increment/Decrement (++ --), and String
(.) operators.

Output:
    Addition: 10 + 3 = 13
    Subtraction: 10 - 3 = 7
    Multiplication: 10 * 3 = 30
    Division: 10 / 3 = 3.3333333333333
    Modulus: 10 % 3 = 1
    Exponentiation: 10 ** 3 = 1000
    Full name: Shuaib Enow

Screenshot: screenshots/08-operators.png


9. Conditional Statements
----------------------------
Control the flow of a program using if, if-else, if-elseif-else, switch,
the ternary operator (?:), and the null coalescing operator (??).

Output:
    You are eligible to vote.
    It's a cool day.
    Grade: B
    Back to work/study.
    Welcome back!
    Display name: Guest

Screenshot: screenshots/09-conditional-statements.png


PROJECT STRUCTURE
--------------------
php-basics/
  01-introduction.php
  02-syntax-and-statements.php
  03-output-echo-print.php
  04-comments-and-coding-style.php
  05-variables.php
  06-data-types.php
  07-constants.php
  08-operators.php
  09-conditional-statements.php
  screenshots/
    (VS Code screenshots for each topic)
  README.txt


AUTHOR
--------
Shuaib Osman Daud Enow
IT-Student/Computer Application  

--
This project was created as part of my journey learning PHP fundamentals
in VS Code.
