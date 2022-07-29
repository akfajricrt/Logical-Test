<!-- program yang mencetak baris angka dari 1 sampai dengan 50 beserta kelipatan 3 , 5 -->

<?php

for ($i= 1; $i <= 50; $i++) { 

if ( $i % 3 == 0 ) { 
  echo "Foo <br>";
}
if( $i % 5 == 0 ){
  echo "Bar <br>";
}if( $i % 3 == 0 && $i % 5 == 0 ){
  echo "FooBar <br>";
}
}

