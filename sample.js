// ex12_06.js Solution 
var font = "serif";
var backgroundColor = "whitebg";

function start()
{
   changeStyle( "serif", "whitebg" );

   document.getElementById( "graybg" ).addEventListener(
      "click", function() { changeStyle( font, "graybg" ); }, false );
   document.getElementById( "whitebg" ).addEventListener(
      "click", function() { changeStyle( font, "whitebg" ); }, false );
   document.getElementById( "serif" ).addEventListener(
      "click", function() { changeStyle( "serif", backgroundColor ); }, false );
   document.getElementById( "sans" ).addEventListener(
      "click", function() { changeStyle( "sans", backgroundColor ); }, false );
} // end function start

function changeStyle( f, b )
{
   font = f;
   backgroundColor = b;

   document.body.setAttribute("class", f + " " + b ); 
} // end function changeStyle

function changeBG() {
   document.getElementById()
}

window.addEventListener( "load", start, false );



/*************************************************************************
* (C) Copyright 1992-2012 by Deitel & Associates, Inc. and               *
* Pearson Education, Inc. All Rights Reserved.                           *
*                                                                        *
* DISCLAIMER: The authors and publisher of this book have used their     *
* best efforts in preparing the book. These efforts include the          *
* development, research, and testing of the theories and programs        *
* to determine their effectiveness. The authors and publisher make       *
* no warranty of any kind, expressed or implied, with regard to these    *
* programs or to the documentation contained in these books. The authors *
* and publisher shall not be liable in any event for incidental or       *
* consequential damages in connection with, or arising out of, the       *
* furnishing, performance, or use of these programs.                     *
*************************************************************************/