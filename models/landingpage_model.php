<?php

class landingpage_Model extends Model {

	function __construct() {
		parent::__construct();
            
	}


	//////////////////GET COMMUNITY CONTENT/////
	function get_community_content($group_url, $json){
      
        $content = $this->db->query("SELECT * FROM community C INNER JOIN content CO INNER JOIN members M ON C.community_id=CO.community_id AND CO.artist_id=M.ID WHERE C.community_url='".$group_url."'")or die(mysql_error());
        
        //print_r($songs);
		if($json==true){
		$return = $this->returnjson($content->rows);
		print_r($return);
		exit;
		}else{
		return $content->rows;
		}
	}

    
    //////////////////GET LATEST AUDIO CONTENT/////
	function get_latest_audio_upload($json){
      
        $content = $this->db->query("SELECT * FROM content  WHERE status!=0 AND content_type='audio' ORDER BY id DESC LIMIT 20")or die(mysql_error());
        //print_r($songs);
		if($json==true){
		$return = $this->returnjson($content->rows);
		print_r($return);
		exit;
		}else{
		return $content->rows;
		}
	}
    
    //////////////////GET COMMUNITY CONTENT/////
	function get_genre_content($group_url, $json){
      
        $genre['content'] = $this->db->query("SELECT * FROM genres G INNER JOIN content CO INNER JOIN members M ON G.id=CO.genre_id AND CO.artist_id=M.ID WHERE G.genre_url='".$group_url."'")or die(mysql_error());
        
        $genre['genre'] = $this->db->query("SELECT * FROM genres G WHERE G.genre_url='".$group_url."'")or die(mysql_error());
        //print_r($songs);
		if($json==true){
        $return['content']=$this->returnjson($genre['content']->rows);
		$return['genre'] = $this->returnjson($genre['genre']->rows);
		print_r(json_encode($return));
		exit;
		}else{
		return $return->rows;
		}
	}
    
    
    //////////////////GET COMMUNITY TRENDING SONGS/////
    function get_community_trending_content($json){

		//$community_trending = $this->db->query("SELECT * FROM content CO INNER JOIN community C ON C.community_id = CO.community_id ORDER BY CO.views DESC group by C.community_id")or die(mysql_error());
     
        //$this->db->query("SELECT * FROM community CO WHERE CO.community_id in (SELECT MAX(views) as Maxviews1 FROM content C INNER JOIN (SELECT *, MAX(views) as MaxViews2 FROM content GROUP BY content.community_id) B ON a.name = b.name AND a.maxValue = b.value)");
        
        //$community_trending = $this->db->query("SELECT * FROM content C WHERE C.community_id in (SELECT community.community_id FROM community INNER JOIN content ON content.community_id = community.community_id  group by community.community_id) ORDER BY C.views DESC ");
        
        //$community_trending = $this->db->query("SELECT * FROM community CO WHERE CO.community_id in (SELECT content.community_id FROM content INNER JOIN community ON content.community_id = community.community_id  order by content.views DESC) GROUP BY CO.community_id");
        
        $community_trending = $this->db->query("SELECT * FROM (SELECT * FROM content C ORDER BY C.views DESC) AS T1 INNER JOIN community CO ON CO.community_id=T1.community_id GROUP BY T1.community_id LIMIT 8");
		if($json==true){
		$return = $this->returnjson($community_trending->rows);
		print_r($return);
		exit;
		}else{
		return $community_trending->rows;
		}
	}

    
    //////////////////GET COMMUNITY TRENDING SONGS/////
    function get_community($json){

		$community = $this->db->query("SELECT * FROM community C ORDER BY C.id DESC")or die(mysql_error());
     
		if($json==true){
		$return = $this->returnjson($community->rows);
		print_r($return);
		exit;
		}else{
		return $community->rows;
		}
	}

    //////ADD TO CART
    function add_to_cart($json){
    $date = date('Y/m/d h:i:s A'); 
    $select_first = $this->db->query("SELECT * FROM cart WHERE artist_id='".$_GET['artist_id']."' AND content_id='".$_GET['content_id']."' AND status='1'")or die(mysql_error());   
    if($select_first->num_rows==0){    
    $add_to_cart = $this->db->query("INSERT INTO cart (content_id, content_title, coins_tag, artist_name, content_image, date, status, artist_id) VALUES ('".$_GET['content_id']."','".$_GET['content_title']."', '".$_GET['coins_tag']."','".$_GET['artist_name']."','".$_GET['content_image']."','".$date."','1','".$_GET['artist_id']."')")or die(mysql_error());    
    }
    
    if($add_to_cart = '1') {
    $cart = $this->db->query("SELECT * FROM cart WHERE artist_id='".$_GET['artist_id']."' AND status='1'")or die(mysql_error());
    $return = $this->returnjson($cart->rows);
    print_r($return); 
    exit;    
    } else {
    echo $return = mysql_error();
    exit;    
    }
                
    }
    
    //////GET CART////
    function get_user_cart($json){
    $cart = $this->db->query("SELECT * FROM cart WHERE artist_id='".$_GET['artist_id']."' AND status='1'")or die(mysql_error()); 
        
    if($json==true){
		$return = $this->returnjson($cart->rows);
		print_r($return);
		exit;
		}else{
		return $cart->rows;
		}
        
    }
    
    
        //////GET LIBRARY////
    function get_recent_library($json){
    $library = $this->db->query("SELECT * FROM content JOIN members ON content.artist_id=members.ID WHERE members.account_type='1' AND content.status='1' ORDER BY RAND()")or die(mysql_error()); 
        
    if($json==true){
		$return = $this->returnjson($library->rows);
		print_r($return);
		exit;
		}else{
		return $library->rows;
		}
        
    }
    
    
    
    //////////////////GET ALL USERS/////
    function get_all_users($json){
		$all_users = $this->db->query("SELECT * FROM members WHERE user_status='1' order by RAND() LIMIT 100")or die(mysql_error());
		if($json==true){
		$return = $this->returnjson($all_users->rows);
		print_r($return);
		exit;
		}else{
		return $all_users->rows;
		}
	}
    
    
    //////////////////GET ALL USERS/////
    function get_discover($json){
		//$discover = $this->db->query("SELECT * FROM discover D INNER JOIN members M INNER JOIN content C INNER JOIN album A ON D.artist_id=M.ID AND D.content_id=C.id AND D.album_id=A.id WHERE status!=0")or die(mysql_error());
        //$discover = $this->db->query("SELECT * FROM (SELECT * FROM discover D INNER JOIN content C ON D.content_id=C.id AS discover) WHERE status!=")or die(mysql_error());
        //$discover = $this->db->query("SELECT * FROM discover D INNER JOIN members M  INNER JOIN content C INNER JOIN album A ON D.artist_id=M.ID OR D.content_id=C.id OR D.album_id=A.id");
        $discover['members'] = $this->db->query("SELECT * FROM discover D INNER JOIN members M ON D.artist_id=M.ID");
        $discover['content'] = $this->db->query("SELECT * FROM discover D INNER JOIN content C ON D.content_id=C.id");
        $discover['album'] = $this->db->query("SELECT * FROM discover D INNER JOIN album A ON D.album_id=A.id");
       
		if($json==true){ 
		$return['members'] = $this->returnjson($discover['members']->rows);
        $return['content'] = $this->returnjson($discover['content']->rows); 
        $return['album'] = $this->returnjson($discover['album']->rows);    
		print_r(json_encode($return));
		exit;
		}else{
		return $discover->rows;
		}
	}
    
    
    //////////////////GET ARTIST PROFILE/////
     function get_artist_profile($profile_url, $json){
       
        $getid= $this->db->query("SELECT * FROM members WHERE user_url='".$profile_url."'")or die(mysql_error());
         
		$profile['allsongs'] = $this->db->query("SELECT * FROM members M INNER JOIN content CO ON M.ID=CO.artist_id WHERE M.user_status='1' AND M.user_url='".$profile_url."' AND CO.content_type='audio' group by CO.id order by CO.id DESC LIMIT 100")or die(mysql_error());
        
        
       $profile['albums'] = $this->db->query("SELECT * FROM album AL INNER JOIN genres G ON AL.genre=G.id WHERE AL.artist_id='".$profile['allsongs']->row['artist_id']."' AND AL.status='1' ORDER BY AL.id DESC")or die(mysql_error());
       
      
         
		if($json==true){
        $return['allsongs']=$this->returnjson($profile['allsongs']->rows);
		$return['albums'] = $this->returnjson($profile['albums']->rows);
		print_r(json_encode($return));
		exit;
		}else{
		return $profile['allsongs']->rows;
		}
	}

    
    //////////////////GET ARTIST VIDEO/////
     function get_artist_video($profile_id, $json){
       
		$profile['allvideos'] = $this->db->query("SELECT * FROM members M INNER JOIN content CO INNER JOIN genres G ON M.ID=CO.artist_id AND G.id=CO.genre  WHERE M.user_status='1' AND M.user_url='".$profile_id."' AND content_type='video' order by CO.id DESC LIMIT 100")or die(mysql_error());
         
       
		if($json==true){
        $return['allvideos']=$this->returnjson($profile['allvideos']->rows);
		
		print_r(json_encode($return));
		exit;
		}else{
		return $profile['allvideos']->rows;
		}
	}

    
     //////////////////GET USER SONGS/////
     function get_user_tracks($profile_id, $json){
       
		$tracks = $this->db->query("SELECT * FROM content WHERE artist_id='".$profile_id."' AND content_type='audio' AND status='1' order by id DESC LIMIT 100")or die(mysql_error());
         
		if($json==true){
        $return=$this->returnjson($tracks->rows);
		print_r($return);
		exit;
		}else{
		return $tracks->rows;
		}
	}

         //////////////////GET USER TRANSACTIONS/////
     function get_user_transactions($profile_id, $json){
       
		$transactions = $this->db->query("SELECT * FROM transactions WHERE artist_id='".$profile_id."' order by id DESC")or die(mysql_error());
         
		if($json==true){
        $return=$this->returnjson($transactions->rows);
		print_r($return);
		exit;
		}else{
		return $transactions->rows;
		}
	}
    
    
      //////////////////GET USER ALBUMS/////
     function get_user_albums($profile_id, $json){
       
		$albums = $this->db->query("SELECT * FROM album AL INNER JOIN genres G ON AL.genre=G.id WHERE AL.artist_id='".$profile_id."' AND AL.status='1' ORDER BY AL.id DESC")or die(mysql_error());
         
		if($json==true){
        $return=$this->returnjson($albums->rows);
		print_r($return);
		exit;
		}else{
		return $albums->rows;
		}
	}
  
    
    //////////////////GET GENRES/////
     function get_genres($json){
       
		$genres = $this->db->query("SELECT * FROM genres WHERE status='1' order by RAND()")or die(mysql_error());
         
		if($json==true){
        $return=$this->returnjson($genres->rows);
		print_r($return);
		exit;
		}else{
		return $genres->rows;
		}
	}
    
    
     //////////////////GET USER GROUPS/////
     function get_user_groups($profile_id, $json){
      
		$groups = $this->db->query("SELECT * FROM groups WHERE group_members LIKE '%".$profile_id."%' AND status='1' ORDER by id DESC")or die(mysql_error());
         
		if($json==true){
        $return=$this->returnjson($groups->rows);
		print_r($return);
		exit;
		}else{
		return $groups->rows;
		}
	}
    
    ////////////GET USER COMMUNITIES
    function get_user_communities($communities,$json){
    $get_communities = array();
    $explode = str_replace(' ','',explode(';',$communities));
    $searchResults ='';
    $search_one=''; 
        
    foreach ($explode as $key=>$id) { 
        
        if($key=='0'){
        $search_one = "id='".$id."'";    
        }
        else{        
        $searchResults .= " OR id='".$id."'"; 
        }
        }
        $Results=$search_one.$searchResults;
        
        $get_communities = $this->db->query("SELECT * FROM community WHERE ".$Results." AND status!='0'")or die(mysql_error());  
		if($json==true){
        $return=$this->returnjson($get_communities->rows);
		print_r($return);
		exit;
		}else{
		return $get_communities->rows;
		}
        
	}
    
    
    
    
    //////LIKE CONTENT////
    function like_content($content_id,$content_type,$user_id,$json){
        
    //$like = $this->db->query("INSERT INTO likes (content_id, type, artist_id) VALUES ('".$content_id."','".$content_type."', '".$user_id."')");
    $artist = " ".$user_id.",";
    //////UPDATE THE CONTENT LIKES TABLE
    $likeupdate = $this->db->query("UPDATE content SET likes = likes + 1, likes_ids=CONCAT('".$artist."', likes_ids) WHERE id='".$content_id."'");    
   
    if($json==true){
        $return=$this->returnjson($likeupdate);
		print_r($return);
		exit;
		}else{
		return $likeupdate;
		}
        
   
    }
    
    
        //////LIKE CONTENT////
    function dislike_content($content_id,$content_type,$user_id,$json){
    //$dislike = $this->db->query("DELETE FROM likes WHERE content_id='".$content_id."' AND artist_id='".$user_id."'");
    
    $artist = " ".$user_id.",";    
    
    $dislikeupdate = $this->db->query("UPDATE content SET likes = likes - 1, likes_ids = REPLACE(likes_ids,'".$artist."','') WHERE id='".$content_id."'");      
    if($json==true){
        $return=$this->returnjson($dislikeupdate);
		print_r($return);
		exit;
		}else{
		return $dislikeupdate;
		}
    
    }
    


}
