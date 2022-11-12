<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Http\Request;
Use DB;

class PostController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.Create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $this->validate($request, [
            'content' => 'required|string|min:5|max:2000',
            'category' => 'required|string|max:30',
        
        ]);
            $data = [];
            $data = new Post;
            $data->userid=$request->input('userid');;
            $data->content=$request->input('content');
            $data->category=$request->input('category');
       
     
        
            $data->save();
            return back()->with('success','done');
        
        
        
    

    
        // Create and save post with validated data
        $post = Post::create($validated);
    
    }

    public function user(Request $request){
        
            
     
            $id= $request->get('id');
  
        //echo $id;
        $data = [];
    
        $data = DB::select('select * from users where id = ?',[$id]);
    


        return view('posts.Create',['data'=>$data]);

        
        
           }
            

        public function show(Request $request){
        
            
            if($request->isMethod('POST')):
                $id = $request->userid;
            else:
                $id= $request->get('id');
            endif;
            
            $posts = [];
        
            if(isset($id)):
                
                $posts = DB::select('select * from posts WHERE userid = '.$id);
               
            endif;
            return view('dashboard.user.home',['posts'=>$posts,'id'=>$id]);
            
            
               }

               




}
