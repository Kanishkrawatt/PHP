# PHP

## [PHP Constants]()

Php Constants are name or identifier which cannot be modified Throughout the execution of a program

Php constants can be defined by 2 ways:
* Using [define](https://github.com/Kanishkrawatt/Php/blob/main/Constant/UsingDefineFunction.md) function
* Using [Const](https://github.com/Kanishkrawatt/Php/blob/main/Constant/UsingConstKeyword.md) keyword

## Difference Between Constants and Variable

|       PHP Costants        |       PHP Variables     |
|--------------------------:|------------------------:|
| No Need To use $          | $ sign is used          |
| DataType Can't be Changed | DataType can be Changed |
| Can't be Redefined        | Can be Redefined        |



## PHP comments

A comment in PHP code is a line that is not executed as a part of a program 

**It's purpose is to be Read By someone who is looking at the code**
There Are two type of Comments in PHP 
* Single-Line
* MultiLine

``` Single-Line
<?php
    // This is Single-line comment
    # Is is also a Single-line comment
?>
```

``` Multi-Line
<?php 
/* This is a Multi-line Comment
that can comment multiple 
Lines */ 
?>
```
## [PHP Operators]()
Just like other Programmign language , PHP also supports 
various types of [Operations]() like Arithmetic Operation, Logical Operations ,Increment/Decrement Operation ,etc


## [PHP Array]()
Array is a Compound Data Type That hold multiple values of similar type in a single Variable

#### Type of Array In PHP
* [Indexed Array]()
* [Associative Array]()
* [Multidimensional Array]()

#### Advantage of PHP Array
* Less Code: We Don't need to define Multiple variables.
* Easy to Traverse: With a single loop we cal traverse all the element of an array
* Sorting: We can sort the array 

**[Array Functions]()**

## [Control Statements]()

In Any Programming Languages , Control structures are specific commands which are used to control the Logical flow of the Program during its execution.

#### There are two types of Control Structure in Php
* [Condition Control Statement]()
* [Looping Control Statement]()

## [Regular Expression]()

In simple way ,A  Regular Expression Is a way to do pattern matching .
A regular Expression is a string that represents a pattern.

*It is Commonly Known as "Regex" or "RegExp"*

#### There are mainly three uses for regular Expression

* [Matching]()
* [Substituting]()
* [Splitting]()


## [Super Global Variables]()
Some predefined Variables in PHP are "SuperGlobals",which means that they are always accessible , regardless of scope and you can access them from any function , class or file without  having to do anything special.

ex - [\$GLOBALS]() , [\$_GET]() , [\$_POST]()


## [Function]() 
A function is a piece of code in a larger program .  The function performs a specific task

#### Advantages 
* Reducing duplication of code 
* Decomposing complex problems into simpler pieces
* Imporving clarity of the code
* Reuse of code

#### Types of Functions
* [Built-in Functions]()
* [User Defined Functions]()

## Variable Scope
The scope of a variable is defined as its range in the program under which it can be accessed. In other words,
"The scope of a variable is the portion of the program within which it is defined and can be accessed."

#### Types of variable scope
* [Local Variable]()
* [Global Variable]()
* [Static variable]()


## Mail function

PHP makes use of mail() To send an email.
``` Syntax
mail(to,subject,message,header,parameters);
```

## State Management
HTTP is a stateless protocol which means every user request is processed before it . Hence there is no way to store or send any user specific details using HTTP protocol.

PHP allows us to save certain states of the application either on the server itself, or in the user's browser . In form of [Session]() and [Cookies]()

