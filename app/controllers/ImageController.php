<?php

 use Getdukaan\Images\ImageRepository;
 use Getdukaan\Comments\StatusRepository;
 use Getdukaan\Forms\UploadImageForm;
 use Getdukaan\Forms\EditImageForm;
 use GrahamCampbell\Flysystem\Facades\Flysystem;

class ImageController extends \BaseController {

	
	protected $imageRepository;

	protected $uploadImageForm;

	protected $editImageForm;

	function __construct(ImageRepository $imageRepository, UploadImageForm $uploadImageForm , EditImageForm $editImageForm)
	{
		$this->imageRepository = $imageRepository;

		$this->uploadImageForm = $uploadImageForm;

	    $this->editImageForm   = $editImageForm;

	    $this->beforeFilter('shopowner', ['only' =>['edit','update','destroy','create','store'] ]);

	}

	public function getItem($id)
	{
		//$image = Image::with('user','imagecomments')->whereTitle($title)->findOrFail();

      $image = Image::with('user','imagecomments')->findOrFail($id);
		//$comments = Comment::with('owner')->latest()->get();

		return View::make('images.show' ,compact('image'))->with('title', $image->title);
	}

	public function create()
	{   
        $images = $this->imageRepository->getAllUser(Auth::user());


		return View::make('images.create', compact('images'))->with('title', 'Upload images');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /newimage
	 *
	 * @return Response
	 */
	public function store()
	{
		 $input = Input::all();

         $this->uploadImageForm->validate($input);
    
         $img = new Image;

         $img->title          = Input::get('title');
         $img->description    = Input::get('description');
         $img->status         = Input::get('status');
         $img->offer         = Input::get('offer');
         $img->user_id        = Auth::user()->id;
       

          if (Input::hasFile('file'))
        {

		$file       = Input::file('file');

		$name       = time() . '-' .$file->getClientOriginalExtension();

        $path       = Auth::user()->username.'/'.$name;

		$file       = $file->move(storage_path().'/files/', $name);

	    $image      = Imag::make($file->getRealPath())->resize('620','480')->save($file);

	        Flysystem::put($path,$image);

            
         $img->file  = 'https://s3-us-west-2.amazonaws.com/getdukaan/'.$path; 

          if (File::exists(storage_path().'/files/'. $name))
           {
              
             File::delete(storage_path(). '/files/'. $name);
               
           } 

         
        } 

       
         if ($img->save()) 
         {
         	return Redirect::back()->with(['global' => 'Your image file has been uploaded successfully.', 'type' => 'success']);
         }else
         {
         	return Redirect::back()->with(['global'=> 'Your upload could not be succeeded.' , 'type' => 'danger']);
         }
    }

    /**
	 * Show the form for editing the specified resource.
	 * GET /profile/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		  $image = Image::findOrFail($id);

		  $user = Auth::user();

         if(! $user->owns($image) )
         {
            return Redirect::home()->with(['global' => 'plz edit your image', 'type' => 'danger']);
         }

		return View::make('images.edit', compact('image'))->with('title', 'edit image');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /image/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		 $input = Input::all();

         $this->editImageForm->validate($input);

         $img = Image::findOrFail($id);

         $img->title          = Input::get('title');
         $img->description    = Input::get('description');
         $img->status         = Input::get('status');
         $img->offer         = Input::get('offer');
       

          if (Input::hasFile('file'))
        {

			$file       = Input::file('file');

			$name       = time() . '-' . $file->getClientOriginalName();

			$path       = Auth::user()->username.'/'.$name;

			$file       = $file->move(storage_path().'/files/', $name);

		    $image      = Imag::make($file->getRealPath())->resize('620','480')->save($file);


		        Flysystem::put($path,$image);

	            
	        $img->file  = 'https://s3-us-west-2.amazonaws.com/getdukaan/'.$path; 

	          if (File::exists(storage_path().'/files/'. $name))
	           {
	              File::delete(storage_path(). '/files/'. $name);

	               
	           } 


        } 

         if ($img->update()) 
         {
         	return Redirect::back()->with(['global' => 'Your image file has been updated successfully.', 'type' => 'success']);
         }else
         {
         	return Redirect::back()->with(['global'=> 'Your update could not be succeeded.' , 'type' => 'danger']);
         }
	}


	public function destroy($id)
	{
        $image = Image::findOrFail($id);

          $user = Auth::user();

         if(! $user->owns($image) )
         {
            return Redirect::home()->with(['global' => 'plz delete your image', 'type' => 'danger']);
         }

         Image::destroy($id);
         
        return Redirect::back()->with(['global' => 'Image deleted successfully.', 'type' => 'success']);
        
	}


}