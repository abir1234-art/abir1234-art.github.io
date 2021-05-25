<? php 
class  News  étend  CI_Controller  {

         fonction  publique __construct () 
        { 
                parent :: __construct (); 
                $ this -> load -> model ( 'news_model' ); 
                $ this -> load -> helper ( 'url_helper' ); 
        }

        public  function  index () 
        { 
                $ data [ 'news' ]  =  $ this -> news_model -> get_news (); 
                $ data [ 'title' ]  =  'Archive des actualités' ;

                $ this -> load -> view ( 'templates / header' ,  $ data ); 
                $ this -> load -> view ( 'news / index' ,  $ data ); 
                $ this -> load -> view ( 'templates / pied de page' );
        }

        public  function  view ( $ slug  =  NULL ) 
        { 
                $ data [ 'news_item' ]  =  $ this -> news_model -> get_news ( $ slug ); 
        } 
}