<? php 
class  News_model  étend  CI_Model  {

        fonction  publique  __construct () 
        { 
                $ this -> load -> database (); 
        } 
        public get_news ( $ slug  =  FALSE ) 
        { 
                if  ( $ slug  ===  FALSE ) 
                { 
                        $ query  =  $ this -> db -> get ( 'news' ); 
                        return  $ query -> result_array (); 
                }
        
                $ query  =  $ this -> db -> get_where ( 'news' ,  array ( 'slug'  =>  $ slug )); 
                return  $ query -> row_array (); 
        }
}