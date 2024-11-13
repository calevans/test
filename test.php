<?php
/*
 * Plugin Name: PressoVerbum
 * Plugin URI:
 * Description: A plugin to read an RSS feed, find posts it's not seen before, feed the post to ChatGPT for a summary. Then create a new post with the summary and a link to the original post.
 * Version:     4.0.0
 * Author:      Cal Evans
 * Author URI:  https://calevans.com
 * Text Domain: presso-verbum
 * License:     MIT
 */

require_once 'classA.php';
require_once 'classB.php';
require_once 'classC.php';

$a = new classA();
$b = new classB();
$c = new classC();

/*
 * A has strict typing
 */
echo $a->methodA('John'); // works passing a string to a method type hinted with a string and  strict typing is turned on.
echo "\n";

/*
 * B does not has strict typing
 */
echo $b->methodB('123'); // works passing a string to a method type hinted as an int but without strict type hinting.
echo "\n";
echo $b->methodA('456'); // works passing a string to a method type hinted as an string but without strict type hinting.
echo "\n";
echo $b->methodB(789); // works even though this passes an int up to a method type hinted as a string in a class that has strich typing turned on.
echo "\n";
/*
 * C does not has strict typing and is not a child of A.
 */
echo $c->methodC('101112'); // works
echo "\n";

echo  '1 Cal Evans' + 2; // Throws a warning BUT coerces the string to a number and returns 3.
echo "\n";

echo $b->methodB('1 Cal Evans'); // Fails and I honestly do not know why. I would expect this to work. We know the rules of coercion, and we jsut swoed that this should be coerced to a number. I am not sure why this fails. But here we are.

echo "\n";

