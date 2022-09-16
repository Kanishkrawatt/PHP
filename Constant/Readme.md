# Using Const Keyword

Php instroduced A Keyword Const To create
a constant . The const keyword define constants at compile Time. It is a language construct , not a function.

**Constant Defined Using const keyword are case-sensitive.**

```Example
<?php 
const Pi=3.14
echo Pi
?>
```

# Define

The Define() function defines/Creates a constant by assigning a name.

**It Defines constant at run time.** 

``` Syntax:

define(Name, value ,[Case_insensitive])

```
``` Example
<?php 
define("Pi",3.14,true);
echo Pi;
?>
```
