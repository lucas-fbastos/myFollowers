<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\InstagramService;

class UserDataController extends Controller
{
    

    public function index(Request $request){
        return view('home');
    }

    public function getData(Request $request){
        $user = $request->username;
        $userJson = InstagramService::requestUserData($user);
        if($userJson!=null){
            $userJson = json_decode(json_encode($userJson), FALSE);

            $posts =  $userJson->graphql->user->edge_owner_to_timeline_media->edges;
            $userName = $userJson->graphql->user->username;
            $fullName = $userJson->graphql->user->full_name;
            $bio = $userJson->graphql->user->biography;
            $postNumber = $userJson->graphql->user->edge_owner_to_timeline_media->count;
            $followers = $userJson->graphql->user->edge_followed_by->count;
            $following = $userJson->graphql->user->edge_follow->count;
            $profilePic = $userJson->graphql->user->profile_pic_url;

            $mostLiked = [ 'count' => 0 , 'url'=> ''];
            $mostCommented = [ 'count' => 0 , 'url'=> ''];

            foreach($posts as $post){
                if($post->node->edge_liked_by->count > $mostLiked['count']){
                    $mostLiked['count'] = $post->node->edge_liked_by->count;
                    $mostLiked['url'] = $post->node->display_url; 
                }
                if($post->node->edge_media_to_comment->count > $mostCommented['count']){
                    $mostCommented['count'] = $post->node->edge_media_to_comment->count;
                    $mostCommented['url'] = $post->node->display_url;      
                }
            }
            $userJson =  [
                            "posts"=>$posts,
                            "bio" =>$bio,
                            "mostLiked"=>$mostLiked,
                            "followers"=>$followers,
                            "following"=>$following,
                            "postNumber"=>$postNumber,
                            "username"=>$userName,
                            "fullname"=>$fullName,
                            "mostComented"=>$mostCommented,
                            "profilePic"=>$profilePic,
            ];

            $userJson = json_decode(json_encode($userJson), FALSE);
            return view('userData', compact('userJson'));
        }else{
            return view('userNotFound');
        }
    }
}
