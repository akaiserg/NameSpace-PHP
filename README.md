# Namespaces  in PHP

   Namespaces give us a huge flexibility at the moment to   define  classes and their dependencies. For instance,   by using namespaces  you can finally  have two classes with the same name( in different  namespaces obviously) without any problem at all. In addition to   this, Composer can  resolve or map     files with their  namespaces avoiding  the use of requires or require_onces on the files.

On the examples, each one work differently:

* <b>withOutComposer</b>:  This example  doesn't use composer  so  to  get  the dependencies,  it just uses  requiere_once and  some classes use  the 'new' operator to  work with  their dependencies.

*  <b>withComposer</b>: The second one uses composer but it still has requires and use the 'new' operator.
*  <b>withComposerDI</b>: The last one uses composer, but at the same time the dependencies of each class are passed through the constructors, This way the code looks cleaner and it's easier to maintain.




### Reference:

 * [Namespaces](http://php.net/manual/en/language.namespaces.php) 
 

 
