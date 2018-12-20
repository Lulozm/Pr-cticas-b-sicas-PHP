/ * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - * / / * Implementación SHA-1 (FIPS 180-4) en JavaScript (c) Chris Veness 2002-2017 * / / * Licencia MIT * / / * www.movable-type.co.uk/scripts/sha1.html * / / * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - * /





'uso estricto' ;


Todos los derechos reservados
 * Implementación de referencia de funciones hash SHA-1.
 *
 * Esta es una implementación directa anotada de FIPS 180-4, sin ninguna optimización. Es
 * La intención es ayudar a la comprensión del algoritmo más que para el uso de la producción.
 *
 * Aunque podría ser utilizado donde el rendimiento no es crítico, recomendaría usar el 'Web
 * Cryptography API '(developer.mozilla.org/en-US/docs/Web/API/SubtleCrypto/digest) para el navegador,
 * o la biblioteca 'crypto' (nodejs.org/api/crypto.html#crypto_class_hash) en Node.js.
 *
 * Ver csrc.nist.gov/groups/ST/toolkit/secure_hashing.html
 * csrc.nist.gov/groups/ST/toolkit/examples.html
 * / clase Sha1 {
  

    Todos los derechos reservados
     * Genera SHA-1 hash de cadena.
     *
     * @param {string} msg - Cadena (Unicode) para ser hashed.
     * @param {Objeto} [opciones]
     * @param {string} [options.msgFormat = string] - Formato de mensaje: 'string' para cadena de JavaScript
     * (se convierte en UTF-8 para hashing); 'hex-bytes' para una cadena de bytes hexadecimales ('616263' ≡ 'abc').
     * @param {string} [options.outFormat = hex] - Formato de salida: 'hex' para cadena contigua
     * bytes hexadecimales; 'hex-w' para agrupar bytes hexadecimales en grupos de palabras (4 bytes / 8 caracteres).
     * @returns {string} hash de msg como cadena de caracteres hexadecimales.
     * / hash estático ( msg , opciones ) { const defaults = { msgFormat : 'string' , outFormat : 'hex' }; const opt = Objeto . asignar ( valores predeterminados , opciones );
     
            
         

        switch ( opt . msgFormat ) { default : // default es convertir la cadena a UTF-8, ya que SHA solo trata con byte-streams case 'string' :    msg = utf8Encode ( msg ); romper ; caso 'hex-bytes' : msg = hexBytesToString ( msg ); romper ; // principalmente para ejecutar pruebas }  
             
                    
               
        

        // constantes [§4.2.1] const K = [ 0x5a827999 , 0x6ed9eba1 , 0x8f1bbcdc , 0xca62c1d6 ];
              

        // valor hash inicial [§5.3.1] const H = [ 0x67452301 , 0xefcdab89 , 0x98badcfe , 0x10325476 , 0xc3d2e1f0 ];
               

        // PREPROCESAR [§6.1.1]

        msg + = cadena . fromCharCode ( 0x80 ); // agregar el bit '1' que se arrastra (el relleno de + 0) a la cadena [§5.1.1]   

        // convertir msg de cadena en bloques de enteros de 512 bits / 16 de enteros [§5.2.1] const l = msg . longitud / 4 + 2 ; // longitud (en enteros de 32 bits) de msg + '1' + anexa longitud const N = Math . ceil ( l / 16 ); // número de 16 bloques enteros necesarios para contener 'l' ints const M = nueva matriz ( N );
           
           
          

        para ( sea ​​i = 0 ; i < N ; i ++) { 
            M [ i ] = nueva Matriz ( 16 ); para ( dejar j = 0 ; j < 16 ; j ++) { // codificar 4 caracteres por entero, codificar big-endian 
                M [ i ] [ j ] = ( msg . charCodeAt ( i * 64     
                  + j * 4 + 0 ) << 24 ) | ( msg . charCodeAt ( i * 64 + j * 4 + 1 ) << 16 ) | ( msg . charCodeAt ( i * 64 + j * 4 + 2 ) << 8 ) | ( msg . charCodeAt ( i * 64 + j * 4  
                            + 3 ) << 0 ); } // nota ejecutando el final de msg está bien 'cos bitwise ops en NaN return 0 } // agrega longitud (en bits) en el par final de enteros de 32 bits (big-endian) [§5.1.1] // nota: la palabra más significativa sería (len-1) * 8 >>> 32, pero como JS convierte // bitwise-op args a 32 bits, necesitamos simular esto por los operadores aritméticos 
        M [ N - 1 ] [ 14 ] = (( msg . longitud - 1 ) * 8 ) / Matemáticas . pow ( 2 , 32 
             
        
        
        
             ); M [ N - 1 ] [ 14 ] = Matemáticas . piso ( M [ N - 1 ] [ 14 ]); 
        M [ N - 1 ] [ 15 ] = (( msg . Longitud - 1 ) * 8 ) & 0xffffffff ;      

        // HASH COMPUTATION [§6.1.2]

        para ( sea ​​i = 0 ; i < N ; i ++) { const W = nueva matriz ( 80 );  
              

            // 1 - preparar el programa de mensajes 'W' para ( sea ​​t = 0 ;   t < 16 ; t ++) W [ t ] = M [ i ] [ t ]; para ( sea ​​t = 16 ; t < 80 ; t ++) W [ t ] = Sha1 . ROTL ( W [ t - 3 ] ^ W [ t -
              
                8 ] ^ W [ t - 14 ] ^ W [ t - 16 ], 1 );   

            // 2 - inicializa cinco variables de trabajo a, b, c, d, e con el valor de hash anterior, 
            a = H [ 0 ], b = H [ 1 ], c = H [ 2 ], d = H [ 3 ], e = H [ 4 ];

            // 3 - bucle principal (use JavaScript '>>> 0' para emular variables UInt32) para ( sea ​​t = 0 ; t < 80 ; t ++) { const s = Math . piso ( t / 20 ); // seq para bloques de funciones 'f' y constantes 'K' const T = ( Sha1 . ROTL ( a , 5 ) + Sha1 . f ( s , b , c , d
              
                  
                   ) + e + K [ s ] + W [ t ]) >>> 0 ; 
                e = d ; 
                d = c ; 
                c = Sha1 . ROTL ( b , 30 ) >>> 0 ; 
                b = a ; 
                a = T ; }        
            

            // 4 - calcular el nuevo valor hash intermedio (note 'addition modulo 2 ^ 32' - JavaScript // '>>> 0' obliga a unsigned UInt32 que logra la adición de módulo 2 ^ 32) 
            H [ 0 ] = ( H [ 0 ] + a ) >>> 0 ; 
            H [ 1 ] = ( H [ 1 ] + b ) >>> 0 ; 
            H [ 2 ] = ( H [ 2 ] + c ) >>> 0
                        ; 
            H [ 3 ] = ( H [ 3 ] + d ) >>> 0 ; 
            H [ 4 ] = ( H [ 4 ] + e ) >>> 0 ; }        
        

        // convertir H0..H4 a cadenas hexadecimales (con ceros a la izquierda) para ( sea ​​h = 0 ; h < H . longitud ; h ++) H [ h ] = ( '00000000' + H [ h ]. toString ( 16 )). rebanada (- 8 );
           

        // concatenar H0..H4, con separador si es necesario const separator = opt . outFormat == 'hex-w' ? '' : '' ;
            

        volver H . unirse ( separador );

        / * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - * /

        function utf8Encode ( str ) { try { return new TextEncoder (). codificar ( str , 'utf-8' ). reducir (( prev , curr ) => prev + String . fromCharCode ( curr ), '' ); } catch ( e ) { // no hay TextEncoder disponible? volver unescape ( encodeURIComponent ( str )); 
             
                      
                
                 // monsur.hossa.in/2012/07/20/utf-8-in-javascript.html } }
            
        

        función hexBytesToString ( hexStr ) { // convierte la cadena de números hexadecimales en una cadena de caracteres (por ejemplo '616263' -> 'abc'). const str = hexStr . reemplazar ( '' , '' ); // Permitir que los grupos separados por espacios devuelvan str == '' ? '' : str . partido ( /.{2}/ g ). mapa ( byte => String . fromCharCode ( parseInt ( byte , 16  
              
                  ))). unirse ( '' ); } }
        
    


    Todos los derechos reservados
     * Función 'f' [§4.1.1].
     privato
     * / estática f ( s , x , y , z ) { cambio ( s ) { caso 0 : retorno ( x y y ) ^ (~ x y z ); // Ch () caso 1 : devuelve   x ^ y   ^   z ; // Parity () caso 2 : return ( x & y ) ^
      
          
                           
                              
                 ( x y z ) ^ ( y y z ); // Maj () caso 3 : devuelve   x ^ y   ^   z ; // Parity () } }   
                              
        
    


    Todos los derechos reservados
     * Rota el valor izquierdo (desplazamiento circular a la izquierda) x por n posiciones [§3.2.5].
     privato
     * / estática ROTL ( x , n ) { return ( x << n ) | ( x >>> ( 32 - n )); }
     
           
    

}


/ * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - * /

si ( typeof módulo ! = 'definido' && módulo . exportaciones ) del módulo . exportaciones = Sha1 ; // ≡ export default Sha1         